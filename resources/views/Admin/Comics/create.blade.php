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
        <div class="row">
            <div class="col-12 py-5 ">
                <h1>Create a new data</h1>
            </div>
            <div class="col">
                <form action=" {{ route('admin.comics.store') }} " method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <textarea class="form-control" name="description"
                        rows="5" cols="33">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">thumb</label>
                        <input type="text" class="form-control" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">series</label>
                        <input type="text" class="form-control" name="series">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">sale_date</label>
                        <input type="date" class="form-control" name="sale_date">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">type</label>
                        <input type="text" class="form-control" name="type">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>