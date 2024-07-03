@extends('layouts.main')
 
 @section('title', 'Add slide')


 @section('content')
<h1>Contact List</h1>
<a href="{{ route('contacts.create') }}">Create New Contact</a>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
                <td>
                    <button><a href="{{ route('contacts.show', $contact->id) }}">View</a></button>
                    <button><a href="{{ route('contacts.edit', $contact->id) }}">Edit</a></button>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
