<x-layout>
    <div>
        <h1 class="text-6xl font-bold mb-8">{{ $player->name }}</h1>
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <h1>{{ $player->name }}</h1>
        <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}" width="100">
    </div>
</x-layout>
