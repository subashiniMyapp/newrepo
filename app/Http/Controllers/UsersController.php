<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Itemnames;
//use DataTables;
use Yajra\DataTables\Datatables;

class UsersController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $creatials = $request->only('email', 'password');
        if (Auth::attempt($creatials)) {
            //$request->session()->regenerate();
            return redirect()->intended('dashborad')->withSuccess('Welcome Admin');
        }
        return redirect('login')->withSuccess('Kindly check your login creatials..!');
    }
    public function dashborad()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect('login')->withSuccess('Your Not Allowed to access');
    }
    public function newItem()
    {
        return view('invoice-list');
    }
    public function addBill()
    {
        //return view('new-invoice');
        return view('new-invoice', ['users' => DB::table('itemtable')->get()]);
    }

    public function singOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    public function addItemNamespage(Request $request)
    {
        if ($request->ajax()) {

            $itemnames = DB::table('itemtable')->latest()->get();
            return DataTables::of($itemnames)->addIndexColumn()->addColumn('action', function ($row) {
                $actionBtn = '<div class="table-data-feature">
                <button class="view item" id="' . $row->id . '" data-toggle="tooltip" data-placement="top" title="view">
                <i class="zmdi zmdi-eye"></i>
                </button>
                <button class="edit item" id="' . $row->id . '" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                <button class=" delete item" id="' . $row->id . '" data-toggle="tooltip" data-placement="top" title="Delete">
                    <i class="zmdi zmdi-delete"></i>
                </button>';
                return $actionBtn;
            })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('add-items');
    }

    public function saveItem(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'itemname' => 'required|max:100',
            'uom' => 'required',
        ]);
        //return response()->json($validated->errors());
        if ($validated->fails()) {

            return response()->json([
                "errors" => $validated->errors(),
                "status" => 400
            ]);
        } else {
            $itemlist = new Itemnames();
            $form_data = array(
                'itemname'      =>  $request->itemname,
                'description'   =>  $request->description,
                'uom'           => $request->uom
            );

            $itemlist->create($form_data);
            return response()->json([
                "success" => "Item Name added successfully",
                "status" => 200
            ]);
        }
    }
    public function getDataById($id)
    {
        if (request()->ajax()) {
            $data = Itemnames::findOrFail($id);
            if ($data) {
                return response()->json([
                    'result' => $data,
                    'status' => 200
                ]);
            } else {
                return response()->json([
                    'result' => "Item Details is Empty...!",
                    'status' => 400
                ]);
            }
        }
    }
    public function updateItem(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'itemname' => 'required|max:100',
            'uom' => 'required',
        ]);
        if ($validated->fails()) {

            return response()->json([
                "errors" => $validated->errors(),
                "status" => 400
            ]);
        } else {
            $itemlist = new Itemnames();
            $form_data = array(
                'itemname'      =>  $request->itemname,
                'description'   =>  $request->description,
                'uom'           => $request->uom
            );

            $itemlist->whereId($request->product_id)->update($form_data);
            return response()->json([
                "success" => "Item Name is successfully Updated....!",
                "status" => 200
            ]);
        }
    }

    public function destroy($id)
    {
        $data = Itemnames::findOrFail($id);
        if ($data) {
            $data->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Itemname Deleted Successfully.'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'No Itemname found.'
            ]);
        }
    }

    public function demo()
    {
        return view('demo');
    }
}
