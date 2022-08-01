<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServicesDetailController extends Controller
{
    public function __construct()
    {

    }

    public function index($id, Request $request){
        $services = DB::table('services')->pluck('title','id');
        $serviceDetails = Service::where('id', $id)->first();
        return view('pages.services-detail', compact('serviceDetails','services'));
    }
}
