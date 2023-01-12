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
    public function getItemNames()
    {
        $itemnames = DB::table('itemtable')->get();
        //print_r($itemnames);
        //return view('new-invoice', compact('itemnames'));
        //return (View::make("user/regprofile", compact('student')));
        // return View::make("new-invoice")->with($itemnames);

        //return view('new-invoice')->with('itemnames', $itemnames);
        //echo '<pre>';
        //print_r($itemnames);

        // foreach ($itemnames as $itemname) {
        //     //print_r($itemname);
        //     foreach ($itemname as $name) {
        //         //print_r($name);
        //         $arrval[] = $name;
        //     }
        // }
        // echo '<pre>';
        // print_r($arrval);
        // // print_r($name);
        // $arr = $arrval;
        //return view("new-invoice", compact('arr'));
        //print_r($itemnames);
        return view('new-invoice', ['itemnames' => $itemnames]);
    }
}
