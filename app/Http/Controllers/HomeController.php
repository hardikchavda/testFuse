<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\userInfo;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin/home');
    }

    public function dashboard() {
        return view('admin/welcome');
    }

    public function alldata() {

        $data = userInfo::all();
        return view('/admin/welcome', compact('data'));
    }

}
