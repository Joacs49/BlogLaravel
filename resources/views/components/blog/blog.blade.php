
<section class="h-screen w-48 bg-white shadow flex flex-col">
    <header>
        <section>
            <img src="" alt="">
            <h1>MiniBlog</h1>
        </section>
    </header>

    <section>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('welcome') }}">Inicio</a>
                </li>

                <li>
                    <a href="{{ route('blog.blogList') }}">Posts</a>
                </li>

                <li>
                    <a href="{{ route('blog.blogCreate') }}">Escribir</a>
                </li>

                <li>
                    <a href="{{ route('blog.blogAccount') }}">Perfil</a>
                </li>
            </ul>
        </nav>
    </section>

    <footer>
        @if (Route::has('login'))
            <nav class="flex items-center justify-center gap-4 py-4 border-t dark:border-[#3E3E3A] border-[#19140035]">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
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
