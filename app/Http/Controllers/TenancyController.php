<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenancyController extends Controller
{
    public function create(){
        return view('tenant.create');
    }
    public function store(Request $request){
        return $request->all();
    }
}
