
<h1>KATEOGRI KULINER</h1>

@foreach ($posts as $post)
    @if ($post->category_id == 3)
        <article class="mb-5">
            <h2>
                <a href="/jelajahi/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->body }}</p>
        </article>
    @endif
@endforeach
