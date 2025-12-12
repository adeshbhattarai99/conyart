{{-- resources/views/galpon.blade.php – FINAL & PERFECT --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galpón Multiespacio | Constanza Bitthoff</title>
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

                <!-- HERO + TEXT: 50/50 on desktop, stacked on mobile/tablet -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-4 items-start mb-16">
                    <div class="overflow-hidden rounded-sm order-1">
                        <img src="{{ asset('photos/galpon/galponhero.jpg') }}"
                             alt="Galpón Multiespacio"
                             class="w-full h-full object-cover">
                    </div>

                    <div class="space-y-8 order-2">
                        <div>
                            <h1 class="text-4xl font-light uppercase tracking-widest mb-1">
                                Galpón Multiespacio
                            </h1>
                            <div class="w-32 border-t border-gray-400"></div>
                        </div>

                        <!-- ENGLISH -->
                        <div class="text-lg leading-relaxed text-gray-800">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ENG</p>
                            <p class="text-justify">
                                Founded the <strong>Galpón Multiespacio</strong> Theater in Buenos Aires, Argentina.
                                This space arises as a response to arriving back in my country after 10 years away.
                                In it I worked with Dance Techniques learned in Cuba and Mexico, for 16 years.
                                Creating my Dance Company, putting together works from my own repertoire
                                and also from Afro-Cuban translational repertoire.
                            </p>
                        </div>

                        <!-- SPANISH -->
                        <div class="text-lg leading-relaxed text-gray-800 border-t border-gray-200 pt-6">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider mb-2">ESP</p>
                            <p class="text-justify">
                                Fundó el Teatro <strong>El Galpón Multiespacio</strong>, en Buenos Aires, Argentina.
                                Este espacio surge como una respuesta al llegar nuevamente a mi país luego de 10 años.
                                En él trabajé con Técnicas de Danza aprendidas en Cuba y en México, durante 16 años.
                                Creando mi Compañía de Danza, montando obras de repertorio propio y también de repertorio tradicional afrocubano.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- GALLERY — PERFECT RESPONSIVE BEHAVIOR -->
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-4">
                    <div class="rounded-sm overflow-hidden">
                        <img src="{{ asset('photos/galpon/galpon1.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-sm overflow-hidden">
                        <img src="{{ asset('photos/galpon/galpon2.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-sm overflow-hidden">
                        <img src="{{ asset('photos/galpon/galpon3.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-sm overflow-hidden">
                        <img src="{{ asset('photos/galpon/galpon4.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-sm overflow-hidden">
                        <img src="{{ asset('photos/galpon/galpon5.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-sm overflow-hidden">
                        <img src="{{ asset('photos/galpon/galpon6.jpg') }}" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>

        <x-copyright />
    </main>
</body>
</html>
