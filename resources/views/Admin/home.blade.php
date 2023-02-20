@extends('admin.layouts.app')

@section('title', 'Admin homepage')

@section('main-content')
    <ul>
        <li>
            <a href="{{ route('admin.comics.index') }}">Comics Index</a>
        </li>
    </ul>
@endsection