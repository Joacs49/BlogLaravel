
<section class="h-screen bg-white shadow flex flex-col">
    <header>
        <section class="flex flex-row items-center gap-2 ml-4 mt-4">
            <img src="" alt="" class="w-4 h-4 rounded-full mb-2">
            <h1 class="text-lg font-bold">MiniBlog</h1>
        </section>
    </header>

    <section class="ml-4 mt-6 text-sm flex-1">
        <nav>
            <ul>
                <li class="flex flex-row items-center gap-2">
                    <img src="" alt="" class="w-4 h-4 rounded-full mb-2">
                    <a href="{{ route('welcome') }}">Inicio</a>
                </li>

                <li class="flex flex-row items-center gap-2">
                    <img src="" alt="" class="w-4 h-4 rounded-full mb-2">
                    <a href="{{ route('blog.blogList') }}">Posts</a>
                </li>

                <li class="flex flex-row items-center gap-2">
                    <img src="" alt="" class="w-4 h-4 rounded-full mb-2">
                    <a href="{{ route('blog.blogCreate') }}">Escribir</a>
                </li class="flex flex-row items-center gap-2">

                <li class="flex flex-row items-center gap-2">
                    <img src="" alt="" class="w-4 h-4 rounded-full mb-2">
                    <a href="{{ route('blog.blogAccount') }}">Perfil</a>
                </li class="flex flex-row items-center gap-2">
            </ul>
        </nav>
    </section>

    <footer class="mt-auto">
        @if (Route::has('login'))
            <nav class="flex flex-col items-center gap-4 py-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-7 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </footer>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</section>
