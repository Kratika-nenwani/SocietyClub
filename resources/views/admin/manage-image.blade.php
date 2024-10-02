@extends('admin.index-main')
@section('csscontent')
<style>
    .img-container {
        height: 250px;
        overflow: hidden;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .img-container img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .img-container:hover img {
        transform: scale(1.1);
    }

    .card {
        border: none;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        border-radius: 25px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-outline-danger {
        border-radius: 25px;
        padding: 6px 20px;
    }
</style>
@endsection
@section('content')
<br>
<br>
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Manage Images for <span class="text-primary">{{ $gallery->event_name }}</span></h1>
        <p class="lead">Add, view, and manage images for this event gallery in a visually appealing format.</p>
    </div>

    <!-- Image Gallery Section -->
    <div class="row">
        @foreach ($images as $image)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="img-container">
                        <img src="{{ asset('uploads/' . $image) }}" class="card-img-top img-fluid rounded" alt="Event Image">
                    </div>
                    <div class="card-body text-center">
                        <form action="{{ route('gallery.deleteImage', $gallery->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="image" value="{{ $image }}">
                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Add New Images Section -->
    <div class="mt-5">
        <h3 class="text-center mb-4">Add New Images</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <form action="{{ route('gallery.addImage', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="new_images" class="form-label">Select Images</label>
                            <input type="file" name="new_images[]" id="new_images" multiple class="form-control-file">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Images</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
