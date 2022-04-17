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
        /*->whereDate('kezdet', '>', date('Y.m.d'))*/
        ->get();
        return view('events.events')->with('esemenyek', $esemenyek);
    }

    public function listAnEvent($id) {
        $jelentkezettE = false;
        if(Auth::check())
        {
            $jelentkezesekSzama = DB::table('jelentkezes')
            ->where([
                ['userId', '=', Auth::user()['id']],
                ['esemenyId', '=', $id]
            ])
            ->count('jelentkezesId');
            
            if($jelentkezesekSzama > 0)
                $jelentkezettE = true;
        }

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
    
    public function createEvent() {
        return view('events.createEvent');
    }

    public function registerEvent(Request $request) {
        if(Auth::user()['accountType'] == 'teacher') 
        {
            DB::table('esemeny')->insert([
                'megnevezes' => $request->input('megnevezes'),
                'kapacitas' => $request->input('kapacitas'),
                'leiras' => $request->input('leiras'),
                'kezdet' => date('Y-m-d h:i:s', strtotime($request->input('kezdet'))),
                'veg' => date('Y-m-d h:i:s', strtotime($request->input('veg'))),
                'helyszin' => $request->input('helyszin'),
                'dolgozoId' => Auth::user()['id']  
            ]);
            return redirect('home')->with('message', 'Új rendezvény sikeresen létrehozva!');
        }
        else return view('home')->with('message', 'Nincs hozzá jogosultsága!');
    }

    public function apply(Request $request) {
        $jelentkezesekSzama = DB::table('jelentkezes')
        ->where([
            ['userId', '=', Auth::user()['id'] ],
            ['esemenyId', '=', $request->input('esemenyId')]
        ])
        ->count('jelentkezesId');

        if($jelentkezesekSzama <= 0)
        DB::table('jelentkezes')->insert([
            'esemenyId' => $request->input('esemenyId'),
            'userId' => Auth::user()['id']  
        ]);
        return redirect('home')->with('message', 'Sikeresen jelentkezett!');
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
        return redirect('home')->with('message', 'Sikeresen lejelentkezett!');
    }

    public function manageEvents() {
        if(Auth::check())
        {
        $esemenyek = DB::table('esemeny')
         ->select('id','megnevezes','kapacitas','leiras','kezdet','veg','helyszin','dolgozoid')
         ->where('dolgozoId', Auth::user()['id'])
         ->get();
         return view('events.manageEvents')
         ->with('esemenyek', $esemenyek);
         }
 
         
    }

    public function editEventForm(Request $request) {
        if(Auth::user()['accountType'] == 'teacher') 
        {
            $esemeny = DB::table('esemeny')
            ->select('id','megnevezes','kapacitas','leiras','kezdet','veg','helyszin','dolgozoid')
            ->where('id',$request->input('esemenyId'))
            ->first();
        }
        else echo "Nincs hozzá jogosultsága!";
        return view('events.editAnEvent')->with('esemeny', $esemeny);
        
    }

    public function editEvent(Request $request) {
        if(Auth::user()['accountType'] == 'teacher') 
        {
             DB::table('esemeny')
              ->where('id', $request->input('esemenyId'))
              ->update([
                'megnevezes' => $request->input('megnevezes'),
                'kapacitas' => $request->input('kapacitas'),
                'leiras' => $request->input('leiras'),
                'kezdet' => date('Y-m-d h:i:s', strtotime($request->input('kezdet'))),
                'veg' => date('Y-m-d h:i:s', strtotime($request->input('veg'))),
                'helyszin' => $request->input('helyszin') ]);
        }
        else echo "Nincs hozzá jogosultsága!";
        return redirect('/manageEvents');
        
    }
    public function deleteEvent(Request $request) {
        if(Auth::user()['accountType'] == 'teacher') 
        {
            DB::table('esemeny')
            ->where('id', $request->input('esemenyId'))->delete();
            return redirect('/manageEvents');
        }
    }

    public function verify($id) {
        $jelentkezesek = DB::table('jelentkezes')
        ->where('esemenyId',$id)
        ->where('userId', Auth::user()['id'])
        ->count('jelentkezesId');
        return view('events.verify')->with('id', $id)->with('applied', $jelentkezesek);
    }

    public function verified(Request $request) {
        if(Auth::check()) {
            DB::table('jelentkezes')
            ->where('esemenyId', $request->input('esemenyId'))
            ->where('userId', $request->input('felhasznaloId'))
            ->update(['megjelent' => 1]);
            return view('home')->with('message', 'Sikeres jelentkezés!');
        }
        else return view('home')->with('message', 'Nincs jogosultsága az oldal megtekintéséhez!');
    }

}
