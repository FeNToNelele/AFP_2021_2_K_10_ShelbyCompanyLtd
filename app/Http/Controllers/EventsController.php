<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function listAllEvents() {
       //Még nem lezajlott események kilistázása
        $esemenyek = DB::table('esemeny')
        ->select('id','megnevezes','kapacitas','leiras','kezdet','veg','helyszin','dolgozoid')
        ->whereDate('kezdet', '>', date('Y.m.d'))
        ->get();
        return view('events.events')->with('esemenyek', $esemenyek);
    }

    public function listAnEvent() {
        return view('events.event');
    }
}
