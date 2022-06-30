<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('adminAfterLogin');
    }


}
