<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="card col">
                
                <div class="card-body">
                    <img src=" {{ $comic->thumb }} " class="card-img-top img-fluid w-25" alt="{{$comic->title.'\'s img'}}">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <h6 class="card-subtitle">{{ $comic->series }}</h6>
                    <p class="card-text">{{ $comic->type }}</p>
                    <p class="card-text">{{ substr( $comic->description, 0, 100 ).'...' }}
                        <a href="#">show more</a>
                    </p>
                    <p class="card-text">{{ $comic->sale_date }}</p>
                    <p class="card-text">{{ $comic->price }}</p>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Index</a>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>