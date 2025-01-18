<x-layout>
    <div>
        <h1 class="text-6xl font-bold">Add a new player</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/add-new-player" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="image">Image:</label><br>
            <input type="file" id="image" name="image"><br>
            <input type="submit" value="Add player">
        </form>
    </div>
</x-layout>
