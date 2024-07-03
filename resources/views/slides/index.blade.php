
@extends('layouts.main')
 
 @section('title', 'slide')


 @section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Slides</div>

                    <div class="card-body">
                        <a href="{{ route('slides.create') }}" class="btn btn-primary mb-3">Add New Slide</a>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Caption</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slides as $slide)
                                    <tr>
                                        <td>{{ $slide->id }}</td>
                                        <td><img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->caption }}" style="max-width: 100px;"></td>
                                        <td>{{ $slide->caption }}</td>
                                        <td>{{ $slide->description }}</td>
                                        <td>
                                            <a href="{{ route('slides.show', $slide->id) }}" class="btn btn-info btn-sm">Show</a>
                                            <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('slides.destroy', $slide->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('slider.show') }}" class="btn btn-primary">View Slideshow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection