{{-- resources/views/components/navbar.blade.php --}}
<header class="fixed top-0 left-0 right-0 z-50 bg-white ">

    <!-- ===================== MOBILE + TABLET ===================== -->
    <div x-data="{ mobileOpen: false }" class="lg:hidden">

        <!-- Top bar — stays visible -->
        <div class="flex items-center justify-between px-6 py-5 bg-white sticky top-0 z-50 ">
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('photos/coni-logo-7.png') }}" alt="Constanza Bitthoff" class="h-10 w-auto">
            </a>

            <button @click="mobileOpen = !mobileOpen" class="relative w-9 h-9 focus:outline-none">
                <span class="block absolute h-0.5 w-8 bg-black transform transition-all duration-300 top-2.5"
                    :class="mobileOpen ? 'rotate-45 translate-y-3' : '-translate-y-1.5'"></span>
                <span class="block absolute h-0.5 w-8 bg-black transition-all duration-200 top-4.5"
                    :class="mobileOpen ? 'opacity-0' : 'opacity-100'"></span>
                <span class="block absolute h-0.5 w-8 bg-black transform transition-all duration-300 top-6.5"
                    :class="mobileOpen ? '-rotate-45 -translate-y-3' : 'translate-y-1.5'"></span>
            </button>
        </div>

        <!-- Mobile Menu Panel -->
        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-end="opacity-0"
            @click.away="mobileOpen = false" class="fixed inset-x-0 top-20 bottom-0 bg-white z-40 flex flex-col">

            <!-- Scrollable Menu Items -->
            <nav class="flex-1 overflow-y-auto px-10 pt-10 pb-20">
                <div class="space-y-10 text-2xl uppercase">
                    <a href="{{ route('bio') }}" @click="mobileOpen = false"
                        class="block text-gray-600 hover:text-black transition">Bio</a>
                    <div><x-performances-dropdown /></div>
                    <a href="{{ route('galpon') }}" @click="mobileOpen = false"
                        class="block text-gray-600 hover:text-black transition">Galpon Multiespacio</a>
                    <a href="{{ route('workshops') }}" @click="mobileOpen = false"
                        class="block text-gray-600 hover:text-black transition">Workshops</a>
                </div>
            </nav>

            <!-- Social Icons — FIXED at bottom, horizontal -->
            <!-- Social Icons — Smart auto-justified on all mobile sizes -->
            <div class="border-t border-gray-100 px-6 sm:px-10 py-6 bg-white">
                <div
                    class="flex justify-center sm:justify-start items-center
                gap-8 sm:gap-10 md:gap-12
                max-w-md mx-auto sm:mx-0">

                    <!-- Gmail -->
                    <a href="mailto:constanza.bitthoff@gmail.com" target="_blank" class="group">
                        <div class="w-10 h-10 pt-1.5 flex items-center justify-center">
                            <svg class="w-9 h-9 text-gray-800 transition-all duration-350 ease-in-out"
                                viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g class="group-hover:opacity-0 transition-opacity duration-350">
                                    <rect x="8.7" y="9.4" width="31.6" height="24.2" rx="1.4"
                                        stroke="currentColor" stroke-width="2.6" />
                                    <path d="M8.7 9.4L24 23L39.3 9.4" stroke="currentColor" stroke-width="3.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <g class="opacity-0 group-hover:opacity-100 transition-opacity duration-350">
                                    <path
                                        d="M8.7 9.4h15.3c1.3 0 2.4 1.1 2.4 2.4v24.8c0 1.3-1.1 2.4-2.4 2.4H8.7c-1.3 0-2.4-1.1-2.4-2.4V11.8c0-1.3 1.1-2.4 2.4-2.4Z"
                                        fill="#4285F4" />
                                    <path
                                        d="M39.3 9.4h-15.3c1.3 0-2.4 1.1-2.4 2.4v24.8c0 1.3 1.1 2.4 2.4 2.4h15.3c1.3 0 2.4-1.1 2.4-2.4V11.8c0-1.3-1.1-2.4-2.4-2.4Z"
                                        fill="#0F9D58" />
                                    <path d="M8.7 9.4L24 23V9.4H8.7Z" fill="#FFFFFF" />
                                    <path d="M39.3 9.4L24 23V9.4H39.3Z" fill="#FBBC04" />
                                    <path d="M24 23L8.7 9.4H39.3L24 23Z" fill="#EA4335" />
                                </g>
                            </svg>
                        </div>
                    </a>

                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@gaunkocheese" target="_blank" class="group">
                        <div class="w-10 h-10 flex items-center justify-center">
                            <svg class="w-8 h-8 text-gray-800 transition-all duration-300 ease-in-out"
                                viewBox="0 0 24 24">
                                <rect x="2" y="4" width="20" height="16" rx="4" ry="4"
                                    class="fill-none stroke-current stroke-[1.5] group-hover:fill-[#FF0000] group-hover:stroke-[#FF0000]" />
                                <polygon points="10 7.5 10 16.5 16.5 12"
                                    class="fill-none stroke-current stroke-[2] group-hover:fill-white group-hover:stroke-white" />
                            </svg>
                        </div>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/constanza.bitthoff" target="_blank" class="group">
                        <div class="w-10 h-10 flex items-center justify-center">
                            <svg class="w-7 h-7 fill-none stroke-current text-gray-800 group-hover:text-white group-hover:bg-[#1877F2] transition-all duration-300 rounded"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                        </div>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/bitthoff_constanza/" target="_blank" class="group">
                        <div class="w-10 h-10 flex items-center justify-center">
                            <svg class="w-7 h-7 fill-none stroke-current text-gray-800 group-hover:text-white group-hover:bg-[#C13584] transition-all duration-300 rounded-lg"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <circle cx="12" cy="12" r="5" />
                                <path d="M17.5 6.5h.01" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Blur backdrop -->
        <div x-show="mobileOpen" class="fixed inset-0 top-20 bg-white/70 backdrop-blur-sm z-30"
            @click="mobileOpen = false">
        </div>
    </div>

    <!-- ===================== DESKTOP SIDEBAR ===================== -->
    <aside class="hidden lg:block fixed top-0 left-0 w-80 h-screen bg-white py-12 px-9">
        <div class="flex flex-col h-full justify-between">
            <div class="space-y-16">
                <a href="{{ route('welcome') }}" class="block">
                    <img src="{{ asset('photos/coni-logo-7.png') }}" alt="Constanza Bitthoff"
                        class="w-56 h-auto hover:opacity-80 transition">
                </a>
                <nav class="space-y-8 text-lg">
                    <a href="{{ route('bio') }}"
                        class="block uppercase text-gray-400 hover:text-black transition">Bio</a>
                    <div><x-performances-dropdown /></div>
                    <a href="{{ route('galpon') }}"
                        class="block uppercase text-gray-400 hover:text-black transition">Galpon Multiespacio</a>
                    <a href="{{ route('workshops') }}"
                        class="block uppercase text-gray-400 hover:text-black transition">Workshops</a>
                </nav>
            </div>
            <div class="space-y-5">
                @include('partials.social-icons')
            </div>
        </div>
    </aside>
</header>
