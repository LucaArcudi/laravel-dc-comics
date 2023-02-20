@extends('admin.layouts.app')

@section('title', 'Create a new comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 py-5 ">
            <h1>Create a new comic</h1>
        </div>
        <div class="col">
            @include('admin.comics.partials.form', ['route' => 'admin.comics.store' , 'comic' => $comic, 'method' => 'POST', 'buttonName' => 'Create'])
        </div>
    </div>
</div>
@endsection