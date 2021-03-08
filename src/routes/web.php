<?php

use Illuminate\Support\Facades\Route;
use Luannt\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index']);
Route::post('contact/send',[ContactController::class,'send'])->name("contact");
