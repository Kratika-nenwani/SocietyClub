@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Reported Issues</h1>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Reported By</th>
                <th>Reported On</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($issues as $issue)
                <tr>
                    <td>{{ $issue->id }}</td>
                    <td>{{ $issue->title }}</td>
                    <td>{{ $issue->description }}</td>
                    <td>{{ $issue->user->name }}</td>
                    <td>{{ $issue->created_at->format('d M Y, H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
