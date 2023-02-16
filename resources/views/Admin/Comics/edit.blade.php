@extends('admin.layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 py-5 ">
            <h1>Create a new data</h1>
        </div>
        <div class="col">
            <form action=" {{ route('admin.comics.update', $comic->id) }} " method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">title</label>
                    <input type="text" class="form-control" value="{{ $comic->title }}" name="title">
                </div>
                <div class="mb-3">
                    <label class="form-label">description</label>
                    <textarea class="form-control" name="description" rows="5" cols="33">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">thumb</label>
                    <input type="text" class="form-control" value="{{ $comic->thumb }}" name="thumb">
                </div>
                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input type="number" class="form-control" value="{{ $comic->price }}" name="price">
                </div>
                <div class="mb-3">
                    <label class="form-label">series</label>
                    <input type="text" class="form-control" value="{{ $comic->series }}" name="series">
                </div>
                <div class="mb-3">
                    <label class="form-label">sale_date</label>
                    <input type="date" class="form-control" value="{{ $comic->sale_date }}" name="sale_date">
                </div>
                <div class="mb-3">
                    <label class="form-label">type</label>
                    <input type="text" class="form-control" value="{{ $comic->type }}" name="type">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection