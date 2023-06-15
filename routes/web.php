<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'components');
Route::view('/{any}', 'components');
