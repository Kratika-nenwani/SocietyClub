@extends('admin.index-main')
@section('csscontent')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLNcnuUqJ5qaoC1T+a/MBI1SKyopjYdz/Mq5MTQidivrb/dFkP9jvvC6d1ncf0G" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQeA+Pm2bBbN2tzFJgyA+AWD5jGZpxtRJxk5QxDIq3RXl2OmyhZu9" crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('content')
    <main class="main__content_wrapper">
        <!-- Dashboard container -->
        <div style="padding: 20px;">
            <div style="margin-bottom: 30px;">
                <h2 style="font-size: 24px; font-weight: bold; color: #333;">Society Members</h2>
                <p style="font-size: 16px; color: #666;">We are glad to see you again!</p>
                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#addFacilityPartnerModal">
                    Add Society Member
                </button>
            </div>

            <div>
                <table style="width: 100%; border-collapse: collapse; background-color: white;">
                    <thead>
                        <tr>
                            <th style="padding: 10px; background-color: #F5F7F8;">ID</th>
                            <th style="padding: 10px; background-color: #F5F7F8;">Society Name</th>
                            <th style="padding: 10px; background-color: #F5F7F8;">Flat Number</th>
                            <th style="padding: 10px; background-color: #F5F7F8;">Name</th>
                            <th style="padding: 10px; background-color: #F5F7F8;">Email</th>
                            <th style="padding: 10px; background-color: #F5F7F8;">Phone No.</th>
                            <th style="padding: 10px; background-color: #F5F7F8;">Action</th>
                        </tr>
                    </thead>
                    <tbody id="facility-partner-table">
                        @forelse ($facilityPartners as $partner)
                            <tr id="partner-{{ $partner->id }}">
                                <td>{{ $partner->id }}</td>
                                <?php
                                // Assuming you have a Society model and fetching societies based on the IDs
                                $societyIds = json_decode($partner->society_name); // Convert JSON string to array
                                $societies = \App\Models\PropertyUnapproved::whereIn('id', $societyIds)->get(); // Fetch societies by IDs
                                $p = \App\Models\SocietyMember::where('user_id', $partner->id)->first();
                                ?>
                                @foreach ($societies as $society)
                                    <td>{{ $society->title }}</td>
                                @endforeach

                                <td>{{ $p->flat }}</td>
                                <td>{{ $partner->name }}</td>
                                <td>{{ $partner->email }}</td>
                                <td>{{ $partner->phone }}</td>
                                <td>
                                    {{-- <button class="btn btn-info btn-view" data-id="{{ $partner->id }}" data-bs-toggle="modal" data-bs-target="#viewFacilityPartnerModal">View Details</button> --}}
                                    <button class="btn btn-warning btn-edit" data-id="{{ $partner->id }}"
                                        data-bs-toggle="modal" data-bs-target="#editFacilityPartnerModal">Edit</button>
                                    <button class="btn btn-danger btn-delete" data-id="{{ $partner->id }}">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No facility partners found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- View Facility Partner Modal -->
    <div class="modal fade" id="viewFacilityPartnerModal" tabindex="-1" aria-labelledby="viewFacilityPartnerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="viewFacilityPartnerModalLabel">Society Member Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Name:</strong> <span id="view-name"></span></p>
                    <p><strong>Email:</strong> <span id="view-email"></span></p>
                    <p><strong>Phone Number:</strong> <span id="view-phone_number"></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for adding a new facility partner -->
    <div class="modal fade" id="addFacilityPartnerModal" tabindex="-1" aria-labelledby="addFacilityPartnerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="addFacilityPartnerModalLabel">Add Society Member</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addFacilityPartnerForm" method="POST" action="{{ route('save-society-member') }}">
                        @csrf
                        <div class="form-group">
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
                        <div class="mb-4">
                            <label for="add-name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="add-name" name="name" required>
                        </div>
                        <div class="mb-4">
                            <label for="add-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="add-email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="add-phone_number" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="add-phone_number" name="phone" required>
                        </div>
                        <div class="mb-4">
                            <label for="add-flat" class="form-label">Flat No</label>
                            <input type="text" class="form-control" id="add-flat" name="flat" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Society Member</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Facility Partner Modal -->
    <div class="modal fade" id="editFacilityPartnerModal" tabindex="-1" aria-labelledby="editFacilityPartnerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editFacilityPartnerModalLabel">Edit Society Member</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editFacilityPartnerForm">
                        <input type="hidden" id="edit-partner-id">
                        <div class="form-group">
                            <label for="edit-name">Name</label>
                            <input type="text" class="form-control" id="edit-name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-email">Email</label>
                            <input type="email" class="form-control" id="edit-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="edit-phone_number" name="phone" required>
                        </div>

                        <div class="form-group">
                            <label for="edit-flat">Flat No</label>
                            <input type="text" class="form-control" id="edit-flat" name="flat" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Partner</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('jscontent')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Set up CSRF token for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Handle form submission for adding new facility partner
            $('#addFacilityPartnerForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                $.ajax({
                    url: '{{ route('save-society-member') }}', // Ensure this route points correctly to your controller
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        console.log(response); // Log the response to verify the structure

                        // Show success message or default message if undefined
                        alert(response.success || 'Society Member added successfully!');

                        // Reload the same page to reflect new changes
                        location
                    .reload(); // This line ensures the same page is reloaded after success
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);

                        if (xhr.status === 422) { // Handle validation errors
                            const errors = xhr.responseJSON.errors;
                            let errorMessage = 'Validation errors:\n';

                            // Iterate over errors and display them
                            for (const key in errors) {
                                errorMessage += errors[key].join(', ') +
                                '\n'; // Use correct string concatenation
                            }

                            alert(errorMessage); // Show all validation errors to the user
                        } else {
                            alert('An error occurred while adding the Society Member.');
                        }
                    }
                });
            });
  // Handle Edit button click
        $('.btn-edit').on('click', function() {
            var id = $(this).data('id');

            // Fetch facility partner data
            $.ajax({
                url: '/facility-partner/' + id + '/edit',
                method: 'GET',
                success: function(data) {
                    console.log(data);

                    // Populate the modal fields with the response data
                    $('#edit-partner-id').val(data.id);
                    $('#edit-name').val(data.name);
                    $('#edit-email').val(data.email);
                    $('#edit-phone_number').val(data.phone);
                    $('#edit-flat').val(data.flat);

                    // Open the modal
                    $('#editFacilityPartnerModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('An error occurred while fetching the Society Member details.');
                }
            });
        });

        // Handle Edit form submission
        $('#editFacilityPartnerForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting traditionally

            var id = $('#edit-partner-id').val(); // Get the partner ID from the hidden input
            var formData = $(this).serialize(); // Serialize the form data

            console.log(formData); // Debug the data sent

            $.ajax({
                url: '/facility-partner/' + id,
                method: 'PUT', // Use the PUT method for update
                data: formData,
                success: function(response) {
                    alert(response.success || 'Society Member updated successfully!');
                    location.reload(); // Reload the page to reflect changes
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('An error occurred while updating the Society Member.');
                }
            });
        });

        // Delete button click
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            if (confirm('Are you sure you want to delete this Society Member?')) {
                $.ajax({
                    url: '/facility-partner/' + id,
                    method: 'DELETE',
                    success: function(response) {
                        alert(response.success || 'Society Member deleted successfully!');
                        $('#partner-' + id).remove(); // Remove the row from the table
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('An error occurred while deleting the Society Member.');
                    }
                });
            }
        });
    });
</script>
@endsection
