@extends('layouts.app')

@section('content')

    <section class="flex items-center justify-center">
        <div class="w-full max-w-3xl flex flex-col justify-start items-start m-8">
            <h1 class="text-xl font-bold mb-4">Escribir Nuevo Post</h1>
            <h2 class="text-sm">Comparte tus conocimientos con la comunidad</h2>
        </div>
    </section>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <section class="flex items-center justify-center">
            <div class="w-full max-w-3xl flex flex-col text-sm gap-6 border rounded-lg mb-6 mx-8 p-4">

                <div>
                    <img src="" alt="">
                    <h3>Información del Post</h3>
                </div>

                <div>
                    <p>Titulo *</p>
                    <input type="text" placeholder="Escribe el titulo del post"
                        class="w-full border rounded-lg text-sm px-2 py-1">
                </div>

                <div>
                    <p>Resumen</p>
                    <input type="text" placeholder="Escribe un resumen del post"
                        class="w-full border rounded-lg text-sm px-2 py-1">
                </div>

                <div class="w-full flex flex-col">

                    <label for="color">Categoria *</label>
                    <select name="color" id="color" class="border rounded-lg text-sm px-2 py-1">
                        <option value="" class="text-sm">Seleccione una categoria</option>
                        <option value="backend" class="text-sm">Backend</option>
                        <option value="frontend" class="text-sm">Frontend</option>
                        <option value="tutorial" class="text-sm">Tutorial</option>
                        <option value="arquitec" class="text-sm">Arquitech</option>
                    </select>
                </div>

                <div>
                    <p>Tags</p>
                    <input type="text" placeholder="Escribe los tags del post"
                        class="w-full border rounded-lg text-sm px-2 py-1">
                </div>

            </div>
        </section>


        <section class="flex items-center justify-center">
            <div class="w-full max-w-3xl flex flex-col gap-6 mb-4 border rounded-lg mx-8 p-4">
                <div>
                    <h3 class="text-sm">Contenido del Post</h3>
                </div>

                <div>
                    <p class="text-sm">Contenido *</p>
                    <input type="text" placeholder="Escribe el contenido del post"
                        class="w-full border rounded-lg text-sm px-2 py-1">
                    <p class="text-xs mt-5">Tip: Usa párrafos separados por líneas en blanco para mejor legibilidad</p>
                </div>

                <div>
                    <input type="submit" name="enviar" value="Publicar Post"
                        class="text-sm bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 cursor-pointer">
                </div>
            </div>
        </section>
    </form>

@endsection