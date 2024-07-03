@extends('layouts.main')
 
 @section('title', 'Add posts')


 @section('content')
    <div class="container mt-5">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->message }}</p>
        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="img-fluid">
        <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">Back to Posts</a>
    </div>
@endsection
