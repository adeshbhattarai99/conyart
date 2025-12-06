<!-- Left Sidebar Navigation -->
<aside class="w-96 border-r border-gray-200 flex flex-col justify-between py-12 px-10">
    <div>
        <!-- Logo / Name -->
        <div class="">
            <a href="{{ route('welcome') }}" title="Constanza Bitthoff – Home">
                <img src="{{ asset('photos/coni-logo-7.png') }}" alt="Constanza Bitthoff"
                    class="w-56 h-auto transition-opacity hover:opacity-80">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="space-y-6 text-lg">
            <a href="bio" class="block uppercase text-gray-400  hover:text-black transition">Bio</a>
            <x-performances-dropdown />
            <a href="galpon" class="block uppercase text-gray-400 hover:text-black transition">Galpon Multiespacio</a>
            <a href="workshops" class="block uppercase text-gray-400 hover:text-black transition">Workshops</a>
            <a href="contact" class="block uppercase text-gray-400 hover:text-black transition">Contact</a>
        </nav>
    </div>

    <div class="mt-auto space-y-7">

        <!-- YouTube – perfectly smooth hover, no bleed -->
        <a href="https://www.youtube.com/@gaunkocheese" target="_blank" class="block group">
            <svg class="w-8 h-8 text-gray-800 transition-all duration-300 ease-in-out" viewBox="0 0 24 24">
                <!-- Outer rounded rectangle -->
                <rect x="2" y="4" width="20" height="16" rx="4" ry="4"
                    class="fill-none stroke-current stroke-[1.5]
                         group-hover:fill-[#FF0000] group-hover:stroke-[#FF0000]" />
                <!-- Play triangle -->
                <polygon points="10 7.5 10 16.5 16.5 12"
                    class="fill-none stroke-current stroke-[2]
                            group-hover:fill-white group-hover:stroke-white
                            transition-all duration-300 ease-in-out" />
            </svg>
        </a>
        <!-- Facebook – outlined → solid blue on hover -->
        <a href="https://www.facebook.com/constanza.bitthoff" target="_blank" class="block group">
            <svg class="w-7 h-7 fill-none stroke-current text-gray-800
                    group-hover:text-white group-hover:bg-[#1877F2]
                    transition-all duration-300 rounded"
                viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
            </svg>
        </a>

        <!-- Instagram – outlined → solid purple on hover -->
        <a href="https://www.instagram.com/bitthoff_constanza/" target="_blank" class="block group">
            <svg class="w-7 h-7 fill-none stroke-current text-gray-800
                    group-hover:text-white group-hover:bg-[#C13584]
                    transition-all duration-300 rounded-lg"
                viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                <circle cx="12" cy="12" r="5" />
                <path d="M17.5 6.5h.01" />
            </svg>
        </a>

    </div>
</aside>
