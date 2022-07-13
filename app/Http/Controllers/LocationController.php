<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Location;

class LocationController extends Controller
{
    public function index() {
        return view('location.index');
    }

    public function add() {
        return view('location.add');
    }

    public function store(Request $request) {
        try {
            $data = $request->except(['_token']);
            Location::create($data);
            return redirect('location/add')->with('success', 'Location Added');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
}
