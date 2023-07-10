<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Homepage</h1>
        <ul>
            @foreach ( $pages as $page)
            <li><a href="{{ route($page['route']) }}">{{ $page['name'] }}</a></li>
            @endforeach
        </ul>
    </header>
    <main>
        <h2>hello world</h2>
    </main>
</body>
</html>