@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center items-center p-8">
        <h1 class="text-2xl font-bold mb-4">Bienvenido a MiniBlog</h1>
        <p>Un espacio para compartir ideas, conocimientos y experiencias sobre desarrollo web y tecnología moderna.</p>
    </div>

    <section class="flex flex-col justify-center items-center p-8 mb-20">
        <h2 class="mb-4">Posts Destacados</h2>

        <div class="flex gap-10">
            <x-blog.post class="w-1/3" />
            <x-blog.post class="w-1/3" />
            <x-blog.post class="w-1/3" />
        </div>

    </section>

    <div class="w-2/3 border mx-auto"></div>
    <section class="p-8 flex flex-row justify-center items-center gap-20">
        <div class="flex flex-col items-center mx-4">
            <p>150+</p>
            <p>Posts Publicados</p>
        </div>

        <div class="flex flex-col items-center mx-4">
            <p>50+</p>
            <p>Autores Activos</p>
        </div>

        <div class="flex flex-col items-center mx-4">
            <p>1.2K+</p>
            <p>Lectores Mensuales</p>
        </div>

        <div class="flex flex-col items-center mx-4">
            <p>500+</p>
            <p>Comentarios</p>
        </div>
    </section>

@endsection