<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


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
    public function addItemNamespage()
    {
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
            return response()->json([
                "success" => "Item Name added successfully",
                "status" => 200
            ]);
        }
    }
}
