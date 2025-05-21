<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PrintController
};


Route::post('/print', [PrintController::class, 'print'])->name('print');


Route::get('/', function () {
    return view('welcome');
});
