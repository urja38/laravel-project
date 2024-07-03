@extends('layouts.main')
 
 @section('title', 'FAQ')


 @section('content')

<h1>Create FAQ</h1>
<form action="{{ route('faq.store') }}" method="POST">
    @csrf
    <div>
        <label for="question">Question:</label>
        <input type="text" id="question" name="question" value="{{ old('question') }}">
        @error('question')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div>
        <label for="answer">Answer:</label>
        <textarea id="answer" name="answer">{{ old('answer') }}</textarea>
        @error('answer')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div>
        <button type="submit">Create</button>
    </div>
</form>

@endsection
