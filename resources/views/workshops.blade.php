{{-- resources/views/workshops.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshops | Constanza Bitthoff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }

    </style>
</head>
<body class="h-screen flex bg-white text-gray-900">

    <x-navbar />

    <main class="flex-1 pb-10">
        <div class="pt-12 px-4 md:px-6 lg:px-10">
            <div class="max-w-screen-2xl mx-auto">

                <!-- HERO + TEXT: same as Galpón -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-start">
                    <div class="overflow-hidden rounded-sm">
                        <img src="{{ asset('photos/workshops/workshophero.jpeg') }}"
                             alt="Workshops"
                             class="w-full h-full object-cover">
                    </div>

                    <div class="space-y-8">
                        <div>
                            <h1 class="text-4xl font-light uppercase tracking-widest mb-1">
                                Workshops
                            </h1>
                            <div class="w-32 border-t border-gray-400"></div>
                        </div>

                        <!-- ENGLISH -->
                        <div class="text-lg leading-relaxed text-gray-800">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider">ENG</p>
                            <p>
                                The Workshops are aimed at people who want to investigate new expressive physical tools,
                                for scenic composition or for their own training. These tools come from Dance and Physical Theater,
                                the support is always the body itself.
                                In the Workshops we always seek to reach concrete material, whether group or individual.
                                No previous experience is required. The duration is usually by immersion of a minimum of two weeks,
                                4 hours daily.
                            </p>
                        </div>

                        <!-- SPANISH -->
                        <div class="text-lg leading-relaxed text-gray-800 border-t border-gray-200">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider">ESP</p>
                            <p>
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

                <!-- GALLERY: exactly 2 per row, same tight spacing as Galpón -->
                <div class="grid grid-cols-2 gap-4 mt-4 lg:mt-4">
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop1.jpeg') }}" class="w-full h-full object-cover gallery-img">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop2.jpeg') }}" class="w-full h-full object-cover gallery-img">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop3.jpeg') }}" class="w-full h-full object-cover gallery-img">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/workshops/workshop4.jpg') }}" class="w-full h-full object-cover gallery-img">
                    </div>
                </div>

            </div>
        </div>

        <x-copyright />
    </main>

</body>
</html>
