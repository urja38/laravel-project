@extends('layouts.app')
 
 @section('title', 'slider')


 @section('content')



<div class="container mt-5">
    <h2> About our company</h2>
    @if($abouts->isEmpty())
        <p>No Data available.</p>
      @else
<br>

    @foreach($abouts as $about)
        <div class="mb-4">
            @if ($about->image)
                <img src="{{ asset('images/' . $about->image) }}" alt="Image"  width="300">
            @endif
            <p>{{ $about->about_our_company}}</p>
        </div>
    @endforeach
</div>
@endif
    <br><br>

@endsection