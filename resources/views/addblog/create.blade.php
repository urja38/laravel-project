@extends('layouts.main')
 
 @section('title', 'Add blog')


 @section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>
</head>
<body>
    <h1>Create Blog</h1>
    <form action="{{ route('addblog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @if ($errors->has('title'))
            <span style="color: red;">{{ $errors->first('title') }}</span>
        @endif
    </div>
    <br>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        @if ($errors->has('image'))
            <span style="color: red;">{{ $errors->first('image') }}</span>
        @endif
    </div>
    <br>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>
        @if ($errors->has('description'))
            <span style="color: red;">{{ $errors->first('description') }}</span>
        @endif
    </div>
    <br>
    <div>
        <button type="submit">Create</button>
    </div>
</form>
</body>
</html>
@endsection