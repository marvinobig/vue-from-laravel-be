<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue From Laravel: {{ $title }}</title>

    @vite(['resources/js/app.js'])
</head>

<body class="m-4">
    <header class="mx-auto p-4 max-w-[1000px]">
        <nav>
            <ul class="flex items-center justify-between  w-full capitalize text-xl underline">
                <li><a href="{{ route('home') }}">dashboard</a></li>
                <li><a href="{{ route('posts.create') }}">create</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <x-message />

        <section class="p-4 mx-auto max-w-[1000px]">
            {{ $slot }}
        </section>
    </main>

    <footer class="text-center mx-auto p-4 max-w-[1000px]">
        <p>Copyright &copy; {{ \Carbon\Carbon::now()->year }}. Developed by <a href="https://github.com/marvinobig"
                target="_blank">marvinobig</a>.</p>
    </footer>
</body>

</html>
