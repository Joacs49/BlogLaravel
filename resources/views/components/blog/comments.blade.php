<div class="flex flex-col border text-sm p-4 mb-6 rounded shadow">
    <div class="flex flex-row gap-6 mb-2">
        <p>{{ $title }}</p>
        <p>{{ $date }}</p>
    </div>

    <div>
        <h3>{{ $comment }}</h3>
    </div>

    <div class="flex flex-row justify-start gap-3 mt-2">
        <img src="" alt="" class="w-6 h-6 rounded-full"><p class="text-xs">{{ $likes }}</p>
    </div>
</div>