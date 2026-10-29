<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contacto;
use App\Models\Torta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/inicio');
});

Route::get('/prueba', function () {
    return view('layouts.base');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', function (Request $request) {

    Contacto::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'mensaje' => $request->mensaje,
    ]);

    return back()->with('exito', 'Contacto registrado correctamente.');
});

Route::get('/tortas', function () {
    $tortas = Torta::all();

    return view('tortas.lista', [
        'tortas' => $tortas
    ]);
});

Route::get('/tortas/nuevo', function () {
    return view('tortas.nuevo');
});

Route::post('/tortas/nuevo', function () {

    request()->validate(
        [
            'sabor' => 'required',
            'precio' => 'required|integer',
            'stock' => 'required|integer',
        ],
        [
            'sabor.required' => 'Indica el sabor de la torta.',
            'precio.required' => 'Indica el precio de la torta.',
            'precio.integer' => 'El precio va en digitos, sin centavos.',
            'stock.required' => 'Indica cuántas unidades hay en stock.',
            'stock.integer' => 'El stock debe ser un número entero.',
        ]
    );

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);

    return redirect('/tortas');
});

Route::get('/registros', function () {
    $contactos = Contacto::all();

    return view('registros', [
        'contactos' => $contactos
    ]);
})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {

    $credenciales = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::attempt($credenciales)) {
        $request->session()->regenerate();

        return redirect('/registros');
    }

    return back()->with(
        'error',
        'Correo o contraseña incorrectos.'
    );
});

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/inicio');
});