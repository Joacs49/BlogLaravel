
@extends('layouts.app')

    @section('content')
        <div class="p-8">
            <h1 class="text-2xl font-bold mb-4">Escribir Nuevo Post</h1>
            <h2>Comparte tus conocimientos con la comunidad</h2>
        </div>

            <section class="max-w-md w-full p-8 flex flex-col gap-6 mb-10 border rounded-lg ml-8">
                <div>
                    <img src="" alt="">
                    <h3>Información del Post</h3>
                </div>

                <div>
                    <p>Titulo *</p>
                    <input type="text" placeholder="Escribe el titulo del post">
                </div>

                <div>
                    <p>Resumen</p>
                    <input type="text" placeholder="Escribe un resumen del post">
                </div>

                <div class="w-60 flex flex-col">
                    <label for="color">Categoria *</label>
                    <select name="color" id="color" class="w-full border rounded px-2 py-1">
                        <option value="">Seleccione una categoria</option>
                        <option value="backend">Backend</option>
                        <option value="frontend">Frontend</option>
                        <option value="tutorial">Tutorial</option>
                        <option value="arquitec">Arquitech</option>
                    </select>
                </div>

                <div>
                    <p>Tags</p>
                    <input type="text" placeholder="Escribe los tags del post">
                </div>

            </section>


            <section class="max-w-md w-full p-8 flex flex-col gap-6 mb-10 border rounded-lg ml-8">
                <div>
                    <h3>Contenido del Post</h3>
                </div>

                <div>
                    <p>Contenido *</p>
                    <input type="text" placeholder="Escribe el contenido del post">
                    <p>Tip: Usa párrafos separados por líneas en blanco para mejor legibilidad</p>
                </div>

                <div>
                    <input type="submit" name="enviar" value="Publicar Post">
                </div>
            </section>
    @endsection
