<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Santavia</title>
    <link rel="stylesheet" href="https://use.typekit.net/cfr8yta.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<main class="flex flex-col items-center justify-center">
    <header class="fixed z-30 top-0 left-0 w-full
     bg-gradient-to-b from-neutral-800 py-4 lg:py-12 transition-all duration-1000">
        <div class="max-w-screen-2xl w-full flex flex-row justify-between items-center px-4 lg:px-12 mx-auto">
            <x-application-logo class="w-12 lg:w-20 h-12 lg:h-20 fill-white"/>
            <nav class="hidden flex-row gap-12 lg:flex">
                <a class="menu-link" href="">à propos</a>
                <a class="menu-link" href="">notre mission</a>
                <a class="menu-link" href="">nos soins</a>
            </nav>
            <a class="btn-outline hidden lg:block" href="">
                prendre rendez-vous
            </a>
            <button id="menu-open" class="lg:hidden">
                <svg fill="white" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z"></path>
                </svg>
            </button>
        </div>
    </header>
    <div id="menu" class="fixed z-50 top-0 left-0 w-full h-[100lvh] bg-red-damask-500 translate-x-full transition-all duration-1000">
        <button id="menu-close" class="absolute top-4 right-4">
            <svg fill="white" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"></path>
            </svg>
        </button>
        <nav class="flex-col gap-8 flex px-8 py-24">
            <a class="menu-link" href="">à propos</a>
            <a class="menu-link" href="">notre mission</a>
            <a class="menu-link" href="">nos soins</a>
            <a class="btn-outline mt-12" href="">
                prendre rendez-vous
            </a>
        </nav>
    </div>
    @yield('content')
</main>
</body>
</html>
