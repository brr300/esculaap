<?php

use App\Http\Controllers\PocketcardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PocketcardController::class,'index']);
