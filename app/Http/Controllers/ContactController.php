<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct() {
        //
    }

    public function index() {
        return view('pages.contact');
    }
}
