<nav class="fixed top-0 shadow-md bg-white w-full" id="navbar">
    <div class="font-serif">
        <div class="flex p-3 mx-20">
            <div class="text-2xl text-blue-700 hover:text-blue-800">
                <a href="#home">Fahri Vardar</a>
            </div>
            <div class="ml-auto flex pt-1">
                <a href="#about" class="hover:text-blue-700 ">Hakkımda</a>
                <a href="#portfolio" class="pl-3 hover:text-blue-700">Portfolyo</a>
                <a href="#contact" class="pl-3 hover:text-blue-700">İletişim</a>
                <a href="{{ route('blog.index') }}" class="pl-3 hover:text-blue-700">Blog</a>
                @auth
                    @admin
                    <a href="{{ route('dashboard') }}" class="pl-3 hover:text-blue-700">Dashboard</a>
                    @endadmin
                @endauth

            </div>
        </div>
    </div>
</nav>
