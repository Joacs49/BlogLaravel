@extends('layouts.app')

@section('content')
    <section class="max-w-3xl flex flex-col items-center border mt-8 mx-6 py-2 px-3">
        <section class="w-full flex flex-row gap-6 py-4">
            <div class=" flex flex-row justify-start items-center">
                <img src="" alt="" class="w-10 h-10 rounded-full mr-2">
                <div class="flex flex-col justify-start">
                    <p class="text-base">María García</p>
                    <p class="text-xs">demo@miniblog.com</p>
                </div>
            </div>

            <div class="w-full flex flex-row items-center justify-end">
                <div class="flex flex-col justify-end">
                    <p class="text-xs text-center bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 cursor-pointer">Editar Perfil</p>
                </div>
            </div>
        </section>

        <div class="flex flex-col justify-start mb-4 ">
            <p class="text-sm">Desarrolladora frontend apasionada por crear experiencias web excepcionales. Me encanta compartir
                conocimientos sobre React, Next.js y tecnologías modernas.</p>
            <p class="text-sm">Miembro desde junio de 2023</p>
        </div>

    </section>

    <section class="max-w-3xl grid grid-cols-2 md:grid-cols-4 gap-3 mb-8 text-sm text-center mx-6 mt-8">
        <x-blog.stats texto="Posts" numero="12" />
        <x-blog.stats texto="Comentarios" numero="45" />
        <x-blog.stats texto="Likes recibidos" numero="234" />
        <x-blog.stats texto="Vistas totaless" numero="5,678" />
    </section>

        <div class="max-w-3xl flex flex-row items-center justify-center px-4 py-1 mx-6 border rounded-lg">
            <input type="button" value="Mis Posts" id="btn-posts"
                class="w-full text-sm text-black px-4 py-1 rounded-lg bg-gray-200">

            <input type="button" value="Mis Comentarios" id="btn-comentarios"
                class="w-full text-sm text-black px-4 py-1 rounded-lg">
        </div>

    <section class="max-w-3xl flex flex-col justify-center items-center mt-8 mx-6">

        <div id="section-posts" class="w-full flex flex-col">
            <div>
                <h2 class="text-sm mb-4">Mis Posts</h2>
            </div>

            <x-blog.post-user category="React" state="Publicado" date="14/09/2025"
                title="Entendiendo React Hooks: useState y useEffect" />
            <x-blog.post-user category="React" state="Publicado" date="14/09/2025" title="Otro Post sobre React" />

        </div>

        <div id="section-comentarios" class="w-full flex flex-col hidden">
            <div class="text-sm mb-4">
                <h2>Mis Comentarios</h2>
            </div>

            <x-blog.comments title="El futuro del desarrollo frontend: Tendencias 2024" date="15/09/2025"
                comment="Excelente artículo sobre Next.js 15. Me parece muy interesante la implementación de Server Components por defecto." 
                likes="23"
                />
        </div>
    </section>

@endsection