<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Helper\HotelsHelper;

class Hotels extends Controller
{
    protected $helper;

    /**
     * Create a new controller instance.
     * @param HotelsHelper $hotelsHelper
     */
    public function __construct(
        HotelsHelper $hotelsHelper
    )
    {
        $this->helper = $hotelsHelper;
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

    public function create()
    {
        return view('hotels.create')->with(['helper' => $this->helper]);
    }

    public function store()
    {
        $user = \Auth::id();
        Hotel::create([
            'name' => request('name'),
            'description' => request('description'),
            'street' => request('street'),
            'postcode' => request('postcode'),
            'city' => request('city'),
            'country' => request('country'),
            'hours' => request('hours'),
            'user' => $user
        ]);

        return redirect('/hotels/');
    }
}
