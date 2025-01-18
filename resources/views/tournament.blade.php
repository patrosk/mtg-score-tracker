<x-layout>
    <div>
        <h1 class="text-6xl font-bold mb-8">Tournament: {{ $tournament->name }}</h1>
        <h2>Players in tournament:</h2>
        @if ($tournament->players->count() == 0) {
            <p>No players in tournament</p>
            }
        @else
            {
            <ul>
                @foreach ($tournament->players as $player)
                    <li>
                        <a href="/players/{{ $player->id }}">{{ $player->name }}</a>
                    </li>
                @endforeach
            </ul>
            }
        @endif
        <h2>Games in tournament:</h2>
        @if ($tournament->games->count() == 0) {
            <p>No games in tournament</p>
            }
        @else
            {
            <ul>
                @foreach ($tournament->games as $game)
                    <li>
                        {{ $game->name }}
                    </li>
                @endforeach
            </ul>
            }
        @endif
    </div>
</x-layout>
