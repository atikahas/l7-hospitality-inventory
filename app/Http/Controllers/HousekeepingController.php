<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HousekeepingController extends Controller
{
    public function index() {
        return view('housekeeping.index');
    }

    public function add() {
        return view('housekeeping.add');
    }
}
