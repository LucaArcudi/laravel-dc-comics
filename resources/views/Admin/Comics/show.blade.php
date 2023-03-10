@extends('admin.layouts.app')

@section('title', $comic->series )

@section('main-content')
<div class="container">
    <div class="row text-center">
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('message') }}
        </div>
        <div class="card col">
            
            <div class="card-body">
                <img src=" {{ $comic->thumb }} " class="card-img-top img-fluid w-25" alt="{{$comic->title.'\'s img'}}">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <h6 class="card-subtitle">{{ $comic->series }}</h6>
                <p class="card-text">{{ $comic->type }}</p>
                <p class="card-text">{{ $comic->description }}</p>
                <p class="card-text">{{ $comic->sale_date }}</p>
                <p class="card-text">{{ $comic->price }}</p>
                <a href="{{ route('admin.comics.index') }}" class="btn btn-primary">Index</a>
            </div>
        </div> 
    </div>
</div>    
@endsection
