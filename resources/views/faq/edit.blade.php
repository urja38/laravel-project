@extends('layouts.main')
 
 @section('title', 'FAQ')


 @section('content')

<h1>Edit FAQ</h1>
<form action="{{ route('faq.update', $faq->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="question">Question:</label>
    <input type="text" id="question" name="question" value="{{ $faq->question }}" required>
    <br>
    <label for="answer">Answer:</label>
    <textarea id="answer" name="answer" required>{{ $faq->answer }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
