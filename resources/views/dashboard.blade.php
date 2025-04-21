<x-layouts.site>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <h1>Hello world</h1>

    <section>
        @foreach ($posts as $post)
            <article>
                <p>{{ $post->title }}</p>

                <div>
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <a href="{{ route('posts.destroy', $post->id) }}">Delete</a>
                </div>
            </article>
        @endforeach
    </section>
</x-layouts.site>
