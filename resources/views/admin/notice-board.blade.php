@extends('admin.index-main')
@section('csscontent')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <style>
        .cke_notifications_area {
            display: none;
        }

        .notice-board-header {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, #28a745 0%, #4caf50 100%);
            padding: 20px 40px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            z-index: 1;
        }

        .notice-board-header:before,
        .notice-board-header:after {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: -1;
        }

        .notice-board-header:before {
            top: -20px;
            left: -50px;
        }

        .notice-board-header:after {
            bottom: -20px;
            right: -50px;
        }

        .notice-board-header:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        @media (max-width: 768px) {
            .notice-board-header {
                font-size: 2rem;
            }
        }

        .add-notice-btn-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-add-notice {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(135deg, #28a745 0%, #4caf50 100%);
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease-in-out;
        }

        .btn-add-notice:hover {
            background: linear-gradient(135deg, #4caf50 0%, #28a745 100%);
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .btn-add-notice {
                font-size: 1rem;
                padding: 12px 25px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <h1 class="notice-board-header">Notice Board</h1>


        <!-- Add Notice Button -->
        <div class="add-notice-btn-container">
            <button type="button" class="btn btn-add-notice" id="add-notice-btn" data-bs-toggle="modal"
                data-bs-target="#addNoticeModal">
                Add Notice
            </button>
        </div>


        <!-- Notices Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Society Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notices as $notice)
                    <tr>
                        <?php
                        $society_name = DB::table('societies')
                            ->where('id', $notice->society_id)
                            ->value('title');
                        ?>
                        <td>{{ $society_name }}</td>
                        <td>{{ $notice->title }}</td>
                        <td>{!! $notice->description !!}</td>
                        <td>{{ $notice->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add Notice Modal -->
        <div class="modal fade" id="addNoticeModal" tabindex="-1" aria-labelledby="addNoticeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNoticeModalLabel">Add New Notice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="notice-form" method="POST" action="{{ route('save-notice') }}"
                            enctype="multipart/form-data">
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
                            <div class="form-group">
                                <label for="notice-title">Notice Title</label>
                                <input type="text" class="form-control" id="notice-title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="notice-description">Description</label>
                                <textarea id="notice-description" name="description" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="notice-title">Date</label>
                                <input type="date" class="form-control" id="notice-date" name="date" required>
                            </div>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save Notice</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('jscontent')
        <!-- CKEditor Script -->
        <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            $('#addNoticeModal').on('shown.bs.modal', function() {
                if (CKEDITOR.instances['notice-description']) {
                    CKEDITOR.instances['notice-description'].destroy(true); // Destroy previous instance if exists
                }
                CKEDITOR.replace('notice-description'); // Reinitialize CKEditor when modal opens
            });
        </script>
        <script>
            // Initialize CKEditor for the description field
            CKEDITOR.replace('notice-description', {
                toolbar: [{
                        name: 'basicstyles',
                        items: ['Bold', 'Italic', 'Underline']
                    },
                    {
                        name: 'paragraph',
                        items: ['NumberedList', 'BulletedList']
                    },
                    {
                        name: 'editing',
                        items: ['Scayt']
                    },
                    {
                        name: 'links',
                        items: ['Link', 'Unlink']
                    },
                    {
                        name: 'insert',
                        items: ['Image', 'Table']
                    },
                    {
                        name: 'styles',
                        items: ['Format', 'Font', 'FontSize']
                    },
                    {
                        name: 'colors',
                        items: ['TextColor', 'BGColor']
                    },
                    {
                        name: 'tools',
                        items: ['Maximize']
                    }
                ],
                height: 200
            });
        </script>
    @endsection
