<div class="max-w-md w-full flex flex-col border p-4 mb-4">
    <div class="flex flex-row items-center mb-4">
        <img src="" alt="" class="w-12 h-12 rounded-full mr-4">
        <div class="flex flex-col text-xs">
            <p>{{ $author }}</p>
            <p>{{ $date }}</p>
        </div>
    </div>

    <div>
        <h3 class="text-sm">{{ $title }}</h3>
    </div>

    <div class="mt-4">
        <p class="text-xs">{{ $description }}</p>
    </div>

    <div class="flex flex-row flex-wrap justify-evenly text-xs my-4">
        @foreach(array_slice($tags, 0, 3) as $tag)
            <p>{{ $tag }}</p>
        @endforeach
    </div>

    <x-blog.interactions-account views="1500" likes="300" comments="45" />
</div>