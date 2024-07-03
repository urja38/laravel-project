@extends('layouts.main')
 
 @section('title', 'FAQ')


 @section('content')

<h1>FAQs</h1>
<a href="{{ route('faq.create') }}">Add FAQ</a>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($faqs as $faq)
            <tr>
                <td>{{ $faq->id }}</td>
                <td>{{ $faq->question }}</td>
                <td>{{ $faq->answer }}</td>
                <td>
                    <button> <a href="{{ route('faq.show', $faq->id) }}">View</a></button>
                    <button><a href="{{ route('faq.edit', $faq->id) }}">Edit</a></button>
                    <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
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
