@extends('layouts.main')
 
 @section('title', 'Add contacts')


 @section('content')
<h1>View Contact</h1>
<p><strong>Name:</strong> {{ $contact->name }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<p><strong>Phone:</strong> {{ $contact->phone }}</p>
<p><strong>Message:</strong> {{ $contact->message }}</p>
<a href="{{ route('contacts.index') }}">Back to Contact List</a>
@endsection
