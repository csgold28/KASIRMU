<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Outlet;
use App\Providers\RouteServiceProvider;
use App\User;
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
            'name_outlet' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ], [
            'name_outlet.required'   => 'Nama Outlet masih kosong',
            'name_outlet.string'   => 'Nama Outlet berupa text',
            'name_outlet.max'   => 'Nama Outlet maksimal 255 karakter',
            'name.required'   => 'Nama masih kosong',
            'name.string'   => 'Nama berupa text',
            'name.max'   => 'Nama maksimal 255 karakter',
            'email.required'   => 'E-Mail masih kosong',
            'email.string'   => 'E-Mail berupa text',
            'email.email'   => 'Format E-Mail salah',
            'email.max'   => 'E-Mail maksimal 255 karakter',
            'email.unique'   => 'E-Mail sudah pernah terdaftar',
            'password.required'   => 'Password masih kosong',
            'password.string'   => 'Password berupa text',
            'password.min'   => 'Password minimal 8 karakter',
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $outlet = Outlet::create([
            'name'   => $data['name_outlet']
        ]);

        $user->outlet()->attach($outlet->id);

        return $user;
    }
}
