<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
            'TipoDocumentoInstr' => ['required', 'string','max:255'],
            'id' => ['required', 'string', 'max:15'],          
            'NombresInstr' => ['required', 'string', 'max:255'],
            'ApellidosInstr' => ['required', 'string','max:255'],
            'FechaNacimientoInstr' => ['required', 'string'],          
            'CiudadResidenciaInstr' => ['required', 'string', 'max:255'],
            'DireccionResidenciaInstr' => ['required', 'string','max:255'],
            'NoCelularInstr' => ['required', 'string', 'max:15'],
            'CentroFormacionInstr' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],            
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
        return User::create([
            'TipoDocumentoInstr' => $data['TipoDocumentoInstr'],
            'id' => $data['id'],
            'NombresInstr' => $data['NombresInstr'],
            'ApellidosInstr' => $data['ApellidosInstr'],
            'FechaNacimientoInstr' => $data['FechaNacimientoInstr'],
            'CiudadResidenciaInstr' => $data['CiudadResidenciaInstr'],
            'DireccionResidenciaInstr' => $data['DireccionResidenciaInstr'],
            'NoCelularInstr' => $data['NoCelularInstr'],
            'CentroFormacionInstr' => $data['CentroFormacionInstr'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
