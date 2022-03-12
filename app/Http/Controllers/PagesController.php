<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index() {

        $maiEsemenyek = DB::table('esemeny')
        ->select('id','megnevezes','kapacitas','leiras','kezdet','veg','helyszin','dolgozoid')
        ->whereDate('kezdet', '=', date('Y.m.d'))
        ->get();
        return view('index')->with('maiEsemenyek', $maiEsemenyek);
    }
}
