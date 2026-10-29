@extends('layouts.base')

@section('contenido')

<section>
    <h2>Pastelería La Espiga</h2>

    <p>
        En Pastelería La Espiga ofrecemos tortas preparadas con dedicación
        para compartir en momentos especiales en familia con amigos.
    </p>

    <p>
        Hay {{ count($tortas) }} tortas en la vitrina.
    </p>

    @foreach($tortas as $torta)

    <article>
        <h3>{{ $torta->sabor }}</h3>

        <p>
            Precio: {{ $torta->precio }} Bs
        </p>

        <p>
            Stock: {{ $torta->stock }} unidades
        </p>
    </article>

    @endforeach

    <p>
        Vitrina atendida por SAMUEL ACOSTA PERALTA
    </p>

    <a href="/tortas/nuevo">Registrar nueva torta</a>

</section>

@endsection