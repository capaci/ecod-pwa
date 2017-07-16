<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class EcodController extends Controller
{
    public function index() {
        $user = User::find(1);
        return view('index',$user);
    }

    public function update(Request $request) {
        $data = $request->all();
        dd($data);
        $user = new User($data);
        $user->save();

        return redirect()->route('/')->with('data', $data);
    }
}
