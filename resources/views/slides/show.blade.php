@extends('layouts.main')
 
 @section('title', 'slide')


 @section('content')

 <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Slide Details</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Image</label><br>
                            <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->caption }}" style="max-width: 300px;">
                        </div>
                        <div class="form-group">
                            <label>Caption</label>
                            <p>{{ $slide->caption }}</p>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <p>{{ $slide->description }}</p>
                        </div>
                        <a href="{{ route('slides.index') }}" class="btn btn-primary">Back to Slides</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection