<x-layout.main>
    <h1>Create a new post</h1>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" name="title"
                       class="input @error('title') is-danger @enderror"
                       value="{{ old('title') }}" autocomplete="title" autofocus>
                @error('title')
                @enderror
            </div>
            @error('title')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="date" class="label">Happened at:</label>
            <div class="control">
                <div class="control">
                    <input type="date" name="date"
                           class="input @error('date') is-danger @enderror"
                           value="{{ $post->date }}" autocomplete="date" autofocus>
                    @error('date')
                    @enderror
                </div>
                @error('date')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
            <div class="control">
                <textarea type="text" name="description"
                          class="input @error('description') is-danger @enderror"
                          autocomplete="description"
                          autofocus>{{ old('description') }}</textarea>
                @error('description')
                @enderror
            </div>
            @error('description')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="button-container">
            <button type="submit" class="save-button">Save</button>
            <a href="{{ route('welcome') }}" class="cancel-button">Cancel</a>
        </div>
    </form>
</x-layout.main>
