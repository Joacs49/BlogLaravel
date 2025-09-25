
@extends('layouts.app')

    @section('content')
        <div class="p-8">
            <h1 class="text-2xl font-bold mb-4">Listado de Post</h1>
            <h2>Explora nuestra colección de artículos sobre desarrollo web y tecnología</h2>
        </div>

        <div class="pl-8">
            <input type="text" name="search" id="search">
        </div>

        <section class="pt-8 pl-8">
            <div class="flex gap-10">
                <x-blog.post class="w-1/3" />
                <x-blog.post class="w-1/3" />
                <x-blog.post class="w-1/3" />
            </div>
        </section>

        <section class="pt-8 pl-8">
            <div class="flex flex-row justify-center items-center gap-5">
                <button>< Anterior</button>
                <button>1</button>
                <button>2</button>
                <button>Siguiente ></button>
            </div>
        </section>
    @endsection
