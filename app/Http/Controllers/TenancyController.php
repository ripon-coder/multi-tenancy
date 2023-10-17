<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenancyController extends Controller
{
    public function create(){
        return view('tenant.create');
    }
}
