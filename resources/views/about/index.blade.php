@extends('layouts.main')
 
 @section('title', 'about')


 @section('content')

<h1>About Us</h1>
<a href="{{ route('about.create') }}">Add About Info</a>
<br><br>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>About Our Company</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($abouts as $about)
            <tr>
                <td>{{ $about->id }}</td>
                <td><img src="{{ asset('images/' . $about->image) }}" width="100"></td>
                <td>{{ $about->about_our_company }}</td>
                <td>
                   <button><a href="{{ route('about.show', $about->id) }}">View</a></button> 
                    <button><a href="{{ route('about.edit', $about->id) }}">Edit</a></button>
                    <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
