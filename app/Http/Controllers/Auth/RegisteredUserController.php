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
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'tipo_documento' => 'required|string|max:255',
            'documento' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'empresa' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'accept_policy' => 'required|accepted'
        ]);

        // Inspeccionar los datos recibidos
        //dd($request->all());

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            //'password' => Hash::make($request->password),
            'tipo_documento' => $request->tipo_documento,
            'documento' => $request->documento,
            'telefono' => $request->telefono,
            'fecha_ingreso' => $request->fecha_ingreso,
            'departamento' => $request->departamento,
            'municipio' => $request->municipio,
            'empresa' => $request->empresa,
            'cargo' => $request->cargo,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    public function showRegistrationForm()
    {

        // Leer el archivo municipios.json
        $jsonString = file_get_contents(base_path('municipios.json'));
        $municipios = json_decode($jsonString, true);

        //dd($municipios);

        // Asegúrate de que la clave "data" existe en el array
        if (isset($municipios['data'])) {
            $municipiosData = $municipios['data'];
        } else {
            // Maneja el caso donde "data" no existe
            $municipiosData = [];
        }

        // Extraer departamentos y municipios
        $departamentos = [];
        foreach ($municipiosData as $municipio) {
            $departamento = $municipio[10]; // Índice del Departamento
            $municipioNombre = $municipio[12]; // Índice del Municipio

            if (!isset($departamentos[$departamento])) {
                $departamentos[$departamento] = [];
            }
            $departamentos[$departamento][] = $municipioNombre;
        }

        $empresas = Empresa::all(); // Obtén todas las empresas
        return view('auth.register', compact('departamentos', 'empresas'));
    }
}
