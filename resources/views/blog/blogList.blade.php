@extends('layouts.app')

@section('content')
    <section class="h-screen overflow-scroll">
        <div class="p-8">
            <h1 class="text-xl font-bold mb-4">Listado de Post</h1>
            <h2 class="text-sm">Explora nuestra colección de artículos sobre desarrollo web y tecnología</h2>
        </div>

        <div class="pl-8 mb-4 mr-8">
            <input type="text" name="search" id="search" placeholder="Buscar..." class="border p-2 rounded w-full max-w-lg">
        </div>

        <section class="pt-8 px-8" x-data="pagination()">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                <template x-for="post in paginatedPosts()" :key="post.id">
                    <x-blog.post class="w-full" />
                </template>
            </div>

            <div class="flex justify-center items-center gap-2 my-6">
                <button @click="prevPage()" :disabled="currentPage === 1"
                    class="px-4 py-2 bg-gray-200 rounded text-xs disabled:opacity-50">Anterior</button>

                <template x-for="n in totalPages()" :key="n">
                    <button @click="goToPage(n)"
                        :class="{'bg-blue-500 text-white': currentPage===n, 'bg-gray-200': currentPage!==n}"
                        class="px-4 py-2 text-xs rounded">
                        <span x-text="n"></span>
                    </button>
                </template>
                <button @click="nextPage()" :disabled="currentPage === totalPages()"
                    class="px-4 py-2 bg-gray-200 rounded text-xs disabled:opacity-50">Siguiente</button>
            </div>
        </section>
    </section>
@endsection