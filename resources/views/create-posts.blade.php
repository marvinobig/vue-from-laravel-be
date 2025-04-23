<x-layouts.site>
    <x-slot:title>
        New Post
    </x-slot:title>

    <h1 class="capitalize font-bold text-2xl mb-8">create new post</h1>

    <form class="flex flex-col gap-4" action="{{ route('posts.store') }}" method="post">
        @csrf 

        <x-errors />

        <section class="flex flex-col gap-2">
            <label class="capitalize font-bold text-lg" for="title">title</label>
            <input class="border border-gray-800 rounded-lg p-2" type="text" name="title" id="title" value="{{ old('title') }}">
        </section>

        <section class="flex flex-col gap-2">
            <label class="capitalize font-bold text-lg" for="body">body</label>
            <textarea class="border border-gray-800 rounded-lg p-2 resize-none min-h-[400px]" name="body" id="body">{{ old('body') }}</textarea>
        </section>

        <section class="flex items-center gap-2">
            <label class="capitalize font-bold text-lg" for="status">publish</label>
            <input type="checkbox" name="status" value="1" id="status" {{ old('status') ? 'checked' : '' }}>
        </section>

        <button class="w-fit capitalize rounded-lg bg-gray-800 py-2 px-4 text-white cursor-pointer" type="submit">create post</button>
    </form>
</x-layouts.site>
