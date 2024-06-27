<x-layout.main>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/work.css') }}">
    <div class="container">
        <h2 class="title">Edit {{ $post->title }}</h2>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <section class="posts" style="width: 500px">
                <div class="post-list">
                    <div class="post">
                        <div class="field">
                            <label for="title" class="label">Title</label>
                            <div class="control">
                                <input type="text" name="title"
                                       class="input @error('title') is-danger @enderror"
                                       value="{{ $post->title }}" autocomplete="title" autofocus>
                                @error('title')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="date" class="label">Happened at:</label>
                            <div class="control">
                                <input type="date" name="date"
                                       class="input @error('date') is-danger @enderror"
                                       value="{{ $post->date }}" autocomplete="date">
                                @error('date')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="description" class="label">Description</label>
                            <div class="control">
                                <textarea name="description"
                                          class="textarea @error('description') is-danger @enderror"
                                          autocomplete="description">{{ $post->description }}</textarea>
                                @error('description')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-container">
                    <button type="submit" class="save-button">Save</button>
                    <a href="{{ route('work') }}" class="cancel-button">Cancel</a>
                </div>
            </section>
        </form>
    </div>
</x-layout.main>
