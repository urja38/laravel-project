@extends('layouts.main')
 
 @section('title', 'Add blog')


 @section('content')

<h1>Edit About Information</h1>
<form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="image">Image:</label>
    <input type="file" id="image" name="image">
    <br>
    <img src="{{ asset('images/' . $about->image) }}" width="100">
    <br>
    <label for="about_our_company">About Our Company:</label>
    <textarea id="about_our_company" name="about_our_company" required>{{ $about->about_our_company }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
