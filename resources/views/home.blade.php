{{-- Importamos el esqueleto de la pagina --}}
@extends('layouts.app')

{{-- Titulo de la pagina --}}
@section('title', 'Home')

{{-- Contenido de la pagina --}}
@section('content')

    <section class="hero bg-base-100 min-h-[60dvh]">
        <article class="hero-content text-center">
            <section class="max-w-md">
                <h1 class="text-5xl font-bold">Welcome!</h1>
            </section>
        </article>
    </section>

@endsection
