@extends('layouts.app')
 
 @section('title', 'slider')


 @section('content')

   
<div class="container mt-5">
    <h2>Our Blogs</h2>
    @if($blogs->isEmpty())
        <p>No blogs available.</p>
      @else
    <br>
    @foreach($blogs as $blog)
    
        <div class="mb-4">
            <h4>{{ $blog->title }}</h4>
            @if ($blog->image)
                <img src="{{ asset('images/' . $blog->image) }}" alt="Image" class="img-thumbnail" width="300">
            @endif
            <p>{{ $blog->description  }}</p>
        </div>
    @endforeach
</div>
@endif
<br><br>

@endsection
   