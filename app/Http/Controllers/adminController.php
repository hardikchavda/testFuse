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
        return Redirect::to(\URL::previous());
    }

    public function alldata() {

        $data = userInfo::all();
        return view('/admin/alldata', compact('data'));
    }

    public function edit($id) {
        $data = userInfo::findOrFail($id);
        return view('/admin/edit')->withData($data);
    }

    public function delete($id) {
        $data = userInfo::findOrFail($id);
        return view('/admin/delete')->withData($data);
    }

    public function update($id, Request $req) {
        $data = userInfo::findOrFail($id);
        $data->update($req->all());
        return redirect()->back()->withSuccess('IT WORKS!');
    }

    public function destroy($id) {
        $data = userInfo::destroy($id);
        return Redirect::to('/admin/alldata');
    }

    public function create(Request $req) {
        $data = new userInfo();
        $this->validate($req, [
            'firstname' => 'required',
            'firstname' => 'alpha'
        ]);
        $data::create($req->all());
        return new JsonResponse(['data' => 'success'], 200);
    }

    public function createNew() {
        return view('/admin/createNew');
    }

}
