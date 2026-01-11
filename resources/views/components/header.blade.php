<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="shrink-0 flex items-center">
                <a href="/" class="text-xl font-bold text-indigo-600 flex items-center gap-2">
                    <span></span> DevPham.blog
                </a>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:flex">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    Trang chủ
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('posts.*')">
                    Bài viết
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('albums.*')">
                    Album
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('forum.*')">
                    Diễn đàn
                </x-nav-link>

                <x-nav-link href="#" :active="request()->routeIs('about')">
                    Giới thiệu
                </x-nav-link>
            </div>

            <div class="flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline hover:text-indigo-600">Dashboard</a>
                        <span class="text-gray-300">|</span>
                        <span class="text-sm font-bold text-gray-800">{{ Auth::user()->name }}</span>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-indigo-600">Đăng nhập</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-indigo-600 text-white rounded-md text-sm font-medium hover:bg-indigo-700 transition">Đăng ký</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</header>
