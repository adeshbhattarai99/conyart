{{-- resources/views/workshops.blade.php – FINAL & FULLY RESPONSIVE --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshops | Constanza Bitthoff</title>
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

    <main class="flex-1 lg:ml-80 mt-10 pt-20 lg:pt-12 bg-white pb-10">
        <div class="px-4 md:px-6 lg:px-10">
            <div class="max-w-screen-2xl mx-auto">

                <!-- HERO + TEXT SECTION -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start mb-16">

                    <!-- Hero Image — full width on mobile/tablet -->
                    <div class="overflow-hidden rounded-sm order-1">
                        <img src="{{ asset('photos/workshops/workshophero.jpeg') }}"
                             alt="Workshops"
                             class="w-full h-full object-cover">
                    </div>

                    <!-- Title + Bilingual Text -->
                    <div class="space-y-8 order-2">
                        <div>
                            <h1 class="text-4xl font-light uppercase tracking-widest mb-1">
                                Workshops
                            </h1>
                            <div class="w-32 border-t border-gray-400"></div>
                        </div>

                        <!-- ENGLISH -->
                        <div class="text-lg leading-relaxed text-gray-800">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ENG</p>
                            <p class="text-justify">
                                The Workshops are aimed at people who want to investigate new expressive physical tools,
                                for scenic composition or for their own training. These tools come from Dance and Physical Theater,
                                the support is always the body itself.
                                In the Workshops we always seek to reach concrete material, whether group or individual.
                                No previous experience is required. The duration is usually by immersion of a minimum of two weeks,
                                4 hours daily.
                            </p>
                        </div>

                        <!-- SPANISH -->
                        <div class="text-lg leading-relaxed text-gray-800 border-t border-gray-200 pt-6">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ESP</p>
                            <p class="text-justify">
                                Los Talleres se orientan a personas que buscan investigar nuevas herramientas físicas expresivas,
                                para la composición escénica o para su propio entrenamiento. Estas herramientas provienen de la Danza
                                y del Teatro Físico, el soporte siempre es el propio cuerpo.
                                En los Talleres se busca llegar siempre a un material concreto, ya sea grupal o individual.
                                No es requisito tener experiencia previa. La duración suele ser por inmersión de mínimo dos semanas,
                                4 horas diarias.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- GALLERY — 2×2 on desktop, 1 column on mobile/tablet -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">

                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop1.jpeg') }}"
                             alt="Workshop 1"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop2.jpeg') }}"
                             alt="Workshop 2"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop3.jpeg') }}"
                             alt="Workshop 3"
                             class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop4.jpg') }}"
                             alt="Workshop 4"
                             class="w-full h-full object-cover">
                    </div>

                </div>

            </div>
        </div>

        <x-copyright />
    </main>
</body>
</html>
