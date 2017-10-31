<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Character;
use App\Family;
use App\Item;
use App\Journal;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('campaign');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaign = Campaign::findOrFail(Session::get('campaign_id'));
        $characters = Character::recent()->take(5)->get();
        $families = Family::recent()->take(5)->get();
        $locations = Location::recent()->take(5)->get();
        $items = Item::recent()->take(5)->get();
        $journals = Journal::recent()->take(3)->get();

        //$characters = Character::

        return view('home', compact('campaign', 'characters', 'families',
            'locations', 'items', 'journals'));
    }
}
