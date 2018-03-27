<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class Hotels extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(\Auth::check())
        {
            $hotels = Hotel::where('user', \Auth::id())->get();

            return view('hotels.index')->with(['hotels' => $hotels]);
        }
    }

    public function view($id)
    {
        $hotel = Hotel::find($id);

        return view('hotels.detail')->with(['hotel' => $hotel]);
    }
}
