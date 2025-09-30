@extends('layouts.app')

@section('content')
<div class="p-8">
    <h1 class="text-xl font-bold mb-4">Listado de Post</h1>
    <h2 class="text-sm">Explora nuestra colección de artículos sobre desarrollo web y tecnología</h2>
</div>

<div class="pl-8 mb-4 mr-8">
    <input type="text" name="search" id="search" placeholder="Buscar..." class="border p-2 rounded w-full md:w-1/3 lg:w-2/3">
</div>

<section class="pt-8 px-8" x-data="pagination()">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <template x-for="post in paginatedPosts()" :key="post.id">
            <x-blog.post class="w-full" />
        </template>
    </div>

    <div class="flex justify-center items-center gap-2 my-6">
        <button @click="prevPage()" :disabled="currentPage === 1" class="px-4 py-2 bg-gray-200 rounded text-sm disabled:opacity-50">Anterior</button>
        
        <template x-for="n in totalPages()" :key="n">
            <button @click="goToPage(n)" :class="{'bg-blue-500 text-white': currentPage===n, 'bg-gray-200': currentPage!==n}" class="px-4 py-2 rounded">
                <span x-text="n"></span>
            </button>
        </template>
        <button @click="nextPage()" :disabled="currentPage === totalPages()" class="px-4 py-2 bg-gray-200 rounded text-sm disabled:opacity-50">Siguiente</button>
    </div>
</section>
@endsection
