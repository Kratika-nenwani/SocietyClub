<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Society Club</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/img/logo/society-logomob.png') }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ 'assets1/css/plugins/swiper-bundle.min.css' }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">


    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/plugins/glightbox.min.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/chat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/dark.css') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/society-logomob.png') }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/img/society-logomob.png') }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ asset('assets1/css/plugins/swiper-bundle.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">


    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/plugins/glightbox.min.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/creat-listing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/dark.css') }}">

</head>
<style>
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
@yield('csscontent')

<body>
    <!-- Preloader start -->
    <!-- Preloader end -->
    <div class="dashboard__page--wrapper">
        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo" style="width: 150px;">
                    <a class="offcanvas__logo_link" href="{{ route('dashboard') }}">
                        <img class="light__logo" src="{{ asset('assets1/img/logo/society-logo1.png') }}" alt="Logo-img"
                            width="158" height="36">
                        <img class="dark__logo" src="{{ 'assets1/img/logo/society-logo-white.png' }}" alt="Logo-img"
                            width="158" height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>

                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ Route('dashboard') }}">Home</a>
                        </li>
                        @if (auth()->user()->role == 'society-admin')
                            {{-- <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ Route('gallery') }}">Gallery</a>
                            </li> --}}
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ Route('create-listing') }}"> Create
                                    Listing</a>
                            </li>
                        @endif
                        @if (auth()->user()->role == 'super-admin')
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ Route('registered-users') }}"> Registered
                                    Users</a>
                            </li>
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ Route('property-list') }}"> Property List</a>
                            </li>
                            
                        @endif
                        <li class="offcanvas__menu_li">
                            @if (auth()->user()->role == 'society-admin')
                                <a class="offcanvas__menu_item" href="{{ Route('facility-partner') }}"> Facility
                                    Partner</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ Route('business-partner') }}"> Business
                                Partner</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ Route('society-members') }}"> Society
                                Members</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ Route('my-properties') }}"> My Properties</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ Route('notice-board') }}"> Notice Board</a>
                        </li>
                        @endif
                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Offcanvas header menu -->

        <!-- Start serch box area -->
        <div class="predictive__search--box">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button" aria-label="search button"><svg
                            class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                            width="30.51" height="25.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg> </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas>
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                    height="30.443" viewBox="0 0 512 512">
                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                </svg>
            </button>
        </div>
        <!-- End serch box area -->

        <!-- Dashboard sidebar -->
        <div class="dashboard__sidebar">
            <div class="main__logo logo-desktop-none">
                <h1 class="main__logo--title"><a href="{{ Route('dashboard') }}">

                        <img class="main__logo--img desktop light__logo"
                            src="{{ 'assets1/img/logo/society-logo1.png' }}" alt="logo-img"
                            style="
    width: 150px;
">
                        <img class="main__logo--img desktop dark__logo"
                            src="{{ 'assets1/img/logo/society-logomob.png' }}" alt="logo-img">
                        <img class="main__logo--img mobile" src="{{ 'assets1/img/logo/society-logomob.png' }}"
                            alt="logo-img" style="
    width: 50px;
