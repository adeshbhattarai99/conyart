{{-- resources/views/galpon.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galpón Multiespacio | Constanza Bitthoff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="h-screen flex bg-white text-gray-900">

    <x-navbar />

    <main class="flex-1 pb-10">
        <div class="pt-12 px-4 md:px-6 lg:px-10">
            <div class="max-w-screen-2xl mx-auto">

                <!-- HERO + TEXT: 50/50, tight spacing -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-start">
                    <div class="overflow-hidden rounded-sm">
                        <img src="{{ asset('photos/galpon/galponhero.jpg') }}"
                             alt="Galpón Multiespacio"
                             class="w-full h-full object-cover">
                    </div>

                    <div class="space-y-8">
                        <div>
                            <h1 class="text-4xl font-light uppercase tracking-widest mb-1">
                                Galpón Multiespacio
                            </h1>
                            <div class="w-32 border-t border-gray-400"></div>
                        </div>

                        <!-- ENGLISH -->
                        <div class="text-lg leading-relaxed text-gray-800">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider">ENG</p>
                            <p>
                                Founded the <strong>Galpón Multiespacio</strong> Theater in Buenos Aires, Argentina.
                                This space arises as a response to arriving back in my country after 10 years away.
                                In it I worked with Dance Techniques learned in Cuba and Mexico, for 16 years.
                                Creating my Dance Company, putting together works from my own repertoire
                                and also from Afro-Cuban translational repertoire.
                            </p>
                        </div>

                        <!-- SPANISH -->
                        <div class="text-lg leading-relaxed text-gray-800 border-t border-gray-200">
                            <p class="font-medium text-gray-600 text-sm uppercase tracking-wider">ESP</p>
                            <p>
                                Fundó el Teatro <strong>El Galpón Multiespacio</strong>, en Buenos Aires, Argentina.
                                Este espacio surge como una respuesta al llegar nuevamente a mi país luego de 10 años.
                                En él trabajé con Técnicas de Danza aprendidas en Cuba y en México, durante 16 años.
                                Creando mi Compañía de Danza, montando obras de repertorio propio y también de repertorio tradicional afrocubano.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- COMPACT GALLERY: 2×3 grid with tight spacing -->
                <div class="grid grid-cols-2  gap-4 mt-4 lg:mt-4">
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/galpon/galpon1.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/galpon/galpon2.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/galpon/galpon3.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/galpon/galpon4.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/galpon/galpon5.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="overflow-hidden rounded-sm shadow-xl">
                        <img src="{{ asset('photos/galpon/galpon6.jpg') }}" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>

        <!-- Copyright -->
        <x-copyright />
    </main>

</body>
</html>
