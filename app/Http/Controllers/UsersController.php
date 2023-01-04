<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
        return view('new-invoice');
    }

    public function singOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    public function getItemNames(Request $request)
    {
        $seachitem = $request->search;
        //echo $seachitem;
        // if ($seachitem == '') {
        //     $itemnames = DB::select('select itemname from itemtable');
        // } else {
        //     $itemnames = DB::select('select itemname from itemtable where itemname like ' % $seachitem % '');
        // }
        // $response = array();
        // foreach ($itemnames as $itemname) {
        //     $response[] = array(
        //         //"id" => $itemname->id,
        //         "text" => $itemname->name
        //     );
        // }
        // //print_r($response);
        // return response()->json($response);

        $itemnames = [];
        if ($seachitem == '') {
            $itemnames = DB::select('select id,itemname from itemtable');
        } else {
            $itemnames = DB::select('select id,itemname from itemtable where itemname like %' . $seachitem . '%');
        }
        //print_r($itemnames);
        return response()->json($itemnames);
    }
}
