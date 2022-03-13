<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function listAllEvents() {
        return view('events.events');
    }

    public function listAnEvent() {
        return view('events.event');
    }
}
