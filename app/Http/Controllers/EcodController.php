<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcodController extends Controller
{
    public function index() {
        return view('index');
    }

    public function update(Request $request) {
        dd($request->all());
    }
}
