@extends('admin.index-main')
@section('csscontent')
    <style>
        .card-img-top:hover {
            transform: scale(1.05);
        }

        .card-title {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .modal-lg .img-fluid {
            max-height: 80vh;
            object-fit: contain;
        }

        .gallery-title {
            font-size: 3rem;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            padding: 10px 20px;
            border-radius: 15px;
            display: inline-block;
            animation: fadeIn 1s ease-in-out;
            letter-spacing: 2px;
        }

        .add-picture-btn {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            border: none;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 10px 30px;
            color: #fff;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(255, 65, 108, 0.4);
        }

        .add-picture-btn:hover {
            background: linear-gradient(45deg, #ff4b2b, #ff416c);
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(255, 65, 108, 0.6);
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .gallery-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <br><br>
    <div class="text-center gallery-container mt-3">
        <h2 class="gallery-title">Welcome to the Gallery</h2>
    </div>
    <!-- Button to Open Modal -->
    <div class="text-center">
        <button type="button" class="btn btn-primary btn-lg add-picture-btn" data-bs-toggle="modal"
            data-bs-target="#addPictureModal">
            <i class="fas fa-plus-circle"></i> Add Picture
        </button>
    </div>
     <!-- Gallery Grid -->
    
     <div> 
        <table style="width: 100%; border-collapse: collapse; background-color: white;"> 
            <thead> 
                <tr> 
                    <th style="padding: 10px; background-color: #F5F7F8;">ID</th> 
                    <th style="padding: 10px; background-color: #F5F7F8;">Event Name</th> 
                    <th style="padding: 10px; background-color: #F5F7F8;">Society Name</th> 
                    <th style="padding: 10px; background-color: #F5F7F8;">Images</th> 
                    <th style="padding: 10px; background-color: #F5F7F8;">Date</th> 
                    <th style="padding: 10px; background-color: #F5F7F8;">Actions</th> <!-- New Actions Column -->
                </tr> 
            </thead> 
            <tbody id="facility-partner-table"> 
                @forelse ($pictures as $r) 
                    <tr id="partner-{{ $r->id }}"> 
                        <td>{{ $r->id }}</td>      
                        <td>{{ $r->event_name }}</td> 
                        <td>{{ $r->society_id }}</td> 
                        <td><a href={{ route('manage-image',$r->id) }}  class="btn btn-sm btn-info">🔍 View & Manage</a></td> 
                        <td>{{ $r->date }}</td> 
                        <td>
                            <button class="btn btn-danger delete-btn" data-id="{{ $r->id }}" data-token="{{ csrf_token() }}">Delete</button>

                            {{-- <button class="btn btn-danger reject-btn" data-id="{{ $r->id }}">Edit</button> --}}
                        </td> <!-- Action buttons added here -->
                    </tr> 
                @empty 
                    <tr> 
                        <td colspan="6" class="text-center">No Requests found</td> <!-- Adjusted colspan to 6 -->
                    </tr> 
                @endforelse 
            </tbody> 
        </table> 
    </div> 
<br>
    <!-- Modal for Adding Picture -->
    <div class="modal fade" id="addPictureModal" tabindex="-1" aria-labelledby="addPictureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPictureModalLabel">Add New Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('gallery.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="ename" class="form-label">Event Name</label>
                            <input type="text" class="form-control" id="ename" name="ename" required>
                        </div>
                        <div class="mb-3">
                            <label for="society">Select Society</label>
                            <select name="society_id" id="society" class="form-control">
                                <?php
                                // Assuming you have a Society model and fetching societies based on the IDs
                                $societyIds = json_decode(auth()->user()->society_name); // Convert JSON string to array
                                $societies = \App\Models\PropertyUnapproved::whereIn('id', $societyIds)->get(); // Fetch societies by IDs
                                ?>
                                @foreach ($societies as $society)
                                    <option value="{{ $society->id }}">{{ $society->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Images</label>
                            <input type="file" class="form-control" id="picture" name="picture[]" multiple
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Modal for full-screen image view with navigation -->
    <div class="modal fade" id="imageCarouselModal" tabindex="-1" aria-labelledby="imageCarouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-color: transparent; border-style: none;">
                <div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($pictures as $index => $picture)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('uploads/' . $picture->file_path) }}" class="d-block w-100 img-fluid"
                                        alt="{{ $picture->title }}">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $picture->title }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('jscontent')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function () {
                    const id = this.getAttribute('data-id');
                    const token = this.getAttribute('data-token');
                    const row = document.getElementById('partner-' + id);

                    if (confirm('Are you sure you want to delete this image?')) {
                        fetch(`/gallery/delete/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': token,
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                row.remove();  // Remove the row from the table
                                alert('Image deleted successfully!');
                            } else {
                                alert('Failed to delete image.');
                            }
                        })
                        .catch(error => console.error('Error:', error));
                    }
                });
            });
        });
    </script>
@endsection

