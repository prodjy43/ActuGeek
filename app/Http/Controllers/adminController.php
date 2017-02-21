<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Redirect;

class adminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function store(Request $request){
        $rules = array(
            'mail' => 'required|email',
            'password' => 'required|min:6'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('admin')->withErrors($validator)->withInput($request->except(['password']));
        } else {
            $userdata = array(
                'mail'     => $request->mail,
                'password'  => $request->password
            );
            if (Auth::attempt($userdata)) {
                return Redirect::to('admin/home');
            } else {
                return Redirect::to('admin');
            }
        }
    }

    public function logout(){
        
        Auth::logout();
        return Redirect::to('admin');
    }

    public function home(){
        return view('admin.home');
    }
}
