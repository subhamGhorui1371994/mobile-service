<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesDetailController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        return view('pages.services-detail');
    }
}
