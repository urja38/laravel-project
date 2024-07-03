@extends('layouts.main')
 
 @section('title', 'slide')


 @section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Add New Slide</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image" required>
                            </div>
                            <div class="form-group">
                                <label for="caption">Caption</label>
                                <input type="text" class="form-control" name="caption" id="caption" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Slide</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection