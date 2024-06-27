<x-layout.main>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/work.css') }}">
    <div class="container">
        <section class="posts">
            <div class="post-list">
                <div class="post">
                    <h2 class="title">{{$post->title}}</h2>
                    <p>Happened at: {{$post->date}}</p>
                    <p>Description: {{$post->description}}</p>
                </div>
                <div class="button-container">
                    <a href="{{ route('posts.edit', $post) }}" class="edit-button">Edit</a>
                    <a href="{{ route('posts.delete', $post) }}" class="delete-button">Delete</a>
                    <a href="{{ route('work') }}" class="cancel-button">Cancel</a>
                </div>
            </div>
        </section>
    </div>
</x-layout.main>
