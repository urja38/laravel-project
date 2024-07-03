@extends('layouts.app')
 
 @section('title', 'slider')


 @section('content')

<div class="container mt-5">
    <h2>Frequently Asked Questions</h2>
    @if($faqs->isEmpty())
        <p>No Data available.</p>
      @else
    <br>
    @foreach($faqs as $faq)
        <div class="mb-4">
            <h5>{{ $faq->question }}</h5>
            <p>{{ $faq->answer }}</p>
        </div>
    @endforeach

</div>
@endif
    <br><br>

    @endsection