">
                    </a></h1>
            </div>
            <div class="dashboard__sidebar--inner">
                <ul class="sidebar__menu" id="accordionExample">
                    <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                            href="{{ Route('dashboard') }}"><svg class="sidebar__menu--icon" width="16"
                                height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.300049 1.40005C0.300049 1.10831 0.415941 0.828521 0.622231 0.622231C0.828521 0.415941 1.10831 0.300049 1.40005 0.300049H14.6C14.8918 0.300049 15.1716 0.415941 15.3779 0.622231C15.5842 0.828521 15.7 1.10831 15.7 1.40005V3.60005C15.7 3.89179 15.5842 4.17158 15.3779 4.37787C15.1716 4.58416 14.8918 4.70005 14.6 4.70005H1.40005C1.10831 4.70005 0.828521 4.58416 0.622231 4.37787C0.415941 4.17158 0.300049 3.89179 0.300049 3.60005V1.40005ZM0.300049 8.00005C0.300049 7.70831 0.415941 7.42852 0.622231 7.22223C0.828521 7.01594 1.10831 6.90005 1.40005 6.90005H8.00005C8.29179 6.90005 8.57158 7.01594 8.77787 7.22223C8.98416 7.42852 9.10005 7.70831 9.10005 8.00005V14.6C9.10005 14.8918 8.98416 15.1716 8.77787 15.3779C8.57158 15.5842 8.29179 15.7 8.00005 15.7H1.40005C1.10831 15.7 0.828521 15.5842 0.622231 15.3779C0.415941 15.1716 0.300049 14.8918 0.300049 14.6V8.00005ZM12.4 6.90005C12.1083 6.90005 11.8285 7.01594 11.6222 7.22223C11.4159 7.42852 11.3 7.70831 11.3 8.00005V14.6C11.3 14.8918 11.4159 15.1716 11.6222 15.3779C11.8285 15.5842 12.1083 15.7 12.4 15.7H14.6C14.8918 15.7 15.1716 15.5842 15.3779 15.3779C15.5842 15.1716 15.7 14.8918 15.7 14.6V8.00005C15.7 7.70831 15.5842 7.42852 15.3779 7.22223C15.1716 7.01594 14.8918 6.90005 14.6 6.90005H12.4Z"
                                    fill="currentColor" />
                            </svg>
                            <span class="sidebar__menu--text"> Dashboard</span>
                        </a>
                    </li>
                    @if (auth()->user()->role == 'society-admin')
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('create-listing') }}"><svg class="sidebar__menu--icon" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.66663 10H13.3333" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 13.3334V6.66675" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span class="sidebar__menu--text"> Create Listing</span>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'super-admin')
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('registered-users') }}"><svg class="sidebar__menu--icon"
                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99996 18.3334C14.5833 18.3334 18.3333 14.5834 18.3333 10.0001C18.3333 5.41675 14.5833 1.66675 9.99996 1.66675C5.41663 1.66675 1.66663 5.41675 1.66663 10.0001C1.66663 14.5834 5.41663 18.3334 9.99996 18.3334Z"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.66663 10H13.3333" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 13.3334V6.66675" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span class="sidebar__menu--text"> Registered Users</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('property-list') }}"><svg class="sidebar__menu--icon" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.1666 7.50008C14.1666 10.7251 11.3666 13.3334 7.91663 13.3334L7.14163 14.2667L6.6833 14.8168C6.29163 15.2834 5.54162 15.1834 5.28329 14.6251L4.16663 12.1667C2.64996 11.1001 1.66663 9.40842 1.66663 7.50008C1.66663 4.27508 4.46663 1.66675 7.91663 1.66675C10.4333 1.66675 12.6083 3.05842 13.5833 5.05842C13.9583 5.80009 14.1666 6.62508 14.1666 7.50008Z"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M18.3334 10.7167C18.3334 12.625 17.3501 14.3167 15.8334 15.3834L14.7167 17.8417C14.4584 18.4 13.7084 18.5084 13.3167 18.0334L12.0834 16.55C10.0667 16.55 8.26672 15.6583 7.14172 14.2667L7.91672 13.3333C11.3667 13.3333 14.1667 10.725 14.1667 7.50001C14.1667 6.62501 13.9584 5.80002 13.5834 5.05835C16.3084 5.68335 18.3334 7.98333 18.3334 10.7167Z"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.83337 7.5H10" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                                <span class="sidebar__menu--text">Property List</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                            href="{{ Route('view-request') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20"
                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 160 0 8.2 0c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7l0-32.7c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM320 352l-96 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l296.2 0C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16l0 48 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16z" />
                        </svg>

                            <span class="sidebar__menu--text">Requests</span>
                        </a>
                    </li>
                    @endif
                    @if (auth()->user()->role == 'society-admin')
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('facility-partner') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20"
                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M272.2 64.6l-51.1 51.1c-15.3 4.2-29.5 11.9-41.5 22.5L153 161.9C142.8 171 129.5 176 115.8 176L96 176l0 128c20.4 .6 39.8 8.9 54.3 23.4l35.6 35.6 7 7c0 0 0 0 0 0L219.9 397c6.2 6.2 16.4 6.2 22.6 0c1.7-1.7 3-3.7 3.7-5.8c2.8-7.7 9.3-13.5 17.3-15.3s16.4 .6 22.2 6.5L296.5 393c11.6 11.6 30.4 11.6 41.9 0c5.4-5.4 8.3-12.3 8.6-19.4c.4-8.8 5.6-16.6 13.6-20.4s17.3-3 24.4 2.1c9.4 6.7 22.5 5.8 30.9-2.6c9.4-9.4 9.4-24.6 0-33.9L340.1 243l-35.8 33c-27.3 25.2-69.2 25.6-97 .9c-31.7-28.2-32.4-77.4-1.6-106.5l70.1-66.2C303.2 78.4 339.4 64 377.1 64c36.1 0 71 13.3 97.9 37.2L505.1 128l38.9 0 40 0 40 0c8.8 0 16 7.2 16 16l0 208c0 17.7-14.3 32-32 32l-32 0c-11.8 0-22.2-6.4-27.7-16l-84.9 0c-3.4 6.7-7.9 13.1-13.5 18.7c-17.1 17.1-40.8 23.8-63 20.1c-3.6 7.3-8.5 14.1-14.6 20.2c-27.3 27.3-70 30-100.4 8.1c-25.1 20.8-62.5 19.5-86-4.1L159 404l-7-7-35.6-35.6c-5.5-5.5-12.7-8.7-20.4-9.3C96 369.7 81.6 384 64 384l-32 0c-17.7 0-32-14.3-32-32L0 144c0-8.8 7.2-16 16-16l40 0 40 0 19.8 0c2 0 3.9-.7 5.3-2l26.5-23.6C175.5 77.7 211.4 64 248.7 64L259 64c4.4 0 8.9 .2 13.2 .6zM544 320l0-144-48 0c-5.9 0-11.6-2.2-15.9-6.1l-36.9-32.8c-18.2-16.2-41.7-25.1-66.1-25.1c-25.4 0-49.8 9.7-68.3 27.1l-70.1 66.2c-10.3 9.8-10.1 26.3 .5 35.7c9.3 8.3 23.4 8.1 32.5-.3l71.9-66.4c9.7-9 24.9-8.4 33.9 1.4s8.4 24.9-1.4 33.9l-.8 .8 74.4 74.4c10 10 16.5 22.3 19.4 35.1l74.8 0zM64 336a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm528 16a16 16 0 1 0 0-32 16 16 0 1 0 0 32z" />
                                </svg>
                                <span class="sidebar__menu--text"> Facility Partner</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('business-partner') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20"
                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 160 0 8.2 0c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7l0-32.7c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM320 352l-96 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l296.2 0C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16l0 48 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16z" />
                                </svg>
                                <span class="sidebar__menu--text">Business Partner</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('society-members') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M240.1 4.2c9.8-5.6 21.9-5.6 31.8 0l171.8 98.1L448 104l0 .9 47.9 27.4c12.6 7.2 18.8 22 15.1 36s-16.4 23.8-30.9 23.8L32 192c-14.5 0-27.2-9.8-30.9-23.8s2.5-28.8 15.1-36L64 104.9l0-.9 4.4-1.6L240.1 4.2zM64 224l64 0 0 192 40 0 0-192 64 0 0 192 48 0 0-192 64 0 0 192 40 0 0-192 64 0 0 196.3c.6 .3 1.2 .7 1.8 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512L32 512c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1L64 224z" />
                                </svg>
                                <span class="sidebar__menu--text">Society Members</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('my-properties') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20"
                                    viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M64 48c-8.8 0-16 7.2-16 16l0 384c0 8.8 7.2 16 16 16l80 0 0-64c0-26.5 21.5-48 48-48s48 21.5 48 48l0 64 80 0c8.8 0 16-7.2 16-16l0-384c0-8.8-7.2-16-16-16L64 48zM0 64C0 28.7 28.7 0 64 0L320 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm88 40c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zM232 88l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zm144-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16z" />
                                </svg>
                                <span class="sidebar__menu--text">My Properties</span>
                            </a>
                        </li>
                         {{-- <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('gallery') }}"> 
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 0L576 0c35.3 0 64 28.7 64 64l0 224c0 35.3-28.7 64-64 64l-320 0c-35.3 0-64-28.7-64-64l0-224c0-35.3 28.7-64 64-64zM476 106.7C471.5 100 464 96 456 96s-15.5 4-20 10.7l-56 84L362.7 169c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6l80 0 48 0 144 0c8.9 0 17-4.9 21.2-12.7s3.7-17.3-1.2-24.6l-96-144zM336 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM64 128l96 0 0 256 0 32c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-32 160 0 0 64c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 192c0-35.3 28.7-64 64-64zm8 64c-8.8 0-16 7.2-16 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0zm0 104c-8.8 0-16 7.2-16 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0zm0 104c-8.8 0-16 7.2-16 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0zm336 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0c-8.8 0-16 7.2-16 16z"/></svg>
                                <span class="sidebar__menu--text"> Gallery</span> --}}
                            {{-- </a> --}}
                        {{-- </li> --}}
                    @endif
                </ul>
            </div>
        </div>
        <!-- Dashboard sidebar .\ -->

        <div class="page__body--wrapper" id="dashbody__page--body__wrapper">
            <!-- Start header area -->
            <header class="header__section">
                <div class="main__header d-flex justify-content-between align-items-center">
                    <div class="header__left d-flex align-items-center">
                        <a class="collaps__menu" href="javascript:void(0)"><svg width="26" height="20"
                                viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5 16.5999L7.0667 11.1666C6.42503 10.5249 6.42503 9.4749 7.0667 8.83324L12.5 3.3999"
                                    stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.5 16.5999L13.0667 11.1666C12.425 10.5249 12.425 9.4749 13.0667 8.83324L18.5 3.3999"
                                    stroke="currentColor" stroke-width="1.3" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <div class="offcanvas__header--menu__open ">
                            <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32"
                                        d="M80 160h352M80 256h352M80 352h352" />
                                </svg>
                                <span class="visually-hidden">Offcanvas Menu Open</span>
                            </a>
                        </div>
                        <div class="search__box">
                            <form class="search__box--form laptop__hidden" action="#">
                                <input class="search__box--input__field" placeholder="Search for ...."
                                    type="text">
                                <span class="search__box--icon"><svg width="10" height="10"
                                        viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.79171 8.74992C6.97783 8.74992 8.75004 6.97771 8.75004 4.79159C8.75004 2.60546 6.97783 0.833252 4.79171 0.833252C2.60558 0.833252 0.833374 2.60546 0.833374 4.79159C0.833374 6.97771 2.60558 8.74992 4.79171 8.74992Z"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.16671 9.16659L8.33337 8.33325" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </form>
                            <button class="search__btn--field hidden__btn" type="submit"><svg width="14"
                                    height="14" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_46_1375)">
                                        <path
                                            d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M19.762 18.6124L15.1007 13.9511C14.7831 13.6335 14.2687 13.6335 13.9511 13.9511C13.6335 14.2684 13.6335 14.7834 13.9511 15.1007L18.6124 19.762C18.7711 19.9208 18.979 20.0002 19.1872 20.0002C19.395 20.0002 19.6031 19.9208 19.762 19.762C20.0796 19.4446 20.0796 18.9297 19.762 18.6124Z"
                                            fill="currentColor"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_46_1375">
                                            <rect width="20" height="20" fill="currentColor"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                        <div class="main__logo logo-desktop-block">
                            <a class="main__logo--link" href="{{ Route('dashboard') }}">
                                <img class="main__logo--img desktop light__logo"
                                    src="{{ asset('assets1/img/logo/society-logomob.png') }}" alt="logo-img"
                                    style="
    width: 30PX;
