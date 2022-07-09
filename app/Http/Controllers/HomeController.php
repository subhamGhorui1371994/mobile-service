<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $services = DB::table('services')->pluck('title','id');
        return view('pages.home', compact('services'));
    }
}
