{{-- resources/views/welcome.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constanza Bitthoff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="h-screen flex bg-white text-gray-900">

    <x-navbar />


<!-- MAIN — 8px from top + perfectly uniform gaps -->
    <main class="flex-1 bg-white">
        <div class="pt-12 px-4 md:px-6 lg:px-8"> <!-- 8px top + uniform side gaps -->
            <div class="grid grid-cols-3 gap-4 md:gap-6 lg:gap-8">

                <div class="overflow-hidden rounded-sm">
                    <img src="{{ asset('photos/SLY_9180.jpg') }}"
                         alt="Constanza Bitthoff"
                         class="w-full h-full object-cover">
                </div>

                <div class="overflow-hidden rounded-sm">
                    <img src="{{ asset('photos/SLY_8651-scaled.jpg') }}"
                         alt="Performance"
                         class="w-full h-full object-cover">
                </div>

                <div class="overflow-hidden rounded-sm">
                    <img src="{{ asset('photos/SLY_9206.jpg') }}"
                         alt="Art detail"
                         class="w-full h-full object-cover">
                </div>

            </div>
        </div>

        <x-copyright />
    </main>

</body>
</html>
