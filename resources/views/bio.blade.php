{{-- resources/views/bio.blade.php – FINAL WITH JUSTIFIED TEXT --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio | Constanza Bitthoff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex flex-col lg:flex-row bg-white text-gray-900">

    <x-navbar />

    <main class="flex-1 lg:ml-80 mt-10 pt-20 lg:pt-12 bg-white">
        <div class="px-4 md:px-6 lg:px-8">
            <div class="max-w-screen-2xl mx-auto">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                    <!-- Portrait Image -->
                    <div class="lg:col-span-4">
                        <div class="overflow-hidden rounded-sm">
                            <img src="{{ asset('photos/SLY_9180.jpg') }}"
                                 alt="Constanza Bitthoff"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Bio Content -->
                    <div class="lg:col-span-8 flex flex-col space-y-10">

                        <!-- Title -->
                        <div>
                            <h1 class="text-4xl font-light uppercase tracking-widest mb-1">
                                Constanza Bitthoff
                            </h1>
                            <div class="w-32 border-t border-gray-400"></div>
                        </div>

                        <!-- Short intro -->
                        <div class="text-xl leading-relaxed text-gray-800 space-y-1">
                            <p class="font-semibold">DANCER, PERFORMER & ACTRESS</p>
                            <p>Professional Dance Instructor</p>
                            <p>
                                Founder of
                                <a href="/galpon" class="text-red-600 hover:text-red-700 font-medium transition-colors">
                                    Galpon Multiespacio
                                </a>
                                Theatre
                            </p>
                        </div>

                        <!-- Long description – NOW FULLY JUSTIFIED -->
                        <div class="text-lg leading-relaxed text-gray-700 space-y-5 text-justify">
                            <p>
                                <strong>Constanza Bitthoff</strong> is an Argentinian contemporary dancer & artist who received her education at the <strong>University of Cuba</strong>. She completed postgraduate studies in Art and Body in Barcelona, Spain.
                            </p>
                            <p>
                                With a diverse background in dance, theatre, research and creative direction, her work has made a significant impact worldwide.
                            </p>
                            <p>
                                She founded her own theatre in Buenos Aires and is a dedicated researcher in performing arts, contributing innovative approaches to dance and theatre.
                            </p>
                            <p>
                                As a choreographer and director, she creates unique pieces that have been presented in Cuba, Argentina, Mexico, Uruguay, Nepal, and Spain.
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="pt-4">
                            <a href="mailto:constanzabitthoff@gmail.com"
                               class="inline-flex items-center gap-3 text-red-600 hover:text-red-800 text-lg font-medium transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                                constanzabitthoff@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-copyright />
    </main>
</body>
</html>
