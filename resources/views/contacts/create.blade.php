@extends('layouts.main')
 
 @section('title', 'Add contacts')


 @section('content')
<h1>Create Contact</h1>
<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
        @error('phone')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message">{{ old('message') }}</textarea>
        @error('message')
            <span style="color: red;">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div>
        <button type="submit">Create</button>
    </div>
</form>
@endsection
