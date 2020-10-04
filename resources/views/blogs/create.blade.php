@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create a new blog</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('blogs.store') }}" method="get" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" name="featured_image" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Create a new blog</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

@endsection
