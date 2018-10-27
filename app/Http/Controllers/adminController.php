<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\userInfo;
use Auth;
use Redirect;

class adminController extends Controller {

    public function login() {
        return view('/admin/login');
    }

    public function logincheck(Request $req) {

        $fnm = $req->fnm;
        $lnm = $req->lnm;

        if (Auth::attempt(['name' => $fnm, 'password' => $lnm])) {

            return redirect()->intended('admin/alldata');
        } else {
            return Redirect::to('/admin/login');
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::to('/admin/login');
    }

    public function alldata() {

        $data = userInfo::all();
        return view('/admin/alldata', compact('data'));
    }

    public function edit() {
        return view('/admin/edit');
    }

    public function delete() {
        return view('/admin/edit');
    }

}
