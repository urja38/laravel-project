@extends('layouts.main')
 
 @section('title', 'Add blog')


 @section('content')

<!DOCTYPE html>
<html>
<head>
    <title>View Blog</title>
</head>
<body>
    <h1>{{ $addblog->title }}</h1>
    <img src="{{ asset('images/' . $addblog->image) }}" width="100">
    <p>{{ $addblog->description }}</p>
    <a href="{{ route('addblog.index') }}">Back to Blog List</a>
</body>
</html>
@endsection
  