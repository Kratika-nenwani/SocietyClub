<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Society Portal</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets1/img/logo/society-logomob.png">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{asset ('assets/css/plugins/swiper-bundle.min.css')}}">

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="{{asset ('assets/css/vendor/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/plugins/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/plugins/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{asset ('assets/css/plugins/aos.css')}}">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/society-logomob.png">
  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">

</head>

<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->
    <!-- Start header area -->
    <header class="header__section ">
        <div class="header__sticky">
            {{-- <a class="humberger__menu" data-bs-toggle="offcanvas" href="#offcanvasExample">
                <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1.03846C0 0.46523 0.465715 0 1.03954 0H19.0583C19.6321 0 20.0978 0.46523 20.0978 1.03846C20.0978 1.61169 19.6321 2.07692 19.0583 2.07692H1.03954C0.465715 2.07692 0 1.61169 0 1.03846ZM25.9885 9.6923H1.03954C0.465715 9.6923 0 10.1575 0 10.7308C0 11.304 0.465715 11.7692 1.03954 11.7692H25.9885C26.5624 11.7692 27.0281 11.304 27.0281 10.7308C27.0281 10.1575 26.5624 9.6923 25.9885 9.6923ZM13.514 19.3846H1.03954C0.465715 19.3846 0 19.8498 0 20.4231C0 20.9963 0.465715 21.4615 1.03954 21.4615H13.514C14.0879 21.4615 14.5536 20.9963 14.5536 20.4231C14.5536 19.8498 14.0879 19.3846 13.514 19.3846Z" fill="currentColor"/>
                </svg>
            </a> --}}
            <div class="container-fluid padding-lr-120">
                <div class="main__header d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="index-2.html">
                            <img class="main__logo--img" src="{{asset('assets/img/logo/nav-log.png')}}" alt="logo-img">
                        </a></h1>
                    </div>
                    <div class="main__menu d-none d-lg-block">
                        <nav class="main__menu--navigation">
                            <ul class="main__menu--wrapper d-flex">
                                <li class="main__menu--items">
                                    <a class="main__menu--link" href="index-2.html"><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 0L0 4.125V11H3.72581V8.59381C3.72581 7.64165 4.51713 6.87506 5.5 6.87506C6.48287 6.87506 7.27419 7.64165 7.27419 8.59381V11H11V4.125L5.5 0Z" fill="#FA4A4A"/>
                                        </svg>
                                        Home 
                                        {{-- <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                            <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                        </svg>
                                    </a> --}}
                                </li>
                                  <li class="main__menu--items">
                                    <a class="main__menu--link" href="{{ Route('about')}}"> About Us</a>  
                                </li> 
                                <li class="main__menu--items">
                                    <a class="main__menu--link" href="{{ Route('listing')}}"> Listing </a>  
                                    {{-- <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                        <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg> --}}
                                    {{-- <ul class="sub__menu">
                                        <li class="sub__menu--items"><a href="listing.html" class="sub__menu--link">Listing Left Sidebar</a></li>
                                        <li class="sub__menu--items"><a href="listing-right-sidebar.html" class="sub__menu--link">Listing Right Sidebar</a></li>
                                        <li class="sub__menu--items"><a href="listing.html" class="sub__menu--link">Listing Grig</a></li>
                                        <li class="sub__menu--items"><a href="listing-list.html" class="sub__menu--link">Listing List</a></li>
                                        <li class="sub__menu--items"><a href="listing-details.html" class="sub__menu--link">Listing Details</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="main__menu--items">
                                    <a class="main__menu--link" href="admin/my-properties.html"> Properties </a>  
                                </li> --}}
                                {{-- <li class="main__menu--items">
                                    <a class="main__menu--link" href="admin/dashboard.html"> Dashboard </a>  
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                        <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                    <ul class="sub__menu">
                                        <li class="sub__menu--items"><a href="admin/dashboard.html" class="sub__menu--link">Dashboard</a></li>
                                        <li class="sub__menu--items"><a href="admin/create-listing.html" class="sub__menu--link">Creat Listing</a></li>
                                        <li class="sub__menu--items"><a href="admin/chat.html" class="sub__menu--link">Chats</a></li>
                                        <li class="sub__menu--items"><a href="admin/my-favorites.html" class="sub__menu--link">My Favorites</a></li>
                                        <li class="sub__menu--items"><a href="admin/my-properties.html" class="sub__menu--link">My Properties</a></li>
                                        <li class="sub__menu--items"><a href="admin/my-package.html" class="sub__menu--link">My Package</a></li>
                                        <li class="sub__menu--items"><a href="admin/profile.html" class="sub__menu--link">My Profile</a></li>
                                        <li class="sub__menu--items"><a href="admin/reviews.html" class="sub__menu--link">Reviews</a></li>
                                        <li class="sub__menu--items"><a href="admin/saved-search.html" class="sub__menu--link">Saved Search</a></li>
                                        <li class="sub__menu--items"><a href="admin/settings.html" class="sub__menu--link">Setting</a></li>
                                    </ul>
                                </li> --}}

                                <li class="main__menu--items">   
                                    <a class="main__menu--link" href="{{ Route('contact')}}"> Contact Us</a>  
                                </li> 
                                <li class="main__menu--items">
                                    <a class="main__menu--link" href="#"> Resources </a>  
                                    <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 12 7.41">
                                        <path  d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7"/>
                                    </svg>
                                    <ul class="sub__menu">
                                        {{-- <li class="sub__menu--items"><a href="about.html" class="sub__menu--link">About Us</a></li> --}}
                                        <li class="sub__menu--items"><a href="project.html" class="sub__menu--link">Project</a></li>
                                        <li class="sub__menu--items"><a href="project-details.html" class="sub__menu--link">Project Details</a></li>
                                         <li class="sub__menu--items"><a href="blogs.html" class="sub__menu--link">News</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="main__header--right d-flex align-items-center">
                        {{-- <a class="login__register--link" href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> <span>Login / Register</span></a>--}}
                        <a class="add__listing--btn solid__btn" href="admin/create-listing.html"><span>Add Listing</span> <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 15.9992C12.4111 15.9992 16 12.4105 16 7.99962C16 3.58875 12.411 0 8 0C3.58901 0 0 3.58875 0 7.99962C0 12.4105 3.58901 15.9992 8 15.9992ZM4.19508 7.57155H7.57197V4.19439C7.57197 3.95805 7.76381 3.76636 8 3.76636C8.23634 3.76636 8.42804 3.95821 8.42804 4.19439V7.57155H11.8049C12.0413 7.57155 12.233 7.7634 12.233 7.99958C12.233 8.23592 12.0411 8.42762 11.8049 8.42762H8.42804V11.8046C8.42804 12.041 8.23619 12.2327 8 12.2327C7.76366 12.2327 7.57197 12.0408 7.57197 11.8046V8.42762H4.19508C3.95874 8.42762 3.76704 8.23577 3.76704 7.99958C3.76704 7.76324 3.9586 7.57155 4.19508 7.57155Z" fill="white"/>
                            </svg>
                        </a>
                         @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color: black;" class="nav-link" href="{{ route('login') }}"><b>{{ __('Login') }}</b></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color: black;" class="nav-link" href="{{ route('register') }}"><b>{{ __('Register') }}</b></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;" v-pre>
                                    <b>{{ Auth::user()->name }}</b>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a style="font-size: 16px;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <!-- Side menu menu -->
    <div class="offcanvas side__menu offcanvas-start" tabindex="-1" id="offcanvasExample">
        <div class="side__menu--header d-flex align-items-center justify-content-between">
          <h2 class="side__menu--title">Welcome to Realtor</h2>
          <button type="button" class="side__menu--close__btn" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
        </div>
        <div class="side__menu--body">
            <div class="sidebar__gallery">
                <h3 class="sidebar__gallery--title">Properties Gallery</h3>
                <ul class="sidebar__gallery--wrapper d-flex">
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery1.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Properties</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery2.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Services</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery3.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">House</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery4.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Villa</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery5.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Apartments</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery2.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Office</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery3.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Bungalow</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery4.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Partners</span>
                    </li>
                    <li class="sidebar__gallery--items">
                        <a class="sidebar__gallery--link" href="listing.html"><img class="sidebar__gallery--img" src="{{asset('assets/img/gallery/gallery5.png')}}" alt="gallery"></a>
                        <span class="sidebar__gallery--subtitle">Support</span>
                    </li>
                </ul>
            </div>
            <div class="side__menu--footer">
                <div class="side__menu--info">
                    <div class="side__menu--info__list">
                        <h3 class="side__menu--info__title">Customer Care Phone</h3>
                        <p><a class="side__menu--info__text" href="tel:+1234567898">: (+123) 456-7898</a></p>
                    </div>
                    <div class="side__menu--info__list">
                        <h3 class="side__menu--info__title">Need Live Support?</h3>
                        <p><a class="side__menu--info__text" href="mailto:example@example.com">Example@example.com</a></p>
                    </div>
                </div>
                <div class="side__menu--share d-flex align-items-center">
                    <h3 class="side__menu--share__title">Follow us :</h3>
                    <ul class=" side__menu--share__wrapper d-flex align-items-center">
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://www.facebook.com/">
                                <svg width="10" height="17" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                </svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                        </li>
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://twitter.com/">
                                <svg width="16" height="14" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                </svg>
                                <span class="visually-hidden">Twitter</span>
                            </a>
                        </li>
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://www.instagram.com/">
                                <svg width="16" height="16" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                </svg>  
                                <span class="visually-hidden">Instagram</span>
                            </a>
                        </li>
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://www.pinterest.com/">
                                <svg width="14" height="16" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z" fill="currentColor"/>
                                    </svg>
                                <span class="visually-hidden">Pinterest</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Offcanvas menu .\ -->

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="index-2.html">
                    <img src="{{('assets/img/logo/nav-log.png')}}" alt="Logo-img" width="158" height="36">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="/">Home</a>
                        {{-- <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="index-2.html" class="offcanvas__sub_menu_item">Home - One</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-3.html" class="offcanvas__sub_menu_item">Home - Two</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-4.html" class="offcanvas__sub_menu_item">Home - Three</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-5.html" class="offcanvas__sub_menu_item">Home - Four</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="index-6.html" class="offcanvas__sub_menu_item">Home - Five</a></li>
                        </ul> --}}
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="listing.html">Listing</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="listing.html" class="offcanvas__sub_menu_item">Listing Left Sidebar</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="listing-right-sidebar.html" class="offcanvas__sub_menu_item">Listing Right Sidebar</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="listing.html" class="offcanvas__sub_menu_item">Listing Grig</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="listing-list.html" class="offcanvas__sub_menu_item">Listing List</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="listing-details.html" class="offcanvas__sub_menu_item">Listing Details</a></li>
                        </ul>
                    </li>
                    
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="admin/my-properties.html">Properties</a></li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="admin/dashboard.html">Dashboard</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="admin/dashboard.html" class="offcanvas__sub_menu_item">Dashboard</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/create-listing.html" class="offcanvas__sub_menu_item">Creat Listing</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/chat.html" class="offcanvas__sub_menu_item">Chats</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/my-favorites.html" class="offcanvas__sub_menu_item">My Favorites</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/my-properties.html" class="offcanvas__sub_menu_item">My Properties</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/my-package.html" class="offcanvas__sub_menu_item">My Package</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/profile.html" class="offcanvas__sub_menu_item">My Profile</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/reviews.html" class="offcanvas__sub_menu_item">Reviews</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/saved-search.html" class="offcanvas__sub_menu_item">Saved Search</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="admin/settings.html" class="offcanvas__sub_menu_item">Setting</a></li>
                        </ul>
                    </li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="blog.html">News</a></li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#">Pages</a>
                        <ul class="offcanvas__sub_menu">
                            <li class="offcanvas__sub_menu_li"><a href="about.html" class="offcanvas__sub_menu_item">About Us</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="contact.html" class="offcanvas__sub_menu_item">Contact Us</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="project.html" class="offcanvas__sub_menu_item">Project</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="project-details.html" class="offcanvas__sub_menu_item">Project Details</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="services-details.html" class="offcanvas__sub_menu_item">Services Details</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{Route('login')}}" class="offcanvas__sub_menu_item">Login</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="{{Route('register')}}" class="offcanvas__sub_menu_item">Sign Up</a></li>
                            <li class="offcanvas__sub_menu_li"><a href="404.html" class="offcanvas__sub_menu_item">Error 404</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <a class="add__listing--btn offcanvas__listing--btn solid__btn" href="admin/create-listing.html"><span>Add Listing</span> <svg width="18" height="18" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 15.9992C12.4111 15.9992 16 12.4105 16 7.99962C16 3.58875 12.411 0 8 0C3.58901 0 0 3.58875 0 7.99962C0 12.4105 3.58901 15.9992 8 15.9992ZM4.19508 7.57155H7.57197V4.19439C7.57197 3.95805 7.76381 3.76636 8 3.76636C8.23634 3.76636 8.42804 3.95821 8.42804 4.19439V7.57155H11.8049C12.0413 7.57155 12.233 7.7634 12.233 7.99958C12.233 8.23592 12.0411 8.42762 11.8049 8.42762H8.42804V11.8046C8.42804 12.041 8.23619 12.2327 8 12.2327C7.76366 12.2327 7.57197 12.0408 7.57197 11.8046V8.42762H4.19508C3.95874 8.42762 3.76704 8.23577 3.76704 7.99958C3.76704 7.76324 3.9586 7.57155 4.19508 7.57155Z" fill="white"/>
                </svg>
            </a>
            <div class="side__menu--footer mobile__menu--footer">
                <div class="side__menu--info">
                    <div class="side__menu--info__list">
                        <h3 class="side__menu--info__title">Customer Care Phone</h3>
                        <p><a class="side__menu--info__text" href="tel:+1234567898">: (+123) 456-7898</a></p>
                    </div>
                    <div class="side__menu--info__list">
                        <h3 class="side__menu--info__title">Need Live Support?</h3>
                        <p><a class="side__menu--info__text" href="mailto:example@example.com">Example@example.com</a></p>
                    </div>
                </div>
                <div class="side__menu--share d-flex align-items-center">
                    <h3 class="side__menu--share__title">Follow us :</h3>
                    <ul class=" side__menu--share__wrapper d-flex align-items-center">
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://www.facebook.com/">
                                <svg width="10" height="17" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                </svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                        </li>
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://twitter.com/">
                                <svg width="16" height="14" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                </svg>
                                <span class="visually-hidden">Twitter</span>
                            </a>
                        </li>
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://www.instagram.com/">
                                <svg width="16" height="16" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                </svg>  
                                <span class="visually-hidden">Instagram</span>
                            </a>
                        </li>
                        <li class="side__menu--share__list">
                            <a class="side__menu--share__icon" target="_blank" href="https://www.pinterest.com/">
                                <svg width="14" height="16" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z" fill="currentColor"/>
                                    </svg>
                                <span class="visually-hidden">Pinterest</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Offcanvas header menu -->
