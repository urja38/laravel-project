@extends('layouts.main')
 
 @section('title', 'Add blog')


 @section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog</title>
</head>
<body>
    <h1>Edit Blog</h1>
    <form action="{{ route('addblog.update', $addblog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $addblog->title }}" required>
        <br>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        <br>
        <img src="{{ asset('images/' . $addblog->image) }}" width="100">
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $addblog->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
@endsection