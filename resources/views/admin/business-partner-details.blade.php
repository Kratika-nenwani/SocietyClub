@extends('admin.index-main')
<!-- Unique CSS Links -->
<link rel="stylesheet" href="{{ asset('assets1/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/plugins/glightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/creat-listing.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/chat.css') }}">
<link rel="stylesheet" href="{{ asset('assets1/css/dark.css') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/img/favicon.ico') }}">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

@section('csscontent')
@endsection
@section('content')
    <main class="main__content_wrapper">
        <div style="padding: 20px;">
            <h2 style="font-size: 24px; font-weight: bold; color: #333;">Business Partner Details</h2>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone Number:</strong> {{ $user->phone_number }}</p>
            <p><strong>Business Name:</strong> {{ $user->facility }}</p>
            <p><strong>Description:</strong> {{ $user->description }}</p>
            {{-- <a href="{{ route('business-partner-details') }}" style="padding: 8px 12px; background-color: #2196F3; color: white; text-decoration: none; border-radius: 4px;">Back to List</a> --}}
        </div>
    </main>
@endsection
@section('jscontent')
@endsection
