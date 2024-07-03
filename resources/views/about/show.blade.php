@extends('layouts.main')
 
 @section('title', 'about')


 @section('content')

<h1>About Us</h1>
<div>
    <img src="{{ asset('images/' . $about->image) }}" width="200" alt="About Us Image">
    <p>{{ $about->about_our_company }}</p>
</div>
<a href="{{ route('about.index') }}">Back to About List</a>
@endsection
