@extends('layouts.app')
 
 @section('title', 'slider')


 @section('content')

    <!-- section featured -->
    <section id="featured">
        <!-- slideshow start here -->
        <div class="camera_wrap" id="camera-slide">

@if($slides->isEmpty())
        <p>No slides available.</p>
@else
            @foreach ($slides as $slide)
                <div data-src="{{ asset('storage/' . $slide->image) }}">
                    <div class="camera_caption fadeFromLeft">
                        <div class="container">
                            <div class="row">
                                <div class="span6">
                                    <h2 class="animated fadeInDown"><strong>{{ $slide->caption }}</strong></h2>
                                    <p class="animated fadeInUp">{{ $slide->description }}</p>
                                </div>
                                <div class="span6">
                                    <!-- You can include an additional image or content here if needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- slideshow end here -->
    </section>
<br><br>

@endsection
