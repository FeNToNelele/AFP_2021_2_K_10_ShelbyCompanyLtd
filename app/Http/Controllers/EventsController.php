<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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

    public function listAnEvent($id) {
        //1 eseményre 1 felhasználó csak 1x tudjon jelentkezni...
        $jelentkezesekSzama = DB::table('jelentkezes')
        ->where([
            ['userId', '=', Auth::user()['id']],
            ['esemenyId', '=', $id]
        ])
        ->count('jelentkezesId');
        $jelentkezettE = true;
        if($jelentkezesekSzama <= 0)
            $jelentkezettE = false;

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
        return view('events.event')
        ->with('esemeny', $esemeny)
        ->with('jelentkezesek', $jelentkezesek)
        ->with('szervezo',$szervezo)
        ->with('jelentkezettE', $jelentkezettE);
    }
    
    public function apply(Request $request) {
        //1 eseményre 1 felhasználó csak 1x tudjon jelentkezni...
        $jelentkezesekSzama = DB::table('jelentkezes')
        ->where('esemenyId', '=', $request->input('esemenyId'))
        ->where('userId', '=', Auth::user()['id'])
        ->count('jelentkezesId');

        if($jelentkezesekSzama <= 0)
        DB::table('jelentkezes')->insert([
            'esemenyId' => $request->input('esemenyId'),
            'userId' => Auth::user()['id']
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
        return view('events.appliedEvents')->with('esemenyek', $esemenyek);
    }
    
    public function abandonEvent(Request $request) {
        DB::table('jelentkezes')
        ->where('esemenyId', $request->input('esemenyId'))->where('userId', Auth::user()['id'])->delete();
        return redirect('home');
    }
}
