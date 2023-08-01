<?php

namespace nexioPackage\payments\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index_auth() {
        return view('payments::dashboard');
    }
}
