@extends('layouts.main')
 
 @section('title', 'Add blog')


 @section('content')
 
<h1>Create About Information</h1>
<form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        @if ($errors->has('image'))
            <span style="color: red;">{{ $errors->first('image') }}</span>
        @endif
    </div>
    <br>
    <div>
        <label for="about_our_company">About Our Company:</label>
        <textarea id="about_our_company" name="about_our_company"></textarea>
        @if ($errors->has('about_our_company'))
            <span style="color: red;">{{ $errors->first('about_our_company') }}</span>
        @endif
    </div>
    <br>
    <div>
        <button type="submit">Create</button>
    </div>
</form>
@endsection
