<x-layout.main>
    <container>
        <section class="posts">
            <div class="post-list">
                <h2>Work</h2>
                @foreach($posts as $post)
                    <div class="post">
                        <p>Post: <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></p>
                        <p>Happened at: {{ $post->date }}</p>
                        <p>Description: {{ $post->description }}</p>
                    </div>
                @endforeach
                <div class="create-button">
                    <a href="{{ route('posts.create') }}" class="button">Create</a>
                </div>
            </div>
        </section>
    </container>
</x-layout.main>
