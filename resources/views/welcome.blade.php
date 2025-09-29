@extends('layouts.app')

@section('content')
    <section class="w-full max-w-md mx-auto flex flex-col justify-center items-center text-sm p-8">
        <div class="flex flex-col justify-center">
            <h1 class="text-2xl font-bold mb-4 text-center">Bienvenido a MiniBlog</h1>
            <p class="text-justify">
                Un espacio para compartir ideas, conocimientos y experiencias sobre
                desarrollo web y tecnología moderna.
            </p>
        </div>
    </section>

    <section class="w-full max-w-6xl mx-auto flex flex-col justify-center items-center text-sm px-8 mb-8">
        <h2 class="mb-4 text-xl font-semibold">Posts Destacados</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 w-full">
            <x-blog.post />
            <x-blog.post />
            <x-blog.post />
        </div>
    </section>


    <div class="w-2/3 border mx-auto"></div>

    <section class="grid grid-cols-2 sm:grid-cols-4 text-sm gap-4 my-8">
        <div class="flex flex-col items-center mx-4">
            <p>150+</p>
            <p class="text-xs">Posts Publicados</p>
        </div>

        <div class="flex flex-col items-center mx-4">
            <p>50+</p>
            <p class="text-xs">Autores Activos</p>
        </div>

        <div class="flex flex-col items-center mx-4">
            <p>1.2K+</p>
            <p class="text-xs">Lectores Mensuales</p>
        </div>

        <div class="flex flex-col items-center mx-4">
            <p>500+</p>
            <p class="text-xs">Comentarios</p>
        </div>
    </section>

@endsection