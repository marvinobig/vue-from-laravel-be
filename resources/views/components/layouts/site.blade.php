<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue From Laravel: {{ $title }}</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Dashboard</a></li>
                <li><a href="{{ route('posts.create') }}">Create</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <x-message />
        </section>

        <section>
            {{ $slot }}
        </section>
    </main>

    <footer>
        <p>&copy; {{ \Carbon\Carbon::now()->year }} Developed by <a href="https://github.com/marvinobig"
                target="_blank">marvinobig</a>.</p>
    </footer>
</body>

</html>
