<x-layouts.site>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <h1 class="capitalize font-bold text-2xl mb-8">vue from laravel</h1>

    <section class="flex flex-col gap-5 my-4">
        @foreach ($posts as $post)
            <article class="flex items-center justify-between gap-2 p-4 rounded-lg border border-gray-800">
                <p>{{ $post->title }}</p>

                <div class="flex flex-wrap gap-2">
                    <a class="capitalize rounded-lg bg-gray-800 py-2 px-4 text-white cursor-pointer"
                        href="{{ route('posts.edit', $post->id) }}">Edit</a>

                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button class="capitalize rounded-lg bg-gray-800 py-2 px-4 text-white cursor-pointer"
                            type="submit">
                            Delete
                        </button>
                    </form>
                </div>
            </article>
        @endforeach
    </section>
    <section class="my-10">
        {{ $posts->links() }}
    </section>
</x-layouts.site>
