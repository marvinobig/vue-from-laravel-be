<x-layouts.site>
    <x-slot:title>
        Edit {{ $post->title }}
    </x-slot:title>

    <h1 class="capitalize font-bold text-2xl mb-8">edit post</h1>

    <form class="flex flex-col gap-4" action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PATCH')

        <x-errors />

        <section class="flex flex-col gap-2">
            <label class="capitalize font-bold text-lg" for="title">title</label>
            <input class="border border-gray-800 rounded-lg p-2" type="text" name="title" id="title" value="{{ $post->title }}">
        </section>

        <section class="flex flex-col gap-2">
            <label class="capitalize font-bold text-lg" for="body">body</label>
            <textarea class="border border-gray-800 rounded-lg p-2 resize-none min-h-[400px]" name="body" id="body">{{ $post->body }}</textarea>
        </section>

        <section class="flex items-center gap-2">
            <label class="capitalize font-bold text-lg" for="status">publish</label>
            <input type="checkbox" name="status" value="1" id="status" {{ $post->status ? 'checked' : '' }}>
        </section>

        <button class="w-fit capitalize rounded-lg bg-gray-800 py-2 px-4 text-white cursor-pointer" type="submit">edit
            post</button>
    </form>
</x-layouts.site>
