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
        $esemeny = DB::table('esemeny')
        ->select('id','megnevezes','kapacitas','leiras','kezdet','veg','helyszin','dolgozoid')
        ->where('id',$id)
        ->first();
        $jelentkezesek = DB::table('jelentkezes')
        ->where('esemenyId',$id)
        ->count('jelentkezesId');
        $szervezo = DB::table('users')
        ->select('name')
        ->where('id',$esemeny->dolgozoid)->first();
        return view('events.event')->with('esemeny', $esemeny)->with('jelentkezesek', $jelentkezesek)->with('szervezo',$szervezo);
    }
    
    public function apply(Request $request) {
        //1 eseményre 1 felhasználó csak 1x tudjon jelentkezni...
        $jelentkezesekSzama = DB::table('jelentkezes')
        ->where([
            ['userId', '=', $request->input('userId')],
            ['esemenyId', '=', $request->input('esemenyId')]
        ])
        ->count('jelentkezesId');

        if($jelentkezesekSzama <= 0)
        DB::table('jelentkezes')->insert([
            'esemenyId' => $request->input('esemenyId'),
            'userId' => $request->input('userId')
        ]);
        return redirect('home');
    }
    
    public function appliedEvents() {
        //Még nem lezajlott események kilistázása
        $userId = Auth::user()['id'];
        $esemenyekId = DB::select('SELECT esemenyId FROM jelentkezes WHERE userId='.Auth::user()['id']);

        $ArrayOfId = [];
        for($i = 0; $i < count($esemenyekId); $i++)
        {
            $ArrayOfId[$i] = $esemenyekId[$i]->esemenyId;
        }
        $esemenyek = DB::table('esemeny')
        ->select('id','megnevezes','kapacitas','leiras','kezdet','veg','helyszin','dolgozoid')
        ->whereIn('id',$ArrayOfId)->get();
        //var_dump($esemenyek);
        return view('events.events')->with('esemenyek', $esemenyek);
    }
}
