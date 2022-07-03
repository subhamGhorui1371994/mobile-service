<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesDetailController extends Controller
{
    public function __construct()
    {

    }

    public function index($id, Request $request){
        $serviceDetails = Service::where('id', $id)->first();
        return view('pages.services-detail', compact('serviceDetails'));
    }
}
