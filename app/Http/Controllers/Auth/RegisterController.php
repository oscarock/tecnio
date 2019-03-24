<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name_company' => ['required', 'string'],
            'nit' => ['required', 'integer'],
            'address' => ['required', 'string'],
            'telephone' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birthdate' => ['required', 'date']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        //dd($data);
        $company = new Company;
        $company->name_company = $data['name_company'];
        $company->nit = $data['nit'];
        $company->address = $data['address'];
        $company->telephone = $data['telephone'];
        $company->save();
        
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        if($user->save()){
            $profile = new Profile;
            $profile->user_id = $user->id;
            $profile->company_id = $company->id;
            $profile->birthdate = $data['birthdate'];
            $profile->role_number = 3;
            $profile->save();
        }

        return $user;
    }
}
