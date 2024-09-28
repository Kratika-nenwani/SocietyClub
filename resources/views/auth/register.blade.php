<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Society Portal</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/society-logomob.png">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="container">
        <section class="breadcrumb__section section--padding">
            <div class="container">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__title h2"><span>Sign </span> Up</h1>
                    {{-- <ul class="breadcrumb__menu d-flex justify-content-center">
                        <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="index-2.html">Home</a></li>
                        <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z"
                                        fill="#706C6C" />
                                </svg>
                            </span></li>
                        <li><span class="breadcrumb__menu--text">Sign Up </span></li>
                    </ul> --}}
                </div>
            </div>
        </section>
        <section class="account__page--section section--padding">
            <div class="container">
                <div class="account__section--inner">
                    <div class="account__tab--btn">
                        <ul class="account__tab--btn__wrapper d-flex justify-content-center">
                            <li class="account__tab--btn__items"><span class="account__tab--btn__field active">Sign
                                    Up</span></li>
                            <li class="account__tab--btn__items"><a class="account__tab--btn__field"
                                    href="/">Login</a></li>
                        </ul>
                    </div>
                    <div class="account__form--wrapper">
                        <div class="account__header text-center mb-30">
                            <h2 class="account__title">Sign Up Today!</h2>
                            <p class="account__desc">Hey! Enter your details to make an account
                                & become our partner</p>
                        </div>
                        <div class="account__form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="account__form--input mb-30">

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="account__form--input__label mb-12">{{ __('Name') }}</label>

                                        <div class="col-md-12">
                                            <input id="name" type="text"
                                                class="account__form--input__field form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required autocomplete="name"
                                                placeholder="Enter your name*" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- </div>
                                    <label class="account__form--input__label mb-12" for="name">Your Name</label>
                                    <input class="account__form--input__field" id="name" placeholder="Enter your name*" type="text">
                                </div> --}}

                                        <div class="account__form--input mb-30">
                                            <br>

                                            <label for="email"
                                                class="account__form--input__label mb-12">{{ __('Email Address') }}</label>

                                            <div class="col-md-12">
                                                <input id="email" type="email"
                                                    class="account__form--input__field form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" placeholder="Enter Email Adress">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
<br>
                                            {{-- <label class="account__form--input__label mb-12" for="email">Email Address</label>
                                    <input class="account__form--input__field" id="email" placeholder="Enter Email Adress" type="email"> --}}

                                            <div class="row mb-3">
                                                <label for="phone"
                                                    class="account__form--input__label mb-12">{{ __('Phone Number') }}</label>
                                                <br>
                                                <div class="col-md-12">
                                                    <input id="phone" type="text"
                                                        class="account__form--input__field form-control @error('phone') is-invalid @enderror"
                                                        name="phone" value="{{ old('phone') }}" required
                                                        autocomplete="phone" placeholder="Enter your phone number*"
                                                        autofocus>

                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="account__form--input mb-30">
                                                <br>
                                                <label for="password"
                                                    class="account__form--input__label mb-12">{{ __('Password') }}</label>
                                                <div class="account__form--create__password position-relative">
                                                    <div class="col-md-12">
                                                        <input id="password" type="password"
                                                            class="account__form--input__field form-control @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="new-password"
                                                            placeholder="Create password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="account__form--input mb-30">
                                                <label for="password-confirm"
                                                    class="account__form--input__label mb-12">{{ __('Confirm Password') }}</label>
                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password"
                                                        class="account__form--input__field form-control"
                                                        name="password_confirmation" required
                                                        autocomplete="new-password" placeholder="Confirm password">
                                                </div>
                                            </div>


                                            {{-- <label class="account__form--input__label mb-12" for="password">New
                                                    Password</label>
                                                <div class="account__form--create__password position-relative">
                                                    <input class="account__form--input__field" id="password"
                                                        placeholder="Create password" type="password">
                                                    <button class="account__form--password__show--icon"><svg width="16"
                                                            height="10" viewBox="0 0 16 10" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8 10C2.76587 10 0.170875 5.437 0.063 5.24288C-0.021 5.09175 -0.021 4.90812 0.063 4.757C0.170875 4.563 2.76587 0 8 0C13.2341 0 15.8291 4.563 15.937 4.75712C16.021 4.90825 16.021 5.09188 15.937 5.243C15.8291 5.437 13.2341 10 8 10ZM1.08837 4.99925C1.68313 5.90062 4.01825 9 8 9C11.9944 9 14.3191 5.90312 14.9116 5.00075C14.3169 4.09937 11.9818 1 8 1C4.00562 1 1.68087 4.09688 1.08837 4.99925ZM8 8C6.34575 8 5 6.65425 5 5C5 3.34575 6.34575 2 8 2C9.65425 2 11 3.34575 11 5C11 6.65425 9.65425 8 8 8ZM8 3C6.89725 3 6 3.89725 6 5C6 6.10275 6.89725 7 8 7C9.10275 7 10 6.10275 10 5C10 3.89725 9.10275 3 8 3Z"
                                                                fill="#817F7E"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div> --}}
                                            {{-- <p class="account__form--condition position-relative m-0">
                                                <label class="account__form--condition__label" for="condition">I agree to
                                                    all Terms & <span>Condition</span> and Feeds</label>
                                                <input class="account__form--condition__input" id="condition"
                                                    type="checkbox">
                                                <span class="account__form--condition__checkmark"></span>
                                            </p> --}}
                                            <button type="submit" class="account__form--btn solid__btn">
                                                {{ __('Create An Account') }}
                                            </button>
                                            {{-- <button class="account__form--btn solid__btn">Creat An Account</button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</body>
