<!doctype html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <title>NewVilla - Real Estate HTML Template</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets1/img/favicon.ico">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="assets1/css/plugins/swiper-bundle.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">


    <!-- Plugin css -->
    <link rel="stylesheet" href="assets1/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets1/css/plugins/glightbox.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets1/css/style.css">
    <link rel="stylesheet" href="assets1/css/dashboard.css">
    <link rel="stylesheet" href="assets1/css/table.css">
    <link rel="stylesheet" href="assets1/css/dark.css">

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
<body>
    <!-- Preloader start -->
    {{-- <div id="preloader">
        <div class="loader--border"></div>
    </div> --}}
    <!-- Preloader end -->
    <div class="dashboard__page--wrapper">
        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo" style="width: 150px;">
                    <a class="offcanvas__logo_link" href="{{ Route('dashboard') }}">
                        <img class="light__logo" src="assets1/img/logo/society-logo1.png" alt="Logo-img" width="158"
                            height="36">
                        <img class="dark__logo" src="assets1/img/logo/nav-log-white.png" alt="Logo-img" width="158"
                            height="36">
                    </a>
                    <button class="offcanvas__close--btn" data-offcanvas>close</button>
                </div>

                <nav class="offcanvas__menu">
                    <ul class="offcanvas__menu_ul">
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ Route('dashboard') }}">Home</a>
                            {{-- <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="../index-2.html"
                                        class="offcanvas__sub_menu_item">Home - One</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../index-3.html"
                                        class="offcanvas__sub_menu_item">Home - Two</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../index-4.html"
                                        class="offcanvas__sub_menu_item">Home - Three</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../index-5.html"
                                        class="offcanvas__sub_menu_item">Home - Four</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../index-6.html"
                                        class="offcanvas__sub_menu_item">Home - Five</a></li>
                            </ul> --}}
                        </li>
                        @if (auth()->user()->role == 'society-admin')
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item" href="{{ Route('create-listing') }}"> Create Listing</a>
                                {{-- <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="../listing.html"
                                        class="offcanvas__sub_menu_item">Listing Left Sidebar</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../listing-right-sidebar.html"
                                        class="offcanvas__sub_menu_item">Listing Right Sidebar</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../listing.html"
                                        class="offcanvas__sub_menu_item">Listing Grig</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../listing-list.html"
                                        class="offcanvas__sub_menu_item">Listing List</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../listing-details.html"
                                        class="offcanvas__sub_menu_item">Listing Details</a></li>
                            </ul> --}}
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
                            <a class="offcanvas__menu_item" href="{{ Route('society-members') }}"> Society Members</a>
                        </li>
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="{{ Route('my-properties') }}"> My Properties</a>
                        </li>
                        @endif
                        {{-- <li class="offcanvas__sub_menu_li"><a href="chat.html"
                                        class="offcanvas__sub_menu_item">Chats</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="my-favorites.html"
                                        class="offcanvas__sub_menu_item">My Favorites</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="my-properties.html"
                                        class="offcanvas__sub_menu_item">My Properties</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="my-package.html"
                                        class="offcanvas__sub_menu_item">My Package</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="profile.html"
                                        class="offcanvas__sub_menu_item">My Profile</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="reviews.html"
                                        class="offcanvas__sub_menu_item">Reviews</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="saved-search.html"
                                        class="offcanvas__sub_menu_item">Saved Search</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="settings.html"
                                        class="offcanvas__sub_menu_item">Setting</a></li> --}}
                    </ul>
                    </li>
                    {{-- <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="../blog.html">News</a>
                        </li> --}}
                    {{-- <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="#">Pages</a>
                            <ul class="offcanvas__sub_menu">
                                <li class="offcanvas__sub_menu_li"><a href="../about.html"
                                        class="offcanvas__sub_menu_item">About Us</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../contact.html"
                                        class="offcanvas__sub_menu_item">Contact Us</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../project.html"
                                        class="offcanvas__sub_menu_item">Project</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../project-details.html"
                                        class="offcanvas__sub_menu_item">Project Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../services-details.html"
                                        class="offcanvas__sub_menu_item">Services Details</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../login.html"
                                        class="offcanvas__sub_menu_item">Login</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../sign-up.html"
                                        class="offcanvas__sub_menu_item">Sing Up</a></li>
                                <li class="offcanvas__sub_menu_li"><a href="../404.html"
                                        class="offcanvas__sub_menu_item">Error 404</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
                {{-- <div class="side__menu--footer mobile__menu--footer">
                    <div class="side__menu--info">
                        <div class="side__menu--info__list">
                            <h3 class="side__menu--info__title">Customer Care Phone</h3>
                            <p><a class="side__menu--info__text" href="tel:+1234567898">: (+123) 456-7898</a></p>
                        </div>
                        <div class="side__menu--info__list">
                            <h3 class="side__menu--info__title">Need Live Support?</h3>
                            <p><a class="side__menu--info__text"
                                    href="mailto:example@example.com">Example@example.com</a></p>
                        </div>
                    </div>
                    <div class="side__menu--share d-flex align-items-center">
                        <h3 class="side__menu--share__title">Follow us :</h3>
                        <ul class=" side__menu--share__wrapper d-flex align-items-center">
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://www.facebook.com/">
                                    <svg width="10" height="17" viewBox="0 0 9 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://twitter.com/">
                                    <svg width="16" height="14" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://www.instagram.com/">
                                    <svg width="16" height="16" viewBox="0 0 14 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                            <li class="side__menu--share__list">
                                <a class="side__menu--share__icon" target="_blank" href="https://www.pinterest.com/">
                                    <svg width="14" height="16" viewBox="0 0 15 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.6713 6.71093C14.6764 7.71873 14.5406 8.65694 14.2638 9.52555C14.0104 10.394 13.6393 11.146 13.1503 11.7813C12.6612 12.3932 12.0778 12.8883 11.4001 13.2668C10.7222 13.6218 9.97304 13.7897 9.15262 13.7705C8.87149 13.7954 8.59012 13.7734 8.30852 13.7045C8.05023 13.6121 7.80366 13.5196 7.56881 13.427C7.35727 13.3109 7.16906 13.1713 7.00416 13.008C6.83926 12.8448 6.70957 12.6931 6.61511 12.553C6.47736 13.1162 6.36257 13.5856 6.27074 13.961C6.17891 14.3365 6.09838 14.6299 6.02915 14.8412C5.98323 15.0289 5.94879 15.1697 5.92584 15.2636C5.9262 15.3339 5.92632 15.3573 5.9262 15.3339C5.85696 15.5452 5.78767 15.7448 5.71832 15.9326C5.64897 16.1205 5.56796 16.3201 5.47529 16.5315C5.3825 16.7195 5.27793 16.8958 5.16158 17.0605C5.06867 17.225 4.97576 17.3896 4.88285 17.5541C4.60256 17.743 4.38033 17.8262 4.21615 17.8036C4.07553 17.8043 3.95804 17.7463 3.86369 17.6296C3.79278 17.5128 3.74531 17.3959 3.72127 17.2788C3.69736 17.1852 3.68534 17.1266 3.68522 17.1032C3.66094 16.9393 3.64832 16.7635 3.64736 16.576C3.64629 16.3651 3.64527 16.1659 3.64431 15.9784C3.66667 15.7673 3.68902 15.5563 3.71138 15.3452C3.75718 15.1341 3.80309 14.9463 3.84913 14.782C3.84901 14.7586 3.86037 14.6882 3.8832 14.5709C3.92936 14.43 3.99829 14.1602 4.09 13.7612C4.18159 13.3389 4.30756 12.764 4.46791 12.0366C4.62825 11.3092 4.84599 10.3472 5.12112 9.15044C5.05009 9.01017 4.9906 8.8347 4.94264 8.624C4.89469 8.41331 4.85863 8.23771 4.83448 8.0972C4.8102 7.93326 4.79776 7.7927 4.79716 7.67551C4.79657 7.55833 4.79633 7.51145 4.79645 7.53489C4.79441 7.13646 4.83948 6.78466 4.93167 6.4795C5.04718 6.15078 5.18637 5.86881 5.34923 5.6336C5.53541 5.37483 5.74538 5.18626 5.97915 5.06787C6.23624 4.92593 6.49363 4.84258 6.75132 4.81782C6.98581 4.84006 7.18527 4.88592 7.34969 4.95539C7.53755 5.02474 7.69049 5.14115 7.80851 5.30461C7.92654 5.46807 8.00947 5.64343 8.0573 5.83069C8.12845 5.99439 8.16463 6.19342 8.16583 6.4278C8.16691 6.63873 8.13307 6.89672 8.06432 7.20176C7.99544 7.48337 7.91491 7.77675 7.82272 8.08192C7.73053 8.38708 7.62674 8.71574 7.51135 9.0679C7.41928 9.3965 7.33887 9.71332 7.27012 10.0184C7.20137 10.3234 7.19103 10.593 7.2391 10.8271C7.31049 11.0377 7.41704 11.2481 7.55874 11.4583C7.72376 11.645 7.92369 11.7846 8.15854 11.8771C8.3934 11.9697 8.63979 12.027 8.89771 12.0491C9.38978 12.0232 9.8343 11.8686 10.2313 11.5853C10.6283 11.302 10.9661 10.9018 11.2447 10.3848C11.5467 9.86758 11.7665 9.29223 11.9038 8.65871C12.0646 8.00163 12.1429 7.28637 12.139 6.51294C12.1362 5.97389 12.0398 5.45875 11.8498 4.96753C11.6598 4.47631 11.3765 4.06759 10.9998 3.74139C10.6464 3.39163 10.1997 3.11266 9.65954 2.90449C9.14285 2.69619 8.533 2.60556 7.83 2.63259C7.05646 2.61311 6.354 2.74561 5.72263 3.03009C5.11471 3.31446 4.58923 3.68043 4.1462 4.12802C3.70317 4.5756 3.36603 5.10467 3.13477 5.71524C2.9034 6.30237 2.78933 6.91234 2.79257 7.54514C2.79388 7.80295 2.80674 8.02554 2.83114 8.21292C2.87885 8.37674 2.92662 8.55228 2.97446 8.73954C3.04561 8.90324 3.1167 9.05522 3.18773 9.19548C3.28208 9.31219 3.38827 9.45227 3.50629 9.61574C3.55329 9.63893 3.58868 9.68563 3.61248 9.75582C3.63615 9.80257 3.64805 9.83767 3.64817 9.86111C3.67173 9.88442 3.68369 9.93124 3.68405 10.0015C3.68429 10.0484 3.67281 10.0954 3.64961 10.1424C3.62653 10.2128 3.60346 10.2832 3.58038 10.3536C3.58062 10.4005 3.56926 10.4709 3.5463 10.5648C3.52334 10.6586 3.50033 10.7408 3.47725 10.8112C3.45405 10.8582 3.44263 10.9169 3.44299 10.9872C3.4198 11.0342 3.38494 11.0929 3.33842 11.1635C3.31523 11.2105 3.28025 11.2458 3.2335 11.2695C3.18662 11.2697 3.13981 11.2817 3.09305 11.3054C3.04618 11.3056 2.98747 11.2825 2.91691 11.236C2.56464 11.0971 2.24722 10.8995 1.96465 10.6432C1.7054 10.3632 1.49291 10.0596 1.32717 9.73235C1.16143 9.40507 1.03061 9.03073 0.934703 8.60934C0.838796 8.18795 0.789764 7.76633 0.787606 7.34446C0.78377 6.59447 0.932275 5.8437 1.23312 5.09215C1.55741 4.34048 2.02261 3.64668 2.62874 3.01076C3.23487 2.37484 3.99401 1.86705 4.90614 1.48737C5.81815 1.08427 6.88346 0.867877 8.10208 0.838206C9.08656 0.856608 9.97807 1.02783 10.7766 1.35188C11.5985 1.65236 12.2921 2.08241 12.8575 2.64203C13.4228 3.20165 13.8597 3.83223 14.1679 4.53379C14.4995 5.21179 14.6673 5.9375 14.6713 6.71093Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="visually-hidden">Pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
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
                            class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                            height="25.443" viewBox="0 0 512 512">
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
                <h1 class="main__logo--title"><a class="main__logo--link" href="{{ Route('dashboard') }}">
                        <img class="main__logo--img desktop light__logo" src="assets1/img/logo/society-logo1.png"
                            alt="logo-img" style="
    width: 150px;
">
                        <img class="main__logo--img desktop dark__logo" src="assets1/img/logo/society-logo-white.png"
                            alt="logo-img">
                        <img class="main__logo--img mobile" src="assets1/img/logo/society-logomob.png" alt="logo-img"
                            style="
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
                                href="{{ Route('registered-users') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 640 512">
                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M272.2 64.6l-51.1 51.1c-15.3 4.2-29.5 11.9-41.5 22.5L153 161.9C142.8 171 129.5 176 115.8 176L96 176l0 128c20.4 .6 39.8 8.9 54.3 23.4l35.6 35.6 7 7c0 0 0 0 0 0L219.9 397c6.2 6.2 16.4 6.2 22.6 0c1.7-1.7 3-3.7 3.7-5.8c2.8-7.7 9.3-13.5 17.3-15.3s16.4 .6 22.2 6.5L296.5 393c11.6 11.6 30.4 11.6 41.9 0c5.4-5.4 8.3-12.3 8.6-19.4c.4-8.8 5.6-16.6 13.6-20.4s17.3-3 24.4 2.1c9.4 6.7 22.5 5.8 30.9-2.6c9.4-9.4 9.4-24.6 0-33.9L340.1 243l-35.8 33c-27.3 25.2-69.2 25.6-97 .9c-31.7-28.2-32.4-77.4-1.6-106.5l70.1-66.2C303.2 78.4 339.4 64 377.1 64c36.1 0 71 13.3 97.9 37.2L505.1 128l38.9 0 40 0 40 0c8.8 0 16 7.2 16 16l0 208c0 17.7-14.3 32-32 32l-32 0c-11.8 0-22.2-6.4-27.7-16l-84.9 0c-3.4 6.7-7.9 13.1-13.5 18.7c-17.1 17.1-40.8 23.8-63 20.1c-3.6 7.3-8.5 14.1-14.6 20.2c-27.3 27.3-70 30-100.4 8.1c-25.1 20.8-62.5 19.5-86-4.1L159 404l-7-7-35.6-35.6c-5.5-5.5-12.7-8.7-20.4-9.3C96 369.7 81.6 384 64 384l-32 0c-17.7 0-32-14.3-32-32L0 144c0-8.8 7.2-16 16-16l40 0 40 0 19.8 0c2 0 3.9-.7 5.3-2l26.5-23.6C175.5 77.7 211.4 64 248.7 64L259 64c4.4 0 8.9 .2 13.2 .6zM544 320l0-144-48 0c-5.9 0-11.6-2.2-15.9-6.1l-36.9-32.8c-18.2-16.2-41.7-25.1-66.1-25.1c-25.4 0-49.8 9.7-68.3 27.1l-70.1 66.2c-10.3 9.8-10.1 26.3 .5 35.7c9.3 8.3 23.4 8.1 32.5-.3l71.9-66.4c9.7-9 24.9-8.4 33.9 1.4s8.4 24.9-1.4 33.9l-.8 .8 74.4 74.4c10 10 16.5 22.3 19.4 35.1l74.8 0zM64 336a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm528 16a16 16 0 1 0 0-32 16 16 0 1 0 0 32z" />
                                </svg>
                                <span class="sidebar__menu--text"> Registered Users</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('property-list') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 512 512">
                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M40 48C26.7 48 16 58.7 16 72l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24L40 48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L192 64zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32l288 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-288 0zM16 232l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0z" />
                                </svg>
                                <span class="sidebar__menu--text">Property List</span>
                            </a>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'society-admin')
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('facility-partner') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 640 512">
                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M272.2 64.6l-51.1 51.1c-15.3 4.2-29.5 11.9-41.5 22.5L153 161.9C142.8 171 129.5 176 115.8 176L96 176l0 128c20.4 .6 39.8 8.9 54.3 23.4l35.6 35.6 7 7c0 0 0 0 0 0L219.9 397c6.2 6.2 16.4 6.2 22.6 0c1.7-1.7 3-3.7 3.7-5.8c2.8-7.7 9.3-13.5 17.3-15.3s16.4 .6 22.2 6.5L296.5 393c11.6 11.6 30.4 11.6 41.9 0c5.4-5.4 8.3-12.3 8.6-19.4c.4-8.8 5.6-16.6 13.6-20.4s17.3-3 24.4 2.1c9.4 6.7 22.5 5.8 30.9-2.6c9.4-9.4 9.4-24.6 0-33.9L340.1 243l-35.8 33c-27.3 25.2-69.2 25.6-97 .9c-31.7-28.2-32.4-77.4-1.6-106.5l70.1-66.2C303.2 78.4 339.4 64 377.1 64c36.1 0 71 13.3 97.9 37.2L505.1 128l38.9 0 40 0 40 0c8.8 0 16 7.2 16 16l0 208c0 17.7-14.3 32-32 32l-32 0c-11.8 0-22.2-6.4-27.7-16l-84.9 0c-3.4 6.7-7.9 13.1-13.5 18.7c-17.1 17.1-40.8 23.8-63 20.1c-3.6 7.3-8.5 14.1-14.6 20.2c-27.3 27.3-70 30-100.4 8.1c-25.1 20.8-62.5 19.5-86-4.1L159 404l-7-7-35.6-35.6c-5.5-5.5-12.7-8.7-20.4-9.3C96 369.7 81.6 384 64 384l-32 0c-17.7 0-32-14.3-32-32L0 144c0-8.8 7.2-16 16-16l40 0 40 0 19.8 0c2 0 3.9-.7 5.3-2l26.5-23.6C175.5 77.7 211.4 64 248.7 64L259 64c4.4 0 8.9 .2 13.2 .6zM544 320l0-144-48 0c-5.9 0-11.6-2.2-15.9-6.1l-36.9-32.8c-18.2-16.2-41.7-25.1-66.1-25.1c-25.4 0-49.8 9.7-68.3 27.1l-70.1 66.2c-10.3 9.8-10.1 26.3 .5 35.7c9.3 8.3 23.4 8.1 32.5-.3l71.9-66.4c9.7-9 24.9-8.4 33.9 1.4s8.4 24.9-1.4 33.9l-.8 .8 74.4 74.4c10 10 16.5 22.3 19.4 35.1l74.8 0zM64 336a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm528 16a16 16 0 1 0 0-32 16 16 0 1 0 0 32z" />
                                </svg>
                                <span class="sidebar__menu--text"> Facility Partner</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('business-partner') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 640 512">
                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 160 0 8.2 0c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7l0-32.7c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM320 352l-96 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l296.2 0C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16l0 48 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16z" />
                                </svg>
                                <span class="sidebar__menu--text">Business Partner</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('society-members') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 512 512">
                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M240.1 4.2c9.8-5.6 21.9-5.6 31.8 0l171.8 98.1L448 104l0 .9 47.9 27.4c12.6 7.2 18.8 22 15.1 36s-16.4 23.8-30.9 23.8L32 192c-14.5 0-27.2-9.8-30.9-23.8s2.5-28.8 15.1-36L64 104.9l0-.9 4.4-1.6L240.1 4.2zM64 224l64 0 0 192 40 0 0-192 64 0 0 192 48 0 0-192 64 0 0 192 40 0 0-192 64 0 0 196.3c.6 .3 1.2 .7 1.8 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512L32 512c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1L64 224z" />
                                </svg>
                                <span class="sidebar__menu--text">Society Partners</span>
                            </a>
                        </li>
                        <li class="sidebar__menu--items"><a class="sidebar__menu--link"
                                href="{{ Route('my-properties') }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 384 512">
                                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M64 48c-8.8 0-16 7.2-16 16l0 384c0 8.8 7.2 16 16 16l80 0 0-64c0-26.5 21.5-48 48-48s48 21.5 48 48l0 64 80 0c8.8 0 16-7.2 16-16l0-384c0-8.8-7.2-16-16-16L64 48zM0 64C0 28.7 28.7 0 64 0L320 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm88 40c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zM232 88l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16zM88 232c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48zm144-16l48 0c8.8 0 16 7.2 16 16l0 48c0 8.8-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-48c0-8.8 7.2-16 16-16z" />
                                </svg>
                                <span class="sidebar__menu--text">My Properties</span>
                            </a>
                        </li>
                    @endif
                    {{-- <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="chat.html"><svg
                                class="sidebar__menu--icon" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1666 7.50008C14.1666 10.7251 11.3666 13.3334 7.91663 13.3334L7.14163 14.2667L6.6833 14.8168C6.29163 15.2834 5.54162 15.1834 5.28329 14.6251L4.16663 12.1667C2.64996 11.1001 1.66663 9.40842 1.66663 7.50008C1.66663 4.27508 4.46663 1.66675 7.91663 1.66675C10.4333 1.66675 12.6083 3.05842 13.5833 5.05842C13.9583 5.80009 14.1666 6.62508 14.1666 7.50008Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.3334 10.7167C18.3334 12.625 17.3501 14.3167 15.8334 15.3834L14.7167 17.8417C14.4584 18.4 13.7084 18.5084 13.3167 18.0334L12.0834 16.55C10.0667 16.55 8.26672 15.6583 7.14172 14.2667L7.91672 13.3333C11.3667 13.3333 14.1667 10.725 14.1667 7.50001C14.1667 6.62501 13.9584 5.80002 13.5834 5.05835C16.3084 5.68335 18.3334 7.98333 18.3334 10.7167Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.83337 7.5H10" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <span class="sidebar__menu--text"> Message</span>
                        </a>
                    </li> --}}
                    {{-- <li class="sidebar__menu--items">
                        <label class="sidebar__menu--title">Manage Listings</label>
                    </li>
                    <li class="sidebar__menu--items dropdown__items">
                        <a class="sidebar__menu--link dropdown__link--active" href="#"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne"><svg class="sidebar__menu--icon" width="20"
                                height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.51663 2.36664L3.02496 5.86664C2.27496 6.44997 1.66663 7.69164 1.66663 8.63331V14.8083C1.66663 16.7416 3.24163 18.325 5.17496 18.325H14.825C16.7583 18.325 18.3333 16.7416 18.3333 14.8166V8.74997C18.3333 7.74164 17.6583 6.44997 16.8333 5.87497L11.6833 2.26664C10.5166 1.44997 8.64163 1.49164 7.51663 2.36664Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 14.9917V12.4917" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span class="sidebar__menu--text">My Properties</span>
                            <svg class="sidebar__menu--link__arrow" width="12" height="8" viewBox="0 0 12 8"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.99999 3.02344L1.87499 7.14844L0.696655 5.9701L5.99999 0.666771L11.3033 5.9701L10.125 7.14844L5.99999 3.02344Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <ul class="sidebar__dropdown--menu accordion-collapse collapse show" id="collapseOne">
                            <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                    href="my-properties.html">General Elements</a></li>
                            <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                    href="my-properties.html">Advanced Elements</a></li>
                            <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                    href="my-properties.html">Editors</a></li>
                        </ul>
                    </li>
                    <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="my-favorites.html"><svg
                                class="sidebar__menu--icon" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.3334 14.3332C18.3334 15.0832 18.125 15.7916 17.75 16.3916C17.0584 17.5499 15.7917 18.3332 14.3334 18.3332C12.875 18.3332 11.6 17.5499 10.9167 16.3916C10.55 15.7916 10.3334 15.0832 10.3334 14.3332C10.3334 12.1249 12.125 10.3333 14.3334 10.3333C16.5417 10.3333 18.3334 12.1249 18.3334 14.3332Z"
                                    stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.775 14.3332L13.7584 15.3165L15.8917 13.3499" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.3333 7.24161C18.3333 8.88327 17.9083 10.3332 17.2416 11.5916C16.5083 10.8166 15.475 10.3333 14.3333 10.3333C12.125 10.3333 10.3333 12.1249 10.3333 14.3333C10.3333 15.3583 10.725 16.2916 11.3583 17C11.05 17.1416 10.7666 17.2583 10.5166 17.3416C10.2333 17.4416 9.76663 17.4416 9.48329 17.3416C7.06663 16.5166 1.66663 13.0749 1.66663 7.24161C1.66663 4.66661 3.74163 2.58325 6.29996 2.58325C7.80829 2.58325 9.15829 3.31662 9.99996 4.44162C10.8416 3.31662 12.1916 2.58325 13.7 2.58325C16.2583 2.58325 18.3333 4.66661 18.3333 7.24161Z"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="sidebar__menu--text">My Favorites</span>
                        </a>
                    </li>
                    <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="saved-search.html"><svg
                                class="sidebar__menu--icon" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.6666 4.16675H16.6666" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.6666 6.66675H14.1666" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M17.5 9.58341C17.5 13.9584 13.9583 17.5001 9.58329 17.5001C5.20829 17.5001 1.66663 13.9584 1.66663 9.58341C1.66663 5.20841 5.20829 1.66675 9.58329 1.66675"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.3333 18.3334L16.6666 16.6667" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="sidebar__menu--text">Saved Search</span>
                        </a>
                    </li>
                    <li class="sidebar__menu--items dropdown__items">
                        <a class="sidebar__menu--link dropdown__link--active" href="#"
                            data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="true"
                            aria-controls="collapsetwo"><svg class="sidebar__menu--icon" width="20"
                                height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1666 15.3583H10.8333L7.12495 17.8249C6.57495 18.1916 5.83329 17.8 5.83329 17.1333V15.3583C3.33329 15.3583 1.66663 13.6916 1.66663 11.1916V6.19157C1.66663 3.69157 3.33329 2.0249 5.83329 2.0249H14.1666C16.6666 2.0249 18.3333 3.69157 18.3333 6.19157V11.1916C18.3333 13.6916 16.6666 15.3583 14.1666 15.3583Z"
                                    stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10 9.46655V9.29159C10 8.72492 10.35 8.4249 10.7 8.18324C11.0417 7.9499 11.3833 7.64991 11.3833 7.09991C11.3833 6.33325 10.7667 5.71655 10 5.71655C9.23334 5.71655 8.6167 6.33325 8.6167 7.09991"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.99629 11.4584H10.0038" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span class="sidebar__menu--text">Reviews</span>
                            <svg class="sidebar__menu--link__arrow" width="12" height="8" viewBox="0 0 12 8"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.99999 3.02344L1.87499 7.14844L0.696655 5.9701L5.99999 0.666771L11.3033 5.9701L10.125 7.14844L5.99999 3.02344Z"
                                    fill="currentColor" />
                            </svg></a>
                        <ul class="sidebar__dropdown--menu accordion-collapse collapse show" id="collapsetwo">
                            <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                    href="reviews.html">General Elements</a></li>
                            <li class="sidebar__dropdown--menu__items"><a class="sidebar__dropdown--menu__link"
                                    href="reviews.html">Advanced Elements</a></li>
                        </ul>
                    
                    <li class="sidebar__menu--items"><a class="sidebar__menu--link" href="settings.html"><svg
                                class="sidebar__menu--icon" xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                                </path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span class="sidebar__menu--text"> Settings</span>
                        </a>
                    </li>
                    <li class="sidebar__menu--items"><a class="sidebar__menu--link logout color-accent-2"
                            href="../sign-up.html"><svg class="sidebar__menu--icon" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.41663 6.29995C7.67496 3.29995 9.21663 2.07495 12.5916 2.07495H12.7C16.425 2.07495 17.9166 3.56662 17.9166 7.29162V12.725C17.9166 16.45 16.425 17.9416 12.7 17.9416H12.5916C9.24163 17.9416 7.69996 16.7333 7.42496 13.7833"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.5001 10H3.01672" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M4.87504 7.20825L2.08337 9.99992L4.87504 12.7916" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="sidebar__menu--text"> Logout</span>
                        </a>
                    </li> --}}
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
                                    src="assets1/img/logo/society-logomob.png" alt="logo-img"
                                    style="
    width: 30PX;
">
                                <img class="main__logo--img desktop dark__logo"
                                    src="assets1/img/logo/nav-log-white.png" alt="logo-img">
                                <img class="main__logo--img mobile" src="assets1/img/logo/logo-mobile.png"
                                    alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header__right d-flex align-items-center">
                        <div class="main__menu d-none d-xl-block">
                            {{-- <nav class="main__menu--navigation">
                                <ul class="main__menu--wrapper d-flex">
                                    <li class="main__menu--items">
                                        <a class="main__menu--link"
                                            href="../index-2.html
                                        "><svg
                                                width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.5 0L0 4.125V11H3.72581V8.59381C3.72581 7.64165 4.51713 6.87506 5.5 6.87506C6.48287 6.87506 7.27419 7.64165 7.27419 8.59381V11H11V4.125L5.5 0Z"
                                                    fill="#16A34A" />
                                            </svg>
                                            Home
                                        </a>
                                        <ul class="sub__menu">
                                            <li class="sub__menu--items"><a href="../index-2.html"
                                                    class="sub__menu--link">Home - One</a></li>
                                            <li class="sub__menu--items"><a href="../index-3.html"
                                                    class="sub__menu--link">Home - Two</a></li>
                                            <li class="sub__menu--items"><a href="../index-4.html"
                                                    class="sub__menu--link">Home - Three</a></li>
                                            <li class="sub__menu--items"><a href="../index-5.html"
                                                    class="sub__menu--link">Home - Four</a></li>
                                            <li class="sub__menu--items"><a href="../index-6.html"
                                                    class="sub__menu--link">Home - Five</a></li>
                                        </ul>
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
                                                    <br>
                                                    <li class="user_profile--menu_items"><a
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
                                                            </svg> Account Settings </a></li>
                                                    <br>
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
            <!-- End header area -->
            <main class="main__content_wrapper">
                <!-- dashboard container -->
                <div class="dashboard__container dashboard__reviews--container">
                    <div class="reviews__heading mb-30">
                        <h2 class="reviews__heading--title">Registered Users</h2>
                        <p class="reviews__heading--desc">We are glad to see you again!</p>
                    </div>
                    <div class="properties__wrapper">
                        <div class="properties__table table-responsive">
                            <table class="properties__table--wrapper">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th><span class="min-w-100">Role</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                            <td>
                                                {{ $user->name }}

                                            </td>
                                            <td>
                                                {{ $user->email }}

                                            </td>
                                            {{-- <td>
                                            <select class="form-control role-select"
                                                data-user-id="{{ $user->id }}"
                                                style="width: 200px; height: 40px; font-size: 16px; padding: 5px; border-radius: 4px; border: 1px solid #ccc;">
                                                <option value="society-admin"
                                                    {{ $user->role == 'society-admin' ? 'selected' : '' }}>Society
                                                    Admin</option>
                                                <option value="business-partner"
                                                    {{ $user->role == 'business-partner' ? 'selected' : '' }}>
                                                    Business Partner</option>
                                                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>
                                                    User</option>
                                                <option value="super-admin"
                                                    {{ $user->role == 'super-admin' ? 'selected' : '' }}>Super
                                                    Admin</option>
                                                <option value="facility-partner"
                                                    {{ $user->role == 'facility-partner' ? 'selected' : '' }}>
                                                    Facility Partner</option>
                                            </select>
</td> --}}
                                            <td>
                                                <select class="form-control role-select"
                                                    data-user-id="{{ $user->id }}"
                                                    style="width: 200px; height: 40px; font-size: 16px; padding: 5px; border-radius: 4px; border: 1px solid #ccc;">
                                                    <option value="society-admin"
                                                        {{ $user->role == 'society-admin' ? 'selected' : '' }}>Society
                                                        Admin</option>
                                                    <option value="business-partner"
                                                        {{ $user->role == 'business-partner' ? 'selected' : '' }}>
                                                        Business Partner</option>
                                                    <option value="user"
                                                        {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                                                    <option value="super-admin"
                                                        {{ $user->role == 'super-admin' ? 'selected' : '' }}>Super
                                                        Admin</option>
                                                    <option value="facility-partner"
                                                        {{ $user->role == 'facility-partner' ? 'selected' : '' }}>
                                                        Facility Partner</option>
                                                    <option value="society-member"
                                                        {{ $user->role == 'society-member' ? 'selected' : '' }}>Society
                                                        Member</option>
                                                </select>
                                                {{-- @if ($user->role == 'society-admin')
                                                    <input type="text" class="form-control society-name"
                                                        placeholder="Enter society name"
                                                        value="{{ $user->society_name }}"
                                                        style="margin-top: 10px; height: 40px; width: 200px;" />
                                                    <button class="btn btn-primary save-society-name"
                                                        style="margin-top: 10px;">Save</button>
                                                @endif --}}
                                            </td>

                                        </tr>
                                    @endforeach
                            </table>
                            <!-- Start footer section -->
                            <footer class="footer footer__section mt-1 fixed-bottom">
                                <div class="dashboard__footer--inner text-center">
                                    <p class="copyright__content mb-0">Copyright © 2024 Made with ❤️ by
                                        with  by <a class="copyright__content--link" target="_blank"
                                            href="https://www.intouchsoftware.co.in/">InTouch Software
                                            Solutions.</a> All
                                        Rights Reserved.</p>
                                </div>
                            </footer>
                            <!-- End footer section -->
            </main>
        </div>
    </div>
    <!-- Modal Add Contact -->
    <div class="modal fade" id="modaladdcontact" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal__contact--main__content">
                <div class="modal__contact--header d-flex align-items-center justify-content-between">
                    <h3 class="modal__contact--header__title">Add Contact</h3>
                    <button type="button" class="modal__contact--close__btn" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.711" height="12.711"
                            viewBox="0 0 12.711 12.711">
                            <g id="Group_7205" data-name="Group 7205" transform="translate(-113.644 -321.644)">
                                <path id="Vector" d="M0,9.883,9.883,0" transform="translate(115.059 323.059)"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                                <path id="Vector-2" data-name="Vector" d="M9.883,9.883,0,0"
                                    transform="translate(115.059 323.059)" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="modal-body modal__contact--body">
                    <div class="modal__contact--form">
                        <form action="#">
                            <div class="modal__contact--form__input mb-20">
                                <label class="modal__contact--input__label" for="name">Contact Name</label>
                                <input class="modal__contact--input__field" placeholder="Enter Name" id="name"
                                    type="text">
                            </div>
                            <div class="modal__contact--form__input mb-20">
                                <label class="modal__contact--input__label">Description</label>
                                <textarea class="modal__contact--textarea__field" placeholder="Description"></textarea>
                            </div>
                            <div class="modal__contact--footer">
                                <button class="solid__btn border-0" type="submit">Contact</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add Calls -->
    <div class="modal fade" id="modaladdcalls" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal__contact--main__content">
                <div class="modal-body modal__contact--body">
                    <div class="modal__calling--wrapper">
                        <div class="modal__calling--author">
                            <img class="modal__calling--author__thumb" src="assets1/img/dashboard/calling-author.png"
                                alt="img">
                            <h3 class="modal__calling--author__name">William Heineman</h3>
                            <span class="modal__calling--author__subtitle">Calling...</span>
                        </div>
                        <div class="modal__calls--footer d-flex justify-content-center">
                            <button class="call__receive border-0"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" data-lucide="phone-call"
                                    class="lucide lucide-phone-call">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                    <path d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                                    <path d="M14.05 6A5 5 0 0 1 18 10"></path>
                                </svg>
                            </button>
                            <button class="call__cancel border-0 color-accent-2" data-bs-dismiss="modal"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" data-lucide="phone"
                                    class="lucide lucide-phone">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="48"
                d="M112 244l144-144 144 144M256 120v292" />
        </svg></button>

    <!-- All Script JS Plugins here  -->
    <script src="assets1/js/vendor/popper.js" defer="defer"></script>
    <script src="assets1/js/vendor/bootstrap.min.js" defer="defer"></script>
    <script src="assets1/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets1/js/plugins/glightbox.min.js"></script>
    <!-- Customscript js -->
    <script src="assets1/js/script.js"></script>
    <!-- Dark to light js -->
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia(
                "(prefers-color-scheme: dark)").matches)) {
            document.getElementById("light__to--dark") ? .classList.add("dark--version");
        }
        if (localStorage.getItem("theme-color") === "light") {
            document.getElementById("light__to--dark") ? .classList.remove("dark--version");
        }
    </script>
    <script>
        $(document).ready(function() {
            $('.role-select').change(function() {
                var userId = $(this).data('user-id');
                var newRole = $(this).val();
                var societyNameInput = $(this).closest('td').find('.society-name');
                var saveButton = $(this).closest('td').find('.save-society-name');

                if (newRole === 'society-admin') {
                    societyNameInput.show();
                    saveButton.show();
                } else {
                    societyNameInput.hide();
                    saveButton.hide();
                }
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
                            url: '/update-role',
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

            // Handle the save button click event
            $(document).on('click', '.save-society-name', function() {
                var userId = $(this).closest('td').find('.role-select').data('user-id');
                var societyName = $(this).closest('td').find('.society-name').val();

                $.ajax({
                    url: '/addsocietyname',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        user_id: userId,
                        society_name: societyName
                    },
                    success: function(response) {
                        Swal.fire(
                            'Saved!',
                            'The society name has been saved.',
                            'success'
                        );
                    },
                    error: function(xhr, status, error) {
                        Swal.fire(
                            'Error!',
                            'There was an error saving the society name.',
                            'error'
                        );
                    }
                });
            });
        });
    </script>
</body>

</html>
