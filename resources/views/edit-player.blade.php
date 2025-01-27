<x-layout>
    <div>
        <h1 class="text-6xl font-bold">Edit player</h1>
        <form action="/edit-player" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value={{ $player->name }}><br>
            <p>Current image:</p>
            <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}" width="100">
            <label for="image">New image:</label><br>
            <input type="file" id="image" name="image"><br>
            <input type="submit" value="Update player">
        </form>
    </div>
</x-layout>
