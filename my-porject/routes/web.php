<?php

use Illuminate\Support\Facades\Route;
use Illuminate\suoport\Facades\DB;
Route::get('/', function () {
    $result = DB::table('TBL_User')->get();
    return $result;
});
Route::get('/welcome', function () {
    return view('welcome');
});

