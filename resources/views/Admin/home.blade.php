<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <h1>Admin Home</h1>
    </header>

    <body>
        <ul>
            <li>
                <a href="{{ route('comics.index') }}">Comics Index</a>
            </li>
        </ul>
    </body>
</body>

</html>