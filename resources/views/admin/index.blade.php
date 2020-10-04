@extends('layouts.app')

@section('content')

    <div class="container-fluid">
    <div class="jumbotron">
        <h1>Admin Dashboard</h1>
    </div>
        <div class="col-md-12">
            <button class="btn btn-margin-right">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-lg btn-margin-right">Create Blog</a>
            </button>

            <button class="btn btn-margin-right">
                <a href="{{ route('blogs.trash') }}" class="btn btn-danger btn-lg btn-margin-right">Trashed Blogs</a>
            </button>

            <button class="btn btn-margin-right">
                <a href="{{ route('categories.create') }}" class="btn btn-success btn-lg btn-margin-right">Create category</a>
            </button>
        </div>
    </div>

@endsection
