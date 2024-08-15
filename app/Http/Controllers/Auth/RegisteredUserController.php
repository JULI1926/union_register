<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Empresa;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tipo_documento' => 'required|string|max:255',
            'documento' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'empresa' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'accept_policy' => 'required|accepted'
        ]);

        // Inspeccionar los datos recibidos
        //dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo_documento' => $request->tipo_documento,
            'documento' => $request->documento,
            'telefono' => $request->telefono,
            'fecha_ingreso' => $request->fecha_ingreso,
            'empresa' => $request->empresa,
            'cargo' => $request->cargo,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    public function showRegistrationForm()
    {
        $empresas = Empresa::all(); // Obtén todas las empresas
        return view('auth.register', compact('empresas'));
    }
}
