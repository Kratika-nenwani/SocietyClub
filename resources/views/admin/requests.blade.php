@extends('admin.index-main')  
@section('csscontent')  
@endsection  
@section('content')  
<main class="main__content_wrapper"> 
    <!-- Dashboard container --> 
    <div style="padding: 20px;"> 
        <div style="margin-bottom: 30px;"> 
            <h2 style="font-size: 24px; font-weight: bold; color: #333;">Requests</h2> 
            <p style="font-size: 16px; color: #666;">We are glad to see you again!</p> 
            <!-- Button to trigger modal --> 
        </div> 
 
        <div> 
            <table style="width: 100%; border-collapse: collapse; background-color: white;"> 
                <thead> 
                    <tr> 
                        <th style="padding: 10px; background-color: #F5F7F8;">ID</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Name</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Email</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Phone No.</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Status</th> 
                        <th style="padding: 10px; background-color: #F5F7F8;">Actions</th> <!-- New Actions Column -->
                    </tr> 
                </thead> 
                <tbody id="facility-partner-table"> 
                    @forelse ($req as $r) 
                        <tr id="partner-{{ $r->id }}"> 
                            <td>{{ $r->id }}</td>      
                            <td>{{ $r->name }}</td> 
                            <td>{{ $r->email }}</td> 
                            <td>{{ $r->phone }}</td> 
                            <td>{{ $r->status }}</td> 
                            <td>
                                <button class="btn btn-success approve-btn" data-id="{{ $r->id }}">Approve</button>
                                <button class="btn btn-danger reject-btn" data-id="{{ $r->id }}">Reject</button>
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
    </div> 
</main> 
 
@endsection  
 
@section('jscontent')  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('.approve-btn').on('click', function() {
            const requestId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to approve this request!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, approve it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/update-status', // Update with your endpoint
                        method: 'POST',
                        data: {
                            id: requestId,
                            status: 'approved',
                            _token: '{{ csrf_token() }}' // CSRF token for Laravel
                        },
                        success: function(response) {
                            // Update UI based on response
                            if (response.success) {
                                Swal.fire(
                                    'Approved!',
                                    'The request has been approved.',
                                    'success'
                                );
                                // Update the status in the table
                                $('#partner-' + requestId + ' td:nth-child(5)').text('approved');
                            } else {
                                Swal.fire(
                                    'Error!',
                                    response.message,
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'There was an error updating the request.',
                                'error'
                            );
                        }
                    });
                }
            });
        });

        $('.reject-btn').on('click', function() {
            const requestId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to reject this request!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, reject it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/update-status', // Update with your endpoint
                        method: 'POST',
                        data: {
                            id: requestId,
                            status: 'rejected',
                            _token: '{{ csrf_token() }}' // CSRF token for Laravel
                        },
                        success: function(response) {
                            // Update UI based on response
                            if (response.success) {
                                Swal.fire(
                                    'Rejected!',
                                    'The request has been rejected.',
                                    'success'
                                );
                                // Update the status in the table
                                $('#partner-' + requestId + ' td:nth-child(5)').text('rejected');
                            } else {
                                Swal.fire(
                                    'Error!',
                                    response.message,
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'There was an error updating the request.',
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