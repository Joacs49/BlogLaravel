<div class="w-full grid grid-cols-2 sm:grid-cols-4 text-sm gap-4 my-8">
    <div class="flex flex-col items-center mx-4">
        <p>{{ $publicPost }}</p>
        <p class="text-xs">Posts Publicados</p>
    </div>

    <div class="flex flex-col items-center mx-4">
        <p>{{$authorActive }}</p>
        <p class="text-xs">Autores Activos</p>
    </div>

    <div class="flex flex-col items-center mx-4">
        <p>{{ $monthlyReaders }}</p>
        <p class="text-xs">Lectores Mensuales</p>
    </div>

    <div class="flex flex-col items-center mx-4">
        <p>{{ $comments }}</p>
        <p class="text-xs">Comentarios</p>
    </div>
</div>