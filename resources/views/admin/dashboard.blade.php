@extends('admin.index-main')

@section('csscontent')
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/society-logomob.png">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="assets1/css/plugins/swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="assets1/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets1/css/plugins/glightbox.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="assets1/css/dashboard.css">
    <link rel="stylesheet" href="assets1/css/creat-listing.css">
    <link rel="stylesheet" href="assets1/css/dark.css">

    <style>
        /* General styles for the boxes */
        .box {
            width: 200px;
            height: 100px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
            text-align: center;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
        }

        .box a {
            color: white;
            text-decoration: none;
            margin: 0;
        }

        /* Flexbox container for wrapping boxes */
        .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px; /* Space between the boxes */
            justify-content: flex-start; /* Align boxes to the start of the container */
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .box {
                width: 150px;
                height: 60px;
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .box {
                width: 100%;
                height: 40px;
                font-size: 14px;
            }
        }

        /* Footer styles */
        .footer {
            background-color: #f8f9fa;
            padding: 10px;
            font-size: 14px;
        }

        .dashboard__footer--inner {
            max-width: 100%;
        }

        .copyright__content {
            margin: 0;
            line-height: 1.4;
        }

        .copyright__content--link {
            color: #007bff;
            text-decoration: none;
        }

        .copyright__content--link:hover {
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .footer {
                padding: 8px;
            }

            .copyright__content {
                font-size: 12px;
            }
        }
    </style>
@endsection

@section('content')
@if(auth()->user()->role == 'user')
    <body style="
        background: #f0f2f5; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
        margin: 0; 
        font-family: Arial, sans-serif;">
        <div style="
            background: #ffffff; 
            border-radius: 12px; 
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); 
            padding: 30px; 
            max-width: 600px; 
            width: 100%; 
            text-align: center; 
            position: relative; 
            border: 1px solid #ddd;">
            <div style="
                background: #e74c3c; 
                height: 5px; 
                border-radius: 12px 12px 0 0; 
                width: 100%; 
                position: absolute; 
                top: 0; 
                left: 0;">
            </div>
            <h1 style="
                color: #e74c3c; 
                font-size: 2.5em; 
                margin-bottom: 20px;">
                Access Denied
            </h1>
            <p style="
                font-size: 1.2em; 
                color: #333; 
                margin-bottom: 30px;">
                Please wait for the admin to assign you the 
                <strong style="color: #e74c3c;">"society-admin"</strong> role.
            </p>
            <a href="/" style="
                display: inline-block; 
                padding: 12px 25px; 
                font-size: 1.1em; 
                color: #ffffff; 
                background-color: #3498db; 
                text-decoration: none; 
                border-radius: 6px; 
                transition: background-color 0.3s ease; 
                font-weight: bold;">
                Go to Home
            </a>
        </div>
    </body>
    @php exit; @endphp
@endif

<!-- End header area -->
<main class="main__content_wrapper">
    <div class="box-container" style="margin: 20px;">
        @if (auth()->user()->role == 'society-admin')
            <div class="box" style="background-color: #4CAF50;">
                <a href="{{ Route('create-listing')}}">Create Listing</a>
            </div>
            <div class="box" style="background-color: #2196F3;">
                <a href="{{ Route('property-list')}}">Property List</a>
            </div>
            <div class="box" style="background-color: #f08080;">
                <a href="{{ Route('facility-partner')}}">Facility Partner</a>
            </div>
            <div class="box" style="background-color: #f0e68c;">
                <a href="{{ Route('business-partner')}}">Business Partner</a>
            </div>
            <div class="box" style="background-color: #da70d6;">
                <a href="{{ Route('society-members')}}">Society Members</a>
            </div>
            <div class="box" style="background-color: #2196F3;">
                <a href="{{ Route('my-properties')}}">My Properties</a>
            </div>
        @endif

        @if (auth()->user()->role == 'super-admin')
            <div class="box" style="background-color: #ffa500;">
                <a href="{{ Route('registered-users')}}">Registered Users</a>
            </div>
            <div class="box" style="background-color: #00fa9a;">
                <a href="{{ Route('property-list')}}">Property List</a>
            </div>
        @endif
    </div>

    <div class="container" style="display: flex; justify-content: center; margin-top: 40px;">
        <div style="width: 400px; height: 100px; background-color: 
            @if (auth()->user()->role == 'society-admin') #6FE9BD 
            @elseif (auth()->user()->role == 'super-admin') #6FE9BD
            @endif; 
            border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); display: flex; justify-content: center; align-items: center;">
            <span style="color: white; font-size: 24px; font-weight: bold;">
                Hello 
                @if (auth()->user()->role == 'society-admin') Society-Admin
                @elseif (auth()->user()->role == 'super-admin') Super-Admin
                @endif
            </span>
        </div>
    </div>
</main>
@endsection

@section('jscontent')
@endsection
