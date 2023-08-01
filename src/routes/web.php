<?php

// Route::get('payments',function(){
//     return view('payments::dashboard');
// });

use Illuminate\Support\Facades\Route;
use nexioPackage\payments\Http\Controllers\PaymentController;
Route::get('test', ['nexioPackage\payments\Http\Controllers\PaymentController', 'index_auth'])->name('test');



?>
