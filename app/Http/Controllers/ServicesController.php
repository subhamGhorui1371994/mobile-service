<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $services = DB::table('services')->pluck('title','id');
        $dbServices = Service::all()->toArray();
        return view('pages.services', compact('dbServices', 'services'));
    }
}
