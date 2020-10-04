@extends('layouts.app')

@section('content')
<div class="col-md-12">
    @foreach($categories as $category)
        <h2><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></h2>
    @endforeach
</div>
@endsection
