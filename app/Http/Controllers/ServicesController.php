<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $services = Service::all()->toArray();
        return view('pages.services', compact('services'));
    }
}
