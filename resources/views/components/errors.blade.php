@if ($errors->any())
    <section class="mx-auto max-w-[1000px] capitalize rounded-lg border border-2 border-red-300 bg-red-200 text-gray-800 p-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </section>
@endif