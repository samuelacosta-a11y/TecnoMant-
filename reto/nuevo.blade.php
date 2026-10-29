@extends('layouts.base')

@section('contenido')

<section>
    <h2>Registrar torta</h2>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ url('/tortas/nuevo') }}" method="POST">
        @csrf

        <label for="sabor">Sabor de la torta</label>
        <input type="text" id="sabor" name="sabor">

        <label for="precio">Precio en Bs</label>
        <input type="number" id="precio" name="precio">

        <label for="stock">Stock disponible</label>
        <input type="number" id="stock" name="stock">

        <button type="submit">Registrar torta</button>
    </form>

</section>

@endsection