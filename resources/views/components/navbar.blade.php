<!-- Left Sidebar Navigation -->
<aside
    class="w-80 fixed top-0 left-0 h-screen border-r border-gray-50
        flex flex-col justify-between py-12 px-9 bg-white">
    <div>
        <!-- Logo / Name -->
        <div class="flex justify-center">
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
            {{-- <a href="contact" class="block uppercase text-gray-400 hover:text-black transition">Contact</a> --}}
        </nav>
    </div>

    <div class="mt-auto space-y-5">

        <!-- Gmail -->
        <a href="mailto:constanza.bitthoff@gmail.com" target="_blank" class="block group">
            <div class="w-10 h-10 flex items-center justify-center">
                <svg class="w-9 h-9 text-gray-800 transition-all duration-350 ease-in-out" viewBox="0 0 48 48"
                    fill="none" xmlns="http://www.w3.org/2000/svg">

                    <!-- Default (outline) -->
                    <g class="group-hover:opacity-0 transition-opacity duration-350">
                        <rect x="8.7" y="9.4" width="31.6" height="24.2" rx="1.4" stroke="currentColor"
                            stroke-width="2.6" class="origin-center" />
                        <path d="M8.7 9.4L24 23L39.3 9.4" stroke="currentColor" stroke-width="3.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </g>

                    <!-- Hover (Gmail colors) -->
                    <g class="opacity-0 group-hover:opacity-100 transition-opacity duration-350">
                        <path d="M8.7 9.4h15.3c1.3 0 2.4 1.1 2.4 2.4v24.8c0 1.3-1.1 2.4-2.4 2.4H8.7
                             c-1.3 0-2.4-1.1-2.4-2.4V11.8c0-1.3 1.1-2.4 2.4-2.4Z" fill="#4285F4" />
                        <path d="M39.3 9.4h-15.3c-1.3 0-2.4 1.1-2.4 2.4v24.8c0 1.3 1.1 2.4 2.4 2.4h15.3
                             c1.3 0 2.4-1.1 2.4-2.4V11.8c0-1.3-1.1-2.4-2.4-2.4Z" fill="#0F9D58" />
                        <path d="M8.7 9.4L24 23V9.4H8.7Z" fill="#FFFFFF" />
                        <path d="M39.3 9.4L24 23V9.4H39.3Z" fill="#FBBC04" />
                        <path d="M24 23L8.7 9.4H39.3L24 23Z" fill="#EA4335" />
                    </g>
                </svg>
            </div>
        </a>

        <!-- YouTube -->
        <a href="https://www.youtube.com/@gaunkocheese" target="_blank" class="block group">
            <div class="w-10 h-10 flex items-center justify-center">
                <svg class="w-8 h-8 text-gray-800 transition-all duration-300 ease-in-out" viewBox="0 0 24 24">

                    <rect x="2" y="4" width="20" height="16" rx="4" ry="4"
                        class="fill-none stroke-current stroke-[1.5]
                             group-hover:fill-[#FF0000] group-hover:stroke-[#FF0000]" />

                    <polygon points="10 7.5 10 16.5 16.5 12"
                        class="fill-none stroke-current stroke-[2]
                                group-hover:fill-white group-hover:stroke-white
                                transition-all duration-300 ease-in-out" />
                </svg>
            </div>
        </a>

        <!-- Facebook -->
        <a href="https://www.facebook.com/constanza.bitthoff" target="_blank" class="block group">
            <div class="w-10 h-10 flex items-center justify-center">
                <svg class="w-7 h-7 fill-none stroke-current text-gray-800
                        group-hover:text-white group-hover:bg-[#1877F2]
                        transition-all duration-300 rounded"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                </svg>
            </div>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/bitthoff_constanza/" target="_blank" class="block group">
            <div class="w-10 h-10 flex items-center justify-center">
                <svg class="w-7 h-7 fill-none stroke-current text-gray-800
                        group-hover:text-white group-hover:bg-[#C13584]
                        transition-all duration-300 rounded-lg"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                    <circle cx="12" cy="12" r="5" />
                    <path d="M17.5 6.5h.01" />
                </svg>
            </div>
        </a>

    </div>

</aside>
