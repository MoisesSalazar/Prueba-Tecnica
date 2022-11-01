<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;

class LoginContoller extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function SignIn(request $request)
    {
        $rules = ([
            'email' => 'required',
            'password' => 'required',
        ]);

        $messages = [
            'email.required' => 'Ingresa tu correo por favor.',
            'password.required' => 'Ingresa tu contraseña por favor.',
        ];

        $this->validate($request, $rules, $messages);

        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return redirect()->route('autenticado');
        }
        if (User::where('email', $request->email)->first() != null) {
            throw ValidationException::withMessages([
                'password' => 'Contraseña incorrecta.'
            ]);
        } else {
            throw ValidationException::withMessages([
                'email' => 'Correo invalido.',
            ]);
        }
    }

    public function logout(request $request, Redirector $redirect)
    {
        Auth::logout();
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return $redirect->to('login');
    }
}
