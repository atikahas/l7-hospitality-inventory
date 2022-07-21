<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Location;

class LocationController extends Controller
{
    public function index() {
        $location = Location::all();
        return view('location.index', ['location' => $location]);
    }

    public function store(Request $request) {
        try {
            $data = $request->except(['_token']);
            Location::create($data);
            return redirect('location/view')->with('success', 'Location Added');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
}
