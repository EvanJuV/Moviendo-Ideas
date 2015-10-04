<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;
use SocialAuth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'fecha_nacimiento' => 'required',
            'ife_link' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Usuario::create([
            'nombres' => $data['nombres'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'estado' => $data['estado'],
            'municipio' => $data['municipio'],
            'calle' => $data['calle'],
            'numero' => $data['numer'],
            'cp' => $data['cp'],
            'ife_link' => $data['ife_link'],
        ]);
    }

    public function facebookAuth() {
      return SocialAuth::authorize('facebook');
    }

    public function facebookCallback() {
      try {
        SocialAuth::login('facebook', function($user, $details) {
          $user->nombres = $details->raw()['first_name'];
          $user->apellidos = $details->raw()['last_name'];
          $user->email = $details->raw()['email'];
          $user->save();
        });
      } catch (ApplicationRejectedException $e) {
        return 'Fail' . $e;
      } catch (InvalidAuthorizationCodeException $e) {
        return 'Error';
      }

      return redirect()->intended();
    }
}
