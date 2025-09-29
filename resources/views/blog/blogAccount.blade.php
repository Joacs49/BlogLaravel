@extends('layouts.app')

@section('content')
    <section class="max-w-lg w-full border mt-8 mx-auto flex flex-col items-center">
        <section class="flex flex-row gap-6 p-4">
            <div class="flex flex-row items-center">
                <img src="" alt="" class="w-12 h-12 rounded-full mr-4">
                <div class="flex flex-col">
                    <p>María García</p>
                    <p>demo@miniblog.com</p>
                </div>
            </div>

            <div class="flex flex-row items-center">
                <img src="" alt="" class="w-12 h-12 rounded-full mr-4">
                <div class="flex flex-col">
                    <p>Editar Perfil</p>
                </div>
            </div>
        </section>

        <div class="flex flex-col items-center mb-4 text-center">
            <p>Desarrolladora frontend apasionada por crear experiencias web excepcionales. Me encanta compartir
                conocimientos sobre React, Next.js y tecnologías modernas.</p>
            <p>Miembro desde junio de 2023</p>
        </div>

    </section>

    <div class="flex flex-row justify-center gap-3 mb-8 ml-8 mt-8">
        <x-blog.stats texto="Posts" numero="12" />
        <x-blog.stats texto="Comentarios" numero="45" />
        <x-blog.stats texto="Likes recibidos" numero="234" />
        <x-blog.stats texto="Vistas totaless" numero="5,678" />
    </div>

    <section class="w-full flex justify-center">
        <div class="w-2/3 flex flex-row items-center justify-center">
            <input type="button" value="Mis Posts" id="btn-posts"
                class="w-1/2 text-black px-4 py-2 border rounded bg-gray-200">
            <input type="button" value="Mis Comentarios" id="btn-comentarios"
                class="w-1/2 text-black px-4 py-2 border rounded">
        </div>
    </section>

    <section class="w-full flex flex-col justify-center items-center mt-8">

        <div id="section-posts" class="w-full flex flex-col justify-center items-center">
            <div class="w-2/3 mb-4">
                <h2>Mis Posts</h2>
            </div>

            <x-blog.post-user category="React" state="Publicado" date="14/09/2025"
                title="Entendiendo React Hooks: useState y useEffect" />
            <x-blog.post-user category="React" state="Publicado" date="14/09/2025" title="Otro Post sobre React" />

            
        </div>

        <div id="section-comentarios" class="w-full flex flex-col justify-center items-center hidden">
            <div class="w-2/3 mb-4">
                <h2>Mis Comentarios</h2>
            </div>

            <x-blog.comments title="El futuro del desarrollo frontend: Tendencias 2024" date="15/09/2025"
                comment="Excelente artículo sobre Next.js 15. Me parece muy interesante la implementación de Server Components por defecto." 
                likes="23"
                />
        </div>
    </section>

@endsection