<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myProfile()
    {
        $user = Auth::user();
        print_r($user['id']);
        echo '<br>';
        print_r($user['name']);
        echo '<br>';
        print_r($user['email']);
        echo '<br>'
        ;print_r($user['accountType']);
        echo '<br>';
      /**
       * A fiók típusától függ, hogy milyen adatot szeretnénk megjeleníteni
       */
        switch($user['accountType']) {
            case 'student':
                $rekord = DB::table('hallgato')
                    ->select('neptunKod')
                    ->where('hallgatoId', '=', $user['id'])
                    ->value('neptunKod');
                echo "Neptunkód: $rekord";
                break;
            case 'teacher':
                 $rekord = DB::table('dolgozo')
                    ->select('szervezetiEgyseg')
                    ->where('dolgozoId', '=', $user['id'])
                    ->value('szervezetiEgyseg');
                echo "Szervezeti egység: $rekord";
                break;
            case 'guest':
                $rekord = DB::table('kulsos')
                    ->select('telepules')
                    ->where('kulsosId', '=', $user['id'])
                    ->value('telepules');
                echo "Lakhely: $rekord";
                break;
        }
        return view('home');
    }
}
