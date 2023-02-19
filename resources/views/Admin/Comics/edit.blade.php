@extends('admin.layouts.app')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 py-5 ">
            <h1>Update a comic</h1>
        </div>
        <div class="col">
            @include('admin.comics.partials.form', ['route' => 'admin.comics.update' , 'comic' => $comic, 'method' => 'PUT'])
        </div>
    </div>
</div>
@endsection