@extends('layouts.main')
 
 @section('title', 'FAQ')


 @section('content')

<h1>FAQ</h1>
<div>
    <h2>Question</h2>
    <p>{{ $faq->question }}</p>
    <h2>Answer</h2>
    <p>{{ $faq->answer }}</p>
</div>
<a href="{{ route('faq.index') }}">Back to FAQ List</a>
@endsection
