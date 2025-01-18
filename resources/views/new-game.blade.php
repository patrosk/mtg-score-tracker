<x-layout>
    <div>
        <h1 class="text-6xl font-bold">Add a new game</h1>
        <form action="/add-new-game" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            Tournament:<br />
            @foreach ($tournaments as $tournament)
                <input type="radio" id={{ $tournament->id }} name="tournament" value="{{ $tournament->id }}">
                <label for={{ $tournament->id }}>{{ $tournament->name }}</label><br>
            @endforeach



            <input type="submit" value="Add game">
        </form>
    </div>
</x-layout>
