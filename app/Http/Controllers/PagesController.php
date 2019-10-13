<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function one() {
        return view('pages.page-one');
    }

    public function challenge() {
        return view('pages.first-challenge');
    }
}
