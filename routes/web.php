<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesDetailController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;




Route::get('/',[HomeController::class,'index']);

Route::get('/about-us',[AboutUsController::class,'index']);
Route::get('/team',[TeamController::class,'index']);
Route::get('/faq',[FaqController::class,'index']);
Route::get('/pricing',[PricingController::class,'index']);

Route::get('/services',[ServicesController::class,'index']);
Route::get('/service-detail',[ServicesDetailController::class,'index']);

Route::get('/gallery',[GalleryController::class,'index']);

Route::get('/contact',[ContactController::class,'index']);
Route::post('/submit-contact-form',[ContactController::class,'submitContactForm']);