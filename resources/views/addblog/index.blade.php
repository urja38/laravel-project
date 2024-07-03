@extends('layouts.main')
 
 @section('title', 'Add blog')


 @section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Blog List</title>
</head>
<body>
    <h1>Blog List</h1>
    <a href="{{ route('addblog.create') }}">Create New Blog</a>
    <br><br>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td><img src="{{ asset('images/' . $blog->image) }}" width="100"></td>
                    <td>{{ $blog->description }}</td>
                    <td>
                       <button> <a href="{{ route('addblog.show', $blog->id) }}">View</a></button>
                       <button> <a href="{{ route('addblog.edit', $blog->id) }}">Edit</a></button>
                        <form action="{{ route('addblog.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

 @endsection