@if (session('message'))
    <section class="mx-auto max-w-[1000px] capitalize rounded-lg border border-2 border-green-300 bg-green-200 text-gray-800 p-4">
        {{ session('message') }}
    </section>
@endif