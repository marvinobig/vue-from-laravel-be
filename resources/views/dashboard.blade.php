<x-layouts.site>
    <x-slot:title>
        Dashboard
    </x-slot:title>

    <h1>Hello world</h1>

    @foreach ($posts as $post)
        <p>{{$post->title}}</p>
    @endforeach
</x-layouts.site>