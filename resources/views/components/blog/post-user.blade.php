<div class="w-2/3 flex flex-col border p-4 mb-6 rounded shadow">
    <div class="flex flex-row gap-6 mb-2">
        <p>{{ $category }}</p>
        <p>{{ $state }}</p>
        <p>{{ $date }}</p>
    </div>

    <div>
        <h3>{{ $title }}</h3>
    </div>

    <x-blog.interactions-account views="1500" likes="300" comments="45" />
</div>