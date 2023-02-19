@extends('admin.layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('admin.comics.create') }}" class="btn btn-lg btn-secondary my-3">Create a new comic</a>
        </div>
        <div class="col">
            <table class="table table-sm ">
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
                            <a href="{{ route('admin.comics.edit', $comic->id) }}" class="btn btn-warning btn-sm w-100">Edit</a>
                            <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm w-100">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>            
@endsection