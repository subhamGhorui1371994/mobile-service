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
        $time_slots = [
            '10:00 AM - 12:00 PM',
            '12:00 PM - 02:00 PM',
            '02:00 PM - 06:00 PM',
            '06:00 PM - 08:00 PM'
        ];
        $dbServices = Service::all()->toArray();
        // return view('pages.services', compact('services'));
        return view('pages.home', compact('services', 'time_slots','dbServices'));
    }
}
