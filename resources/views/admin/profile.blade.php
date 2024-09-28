@extends('admin.index-main')
@section('csscontent')
@endsection
@section('content')
    <main class="main__content_wrapper">
        <!-- dashboard container -->
        <div class="dashboard__container dashboard__profile--container">
            <div class="profile__heading mb-30">
                <h2 class="profile__heading--title">My Profile</h2>
                <p class="profile__heading--desc">We are glad to see you again!</p>
            </div>
            <div class="dashboard__profile--wrapper">
                <div class="profile__sticky--thumbnail position-relative">
                    <img src="assets/img/dashboard/profile-sticky-thumbpng.png" alt="">

                </div>
                <div class="profile__main--content d-flex justify-content-between align-items-center">
                    <div class="profile__author d-flex align-items-center">

                        <div>
                            <img id="profile-image" src="assets/img/dashboard/profile-author.png" alt=" Add Profile Image"
                                class="img-thumbnail" style="cursor: pointer; width: 300px; height: 300px;">

                            <!-- Hidden File Input -->
                            <input type="file" id="profile-image-upload" accept="image/*" style="display: none;">

                            <!-- Instagram Icon -->
                            <a class="profile__author--instagram__icon" target="_blank"><svg width="15" height="15"
                                    viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_222_1256)">
                                        <path
                                            d="M5.39524 1.87078L5.06305 1.49707L5.06305 1.49707L5.39524 1.87078ZM9.60476 1.87078L9.93695 1.49707V1.49707L9.60476 1.87078ZM9.46992 1.75091L9.13774 2.12462V2.12462L9.46992 1.75091ZM5.53008 1.75091L5.86226 2.12462V2.12462L5.53008 1.75091ZM2.53817 13.1531L2.83206 12.7485L2.53817 13.1531ZM1.84682 12.4617L2.25133 12.1678L1.84682 12.4617ZM13.1532 12.4617L12.7487 12.1678L13.1532 12.4617ZM12.4618 13.1531L12.1679 12.7485L12.4618 13.1531ZM13.25 4.99046V8.12488H14.25V4.99046H13.25ZM8.125 13.2499H6.875V14.2499H8.125V13.2499ZM1.75 8.12488V4.99046H0.75V8.12488H1.75ZM9.13774 2.12462L9.27258 2.24448L9.93695 1.49707L9.8021 1.37721L9.13774 2.12462ZM5.72742 2.24448L5.86226 2.12462L5.1979 1.37721L5.06305 1.49707L5.72742 2.24448ZM3.74058 2.99988C4.47302 2.99988 5.17999 2.73109 5.72742 2.24448L5.06305 1.49707C4.69867 1.82097 4.2281 1.99988 3.74058 1.99988V2.99988ZM9.27258 2.24448C9.82001 2.73109 10.527 2.99988 11.2594 2.99988V1.99988C10.7719 1.99988 10.3013 1.82097 9.93695 1.49707L9.27258 2.24448ZM9.8021 1.37721C8.48921 0.210201 6.51079 0.210201 5.1979 1.37721L5.86226 2.12462C6.79626 1.2944 8.20374 1.2944 9.13774 2.12462L9.8021 1.37721ZM6.875 13.2499C5.69207 13.2499 4.84504 13.2492 4.18964 13.1782C3.54361 13.1082 3.14335 12.9747 2.83206 12.7485L2.24428 13.5576C2.75445 13.9282 3.35081 14.0932 4.08193 14.1724C4.80369 14.2506 5.71435 14.2499 6.875 14.2499V13.2499ZM0.75 8.12488C0.75 9.28553 0.749314 10.1962 0.827512 10.9179C0.906724 11.6491 1.07166 12.2454 1.44231 12.7556L2.25133 12.1678C2.02517 11.8565 1.89169 11.4563 1.82169 10.8102C1.75069 10.1548 1.75 9.30781 1.75 8.12488H0.75ZM2.83206 12.7485C2.60922 12.5866 2.41324 12.3907 2.25133 12.1678L1.44231 12.7556C1.6659 13.0633 1.93654 13.334 2.24428 13.5576L2.83206 12.7485ZM13.25 8.12488C13.25 9.30781 13.2493 10.1548 13.1783 10.8102C13.1083 11.4563 12.9748 11.8565 12.7487 12.1678L13.5577 12.7556C13.9283 12.2454 14.0933 11.6491 14.1725 10.9179C14.2507 10.1962 14.25 9.28553 14.25 8.12488H13.25ZM8.125 14.2499C9.28565 14.2499 10.1963 14.2506 10.9181 14.1724C11.6492 14.0932 12.2456 13.9282 12.7557 13.5576L12.1679 12.7485C11.8566 12.9747 11.4564 13.1082 10.8104 13.1782C10.155 13.2492 9.30793 13.2499 8.125 13.2499V14.2499ZM12.7487 12.1678C12.5868 12.3907 12.3908 12.5866 12.1679 12.7485L12.7557 13.5576C13.0635 13.334 13.3341 13.0633 13.5577 12.7556L12.7487 12.1678ZM14.25 4.99046C14.25 3.33881 12.9111 1.99988 11.2594 1.99988V2.99988C12.3588 2.99988 13.25 3.89109 13.25 4.99046H14.25ZM1.75 4.99046C1.75 3.89109 2.64121 2.99988 3.74058 2.99988V1.99988C2.08893 1.99988 0.75 3.33881 0.75 4.99046H1.75ZM4.5 8.12488C4.5 9.78173 5.84315 11.1249 7.5 11.1249V10.1249C6.39543 10.1249 5.5 9.22945 5.5 8.12488H4.5ZM7.5 11.1249C9.15685 11.1249 10.5 9.78173 10.5 8.12488H9.5C9.5 9.22945 8.60457 10.1249 7.5 10.1249V11.1249ZM10.5 8.12488C10.5 6.46802 9.15685 5.12488 7.5 5.12488V6.12488C8.60457 6.12488 9.5 7.02031 9.5 8.12488H10.5ZM7.5 5.12488C5.84315 5.12488 4.5 6.46802 4.5 8.12488H5.5C5.5 7.02031 6.39543 6.12488 7.5 6.12488V5.12488Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10.625 5C10.625 5.34518 10.9048 5.625 11.25 5.625C11.5952 5.625 11.875 5.34518 11.875 5C11.875 4.65482 11.5952 4.375 11.25 4.375C10.9048 4.375 10.625 4.65482 10.625 5Z"
                                            fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_222_1256">
                                            <rect width="15" height="15" fill="currentColor" />
                                        </clipPath>
                                    </defs>
                                </svg></a>
                        </div>
                        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel">Upload Profile Picture</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="file" id="modal-image-upload" accept="image/*">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="save-image">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile__author--content">
                            <h3 class="profile__info--title"><b>Name</b></h3>
                            <a class="profile__info__text">{{ Auth::user()->name }}</a>
                        </div>
                    </div>
                    <div class="profile__info d-flex">
                        <ul class="profile__info--wrapper">
                            <li class="profile__info--list">
                                <h3 class="profile__info--title"><b>EMAIL</b></h3>
                                <a class="profile__info__text">{{ Auth::user()->email }}</a>
                            </li>
                            <li class="profile__info--list">
                                <h3 class="profile__info--title"><b>PHONE</b></h3>
                                <a class="profile__info__text" href="tel:+1234567898">{{ Auth::user()->phone }}</a>
                            </li>
                            <li class="profile__info--list">
                                <h3 class="profile__info--title"><b>ROLE</b></h3>
                                <a class="profile__info__text">{{ Auth::user()->role }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- dashboard container .\ -->
    </main>
@endsection
@section('jscontent')
    <script>
        // Trigger file input when clicking on the profile image
        document.getElementById('profile-image').addEventListener('click', function() {
            document.getElementById('profile-image-upload').click();
        });

        // Preview the selected image
        document.getElementById('profile-image-upload').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-image').src = e.target.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
@endsection