@yield('content')
        <!-- Start footer section -->
        {{-- <footer class="footer footer__section color-offwhite">
            <div class="container">
                <div class="main__footer">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-5 col-md-6">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title about">About Us <button class="footer__widget--button" aria-label="footer widget button"></button>
                                    <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                        <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <div class="footer__widget--inner">
                                    <div class="footer__logo">
                                        <a class="footer__logo--link display-block" href="index-2.html">
                                            <img class="footer__logo--img" src="assets/img/logo/nav-log-white.png" alt="logo-img">
                                        </a>
                                    </div>
                                    <p class="footer__widget--desc">The world’s first and largest digital market 
                                        for crypto collectibles and non-fungible (NFTs). Buy</p>
                                    <ul class="footer__widget--info">
                                        <li class="footer__widget--info_list">
                                            <svg class="footer__widget--info__icon" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3641 0C6.97117 0 3.39868 3.86831 3.39868 8.625C3.39868 14.6036 10.5888 22.4581 10.8941 22.7901C11.0242 22.9296 11.1942 23 11.3641 23C11.534 23 11.704 22.9296 11.8341 22.7901C12.1394 22.4581 19.3295 14.6036 19.3295 8.625C19.3295 3.86831 15.757 0 11.3641 0ZM11.3641 21.2419C9.77898 19.4048 4.72625 13.1919 4.72625 8.625C4.72625 4.66181 7.70399 1.4375 11.3641 1.4375C15.0242 1.4375 18.002 4.66181 18.002 8.625C18.002 13.1876 12.9492 19.4048 11.3641 21.2419Z" fill="#F23B3B"/>
                                                <path d="M11.3638 4.3125C9.16801 4.3125 7.3811 6.24737 7.3811 8.625C7.3811 11.0026 9.16801 12.9375 11.3638 12.9375C13.5596 12.9375 15.3465 11.0026 15.3465 8.625C15.3465 6.24737 13.5596 4.3125 11.3638 4.3125ZM11.3638 11.5C9.8995 11.5 8.70867 10.2106 8.70867 8.625C8.70867 7.03944 9.8995 5.75 11.3638 5.75C12.8281 5.75 14.019 7.03944 14.019 8.625C14.019 10.2106 12.8281 11.5 11.3638 11.5Z" fill="#F23B3B"/>
                                            </svg>
                                            <p class="footer__widget--info__text">86 Road Broklyn Street, 600
                                                New York, USA</p>
                                        </li>
                                        <li class="footer__widget--info_list">                                     
                                            <svg class="footer__widget--info__icon" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.51763 19.6352C2.20325 19.6334 1.90222 19.4974 1.67992 19.2567C1.45762 19.016 1.33199 18.69 1.33032 18.3496V7.77586C1.332 7.07078 1.59142 6.39509 2.05186 5.89652C2.5123 5.39795 3.13632 5.11705 3.78748 5.11523H15.3749C16.0271 5.11523 16.6528 5.39533 17.1146 5.89409C17.5764 6.39286 17.8367 7.06959 17.8384 7.77586V14.8227C17.8384 15.529 17.5797 16.2065 17.1191 16.7065C16.6584 17.2066 16.0335 17.4884 15.3812 17.4902H5.71765C5.6079 17.4912 5.50123 17.5297 5.41289 17.6002L3.2351 19.3809C3.02744 19.547 2.77583 19.6362 2.51763 19.6352ZM3.78748 6.49023C3.4731 6.49204 3.17207 6.62807 2.94977 6.86878C2.72747 7.10949 2.60184 7.43545 2.60017 7.77586V18.1777L4.65098 16.5002C4.95955 16.2521 5.33329 16.1172 5.71765 16.1152H15.3749C15.6914 16.1152 15.995 15.9791 16.2189 15.7367C16.4428 15.4943 16.5685 15.1655 16.5685 14.8227V7.77586C16.5669 7.43545 16.4412 7.10949 16.2189 6.86878C15.9966 6.62807 15.6956 6.49204 15.3812 6.49023H3.78748Z" fill="currentColor"/>
                                                <path d="M12.0855 12.0522C12.436 12.0522 12.7202 11.7444 12.7202 11.3647C12.7202 10.9851 12.436 10.6772 12.0855 10.6772C11.7351 10.6772 11.4509 10.9851 11.4509 11.3647C11.4509 11.7444 11.7351 12.0522 12.0855 12.0522Z" fill="currentColor"/>
                                                <path d="M9.62168 12.0522C9.97216 12.0522 10.2563 11.7444 10.2563 11.3647C10.2563 10.9851 9.97216 10.6772 9.62168 10.6772C9.27119 10.6772 8.98706 10.9851 8.98706 11.3647C8.98706 11.7444 9.27119 12.0522 9.62168 12.0522Z" fill="currentColor"/>
                                                <path d="M7.08237 12.0522C7.43286 12.0522 7.71698 11.7444 7.71698 11.3647C7.71698 10.9851 7.43286 10.6772 7.08237 10.6772C6.73188 10.6772 6.44775 10.9851 6.44775 11.3647C6.44775 11.7444 6.73188 12.0522 7.08237 12.0522Z" fill="currentColor"/>
                                                <path d="M19.7433 12.6777C19.5749 12.6777 19.4134 12.6053 19.2944 12.4764C19.1753 12.3474 19.1084 12.1726 19.1084 11.9902V5.02586C19.1067 4.68545 18.9811 4.35949 18.7588 4.11878C18.5365 3.87807 18.2355 3.74204 17.9211 3.74023H5.14005C4.97166 3.74023 4.81016 3.6678 4.69109 3.53887C4.57202 3.40994 4.50513 3.23507 4.50513 3.05273C4.50513 2.8704 4.57202 2.69553 4.69109 2.5666C4.81016 2.43767 4.97166 2.36523 5.14005 2.36523H17.9211C18.5723 2.36705 19.1963 2.64795 19.6567 3.14652C20.1172 3.64509 20.3766 4.32078 20.3782 5.02586V11.9902C20.3782 12.1726 20.3114 12.3474 20.1923 12.4764C20.0732 12.6053 19.9117 12.6777 19.7433 12.6777Z" fill="currentColor"/>
                                            </svg>
                                            <a class="footer__widget--info__text" href="mailto:example@example.com">Example@example.com</a>
                                        </li>
                                        <li class="footer__widget--info_list">
                                            <svg class="footer__widget--info__icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.31 1.52371L18.6133 2.11296C18.6133 2.11296 19.2026 7.41627 13.31 13.3088C7.41748 19.2014 2.11303 18.6133 2.11303 18.6133L1.52377 13.31L5.64971 10.9529L7.71153 13.0148C7.71153 13.0148 9.18467 12.7201 10.9524 10.9524C12.7202 9.18461 13.0148 7.71147 13.0148 7.71147L10.953 5.64965L13.31 1.52371Z" stroke="currentColor" stroke-width="2"></path>
                                            </svg>
                                            <a class="footer__widget--info__text" href="tel:+1234567898">: (+123) 456-7898</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title ">Services <button class="footer__widget--button" aria-label="footer widget button"></button>
                                    <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                        <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <ul class="footer__widget--menu footer__widget--inner">
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Property on sale</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Team membar</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Offices for Buy</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Terms of use</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Offices for Rent</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title ">Contact <button class="footer__widget--button" aria-label="footer widget button"></button>
                                    <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                        <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <ul class="footer__widget--menu footer__widget--inner">
                                    
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="admin/create-listing.html">Help/FAQ</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Propert owners</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="admin/create-listing.html">Contact Support</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Pricing Plans</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="listing.html">Partners</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title ">Quick Links <button class="footer__widget--button" aria-label="footer widget button"></button>
                                    <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                        <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <ul class="footer__widget--menu footer__widget--inner">
                                    
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="about.html">About Us</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="contact.html">Contact</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="services-details.html">Services Details </a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="admin/create-listing.html">Add Listing</a></li>
                                    <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="admin/my-properties.html">Property</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-5 col-md-6">
                            <div class="footer__widget">
                                <h2 class="footer__widget--title ">Newsletter <button class="footer__widget--button" aria-label="footer widget button"></button>
                                    <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewBox="0 0 10.355 6.394">
                                        <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                    </svg>
                                </h2>
                                <div class="footer__widget--inner newsletter">
                                    <div class="newsletter__subscribe">
                                        <form class="newsletter__subscribe--form" action="#">
                                            <label>
                                                <input class="newsletter__subscribe--input" placeholder=" Enter Email Adress" type="text">   
                                            </label>
                                            <button class="newsletter__subscribe--button" type="submit">Subscribe</button>
                                        </form>   
                                    </div> 
                                    <p class="email__except">
                                        <label class="email__except--label" for="except">I agree to all terms and policies</label>
                                        <input class="email__except--check__input" id="except" type="checkbox">
                                        <span class="email__except--checkmark"></span>
                                    </p>
                                    <ul class=" footer__social d-flex align-items-center">
                                        <li class="footer__social--list">
                                            <a class="footer__social--icon" target="_blank" href="https://www.facebook.com/">
                                                <svg width="10" height="17" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="footer__social--list">
                                            <a class="footer__social--icon" target="_blank" href="https://twitter.com/">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                                                  </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="footer__social--list">
                                            <a class="footer__social--icon" target="_blank" href="https://www.instagram.com/">
                                                <svg width="16" height="16" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                </svg>  
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="footer__social--list">
                                            <a class="footer__social--icon" target="_blank" href="https://www.pinterest.com/">
                                                <svg width="14" height="16" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z" fill="currentColor"/>
                                                    </svg>
                                                <span class="visually-hidden">Pinterest</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="footer__bottom--inner d-flex justify-content-between align-items-center">
                        <p class="copyright__content mb-0"><span class="text__secondary">© 2024</span> Powered By <a class="copyright__content--link" target="_blank" href="https://themeforest.net/search/hooktheme">Hooktheme</a> .  All Rights Reserved.</p>
                        <div class="footer__payment">
                            <img src="assets/img/icon/payment-img.png" alt="payment-img">
                        </div>
                        <ul class="footer__bottom--menu d-flex">
                            <li><a href="admin/create-listing.html">Terms of Use</a></li>
                            <li><a href="admin/create-listing.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer> --}}
        <!-- End footer section -->
            <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
   <!-- All Script JS Plugins here  -->
   <script src="{{('assets/js/vendor/popper.js')}}" defer="defer"></script>
   <script src="{{('assets/js/vendor/bootstrap.min.js')}}" defer="defer"></script>
   <script src="{{('assets/js/plugins/swiper-bundle.min.js')}}"></script>
   <script src="{{('assets/js/plugins/glightbox.min.js')}}"></script>
   <script src="{{('assets/js/plugins/aos.js')}}"></script>


  <!-- Customscript js -->
  <script src="{{('assets/js/script.js')}}"></script>