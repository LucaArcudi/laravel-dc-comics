<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <h1>Comics Index</h1>
    </header>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('admin.comics.create') }}" class="btn btn-lg btn-secondary my-3">Create a new data</a>
                </div>
                <div class="col">
                    <table class="table table-sm table-dark table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">title</th>
                                <th scope="col">description</th>
                                <th scope="col">thumb</th>
                                <th scope="col">price</th>
                                <th scope="col">series</th>
                                <th scope="col">sale_date</th>
                                <th scope="col">type</th>
                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">functions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ substr( $comic->description, 0, 40 ).'...'  }}</td>
                                <td>{{ $comic->thumb }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>{{ $comic->created_at }}</td>
                                <td>{{ $comic->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.comics.show', $comic->id ) }}" class="btn btn-primary btn-sm w-100">Show</a>
                                    <button class="btn btn-warning btn-sm w-100">Edit</button>
                                    <button class="btn btn-danger btn-sm w-100">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </body>
</body>

</html>