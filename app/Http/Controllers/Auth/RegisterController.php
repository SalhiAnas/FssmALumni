<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:12', 'unique:users'],
            'gender' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'cin' => ['required', 'string', 'max:8', 'unique:users'],
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
        $user = User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'cin' => $data['cin'],
                'date' => $data['date'],
                'status' => $data['status'],
                'gender' => $data['gender'],
        ]);
    }

    public function update()
    {
        $data = \request()->validate([
            'titre_cursus' => 'required',
            'année' => ['required', 'int'],
            'description' => ['required'],
            ''
        ]);
        
            
        cursus::create([
            'titre_cursus' => $data['titre_cursus'],
            'année' => $data['année'],
            'description' => $data['description'],
            'type_cursus'=> "académique",
                       
        ]);
        return redirect()->route('profile');
    }

}
