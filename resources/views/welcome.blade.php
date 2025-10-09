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

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-blog.publication
                author="María García"
                title="Introducción a React"
                date="10 de Octubre, 2023"
                description="Aprende los conceptos básicos de React y cómo crear aplicaciones web interactivas."
                :tags="['React', 'JavaScript', 'Frontend']"
            />
            <x-blog.publication
                author="María García"
                title="Introducción a React"
                date="10 de Octubre, 2023"
                description="Aprende los conceptos básicos de React y cómo crear aplicaciones web interactivas."
                :tags="['React', 'JavaScript', 'Frontend']"
            />
            <x-blog.publication
                author="María García"
                title="Introducción a React"
                date="10 de Octubre, 2023"
                description="Aprende los conceptos básicos de React y cómo crear aplicaciones web interactivas."
                :tags="['React', 'JavaScript', 'Frontend']"
            />
        </div>
    </section>


    <div class="w-2/3 border mx-auto"></div>

    <section >
        <x-blog.statistics-page publicPost="150" authorActive="120" monthlyReaders="2k" comments="500" />
    </section>

@endsection