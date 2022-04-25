<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Dolgozo;
use App\Models\Hallgato;
use App\Models\Kulsos;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'accountType' => ['required', 'string', 'min:5'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $registered = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'accountType' => $data['accountType'],
        ]);
        $userId = DB::table('users')
                    ->select('id')
                    ->where('email', '=', $data['email'])
                    ->value('id');


        switch($data['accountType']) {
            case 'teacher':
                DB::table('dolgozo')->insert([
                    'dolgozoId' => $userId,
                    'szervezetiEgyseg' => $data['institute']
                ]);
                break;
            case 'student':
                DB::table('hallgato')->insert([
                    'hallgatoId' => $userId,
                    'neptunKod' => $data['neptun']
                ]);
                break;
            case 'guest':
                DB::table('kulsos')->insert([
                    'kulsosId' => $userId,
                    'telepules' => $data['address']
                ]);
                break;
        }
        return $registered;

        
        
    }
}