">
                                <img class="main__logo--img desktop dark__logo"
                                    src="{{ asset('assets1/img/logo/society-logomob.png') }}" alt="logo-img"
                                    style="width:40%";>
                                <img class="main__logo--img mobile"
                                    src="{{ asset('assets1/img/logo/society-logomob.png') }}" alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header__right d-flex align-items-center mt-2">
                        <div class="main__menu d-none d-xl-block">
                            {{-- <nav class="main__menu--navigation">
                                <ul class="main__menu--wrapper d-flex">
                                    <li class="main__menu--items">
                                        <a class="main__menu--link" href="../index-2.html"><svg width="11"
                                                height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.5 0L0 4.125V11H3.72581V8.59381C3.72581 7.64165 4.51713 6.87506 5.5 6.87506C6.48287 6.87506 7.27419 7.64165 7.27419 8.59381V11H11V4.125L5.5 0Z"
                                                    fill="#16A34A" />
                                            </svg>
                                            Home
                                    </li>
                                    @if (auth()->user()->role == 'society-admin')
                                        <li class="main__menu--items">
                                            <a class="main__menu--link" href="{{ Route('create-listing') }}"> Create
                                                Listing
                                            </a>
                                        </li>
                                        <li class="main__menu--items">
                                            <a class="main__menu--link" href="{{ Route('facility-partner') }}">
                                                Facility Partner
                                            </a>
                                        </li>
                                        <li class="main__menu--items">
                                            <a class="main__menu--link" href="{{ Route('business-partner') }}">
                                                Business Partner
                                            </a>
                                        </li>
                                        <li class="main__menu--items">
                                            <a class="main__menu--link" href="{{ Route('society-members') }}">
                                                Society Members
                                            </a>
                                        </li>
                                        <li class="main__menu--items">
                                            <a class="main__menu--link" href="{{ Route('my-properties') }}"> My
                                                Properties
                                            </a>
                                        </li>
                                    @endif
                                    @if (auth()->user()->role == 'super-admin')
                                        <li class="main__menu--items">
                                            <a class="main__menu--link" href="{{ Route('property-list') }}"> Property
                                                List
                                            </a>
                                        </li>
                                        <li class="main__menu--items">
                                            <a class="main__menu--link" href="{{ Route('registered-users') }}">
                                                Registered Users
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </nav> --}}
                        </div>
                        <div class="header__nav-bar__wrapper d-flex align-items-center">
                            <ul class="nav-bar__menu d-flex">
                                <li class="nav-bar__menu--items laptop_d-block">
                                    <a class="nav-bar__menu--icon search__open--btn" href="javascript:void(0)"
                                        data-offcanvas><svg width="14" height="14" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_46_1375)">
                                                <path
                                                    d="M8.80758 0C3.95121 0 0 3.95121 0 8.80758C0 13.6642 3.95121 17.6152 8.80758 17.6152C13.6642 17.6152 17.6152 13.6642 17.6152 8.80758C17.6152 3.95121 13.6642 0 8.80758 0ZM8.80758 15.9892C4.84769 15.9892 1.62602 12.7675 1.62602 8.80762C1.62602 4.84773 4.84769 1.62602 8.80758 1.62602C12.7675 1.62602 15.9891 4.84769 15.9891 8.80758C15.9891 12.7675 12.7675 15.9892 8.80758 15.9892Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M19.762 18.6124L15.1007 13.9511C14.7831 13.6335 14.2687 13.6335 13.9511 13.9511C13.6335 14.2684 13.6335 14.7834 13.9511 15.1007L18.6124 19.762C18.7711 19.9208 18.979 20.0002 19.1872 20.0002C19.395 20.0002 19.6031 19.9208 19.762 19.762C20.0796 19.4446 20.0796 18.9297 19.762 18.6124Z"
                                                    fill="currentColor"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_46_1375">
                                                    <rect width="20" height="20" fill="currentColor"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span class="visually-hidden">Search</span>
                                    </a>
                                </li>
                                <li class="nav-bar__menu--items">
                                    <a class="nav-bar__menu--icon" href="#" id="light__to--dark">
                                        <svg class="light--mode__icon" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99992 15.4166C12.9915 15.4166 15.4166 12.9915 15.4166 9.99992C15.4166 7.00838 12.9915 4.58325 9.99992 4.58325C7.00838 4.58325 4.58325 7.00838 4.58325 9.99992C4.58325 12.9915 7.00838 15.4166 9.99992 15.4166Z"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M15.9501 15.9501L15.8417 15.8417M15.8417 4.15841L15.9501 4.05008L15.8417 4.15841ZM4.05008 15.9501L4.15841 15.8417L4.05008 15.9501ZM10.0001 1.73341V1.66675V1.73341ZM10.0001 18.3334V18.2667V18.3334ZM1.73341 10.0001H1.66675H1.73341ZM18.3334 10.0001H18.2667H18.3334ZM4.15841 4.15841L4.05008 4.05008L4.15841 4.15841Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <svg class="dark--mode__icon" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" width="20" height="20" viewBox="0 0 512 512">
                                            <title>Moon</title>
                                            <path
                                                d="M264 480A232 232 0 0132 248c0-94 54-178.28 137.61-214.67a16 16 0 0121.06 21.06C181.07 76.43 176 104.66 176 136c0 110.28 89.72 200 200 200 31.34 0 59.57-5.07 81.61-14.67a16 16 0 0121.06 21.06C442.28 426 358 480 264 480z">
                                            </path>
                                        </svg>
                                        <span class="visually-hidden">Dark Light</span>
                                    </a>
                                </li>
                                <li class="nav-bar__menu--items">
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                                        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                                    </script>
                                    <div class="header__user--profile">
                                        <a href="javascript:void(0)"
                                            class="header_user--profile_link d-flex align-items-center"
                                            id="profileToggle">
                                            <span class="header_user--profile_name"><b>{{ Auth::user()->name }}
                                                </b></span>
                                            <span class="header_user--profile_arrow">

                                                <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.9994 4.97656L10.1244 0.851563L11.3027 2.0299L5.9994 7.33323L0.696067 2.0299L1.8744 0.851563L5.9994 4.97656Z"
                                                        fill="currentColor" fill-opacity="0.5" />
                                                </svg>
                                            </span>
                                            <div class="dropdown__user--profile" id="dropdownMenu"
                                                style="display: none;">
                                                <ul class="user__profile--menu">
                                                    <!-- Menu items -->
                                                    <li class="user_profile--menu_items"><a
                                                            class="user_profile--menu_link"
                                                            href="{{ Route('profile') }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                data-lucide="user-2"
                                                                class="lucide lucide-user-2 inline-block size-4 ltr:mr-2 rtl:ml-2">
                                                                <circle cx="12" cy="8" r="5"></circle>
                                                                <path d="M20 21a8 8 0 0 0-16 0"></path>
                                                            </svg> My Profile</a></li>
                                                    <br>
                                                    <li class="user_profile--menu_items"><a
                                                            class="user_profile--menu_link position-relative"
                                                            href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="18" height="18" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                data-lucide="mail"
                                                                class="lucide lucide-mail inline-block size-4 ltr:mr-2 rtl:ml-2">
                                                                <rect width="20" height="16" x="2" y="4"
                                                                    rx="2"></rect>
                                                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7">
                                                                </path>
                                                            </svg> Inbox <span
                                                                class="profile__messages--count">12</span> </a>
                                                    </li>
                                                    {{-- <li class="user_profile--menu_items"><a
                                                            class="user_profile--menu_link"
                                                            href="{{ route('account-settings') }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-settings">
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                <path
                                                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                                </path>
                                                            </svg> Account Settings </a></li> --}}
                                                    @if(auth()->user()->role!="super-admin")
                                                    <li class="user_profile--menu_items"><a class="user_profile--menu_link"
                                                            href="{{ Route('notice-board') }}"> <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="18"
                                                                height="18" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-file-text">
                                                                <path
                                                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                                </path>
                                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                                <line x1="16" y1="13" x2="8"
                                                                    y2="13"></line>
                                                                <line x1="16" y1="17" x2="8"
                                                                    y2="17"></line>
                                                                <polyline points="10 9 9 9 8 9"></polyline>
                                                            </svg>
                                                            <span class="sidebar__menu--text">Notice Board</span>
                                                        </a>
                                                    </li>
                                                    @endif
                                                </ul>
                                                <hr>
                                                <ul class="user__profile--menu">
                                                    <div class="dropdown_user--profile_footer">
                                                        <a class="user_profile--log-out_btn"
                                                            href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                data-lucide="log-out"
                                                                class="lucide lucide-log-out inline-block size-4 ltr:mr-2 rtl:ml-2">
                                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                                                </path>
                                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                                <line x1="21" x2="9" y1="12"
                                                                    y2="12"></line>
                                                            </svg> Log Out</a>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- jQuery Script -->
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $("#profileToggle").click(function() {
                                                $("#dropdownMenu").toggle(); // Toggles dropdown visibility
                                            });

                                            // Close dropdown if clicked outside
                                            $(document).click(function(event) {
                                                if (!$(event.target).closest("#profileToggle").length) {
                                                    $("#dropdownMenu").hide();
                                                }
                                            });
                                        });
                                    </script>

                        </div>
                    </div>
                </div>
            </header>
            @yield('content')
            <footer class=" footer__section mt-1 fixed-bottom">
                <div class="dashboard__footer--inner text-center">
                    <p class="copyright__content mb-0">Copyright © 2024 Made with ❤️ by
                        with  by <a class="copyright__content--link" target="_blank"
                            href="https://www.intouchsoftware.co.in/">InTouch Software Solutions.</a> All
                        Rights Reserved.</p>
                </div>
            </footer>
            </main>

            <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48"
                        d="M112 244l144-144 144 144M256 120v292" />
                </svg></button>

            <!-- All Script JS Plugins here  -->
            <script src="{{ asset('assets1/js/vendor/popper.js') }}" defer="defer"></script>
            <script src="{{ asset('assets1/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
            <script src="{{ asset('assets1/js/plugins/swiper-bundle.min.js') }}"></script>
            <script src="{{ asset('assets1/js/plugins/glightbox.min.js') }}"></script>


            <!-- Customscript js -->
            <script src="{{ asset('assets1/js/script.js') }}"></script>

            <!-- Dark to light js -->
            <script>
                // On page load or when changing themes, best to add inline in `head` to avoid FOUC
                if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                        "(prefers-color-scheme: dark)").matches)) {
                    document.getElementById("light__to--dark")?.classList.add("dark--version");
                }
                if (localStorage.getItem("theme-color") === "light") {
                    document.getElementById("light__to--dark")?.classList.remove("dark--version");
                }
            </script>
            <script>
                // On page load or when changing themes, best to add inline in `head` to avoid FOUC
                if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                        "(prefers-color-scheme: dark)").matches)) {
                    document.documentElement.classList.add("dark");
                }
                if (localStorage.getItem("theme-color") === "light") {
                    document.documentElement.classList.remove("dark");
                }
            </script>

            <!-- All Script JS Plugins here  -->
            <script src="{{ 'assets1/js/vendor/popper.js' }}" defer="defer"></script>
            <script src="{{ 'assets1/js/vendor/bootstrap.min.js' }}" defer="defer"></script>
            <script src="{{ 'assets1/js/plugins/swiper-bundle.min.js' }}"></script>
            <script src="{{ 'assets1/js/plugins/glightbox.min.js' }}"></script>
            <!-- Bootstrap CSS -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>



            <!-- Customscript js -->
            <script src="{{ 'assets1/js/script.js' }}"></script>

            <!-- Dark to light js -->
            <script>
                // On page load or when changing themes, best to add inline in `head` to avoid FOUC
                if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                        "(prefers-color-scheme: dark)").matches)) {
                    document.getElementById("light__to--dark")?.classList.add("dark--version");
                }
                if (localStorage.getItem("theme-color") === "light") {
                    document.getElementById("light__to--dark")?.classList.remove("dark--version");
                }
            </script>
            <script>
                // On page load or when changing themes, best to add inline in `head` to avoid FOUC
                if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                        "(prefers-color-scheme: dark)").matches)) {
                    document.documentElement.classList.add("dark");
                }
                if (localStorage.getItem("theme-color") === "light") {
                    document.documentElement.classList.remove("dark");
                }
            </script>

            @yield('jscontent')
</body>

</html>
