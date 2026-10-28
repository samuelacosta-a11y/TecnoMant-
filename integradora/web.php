<?php

use Illuminate\Support\Facades\Route;

use App\Models\Contacto;
use App\Models\Torta;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
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
        ],
        [
            'sabor.required' => 'Indica el sabor de la torta.',
            'precio.required' => 'Indica el precio de la torta.',
            'precio.integer' => 'El precio va en digitos, sin centavos.',
        ]
    );

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/tortas');
});