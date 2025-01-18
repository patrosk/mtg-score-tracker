<x-layout>
    <div>
        <h1 class="text-6xl font-bold">New tournament</h1>
        <form action="/add-new-tournament" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            Players:<br />
            @foreach ($players as $player)
                <input type="checkbox" id={{ $player->id }} name="players[]" value="{{ $player->id }}">
                <label for={{ $player->id }}>{{ $player->name }}</label><br>
            @endforeach
            {{-- <label for="players">Players:</label><br>
            <select name="players" id="players" multiple>
                <option value=""></option>
                @foreach ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select> --}}
            <label>End date:</label><br>
            <input type="date" id="end_date" name="end_date"><br>
            <input type="submit" value="Add tournament">
        </form>
    </div>
</x-layout>
