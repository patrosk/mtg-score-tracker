<x-layout>
    <div>
        <h1 class="text-6xl font-bold mb-8">Players</h1>
        <ul>
            @foreach ($players as $player)
                <li>
                    <a href="/players/{{ $player->id }}">{{ $player->name }}</a>
                </li>
            @endforeach
        </ul>
        <button>
            <a href="/new-player">Add new player</a>
        </button>
    </div>
</x-layout>
