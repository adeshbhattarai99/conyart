{{-- resources/views/contact.blade.php --}}
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Constanza Bitthoff</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex bg-white text-gray-900">

    <x-navbar />

    <main class="flex-1">
        <div class="pt-12 px-6 lg:px-10">
            <div class="max-w-screen-2xl mx-auto">

                <!-- Layout: text left (right-aligned), image right -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-start">
                    <!-- Text column – 4/12 width, right-aligned, flush to the image -->
                    <div class="lg:col-span-4 text-right space-y-6">
                        <div>
                            <h1 class="text-4xl font-light uppercase tracking-widest">
                                Contact
                            </h1>
                            <div class="w-32 border-t border-gray-400 mt-4 ml-auto"></div>
                        </div>

                        <a href="mailto:constanzabitthoff@gmail.com"
                           class="inline-flex items-center gap-4 justify-end text-red-600 hover:text-red-800 transition text-lg font-medium">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            constanzabitthoff@gmail.com
                        </a>
                    </div>

                    <!-- Image column – 8/12 width, on the right -->
                    <div class="lg:col-span-8">
                        <div class="overflow-hidden rounded-sm">
                            <img src="{{ asset('photos/contact.jpg') }}"
                                 alt="Contact"
                                 class="w-full h-auto object-cover object-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-copyright />
    </main>

</body>
</html>