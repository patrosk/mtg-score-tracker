<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mtg Score Tracker</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="/toucanred.svg" alt="" />
                <a href="/">mtg score tracker</a>
            </div>

            <!-- HAMBURGER MENU -->
            <div class="dropdown">
                <button class="dropdown-button">
                    <span class="hamburger">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <ul class="dropdown-content">
                    <li><a href="/">Home</a></li>
                    <li><a href="/scoreboard">Scoreboard</a></li>
                    <li><a href="/tournaments">Tournaments</a></li>
                    <li><a href="/games">Games</a></li>
                    <li><a href="/players">Players</a></li>
                </ul>
            </div>

            <!-- DESKTOP MENU -->
            <div class="menu-desktop">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/scoreboard">Scoreboard</a></li>
                    <li><a href="/tournaments">Tournaments</a></li>
                    <li><a href="/games">Games</a></li>
                    <li><a href="/players">Players</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="bg-red-400">
        <h1 class="text-6xl font-bold">Start</h1>
    </div>

    <main class="container">
        {{ $slot }}
    </main>

    @vite('resources/js/app.js')
</body>

</html>
