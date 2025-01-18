<x-layout>
    <div>
        <h1 class="text-6xl font-bold mb-8">Tournaments</h1>
        <button>
            <a href="/new-tournament">Add new tournament</a>
        </button>
        <ul>
            @foreach ($tournaments as $tournament)
                <li>
                    <a href="/tournaments/{{ $tournament->id }}">{{ $tournament->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
