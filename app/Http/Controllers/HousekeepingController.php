<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Housekeeping;

class HousekeepingController extends Controller
{
    public function index() {
        $housekeeping = Housekeeping::all();
        return view('housekeeping.index', ['housekeeping' => $housekeeping]);
    }

    public function add() {
        return view('housekeeping.add');
    }
}
