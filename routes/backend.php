<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CountryController;


Route::resource('country',  CountryController::class)->names('admin.country');