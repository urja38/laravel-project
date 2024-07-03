@extends('layouts.main')
 
 @section('title', 'Add contacts')


 @section('content')

<h1>Edit Contact</h1>
<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $contact->name }}" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $contact->email }}" required>
    <br>
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ $contact->phone }}" required>
    <br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required>{{ $contact->message }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>
@endsection
