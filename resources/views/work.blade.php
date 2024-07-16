<x-layout.main>
    <div class="container">
        <section class="posts">
            <div class="post-list">
                <h2 class="title">Work</h2>
                @can('create-post')
                    <div class="create-button">
                        <a href="{{ route('posts.create') }}" class="button create-button">Create</a>
                    </div>
                @endcan
                @foreach($posts as $post)
                    <div class="post {{ $loop->index % 2 == 0 ? 'post-right' : 'post-left' }}">
                        <a href="{{ route('posts.show', $post) }}">
                            <div class="post-content {{ $loop->index % 2 == 0 ? 'post-content-right' : 'post-content-left' }}">
                                @if($loop->index % 2 == 0)
                                    @if ($post->image_url)
                                        <img src="{{ asset('storage/' . $post->image_url) }}" alt="Post Image">
                                    @endif
                                    <div class="post-text">
                                        <p>Post: {{ $post->title }}</p>
                                        <p>Happened at: {{ $post->date }}</p>
                                        <p>Description: {{ $post->description }}</p>
                                    </div>
                                @else
                                    <div class="post-text">
                                        <p>Post: {{ $post->title }}</p>
                                        <p>Happened at: {{ $post->date }}</p>
                                        <p>Description: {{ $post->description }}</p>
                                    </div>
                                    @if ($post->image_url)
                                        <img src="{{ asset('storage/' . $post->image_url) }}" alt="Post Image">
                                    @endif
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</x-layout.main>
