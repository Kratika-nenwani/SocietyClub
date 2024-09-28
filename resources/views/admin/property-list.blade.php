@extends('admin.index-main') 
@section('csscontent') 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> 
@endsection 
@section('content') 
 
 
<main class="main__content_wrapper"> 
    <!-- dashboard container --> 
    <div style="padding: 20px;"> 
        <div style="margin-bottom: 30px;"> 
            <h2 style="font-size: 24px; font-weight: bold; color: #333;">Property List</h2> 
            <p style="font-size: 16px; color: #666;">We are glad to see you again!</p> 
        </div> 
        <div style="overflow-x: auto;"> 
            <table style="width: 100%; border-collapse: collapse;background-color: white;"> 
                <thead> 
                    <tr> 
                        <th style="padding: 10px; background-color: #F5F7F8;">ID</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Title</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Description</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">City</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Address</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">ZIP</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Country</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Map Link</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Property Details</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Amenities</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Images</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Action</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach ($properties as $property) 
                    <tr> 
                        <td style="padding: 10px;">{{ $property->id }}</td> 
                        <td style="padding: 10px;">{{ $property->title }}</td> 
                        <td style="padding: 10px;">{{ strip_tags($property->description) }}</td> 
                        <td style="padding: 10px;">{{ $property->city }}</td> 
                        <td style="padding: 10px;">{{ strip_tags($property->address) }}</td> 
                        <td style="padding: 10px;">{{ $property->zip }}</td> 
                        <td style="padding: 10px;">{{ $property->country }}</td> 
                        <td style="padding: 10px;"><a href="{{ $property->map_link }}" target="_blank">View Map</a></td> 
                        
                        <!-- Displaying Property Details -->
                        <td style="padding: 10px;"> 
                            @php 
                                $propertyDetails = json_decode($property->property_details, true); 
                            @endphp 
                            <ul style="padding-left: 20px; margin: 0;"> 
                                @foreach ($propertyDetails as $detail) 
                                    <li style="list-style-type: disc;">{{ $detail }}</li> 
                                @endforeach 
                            </ul> 
                        </td> 
                        
                        <!-- Displaying Amenities -->
                        <td style="padding: 10px;"> 
                            @php 
                                $amenities = json_decode($property->amenities, true); 
                            @endphp 
                            <ul style="padding-left: 20px; margin: 0;"> 
                                @foreach ($amenities as $amenity) 
                                    <li style="list-style-type: disc;">{{ $amenity }}</li> 
                                @endforeach 
                            </ul> 
                        </td> 

                        <!-- Displaying Images -->
                        <td style="padding: 10px;"> 
                            @php 
                                $images = json_decode($property->images, true); 
                            @endphp 
                            @foreach ($images as $image) 
                                <img src="{{ asset('PropertyImages/' . $image) }}" alt="Image" style="max-width: 150px; display: block; margin-bottom: 10px;"> 
                            @endforeach 
                        </td> 

                        <!-- Action -->
                        <td style="padding: 10px; text-align: center;"> 
                            <form action="{{ route('delete-property', $property->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this property?');"> 
                                @csrf 
                                @method('DELETE') 
                                <button type="submit" style="background: none; border: none; cursor: pointer;"> 
                                    <i class="fas fa-trash" style="color: red; font-size: 20px;"></i> 
                                </button> 
                            </form> 
                        </td> 
                    </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        </div> 
    </div> 
</main> 
@endsection 

@section('jscontent') 
<script> 
    $(document).ready(function() { 
        $('.role-select').change(function() { 
            var userId = $(this).data('user-id'); 
            var newRole = $(this).val(); 

            Swal.fire({ 
                title: 'Are you sure?', 
                text: "You are about to change the user's role.", 
                icon: 'warning', 
                showCancelButton: true, 
                confirmButtonColor: '#3085d6', 
                cancelButtonColor: '#d33', 
                confirmButtonText: 'Yes, change it!' 
            }).then((result) => { 
                if (result.isConfirmed) { 
                    $.ajax({ 
                        url: '/update-role', // URL to the route that handles the role update 
                        type: 'POST', 
                        data: { 
                            _token: '{{ csrf_token() }}', 
                            user_id: userId, 
                            role: newRole 
                        }, 
                        success: function(response) { 
                            Swal.fire( 
                                'Updated!', 
                                'The user\'s role has been updated.', 
                                'success' 
                            ); 
                        }, 
                        error: function(xhr, status, error) { 
                            Swal.fire( 
                                'Error!', 
                                'There was an error updating the role.', 
                                'error' 
                            ); 
                        } 
                    }); 
                } 
            }); 
        }); 
    }); 
</script> 
@endsection
