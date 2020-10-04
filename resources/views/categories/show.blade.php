@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h1>{{ $category->name }}</h1>

        <div class="btn-group">
        <a href="{{ route('categories.edit', $category->id) }}"
        class="btn btn-warning btn-sm btn-margin-right">Edit</a>

        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
            {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger btn-sm pull-left">Delete</button>
            {{ csrf_field() }}
        </form>
        </div>
    </div>

@endsection
