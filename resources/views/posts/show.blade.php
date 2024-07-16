<x-layout.main>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/work.css') }}">
    <div class="container">
        <section class="posts">
            <div class="post-list">
                <div class="post">
                    <h2 class="title">{{ $post->title }}</h2>
                    <p>Happened at: {{ $post->date }}</p>
                    <p>Description: {{ $post->description }}</p>
                    @if ($post->image_url)
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $post->image_url) }}" alt="Post Image">
                        </div>
                    @endif
                </div>
                <div class="button-container">
                    @can('edit-post')
                        <a href="{{ route('posts.edit', $post) }}" class="button edit-button">Edit</a>
                    @endcan
                    @can('delete-post')
                        <a href="{{ route('posts.delete', $post) }}" class="button delete-button">Delete</a>
                    @endcan
                    <a href="{{ route('work') }}" class="button cancel-button">Cancel</a>
                </div>
            </div>
        </section>
    </div>
</x-layout.main>
