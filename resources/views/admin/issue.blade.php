@extends('admin.index-main')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@section('content')
    <style>
        .btn-light-green {
            background-color: #90EE90;
            /* Light green */
            color: white;
            border: none;
            cursor: not-allowed;
        }
    </style>

    <main class="main__content_wrapper">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

        <div class="container">
             <div style="margin-bottom: 30px;">
                <h2 style="font-size: 24px; font-weight: bold; color: #333;">Issue List</h2>
                <p style="font-size: 16px; color: #666;">We are glad to see you again!</p>
                </div>

            @if ($issues->isEmpty())
                <p>No issues found for your society.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Society Name</th>
                            <th>Issue Description</th>
                            <th>Status</th>
                            <th>Submitted By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($issues as $issue)
                            <tr>
                                <?php
                                $society_name = DB::table('societies')
                                    ->where('id', $issue->society_id)
                                    ->value('title');
                                ?>
                                <td>{{ $issue->id }}</td>
                                <td>{{ $society_name }}</td>
                                {{-- <td>{{ $issue->id }}</td> --}}
                                <td>{{ $issue->description }}</td>
                                <td>{{ ucfirst($issue->status) }}</td>
                                <td>{{ $issue->user->name }}</td>
                                <td>
                                    @if ($issue->status === 'resolved')
                                        <button class="btn btn-light-green" disabled>Issue Resolved</button>
                                    @else
                                        <form action="{{ route('resolveIssue', $issue->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Mark as Resolved</button>
                                        </form>
                                    @endif
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#messageModal">
                                        Send a Message
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <!-- Modal -->
        <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel">Send a Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('sendMessage', $issue->id) }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <script>
        < script >
            document.getElementById('sendMessageBtn').addEventListener('click', function() {
                document.getElementById('sendMessageForm').style.display = 'block';
            });
    </script>
    </script>
@endsection
