<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\userInfo;
use App\User;
use DB;
use Hash;

class test1 extends Controller {

    public function home() {


//        $usr = new userInfo();
//        $usr->firstname = 'Raja';
//        $usr->middlename = 'Baja';
//        $usr->lastname = 'Bhai';
//        $usr->address1 = 'Kagdadi';
//        $usr->address2 = 'Popatpara';
//        $usr->pincode = '560001';
//        $usr->state = 'South';
//        $usr->city = 'MasalaDhosa';
//        $usr->save();
        $dbTest = DB::Connection()->getDatabaseName();
        $getAllUserName = DB::select('select firstname,lastname from userinfo where firstname = ?', ['Salman']);
        $name = "df";
        $name1 = "df";
        $data = false;
        $people = [
            'Hardik',
            'Pranav',
            'HDave',
            'Siddh'
        ];
        if (!empty($getAllUserName)) {
            return view('home', compact('dbTest', 'name', 'name1', 'data', 'people', 'getAllUserName'));
        } else {
//$insRecord = DB::insert("insert into userinfo(firstname,middlename,lastname,address1,address2,pincode,state,city) values(?,?,?,?,?,?,?,?)", ['Salman', 'Salim', 'Khan', 'Mumbai', 'Boriwali', '460001', 'Maharasthra', 'India']);
            $insRecord = DB::insert("insert into userinfo(firstname,middlename,lastname,address1,address2,pincode,state,city) values(?,?,?,?,?,?,?,?)", ['Salman', 'Salim', 'Khan', 'Mumbai', 'Boriwali', '460001', 'Maharasthra', 'India']);
            return view('home', compact('dbTest', 'name', 'name1', 'data', 'people', 'getAllUserName', 'insRecord'));
        }
    }

    public function abtus() {
        $usr = userInfo::findOrFail(21);
//dd($usr);
        $dbTest = DB::Connection()->getDatabaseName();
        $getAllUserName = DB::select('select firstname,lastname from userinfo where firstname = ?', ['Salman']);
        $name = "df";
        $name1 = "df";
        $data = false;
        $people = [
            'Hardik',
            'Pranav',
            'HDave',
            'Siddh'
        ];
        if (!empty($getAllUserName)) {
            return view('about', compact('dbTest', 'name', 'name1', 'data', 'people', 'usr'));
        } else {
//$insRecord = DB::insert("insert into userinfo(firstname,middlename,lastname,address1,address2,pincode,state,city) values(?,?,?,?,?,?,?,?)", ['Salman', 'Salim', 'Khan', 'Mumbai', 'Boriwali', '460001', 'Maharasthra', 'India']);
            $insRecord = DB::insert("insert into userinfo(firstname,middlename,lastname,address1,address2,pincode,state,city) values(?,?,?,?,?,?,?,?)", ['Salman', 'Salim', 'Khan', 'Mumbai', 'Boriwali', '460001', 'Maharasthra', 'India']);
            return view('about', compact('dbTest', 'name', 'name1', 'data', 'people', 'usr', 'insRecord'));
        }
    }

    public function cntus() {
        $dbTest = DB::Connection()->getDatabaseName();
        $getAllUserName = DB::select('select firstname,lastname from userinfo where firstname = ?', ['Salman']);
        $name = "df";
        $name1 = "df";
        $data = false;
        $people = [
            'Hardik',
            'Pranav',
            'HDave',
            'Siddh'
        ];
        if (!empty($getAllUserName)) {
            return view('contact', compact('dbTest', 'name', 'name1', 'data', 'people', 'getAllUserName'));
        } else {
//$insRecord = DB::insert("insert into userinfo(firstname,middlename,lastname,address1,address2,pincode,state,city) values(?,?,?,?,?,?,?,?)", ['Salman', 'Salim', 'Khan', 'Mumbai', 'Boriwali', '460001', 'Maharasthra', 'India']);
            $insRecord = DB::insert("insert into userinfo(firstname,middlename,lastname,address1,address2,pincode,state,city) values(?,?,?,?,?,?,?,?)", ['Salman', 'Salim', 'Khan', 'Mumbai', 'Boriwali', '460001', 'Maharasthra', 'India']);
            return view('contact', compact('dbTest', 'name', 'name1', 'data', 'people', 'getAllUserName', 'insRecord'));
        }
    }

    public function rgstr() {
        $usr = userInfo::find(21);
        return view('register', compact('usr'));
    }

    public function formSubmit(Request $req) {
        $usr = new User();
        $usr->name = $req->fnm;
        $usr->email = $req->mnm;
        $usr->password = Hash::make($req->lnm);
        $usr->remember_token = $req->_token;
//        $usr->firstname = $req->fnm;
//        $usr->middlename = $req->mnm;
//        $usr->lastname = $req->lnm;
//        $usr->address1 = $req->ad1;
//        $usr->address2 = $req->ad2;
//        $usr->pincode = $req->pin;
//        $usr->state = $req->st;
//        $usr->city = $req->city;
        $usr->save();
        return redirect()->back()->withSuccess('IT WORKS!');
    }

}
