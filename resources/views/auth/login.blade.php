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
    <section class="breadcrumb__section section--padding">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h1 class="breadcrumb__title h2"><span>Login </span> Page</h1>
                <ul class="breadcrumb__menu d-flex justify-content-center">
                    {{-- <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="index-2.html">Home</a></li>
                        <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z" fill="#706C6C"/>
                            </svg>
                            </span></li>
                        <li><span class="breadcrumb__menu--text">Login Page </span></li> --}}
                </ul>
            </div>
        </div>
    </section>

    <section class="account__page--section section--padding">
        <div class="container">
            <div class="account__section--inner">
                <div class="account__tab--btn">
                    <ul class="account__tab--btn__wrapper d-flex justify-content-center">
                        <li class="account__tab--btn__items"><a class="account__tab--btn__field" href="{{Route('register')}}">Sign
                                Up</a></li>
                        <li class="account__tab--btn__items"><span class="account__tab--btn__field active">Login</span>
                        </li>
                    </ul>
                </div>
                <div class="account__form--wrapper">
                    <div class="account__header text-center mb-30">
                        <h2 class="account__title">Login Here Today!</h2>
                        <p class="account__desc">Hey! Login with your details to get started
                        </p>
                    </div>
                    <div class="account__form">
                        <form method="POST" action="{{ Route('login') }}">
                            @csrf
                            <div class="account__form--input mb-30">

                                <label for="email"
                                    class="account__form--input__label mb-12">{{ __('Email Address') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="account__form--input__field form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter Email Adress" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <label class="account__form--input__label mb-12" for="email">Email Address</label>
                                    <input class="account__form--input__field" id="email" placeholder="Enter Email Adress" type="email">
                                </div> --}}
                                <br>
                                <div class="account__form--input mb-30">
                                    <div
                                        class="account__form--input__top mb-12 d-flex align-items-center justify-content-between">

                                        <label for="password"
                                            class="account__form--input__label">{{ __('Password') }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <input id="password" type="password"
                                            class="account__form--input__field form-control @error('password') is-invalid @enderror"
                                            name="password" required placeholder="Create password"
                                            autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- <label class="account__form--input__label">Your password</label>
                                        </div>
                                        <input class="account__form--input__field" placeholder="Create password" type="password">
                                    </div> --}}
                                    <br>
                                    <div class="account__sing-in__google d-flex">
                                        <a class="account__sing-in__google--link d-flex align-items-center"
                                            href="{{ url('auth/google')}}">
                                            <span class="account__sing-in__google--icon"><svg width="18"
                                                    height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <rect width="18" height="18" fill="url(#pattern0)"></rect>
                                                    <defs>
                                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                            width="1" height="1">
                                                            <use xlink:href="#image0_553_23724"
                                                                transform="scale(0.00195312)"></use>
                                                        </pattern>
                                                        <image id="image0_553_23724" width="512" height="512"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAACAASURBVHic7N15mBXVnT7w91tVd+m+3c0mS3ejuAFRwCWaaFRANDpqJDExJIIxMQq4oJkkk2R+45LcRNFkxklijKi4Ma4kRGPEJYAKAhoTNcYFlcUdGlkFml7uVt/fH4Ai0NBLVZ26Ve/nefIEbvetelWa895zTlUJiCj09Ly9qpFI94Pr9oZiy/8EPSCoArQaamUg2gOubPm9oAqQmq3vFgDddzhkDwDY+FoDRAQQUQAQCy4scQFAICUIXACAJXkARbGsZljYJCIbYVnrIFgLlVWwZAVsdwUk+V4x5b7Xbcam9cH8myGizhLTAYjiTLNw8EFtPQT7QLEvLGsAVAcAWgdIHwB9AfQGkPbj/Btfa/DjsIAILMcqwJYmy7I2iG2tgGW9BQtvCfR1deWZzKzmlf6cnIjagwWAyGd66YEpNDcOhGUNhmIwgMGA7AdgAIA6AI6pbL4VgHYQy1IrYeXEtjeII+/BthZZtr1Q7cQTlX9Z/4GxYEQxwQJA5BGdWFcJVw4B3EOgGAzBZwAZDGBfALbheLtksgDsjliWK0lrk5WwV4hYS2HLC1LSJypmt/xDADWdjygKWACIOkG/Xd8LKT0cisMBHA7gMACDENKBvi1hLQBtEdtSK2mvs5L2mxB7AZKJGZmHN7xkOhdROWIBINoDPXffNJL5I1HC0bBwLBRHANjbdC4vlFsB2BVJWCUrYa8Vx35dHOtpx7b/kJrZ+KbpXERhxwJAtAO9sH89CnoMBMcAejSAzwJIms7lhygUgF2xEnbRSjrLrYS1wEpad6cfbppjOhNR2LAAUOzpub37wU6cAAsnwsUJEOxrOlNQoloAdiSOVbKTieWSsJ9WW+6veqzpr6YzEZnGAkCxo+f0zSBtfwEuvgjBF7HlE34sfxbiUgB2JI7l2slEg5W05qklf8o81vwX05mIghbLv/QoXhQQnF93GEROA/R0AJ9DmW3W80tcC8COrIRdsFLOG2Lbf6hMNv9WZqLZdCYiv7EAUCTpD/pXYLN7LBSjAXwVEdm05zUWgJ2JJbDSzio76cyxbftXqUc3v2Y6E5EfWAAoMvTc3v3gJL8KxWiIjoJPd8+LEhaAPbNSzmYr5fzNcuSWysdaHjCdh8grLABU1nR8n74Q50yojgFkODi13yEsAB1jJeyCXZn4O2zrOu4boHLHAkBlR79d3wtJfAnQMQBOgcFb6ZY7FoDOs1JOzko5zzlpezIvM6RyxAJAZUEv7l2FXPJMiH4bwEjwk74nWAC8YSXtFjudfCIh1pXJWU0vm85D1B4sABRamoWFD+pHQdxvA3ImgIzpTFHDAuA9uyKx3konZkoyfSUfakRhxgJAoaPn1Q2GhbGAnAPo/qbzRBkLgI9E4FQkl1uVzg0VjzRdJ4BrOhLR9lgAKBT00gNTaGkaA8iFAI41nScuWACCYSXtnJ1OzrYl8cP0rE3LTOchAlgAyDA9v/+BgDsegvMA9DadJ25YAALGWQEKERYACpxm4WBF7WhALoTiiwAs05niigXAHCth5+1MapZt2T9KP9a4xHQeih8WAAqMnt+/J1C6ACKTANSbzkMsAKEgAjuTXGol7R9mHmt+xHQcig8WAPKdntd3f1j2vwM4H9zJHyosAOFiVyTWWxWpKZWPbf4ZlwfIbywA5BsdX3sExPp3qI4Dr9sPJRaAcLJTTotdkXigIp26VB7asMF0HoomFgDylGZhYXndGAA/AnCk6Ty0eywA4SaOVbIrk3Od6tQF6Qc2vm06D0ULCwB5QrNwsLx+HKCXARhsOg+1DwtAeRARdarSL6MidV7m4Q0vmc5D0cACQF2iE49IwP1wLFSvgGCg6TzUMSwAZUYETlXyDcmkz8k8tPFF03GovLEAUKfomCFJdFt/LiBXANjbdB7qHBaAMsUiQB5gAaAO2TLwfzQBwOUAak3noa5hAShzW4rAa1KR/m7m4Y0vmI5D5YUFgNpl64N5zoToNQAONJ2HvMECEBHbZgTSqe9kZm563nQcKg8sALRbCgjOr/sKBFcDGGI6D3mLBSBiRJCoSv/LTjjf5N0FaU9YAKhNen7dsRBcC2C46SzkDxaAaBIRtatT8zOV6TN4HwFqCwsA7UQn1A8C9GooxpjOQv5iAYg2K2GXnEzy/orWlu/KPBRN56FwYQGgj+lF+/RAvvifEPwAQNJ0HvIfC0A8WGmnyalOX1Y5c/PvTGeh8GABoK3X8jd8F5CrwUfyxgoLQLzYFYn1VlXi/MzM5odMZyHzWABiTs+v/xJE/xe8e18ssQDEkABOJvWqI6kz03M2LTUdh8xhAYipLU/os24A5DTTWcgcFoD4EstSuyr1h8zslm8JUDKdh4LHAhAzOvGIBLThYqhMBh/NG3ssAGSnnGYnk7qw4rGmu01noWCxAMSIju9/POBOAXCQ6SwUDiwABGDLskB16mUraX2p8pGWFabjUDBYAGJAJw6ohRZ/BdVzTGehcGEBoO2JY7lOdfq2zOPNF5jOQv5jAYgwBQTj6y6G4BooakznofBhAaBdsSsS6xNVybHpmU2zTWch/7AARJRe0H8gSu5tAEaYzkLhxQJAbRJBsjr9VEWqx2iZ2dBsOg55zzIdgLylWVg6vnYiSu5L4OBPRJ2livymlhM2b1y9rmV0ZpzpOOQ9zgBEiE7oNwSudTsER5nOQuWBMwDULgIkqiueq0z1OJGzAdHBGYAI0CwcnVB/BdR6kYM/EXlOgcKmlqM3b1q9pvlLFV8zHYe8wRmAMqfj++4H2HcDONZ0Fio/nAGgDhPAqU4/nenWerLMQN50HOo8zgCUMR1f/23AfgUc/IkoKAoUN7WObFzjrGs9vZJ3Ei1jnAEoQ3ph3z4o2rcDON10FipvnAGgrhARODUVf6mc1fw1AVzTeahjWADKjE6o/Teo3Amg1nQWKn8sAOQFuyLxUaoic0LysQ3/Mp2F2o9LAGVCf9C/QifU3gyVv4KDPxGFSKml0KNl46YXW07L/D/TWaj9OANQBnRC/SBA/wjFoaazULRwBoC85tSkXs6keh3DywXDjzMAIacTas+E6j84+BNROShuyh3a2Lh6dctpVbwRWcixAISUnrtvWsfXXQ+VPwHoZjoPEVF7ua3FTH5j07zm0zK/Np2F2sYlgBDilD8FhUsA5De7KvW22yP1uW4zNq03nYU+jTMAIaMT6r8B1Rc4+BNRFJQ25/a3Vjd/0DK6+jjTWejTWABCQsfA1vPrfgnV6QCqTechIvJKKVeszK9vmt98euYnprPQJ7gEEAJ6fv+esNz7oTjZdBaKFy4BUNAS3dKPZ2a18g6CIcACYJiO738IoH8GdH/TWSh+WADIBCeTetetTH6uZmbjWtNZ4oxLAAbphPpvAO6zHPyJKE6KTbl9ZVPL+81fqT7GdJY4YwEwQLOwdHzdtVvX+zOm8xARBa2UK1YU1jYtaD6t4nums8QVlwACpufum4advxOCs0xnIeISABknQKKG+wJMYAEIkJ7bux+c5MOAfs50FiKABYDCw6lOLcp0z31WZiBvOktccAkgIDqx/zA4ib9z8Cci2lmxMTekaX1qiR4Px3SWuGABCICeX3sK1F0IYB/TWYiIwqrYlBvQnKxYYDpHXLAA+EzH118EkZlQ1JjOQkQUdoVNLUc3n5r5kekcccAC4BMFRMfXZQGdAnBKi4iovYqbWyfruUibzhF1LAA+0DGwMb7uVgA/M52FiKjcuIVSsnVVJZ8k6DMWAI/pD/pXoFvdAwDON52FiKhcFZrz3zKdIepYADyk5+7bHY3uLABfMZ2FiKicublidctpVSNM54gyFgCP6Hl718HJzwcw3HQWIqIoULc03nSGKOPmNA/oeX33h5SeBLCv6SxERFHhuu4hpjNEGQtAF+mE+kFQfRJAf9NZiIiiRAvu3qYzRBmXALpAJ/QbAtWnwcGfiMhzWnR5/xQfsQB0kk6oPwxqzQXQz3QWIqIoUlWOUT7iv9xO0PNqj9w67d/bdBYioqgSkZLpDFHGAtBBel79F2DJEwB6ms5CRBRl4libTWeIMhaADtCJ/Y+CpbMAdDOdhYgo6qyEs9h0hihjAWgnHV97BFz3rwCqTWchIooDsa0/mc4QZSwA7aDj+x8CyCwA3U1nISKKAythlyqqmm4wnSPKWAD2QM+rGwy4swD0Mp2FiCgunEzyfpmBvOkcUcYCsBt6Qf+BsPAUeKkfEVFgrIRdrGitush0jqhjAWiDntd3f5TcpwDUmc5CRBQniUzFZJm3hlcA+Iy3At4F/W6/3rCsx8E7/BERBSpRU/FcxV83Z03niAPOAOxAJ+7fDbY1G8Ag01mIiOLErkisr6xrGWU6R1ywAGxHxwxJwm2dAeAw01mIiOLErkhslH7Jg2UaWk1niQsWgK10DGx0W38vgJNMZyEiipOtg//gqvubVpnOEicsANt0r/stIF83HYOIKE44+JvDAgBAz6+9CopLTOcgIooTO53YgO6pQRz8zYh9AdDz686DyBWmcxARxYmdTmyU2uRnqv+8ebXpLHEV6wKgE/qNhOAm0zmIiOLErkhsQJKf/E2LbQHQ8bUHQa0/A0iazkJEFBd2ZWKdu1fFAdWz+cnftFgWAJ1YtxcgDwPoYToLEVFc2JWJdW6vikHdZmxabzoLxbAA6Ln7puHiYQAHms5CRBQXHPzDJ1YFQAGBk78dwBdMZyEiigsO/uEUr2cBjK/7GYBxpmMQEcWFXZFYW1WTGSgzNmwwnYU+LTYzADqh7ssArjSdg4goLuyKxNqqbpmB8hAH/zCKRQHQ8+oGQ3EXYvLPS0RkGgf/8Iv8gKjn7VUNGw8C6GY6CxFRHHDwLw+RLgCahQUreR8UB5vOQkQUB3ZFYg0H//IQ6QKAD2p/DuB00zGIiOJg6+A/iIN/eYhsAdAJdV+GyOWmcxARxYFdmVhVVd3tAA7+5SOSBUAn1u0DxR0AxHQWIqKosysTa6pqqwfJw2sbTWeh9otcAdCJRyTgYjqAXqazEBFFnZ1JrK6qrT5Q7l2/yXQW6pjIFQC4K68D7/RHROQ7O5NYXdWveiAH//IUqQKg59eNBnCp6RxERFHnZFINVZW99+PgX74iUwD0/NoBEEwD1/2JiHzlZFIrMpW9BsrMhmbTWajzIlEA9NIDUxD5E4CeprMQEUXZ1sF/EAf/8heJAoCW5skAjjQdg4goypxMajkH/+go+wKg59eOAPAD0zmIiKJs6+A/mIN/dJR1AdBz9+0OkbtR5v8cRERh5mRSyzN757jmHzHlPXDa+ZsA7GM6BhFRVDmVWwf/aWg1nYW8VbYFQM+vPQeCs0znICKKKieT+iCzDwf/qHJMB+gMHV/fH9DrTecgIooqJ5P6ILN3bhAH/+gquxkAzcIC9F4APUxnISKKIieTej+T5Cf/qCu7AoAVtZcCGGE6BhFRFDlVqfcze+cGy+PImc5C/iqrAqAX9tsXKlebzkFEFEVOJvV+pn9uMD/5x0PZFAAFBEVrKoAq01mIiKLGyWz95M/BPzbKZxPg+PoLAT3JdAwioqhxMqn3Mz1zA2Ua8qazUHDKYgZAJ9btA+ivTOcgIooaJ5N6L9MzN1BmcPCPm7IoAHBxC4Bq0zGIiKLEqU4tzZRyB3Lwj6fQFwA9v/47AE4xnYOIKEqc6tTSTCF3sMxD0XQWMiPUBUDP798Tov9tOgcRUZQ4VaklHPwp3JsARa8F0Md0DKKQUgCrADQAWAHoCqishIW1cLEBYm2AuBtQdDdAtBWp1Ecfv3NtdZPMWJQHAB1dV9mabur78UHzbq2VL/VS2+4Ht9RXVfaCur3gos513d5w0dt1S1UoaYVbdG2oBv3PTV3gVKUWZ4q5oRz8SUwHaIuOrz8a0GcQ8lkKogCsAPAmgCVQWQqRxbCxFNr3XZn6YsFkMB2DZGtT1dEq+gWU3MPU1YFaLPV3i25PN19KmMxGO3OqU29mCrlhHPwJCGkB0CwcLK97HsBhprMQBciF4E0o/gXgXxC8BMG/ZGrDWtPBOqP59Ip6S+zT3YKOdIvFQ91CaYCbL2bACQMjnOrUG5k5uaECuKazUDiEswCMr/0+IL8xnYPIZy0AngdkISDPoOg8K9Pe3WA6lJ82ja7ey3F1rBaLp2pBDy/lCn205HKWz2dOVer1zBO5YRz8aXuhKwB6Yf96lNzXoagxnYXIYy4gL0LdWQDmwK77m+kpfNM0Cyv3YvVpbql0rpsrHVdqyfdRV0P391I5c6pSb2wd/Eums1C4hO4HTacceC/+2TzOdA4ij6wHMBPA48jLE3LXinWmA4WZnt2zpmVDbqJbKH7LbSkOcQulcG9UDjmnOrUoMyd3CD/5066EqgDosqHHwJWFeKZZ8EyL6ThEnbUSwEMQPIj6hnmS5YarzmoZnRlXypUu0Fzx86VcMW06TzlxqlOvZebkDuXgT20JTQFQhYVlw/4OxZEAgGeawRJAZeQjiP4RIvegruFZyfIvXa+1nl45uljQH7vN+aPdAq8w2B1+8qf2CE8BWHzIeIje+qkXWQIo3PIAHofo3UhnHpEblvH56QFQwGr+UtWFmitMKrXkD9IS9wxsz6lJvZKZnTucgz/tSSh+cPTNwdWwkosB1O70xb+3AE83Bx+KqG0rANwGpzRFbl612nSYONMzundvyRd+WmrJf6fUUuhpOo9p3O1PHRGOArBk6H8D8uM2v4EzAWReCcBjEPcm1H84i1P84dN8etU33dbCT0vN+YPVjd/NBpya1MuZ2bnPcvCn9jJeAHTp0AOgsghAarffyBJAZjQBuAMo/UZuW/WO6TC0Zy2ju+3nFgo3lJpyp7iFkm06TxAS1RUvVc5pOZKDP3VECArAsD9DcUa7vpklgIKzGiI3IIebeOleedKze9Y0r2/9rducH1fKFXf/AaOMJWpS/8zMzh1hOgeVH6MFQJccchSgf+tQDpYA8tdyCK5FIXmHTHu31XQY6joFrJbTM5NLjbl/L+WKFabzeClRnX4xM6f1SNM5qDwZLgDD5gI4vsNv5MZA8t4aCP4XVdbv5DfL2TAjSAGr+bSqn7tNrT8s5YqVpvN0VaIm/WJmNgd/6jxjBUCXDD0dkJmdPgBnAsgbayFyLarkJg788aCA1XJq5r+Lm1u/V673E0h0Sz+fmdX6edM5qLwZKQCqsLD0kBcB7drT/jgTQJ2XB3AzismfRf0BPLRrOrqusqXw0S2Fxty4cnogUaIm/UJmduvnTOeg8memACwd+i2o3O3JwTgTQB2jAKZD9b/k9pXvmQ5D5jWfXlGvefyx2Nh6jGq4Lx9M1KT/npnderTpHBQNgRcAXTQkiYT1BoD9PTsoSwC1zwtQa5LcvvwfpoNQ+DR/reZotzH/x2Jj696ms+xKoib9j8zs1qNM56DoCH7aKyEXwsvBHwCOrQRGlv2eHvLPBoh+HxsbjubgT22pfHDTc1VzWvdJ9sr82ErYedN5tpfoln6egz95LdAZAH1n3zQK1W8BqPPlBJwJoE9TiNwDLfxYblu9ynQYKh8bx9T0tDfmHyw25kbC8LJAoqbi2czslmONhqBICrYALD3k+1D9ja8nYQkgAFC8CwsT5NaGJ0xHofLV+qXKL+eb8ve6rcUqE+dP1KT/lpndeoyJc1P0BVYAtn76Xwag3veT8eqAOFNAboWb+5HcsbbRdBgqf3o8nJZ0xZ2FTa3fCvIZA9zwR34LrgAsGfo9QK4P6nycCYildwAZL7eteMp0EIqe1tGZk/Ob8zPclkKN3+dyuqUXVM1qHeH3eSjeAikAuvTAFLTiLQTx6X97nAmID8EMFJITeU0/+UmPh9OcrvhjYWPLV+HTZECipuK5zOyWL/hzdKJPBHMVgFsxHkEP/gBwVAVwbKRu/U07awT0HLm14Rsc/MlvMg/FzF9bvpbqVT3RSthFr4+f6Fb5BAd/CorvMwC6aEgSjr0EogP8PlebOBMQVS9ArbFy+/JlpoNQ/DR9rbJWG0tPFhtzB3X5YAIku1XcU/nXlnM8iEbULv7PACSs7xod/AHOBESRyvWwao/h4E+mZB5sXlk1J3dwolfV5K7MBthJpzXRs2oSB38Kmq8zAFvu+T9sEYDP+HmeduPGwChoAjBBbmu433QQom0aT67qY6N0f7E5P8Itlpz2vMdK2gUnk/xLRd+Wc2Qa+OhpCpy/BWDx0K9C5EE/z9FhLAHlbAm0dKbcvuo100GIdkWPh9OaqfyJW3C/4hZKB7r5Unfolr9nxRZXEtYGy7HfslPOHamZm28VwDWdmeLL5wIw7BkIwncTC5aA8iN4FJI+W6a+vdF0FCKiKPBtD4AuPvTzoRz8AT47oOzIVNQ3nMHBn4jIO+1aq+oUy/0vv66T9cRRWzcF8uqAMCtB8AO5dcUNpoMQEUWNL0sA+tZhA1EqvQkTTxvsKC4HhNVGuPiG3NEw23QQIqIo8mcGoOT+EOUw+ANblgMc4UxAuKyC4lS5o+El00GIiKLK9vqA+s5h3eG6/wcg6fWxfdM/saUEvFcwnYQU78KxTpBbVywyHYWIKMq8/5SeL50HIOP5cf12VAU3Bpq3CAnrOLll+VLTQYiIos7TGQBVCD7qOw1ALy+PG5j+iS3//4Hnt/imPXsWxeQX5bb315gOQkQUB97uAVgy7BQIBnl6zKBxT4AJz6Kl9VS5t2GT6SBERHHh7RKAYJKnxzOFywFBegZu/hS5dz0HfyKiAHl2GaC+ftAAOM5b8GFjoTF8iqC/FAuh+dPkjrWNpqMQEcWNd0sAjj0JURr8gS0zAUXlfQL88TfkS6fI3WubTAchIoojTwZsfWffNNzkXYBEb958H14i6INXodbJMm0lp/2JiAzxZgYgX3MGRPfy5FhhxNsGe2kZioWTZdqa9aaDEBHFmTebAEW/68lxwowbA72wAo57kkxb86HpIEREcdflTYC69JD+UH0XUVv/bws3BnaOYBPUGi63LX/FdBQiIvJiBkD1XMRl8Ac4E9A5BSi+zsGfiCg8ulQAVCEAvuNRlvLBEtAxqpfKbQ1zTMcgIqJPdG0GYNmwEQAO9CZKmWEJaK+r5PaVt5gOQUREn9a1AqCI/ua/3TmqAji2wnSK8FJ5ALc1/Mx0DCIi2lmn1+510ZAq2HIHyumxv37gfQLa8iZaW0fLqy0500GIiGhnnZ8BSFpfQTk+9tcPXA7Y0UdQazTv709EFF6dLwCq3/QwR/ljCdjGhco5cvvyZaaDEBFR2zpVAPSdw7oDcrLXYcoe9wQAwFVy+4pHTYcgIqLd69wMQLF4JoCUt1Ei4tjKOM8EzMfGhqtMhyAioj3rXAFQ4fT/7sRzOWA9LJwjM1AyHYSIiPasw1cB6NLDewPu7+HVcwSiqn+srg5QCMbKrQ3/MB2EiIjap+ODuFv8Brx6imDUxWVPgMrv5NaGh03HICKi9ut4ARCM8SFHdEV/T8CbqJH/Mh2CiIg6pkNPA9Q3PtMLdmIV4vTwH69E8ymCRVjWcTJ1+d9NByEioo7p2AyAnRgNDv6dE8WNgaq/5OBPRFSeOroE8GVfUsRFlPYECF7Gpp685I+IqEy1ewlAlx6YglasAVDtY554KP/lABeQY+W2Fc+ZDkJERJ3T/t38mj4JHPy9cdTWWYByLQEqN8jtHPyJiMpZ+5cARDj976Xy3ROwEnaKj/glIipz7SoAqhAoTvM7TOyUYwkQnSRT395oOgYREXVN+2YAlgw5EkC9v1Fiqpw2BgoelVtX/tl0DCIi6rr2FQCxTvE5R7yVx82CCijhP0yHICIib7R3E+BJvqag8G8MFP293LFysekYRETkjT3OAOibg6sBHB1AFgrvnoD1cO2rTYcgIiLv7HkJwE6NApDwPwoBCGcJEFwpty9fbzoGERF5px17AJTT/0ELVwlYhvqGqaZDEBGRt/ZcAJTr/0aEpQQofiZZFE3HICIib+22AOjrBw0AMDigLLQj8yVgEfZumG4yABER+WP3MwAJ+4sB5aC2mCwBiiskC9fMyYmIyE+7vwzQtUZCNKAo1KajKoCiAs+0BHnWF3B7w1+CPCH55wu/1opU6+YvQXGiinwWwL4C9JCP1nCDL1FZsRSWFNSSJhHrn7AT96nd+655WenwUu1unwaoS4a9DWC/TuckbwX5FEHFV+X2hoeCORn55dTsupqWZPLHCvmeADU7fl0+WmMiFhF5SCw7r47zQDqRuvDxbK9N7X1fm0sAuvjQenDwD5fglgPexN4NDwdxIvLPqGubJrYkUm8BcsWuBn8iigZ1S0nkc2NzLU2rj79y1bfa+77d7AHQ4V4EI48FUgLkWq79l68xWU2OuqZxqqreAsFepvMQUTDULaUk13L3qMsaHmjP97ddACw91rNU5C1/S8AH2NidO//L1JisJtckmx5VyATTWYjIAFWgkPva8Zc1zN7Tt7ZdAFSO8zQUecu/pwheJzMW5f04MPlvbXLz7wHw6h2imJNC7qRRl6+8a3ffs8sCoEsPrAF0mD+xyDPeP0WwES2t07w8IAVn1LVNE/nJn4i20XzrOSMvW3lqW1/f9QyAVB4DwPYrFHnI2+WAaXLv+nbvIKXwODW7rkZdnWw6BxGFhwCwtNDmku6uC0CJT/8rK96UAIWFKV7EoeC1JJI/4YY/ItpJsVRz/OUffn9XX2pjBkCP9DUQea/rJeAJmdrwpldxKDhf+LVWqMilpnMQUUi5hct29XJbmwA/62MU8ktXNgaK3uRtGApKqnXzl3idPxG1qVjqfeLkt/vu+PJOBUDfPLwOQG0goch7ndsYuBpS94gfcSgAihNNRyCi8BIo3KbMxB1f33kGwCrw03+56+hygOo9MvXFgn+ByFcih5uOQEThpiietuNrOxcAwRGBpCF/daQEiP1//oYhn+1vOgARhZvozrf237kAKAtAZLSvBLwoty1/JYg45A8FupnOQEThpqVizx1f28UmQGEBiJI9bQwU8NN/nNk5cQAAIABJREFUmRMgaToDEYWcuomTs419tn/pUwVA3x7aF0BdoKHIf21vDHRRstv10AgiIipfAiBfaj55+9c+PQOQt4YEGYgCtMvlAFkgd3zQYCQPEREFSlQ/9Ywfa4evHhRoGgrWjiVA9U/mwhARUaBcPXT73366AFhgAYi6T0qAQu0HTcchIqKAqPupKwGcHb7MAhAHR1UADubL2GWc/iciiokdrwT49AyAi4MDTUPmfDY9y3QEIiIK0A5XAnxcAPSdw7pD0M9MKgqcLbNNRyAiouDseCXAJzMApSI//ceGrsUBr75kOgUREQVLXB2+7dfbFQCLBSA2ZLYIXNMpiIgoWAr347H+kwIgOtBIGjLhCdMBiIgoeKKfPO13+02AOz0ogCJKdL7pCEREZICWem375fYFYN/gk1DgFB/KwNfeMh2DiIiCpyU3s+3X2xUA5QxAPPDTPxFRXKkmjs+qA2wtALpoSBUge5lNRQFZYDoAERGZIVA41pphwLYZgJS9r8lAFCAbfzMdgYiIzHHzciSwrQAoNwDGRA4591XTIYiIyBwXpSHAxwXAZQGIBX1ZhizKm05BRETmiOqBwLYCIDLAaBoKyoumAxARkWnaH/h4BkDrjGahYAheMB2BiIgMK5X6Ah9fBih8CFAclPCK6QhERGSadgM+uQ9AX4NJKBiKkr5pOgQRERnmagpgAYiTd2XIos2mQxARkWlqAYClLxyRANDDcBry3+umAxARUQio4sTJb/e1UF3sA0BM5yG/yRumExARUThIodt+Fizl9H8s6FLTCYiIKByKhcIAC67yCoBY0HdMJyAionCwRfpbfAhQTFgsAEREtEXJcmstiNvNdBDyXQk5vG86BBERhYPlSl8LalWbDkI+U1nOZwAQEdE26rq9LYjWmA5CftMVphMQEVGYSHcLYAGIPJEPTUcgIqIwKfWwAGEBiDp1WQCIiOgTiirOAMSBJatMRyAiolBJcQYgDhQsAEREtB21LQAsAFEn+pHpCEREFB6qsC0IMqaDkM/E2mQ6AhERhYdALAuKhOkg5DPVjaYjEBFReChc2wLgmA5CfuMMABERfUKgFgtAHEiJBYCIiD6mLsQClEsAUVdKtZiOQERE4bFlDwCEBSDqHBRMRyAiohARFS4BxMHmQtF0BCIiChHdUgA4AxB1TokzAERE9DFVzgDEw8GLOANAREQfEwEs0yGIiIgoWKpbCgA/HUbd60M4y0NERNsRWAB3iEde0eY+DyIi2o5yBiAWaiwWACIi+oRYagHKGYCoy9tcAiAiou0oLEBYAKLOzlWYjkBEROEhIsolgDhQu8Z0BCIiCg8BrwKICZcFgIiIPqYQ14LwKoDIE+lmOgIREYVKyYKiyXQK8plyBoCIiLYjUrQA8FnxUafSw3QEIiIKEUHBApQFIOpE+5mOQEREYSJ5CxAWgKhT9DUdgYiIwkNFcpwBiAXhDAAREX1MgBbOAMQDCwAREX1CpMWCsgDEQL3pAEREFCKKDRbEbTSdg3xXr4uGJE2HICKicFBL1lhQa6PpIOQ7GynsYzoEERGFgwBrLNhYbToIBcCV/UxHICKicFCVBgsqq0wHoSCwABAR0RaW6AoLJYsFIBZkoOkEREQUDmLhXQsru60G4JoOQ37Tg0wnICKicCi48q4lo+YVAXxkOgz5bojpAEREFAIimO/0fc/a+tsPjYahIAzQRUOqTIcgIiLDRIrIirulAAi4DyD6BLZ8xnQIIiIyzJJmANhSAJQFIBZsHGo6AhERmaWwNgHbCoBgpdE0FAy1jjQdgYiIzBKRtcDHMwD6rskwFBBRFgAiophT21oJfDwDYL1rMgwFRHGILj0wZToGERGZI658AHyyBPCO0TQUlCRK6WGmQxARkUEWFm35PwBoYgGIDZGjTUcgIiJzbDvxD2BrAZBDX2kCdK3ZSBSQ4aYDEBGRISLogZ7/BLbNAGx5lbMA8TDCdAAiIjLFKszISh7YvgAolwFiQdBPlw49wHQMIiIywN5yDwBg+wLAjYBxMtJ0ACIiMkA+eQLwdgVAlxoJQ8FTOdF0BCIiCp7a8t62X28/A/CGkTRkgJ6suv3+DyIiigNLrVc+/vXHr9rO60bSkAGyF94adrjpFEREFKwi3Pnbfv1xAZD9/rUByscCx0ZJ/s10BCIiCpAImhydt+23n54GtsBZgJh4qrXvCaYzEBFRgCzJv5ita/74tzt8mfsAYuCBpn1w26aBo8Y8e2G96SxERBQQsT91w79PFwCXBSDqHmjaBw9sHgAAllOUr5nOQ0REARF5d/vffroA2C6XACJsu8F/C5Ex5tIQEVGgxH5t+9/usARgLwoyCwXngc0DPj34b3HsWQsvqTORh4iIgqXAU9v//lMFQA58ZTWAFYEmIt890LQPHmjaZ1dfsqD69aDzEBFRsBSC3gnr0e1f29XNYF4MKA8FYKdp/x1Y0O8EGId8oEDedAYiCjexrZYZ2T6bt39t5wIgLABRsafBHwAU+Ow3F1x6aECRyAcCbDSdgYjCTS17+Y6v7VwAVFkAIqA9g/82tpQ4C1De3jYdgIjCTSCv7vjazgXAwQuBpCHfdGTwBwBVnD3xhYkJHyORn1RfMh2BiEJO8PSOL+1UAGT/11YBaAgkEHmuo4P/Vn02tzqj/chD/hMLT5jOQEQhJkCiQv+848ttPBGOywDlqJOD/xaKi71NQ0FpTVU9Bu4DIKK2iJ2ffUX9Bzu+vOsCwI2AZaeN6/zbTYETv/nMhUM9jEQB+dsPpUWh15vOQUQhZVk7Df5AmzMA9nN+ZiFv7eY6/w6xXOsiD+KQAZJv+R8Aq0znIKLwUbGf39XrbRSApr8BKPmYhzzSpWn/nX17zJyJ3bw6GAVnXrbPZkAuN52DiMJHxXl4V6/vsgDIwGWbALziayLqMo8HfwCocioS3/XygBSceZdlbofqzaZzEFF4KABJbN5pAyDQ5gwAAGChP3HICz4M/luo/seYRWOS3h+YgtC4V9X3AMwxnYOIwkEcZ+O87H6tu/pa2wVA9RnfElGX+Db4b9E/sa73OL8OTv568QIpNPbKfAnQW0xnISLzVOwlbX1tNwUgscCXNNQlPg/+AAAV/L+sZnc3O0Qh9uIFUph3WfWFgIwHsMZ0HiIyx7KtWW1+ra0vyGdeagDwji+JqFOCGPy3GvzmwjVfCeJE5J95l2VuL9gtByj0F+B9AohiRwEUFXe09fXdf8pT4T6AkAhw8AcACPRyKCSwE5IvnvnP3o1PX1b9M+Qz/VSsr6nKFIg+p8BqPkWQKNrEtlvmX92vzQ/yu/0LXpcOPQ8qt3sfizrigc0DPLnOv6NEcOZ9x015MPATE5EnRl3ecAvyuYmmc5AhieQ/515Tf0RbX97DOq812+s81DFe3eSnM1TxizF/HGMbOTkRdckR2YZKFAu8rDfOLGlz/R/YQwGQga8sB7DY00DUbkFP++/CEKffXmNNBiCizqkpyDS4Lp/yGVMKwIFz5+6+pz07vTkLYEAIBv8tLLmK9wUgKi8nZxv7SDF/pukcZI7Ydsucq/ss3d337LkAiPCmIgELzeAPAIp9nXV7XWA6BhG1X6HYeLe6Li/ljTMrsce7+e75D0gpNw9AwYM41A6hGvy3Efn5t/8+qZfpGES0Zyf8R8MAzedPMp2DzLIsa8Yev2dP3yCfWdwIgE8HDEAoB/8tehTz+lPTIYhoz9yUThdVXsIbZwIkHefWPX1be6eIuAzgsxAP/gAABS4eu3DSENM5iKhtJ1656gso5I82nYMMsxOrH8/22rSnb2tfAVD3r10ORG16YPOAUA/+WzlQvc50CCJqm1vMP8iP/qS2Pb8939e+AjBo0QsAlnclEO2ayev8O+GUs+Zf/HXTIYhoZ6MuW3UlisV+pnOQeQlYe5z+B9pZAESgAB7tUiLaSdin/XdFBDecO/f73U3nIKJPjM5u2gulHPfpEFSswpyr+7br8v32XyaieLjTiWgn5Tj4b9Wv1c5fZToEEX2iMd84E27JMZ2DzBPHebW939v+AmC1PAmgsTOB6NPKePAHAIjg4rHPTPqC6RxEBJx0xaqTpVjgxj/awrb/r73f2u4CIAOX5QDeFKiryn3w38qC6i2nPnZpynQQoljLqlUo5adD1XQSCgEVUbVbprb3+zt2pyguA3RJRAb/LRTDuleXsqZjEMXZyOLKO6VY7GE6B4WD2Ml35mX3a23v93esALj5RwAUOxqKIjb4f+InYxdefJzpEERxdNIvPhpp5QrnmM5B4aGOdOjx7R0qAHLQm+sAPNOhRFQu1/l3hgXVaWPmXlxlOghRnByffSddbN78CODysn/aQgR2uqVD92rp+MMiRP7Y4ffEWJld598JcoCTkGtMpyCKEymkZqFUZPGmT1j2h09evv+qDr2l42exZ4DLAO0S0Wn/naleMm7+pK+YjkEUB8dfvvI7KORHmM5BIeM4f+7oWzpcAGTgS2sAfbKj74ub2Az+W4iK3jnumUmx+QcmMuHkbGMfKeZv5a5/2lFGi5M7+p5OPi9a/tC598VDzAb/bXqoq3cfPzfLm5EQ+SSf37gQrpswnYNCxkk0PDJ57xUdfVvnCoC0PACg3ZcaxElMB/9thtc5q35mOgRRFI264sObpVAYaDoHhY8r9gOdeV+nCoAMXLYJilmdeW+UxXzwBwAo5PKx8y8803QOoigZdeWacci3XGA6B4WPAnAyLR2e/gc6vQQAQLgMsD0O/h8TiHXn2fMvONh0EKIoOD774VDkWu4Cl/1pV5zE8o7u/t+m8wWgBQ8D2Nzp90dIhK/z76xqV+wHx8yZ2M10EKJydkS2oVJyhQXQkm06C4WU5Uzr9Fs7+0Y59JUmAH/q7PujIvrX+XfaYCftTIOCNyoh6qSagv4DxSIfv027ZlluY8K9ttNv7+Lp7+zi+8sap/336IyxCyZ1am2KKO5GXf7hLcjnh5jOQeGljvPyi9m65s6+v0sFQAa9Oh/A4q4co1xx8G8n0f8aN3/SRaZjEJWTE6748FIUWieazkHhprD/pyvv7+oMAAC5u+vHKC8c/DtGRX/3zWcuPtl0DqJyMCLb8DXNtV7Pm/3QbllW7unJ/e7v0iG6HEJlGoBSl49TJjj4d4pjuZgxdv5Fh5gOQhRmIy5fPcJpKcwAlHtnaLfUSc7u6jG6XABk8MsroJjT1eOUAw7+XVIDkcfHLbhof9NBiMLoxOzKg+1iyxPquh7MzFKUKQRIyGVdPY43f9AsjfxmQA7+nqhTyJyzFl5SZzoIUZgMn/xurdtaeJ63+aV2cZzl87L9XuvqYTxqmq1/AbDGm2OFD6/z99T+ou6sb/99Ui/TQYjCYEx2dZWz2XkVpVKl6SxUHtSyb/DiOJ4UABm4LAfF7V4cK2x4nb8vhhby+uiYuRfzeeYUa0dkGyrXtuYWo1hgIab2sayCJPr92pNDeXEQAIDj3oSIbQbktL+vjrId/evZz11aYzoIkQljsquranKlZSgVuSRG7WcnnpqXlaIXh/KsAMgBi94H8KhXxzONg7//BHKsWyg9zhJAcXNqdl3NmtbCUhSLtaazUHnJwfl/Xh3L292mojd6ejxDOPgH6hi3UHpq3IKLepgOQhSE0dlNe7XmWt6WUr6f6SxUXtRJLH/2mj7/8up43haAA1+bgzK/MyAHfyOOUMjjLAEUdaOzm/banNvINX/qFMtJeHprdU8LgAgUIjd7ecwgcfA36iiFtfDsuZf2Nx2EyA8nZxv7NLZuXIJisafpLFSGbLvlqav6ejq+en/DCceaBqDJ8+P6jIN/GOjBrlNa+K2FFw02nYTIS8dctvqwQutH70ipyFku6hw76flt9z0vALLfvzYAepfXx/UTr/MPlQEltZ49e+FFR5sOQuSF469YdUaq1Po8r/OnTrMsVxOp//T8sF4fcAu5DmVySSCv8w8j7emqzB63cNJpppMQdcUJV676keRaH4RbckxnoTJmJxbMy/bY4PVhfSkAMujVtwF9yI9je4nT/qFWraoPj1twkeetlygIoy7/8A7NtfwP4PLBPtRpCkEOzvf9OLZvfzB18ZDPQax/+HX8ruLgXz4UMrWmonDJ1COnFkxnIdqjrFqj8iufQiE30nQUioBEcsnca+p92Rfl21OnZPCi5wFd6Nfxu4KDf3kR6MTGFufhc+d+v7vpLES7c+Lkt/sen294l4M/eUEBFJ3kD/06vr+PnRS5ztfjdwIH/7J1St4pvHzWwkuONB2EaFeOv6LhFLcx8a4U8nubzkLRII6zcsEvevt2h11/C8CBrz4M4A1fz9EBHPzLm0L3EXUXjF1w0XdNZyHa3glXrPql5AqPoVRMm85C0WHZ9s/9PL7vm1N08bAJEEz1+zx78sDmAdztHyUiNxR7rP7RjCEz8qajUHwdn30nLfn0XBRaedkqect2Ns795d6+Lnv6OwMAAI3JaVB5z/fz7AYv9Ysg1Uud9b2fHff0BQNNR6F4Gnnlys+h1VnNwZ/84Cac6/0+h+8FQI58sQAL/+33edrCaf9IO0It+8WxCy/6jukgFC8H/nnSNU1Vy56RUrHadBaKIMtpedru5+v0PxDAEgAA6KIhSTj2EogGOhJz8I8PgdwnCeuie4++YZPpLBRdhz92ae81re7c5a0yBAAOef8s9FpXbzoWRU0q/T9zr679id+n8X8JAIAMWZQHNNArAjj4x4tCx7mF0ptjF1w82nQWiqbBD1303SWbdfm2wR8AXtlnOtb1WmEyFkWN7bSq0++yIE4V2B2qdOmBKWjFWwB8r8sc/GNNAdxmJewfcTaAvHDYn8/tvlarHlvRii9oG9/DmQDyTECf/oGAZgAAQAYuywHq+14ADv6xJwAmaMF9ddz8S/7NdBgqb4MfveTCZfmqVct3M/gDnAkgj1hWLqhP/0CAMwAAoO/sm0ahehl8mgXg4E87UugjcOXi6SOnfGA6C5WPQXMn7tW8KTVzRZMevbuBf0ecCaCu0HT6unlX1f44qPMF/pAKXTzsEghu8Pq4vM6f2iTYqCo/La1cfeOMb8woi6dUkjkHzLzktw3NeklLSezOvP/wd7+F7h/19ToWRZ1tt8xN712FrLhBnTL4AvDCEQnU5N8AcIBXx+Qnf2oXwUtawiXTR0551nQUCp9DZl46ekVOp63Lo2eXj8WZAOogTVZcOW9yv6uDPKeRx1Tq0mFnQ3GPF8fi4E8dpABmCPS/7ht+09umw5B5Qx+79ICPWt0HGlrl0I5M9+8JSwC1WwB3/dsVMwVAYWHpsBcAHN6V43Dwpy4oKOROKRYuv3/U1LWmw1Dwhsy9uKppo9zV0Cpn5F1//i5kCaD2sFKpC5+8uu6WoM9rpAAAgC4edioEj3X2/Rz8yROKdWrhl03p4pSZR05tNh2H/Hf83KyzsnHt9R+0YmJzEY7f52MJoN1yEg1zr+1v5A+IsQIAALr4kKcgOqqj7+PgTz5YpYpflZzUzTOO+U2L6TDkvePnZp0PNq+9bnWLXtBYlECf2scSQLskANIVZ8z9Rb+/mDq9Mbr40M9D3Oc6koODP/lspUJ+2VRRuI0zAtFwxC0TE5tqE/+7slUmbi4iZSoHrw6gnSSSS+ZeUz/Y1OmNFgAA0CWHPADo19rzvbzUjwK0VoAbC2rfOGPEDWtMh6GOO+zP53bfKFXXr87p2KaSJEznATgTQNuzNJeo+Oyz1/T5l6kEISgAw/YHsAjAbqfk+MmfDGlR0WmOJb++55gpy0yHoT0bOufig5qa8LuVrdYJrW5wdzttL5YAAgBNpObMu6buZJMZjBcAANAlw34J4D/b+joHfwoBV4BZrujNpYa1j/KGQuHzmYcvHruxKNnVORlU8vJ6Ph+wBMScZZeqKrr3m5mtMXoFUjgKwJuDq2ElFwOo3fFrHPwpbATyvkKnFou4fcaoKR+azhNnRzzw/dpNieLkj/J65tq81JjO0xEsAfGlqYrr513d7/umc4SiAACALh16HlRu3/41Dv4UckWF/lXEujtVaHp42qhpraYDxYLCGvTYpIsa87h0TU4GFX26hj8ILAExZDub56b7dwvylr9tCc0PztabAz0H4HMAB38qOxsAzFDRuz9zbN9nspI1/sMdNQfNnPTVphL+Y11ejmoK4Pr9oPDqgPhQAEimz503ufb/TGcBQlQAAECXDT0Grix8oGkf4eBPZexDAH9xLTzYLVWcO/XIqQXTgcqSwhr88CXjmhUTNuT180Ffux8kzgTERCL1+txr6oaYjrFNqAoAANz9whn3PdZSN9Z0DiKPfCTQRxTyeFHtJ3hJ4e4N+esPehbyxQsbizpuQ0E/09kn8pUjloBoUxG1KzOfeTLbe4npLNuErgCctfCSOlH3DQBltaGHqB1cAP+EyhzAnVXstfZvM4bMyJsOZdIRt0xMNPZPn5UrlMZtLsrnNxTQM+w7+P3EEhBhyfTdcyfXftt0jO2FrgAAwNiFk74P1d+YzkHks1YALyjkGYE+k0jKs3cddeM606H8NPSJf++bby6Nay3h1GbFIZvy6OPXg3jKFUtABNmJJk3Xd5+XlaLpKNsL5Q/e8XOzTq2z+nkAh5nOQhQgBbAE0JcE+FfJkpeScP9197E3rzYdrDOGPnTx3vmEfDlfwohcEYc0l2TApgIqYvwBv91YAqJDAVip9HlPXV17p+ksOwplAQCAsxdedLSr8gwQvjt5EQWsASJviqtLVHQpIEtt0SW5HmvfMb2EcMTMiZXNbuLYInBUQTCsUJKBeVfrm4rSs7kUnZ36JvDqgIhIpl6eO7kulB9mQ1sAAOCsBZNuEehE0zmIQmwVoB9CZDkUDQqssATr1NUNllgbXNENrrgbbFeaNZFskkI+DwDJYkvLtvsWHPjYpTWVRe0FAHk7l4A4tSg4vVwp9XPV6uNauhdK6FWA9Cuq9im66JV3pSrnIp0rweYnev9wJqDMWXaxWOPus+DyfVeajrIroS4A4xZc1EMhbwLoYzoLURTd/wEn2MKOJaB8Sapi8lNX97vCdI62hPqn/77hN30kwI9N5yAiMuWVfaZjXa8VpmNQRzmJ98I8+AMhLwAAcN/wKXdB5WHTOYiITGEJKC8qoppyTjedY09CXwAAQC25CFtutUpEFEuv7DMdG3qsMh2D2iORvH1ett9rpmPsSVkUgOnH/b5BoG0+LpiIKA5e2vcezgSEnZNYPW9y3QTTMdqjLAoAANx33E23imK26RxERCZxOSDERNR17NBP/W9TNgUAAnVL7gUANpuOQkRkEktASDkVU56+qvZ50zHaq3wKAIDpo25+F6qXmc5BRGQaS0DI2M6Hc6/pe4npGB1RVgUAAAYP73sjgKdN5yAiMo0lIBzEsl1NJ04ynaOjyq4AZCXrWkX7WwA+Mp2FiMg0Xh1gnptM/Locdv3vqOwKAADcO+qG5VD9nukcRERhwKsDDEoklsy7qrYsb1hXlgUAAO4fcdM9AO43nYOIKAy4HGCAZRWKmeLxpmN0VtkWAABIFZMXA3jPdA4iojBgCQhYsuLCsD7opz3KugBMG/XbDSp6DoCS6SxERGHAEhAMTacfn3tVnztM5+iKsi4AADD9uJsWQPTXpnMQEYUFS4DPHGdjb7vfGaZjdFXZFwAAKPZYe4UqyubmC0REfuPVAT6xLBdO+sQZWcmbjtJVkSgAM4bMyJes4tehWGc6CxFRWPDqAG8pACRTV869qveLprN4IRIFAABmHDf1fUvkXGz9b0RERFwO8FQitWDuVf2uMR3DK5EpAABw7/AbH4Hq9aZzEBGFCUuABxxnQ+9k7RdNx/BSpAoAAFRXln4C4FnTOYiIwoQloAvEcu2K1AlRWPffXuQKwNQjpxbUxVncD0BE9GncGNhJydSPnvhpn5dMx/Ba5AoAAEwfOeUDCL4L7gcgIvoUbgzsoGTqL3Ov7vcb0zH8EMkCAAD3D58yU4BfmM5BRBQ2XA5oH00k3507ua7sr/dvS2QLAADcd9yUnwP4k+kcRERhwxKwB5bTUp2s/pzpGH6KdAGAQCuk9TwAi0xHISIKG5aAXVMRdTJVp87M1qw1ncVP0S4AAO447o5GF/I1ABtMZyEiChtuDNyZlar4yZyf9njadA6/Rb4AAMAfht+4RNQ6C3xoEBHRTrgxcDuJ9B+fuqrvdaZjBCEWBQAA7hvx+1kKyZrOQUQURlwOAJBILp57Te03TccISmwKAABMP+7GyRDcYzoHEVEYxboEOIl1mswfZjpGkGJVACDQYo815wM6z3QUIqIwimUJsK285K0j5mX3azUdJUjxKgDY8uTARNL6OoClprMQEYVRnEqAQtS1nNOf+t+690xnCVrsCgAA3HXUjets0dEAPjKdhYgojOJSAjSduuTpa+rnmM5hQiwLAADcc9xNi8WVMwDkTGchIgqjKJcABaDp9HVPX1U7xXQWU2JbAADgvpE3zhfFhaZzEBGFVVRLgCRSD867qvbHpnOYFOsCAAD3jZgyTYGs6RxERGEVtRKgieRzc6+pO9N0DtNiXwAAYPrwKT8HcL3pHEREYRWZEuAk3p+XrDvWdIwwYAHYavBxfX4I4I+mcxARhVXZ3zbYdtbulUoOQVZc01HCgAVgq6xk3WLPNecAOst0FiKisCrb2wbbzmarujB0RrbPZtNRwoIFYDszhszIV0huDIAXTWchIgqrslsOsOzWkpM45MnL9y/j6QvvsQDs4I7j7mhEsXgKgMWmsxARhVXZlADLKhQrUkfNv7rfO6ajhA0LwC7cP2rqWi26pwjkfdNZiIjCKvQlwLJKJafiiwuyfV8xHSWMWADaMH3Uze9atp4IoMF0FiKisArtxkCx3FIi+eX5k/vMNx0lrFgAduOeY6YscyGjAKw0nYWIKKzCtjFQxHI1mT5z/tW1j5nOEmYsAHvwh+E3LrFc698ArDWdhYgorMKyHCBiucXKxJh5V/d9yHRdMsVpAAANAElEQVSWsGMBaId7R/7+VRf2FwFZbzoLEVFYGS8BIuqm0t+Zn6170FyI8sEC0E5/GH7Dy+qWvgg+QZCIqE2m9gSoiLqJ9Nnzrup7T+AnL1MsAB0wfeTNLwn0JM4EEBG1Leg9ASqiSKS++/TkfvcHdtIIYAHooPuG3/Ti1pkA7gkgImpDYMsBYrluZfLr8ybX/p//J4sWFoBOmD7y5pdcFyPAqwOIiNrkdwkQy3IlkTqDa/6dwwLQSX8YOeUNW3QUAPPbXomIQsq3EmDZRUklv/jU5H4zvT94PLAAdME9x920WIvucQrwFpNERG3wfGOgbecLVvK4J39RO9e7g8YPC0AXTR9187souicA+pbpLEREYeXZxkDbbrbSicMXXtvv710/WLyxAHhg+qib30UieSwEL5nOQkQUVl1eDnCcDRlbBj2ZrX3du1TxxQLgkfuPvn5VsYARophtOgsRUVh1ugTYzoetqZoDHpm8N/ddeYQFwEMzRk3ZXOi1ZjSAP5rOQkQUVh0uAU7iLU0X9/tbthvvweIhFgCPzRgyI19cuWacKG42nYWIKKzauzFQE6kFc1P1g+Zl92sNIFasiOkAUTZuwUX/qZBfms5B1Jb7P+BnADLrkPfPQq919bv8miYr7p03ud+3Ao4UG/zp99F9w2/6FVQmACiYzkJEFEa7Xg6wVFPpLAd/f7EA+Oz+ETfepiqnAthgOgsRURh9qgSIVXKTqbPnXV37c7Opoo8FIADTR9z4pOviGN4wiIho117ZZzo293l/o5tKfoEP9QkGC0BA/jByyhvJpHwOgvmmsxARhU2fFJbnDpg56Omrap83nSUuuAkwYKc+dmmqe03pNii4tkXGcRMghUH/jDy3/Ms3HAuBazpLnLAAmKCQsc9MykL1SvC/ARnEAkAmOZbqgApMfusrN15pOksc8affBIHef9yNP1PV0RBsNB2HiChoGVsLgzP6FQ7+5rAAGDR9xE2PuiqfB/CG6SxEREHZK4k1g5z0wEWjp/BRvgaxABj2h+E3LqmQ1qMAPGQ6CxGR3/pn5Lmhvfaqe+nM/33PdJa44/pzSGQ1ay1ZuOrnCrkc/O9CAeEeAAqKY6num9bfLjtjyg9NZ6EtONCEzFkLJn1VRO+EopvpLBR9LAAUhCpHW+uSxTOXnHHLY6az0Cf40x8y04ff+GcRORTA301nISLqqn4pfbuud2FvDv7hwwIQQvcde+N7GxrtkQL8znQWIqLOSFiqB1TqDR+eeeMBS0ZNXWs6D+2MSwAhN3b+RWdA5A4APUxnoejhEgD5oVtCm+vT+PLro2980nQWaht/+kPu/hE3PSSWHA4uCRBRGaitwBv999K+HPzDjzMAZWLLLYTd/4HqJeB/N/IIZwDIKwkLuk9ar3vrjBt/YjoLtQ8HkjIzbv4l/6bi3gmg1nQWKn8sAOSFnkms71spX3rjtBueM52F2o8//WXmvhG/n5UqJg8GwMdlEpFRtgADMu7jh/z/9u7/t6q7juP46/0559wvvbft7bi0fBsMCSJRCcMlCjpDSRcjpRTUy2iXEoZS6IAME0yI8ctN2FxIFje+lWxINLqIcYtRozNzzlJaB3NLGAulpeyb4tjYYOIA6dre8/YH/IIiA8q993PPva/HH9C80i/3PPM5956OStbw4h88PAEIsOaue5YpsB1Aue0tFEw8AaCRSnh6bkzMfLFv/rbf2t5CI8O//gD78e3tP9RhfwaALttbiKg0GAFujvqd4/XtUbz4BxtPAIpA6qcpxxub3KCQNICI7T0UHDwBoOtR7uFCTcRf9nJD+xO2t9CNYwAUkTv/sG6K8Ye/B8hc21soGBgAdC0EwPiYHKisyNzRU9t+zvYeyg4GQJFJa9r0db+zVqDfARCzvYcKGwOArqbSxYWamFnVX7/1R7a3UHYxAIrU0o7Vt4hrdgGos72FChcDgK7EATAh5v9GKqq/8HptesD2Hso+BkAxU0hzd9tKhWwGkLA9hwoPA4D+n2QYJ5MhXdzXsGO/7S2UOwyAEpB69ss3OZnIAwJdCf7M6RIMALpUxEFmfAS7X2ncvsr2Fso9XgxKSHPnms+q0XYAH7W9hQoDA4AAQAQYE0FvtevdcajhoTds76H8YACUmNYXWr1zF9x7FLgPQNz2HrKLAUCVHi6M8TJrji7a+X3bWyi/GAAlqqVz7eQhk9kqkAW2t5A9DIDSFTbwx0VlT9n7b63oWfL4oO09lH8MgBLX3NVWpyLfheLjtrdQ/jEASo8RYGxYD1UZbTi8qP247T1kDwOAMLcj7Y5zT65QyCYA1bb3UP4wAEpLMoKTo0Km6eiCrR22t5B9DAD6t+Ud6xMD7tBGga4HELa9h3KPAVAaKj39+9iwbOxbuH2b7S1UOBgAdJnmzlVT1bj3A5qyvYVyiwFQ3CIOMuMi/p6JFdV3761ND9veQ4WFAUBXtLS77XYoHhDIp21vodxgABQnz0DHRvy9kcrhJf21j56yvYcKEwOArqq5q60OkM0KzLK9hbKLAVBcXFHUhHEoERlu7pn/yBHbe6iwMQDo2lx8rPCXFHIfgA/bnkPZwQAoDgZATRS9FSaz9Gjjzpds76FgYADQdbn4ICHnboV8E8AE23voxjAAgs1AUR2Vw6NCfktPffuLtvdQsDAAaERSPamQ9+7opQp8A8BU23toZBgAwWQEqA7pq4mov6Jv/s5O23somBgAdEPmdqTdsd7Ju6DydfDWQOAwAILFQFETQX/Cwcrexh37bO+hYGMAUFakNW2Odr9dL0CabxYMDgZAMLhGtSaElxKuu7Jn4Zbnbe+h4sAAoOxSSFNXWyNEvgZgju059MEYAIUtbJBJhvT3Cc/9Sk/Dlj/b3kPFhQFAOXPnvjWzHPHXK6QJgGt7D12OAVCYYo4OjQ7jVwk9v+LFxT84Y3sPFScGAOXc0o7Vt8B1Vgt0FYCE7T30HwyAwlIVwntJT7ceW7jj2xD4tvdQcWMAUN6knm6tdKLuSlGsBTDJ9h5iABQCB0B1RPsrHNl0tHH7Y7b3UOlgAFDepTVt+rtPzlOYVkAXg7cHrGEA2BNzMZgM+8+Umcy9vQ2PHLO9h0oPA4CsWtq9dpzRTItC1gC42faeUsMAyC8DRTIsf6lyse3owu0P8pifbGIAUEH45xMGF6mY1VCtBX8384IBkB8Rg8yoMLrLQu76Y/UP84l9VBD4IksFp6Vz7eQh4y8TaAsgU2zvKWYMgNxxBEiGcbzc8XdPqKi+n/+OlwoNA4AKWnNX2ycAWaaKuyAYZXtPsWEAZJcIkPDwXpXn/7LchDceanjoDdubiK6EAUCBkHr2q1HHH1gsKi0A6sA3DmYFAyA74q4OJFzdFzXet44t2vKc7T1E14IBQIHT3NVWBUiDD00J5HMAPNubgooBMHJRB5mbPD1c7urmvoXte2zvIbpeDAAKtKaO1qQ67mIRpADUgicD14UBcH1iLgarQnow7pjdfQu27ea7+CnIGABUNJo6WpNwvEUAGkS0ToEy25sKHQPgg4kAFa6ei7t6oMLow72NO39texNRtjAAqCgt71geGXSjnwGkAZBFCp1oe1MhYgBczhGg0sO7Fa52loXMpiPztx20vYkoFxgAVBKa9rXNgEG9KuoF8knwVgEABsC/xBwdqvDwSszFL0z50IP9tY+esr2JKNcYAFRyWp7aEMuUnZ/tw9QJtA7ArQBK8kpYqgEQNvArPZyIu/7eMGRXb+OOfbY3EeUbA4BKXmrfutGu8WuhOg/APABTbW/Kl1IJANdAy109FTfYH3bksZcXbn8CArW9i8gmBgDR/2g6cG8NBgdnw2AOVGYDuA1AxPauXCjWAChzMVTu6ImoowdDoj/33j+1p2fJ44O2dxEVEgYA0VWkelKh0F+Ts3yYT0ExR6G3CTDZ9q5sKIYA8IxqzJEzMQ9HokaeEZP5ybEF7b22dxEVOgYA0Qgs71ifGHCHZ0L9W0UwE8BMANMRsIcSBS0AQhcv9mfLXLwWNv7+MORnvY07nra9iyiIGABEWfL5J9eFq8qHP6bADEA+ooJpopgO4EMo0E8dFGoAeAYadfRcxMibYeP3umKeV+jvXm/c8UfeuyfKDgYAUY61vtDqnR0MTdGMThfRaQpME8VkBSYKMAEWTw1sBkDIqEaNDIQc/C0kejJs0GtcPOfK4JN99bv6rQ0jKhEMACKL0po2x/aeHgdHJ2VMZpJAJoqPSSoYr8BoEYwRRXWunmqYqwBwDTRkMBwxOB8yOO2J/6Yr8por6A8ZPTQUH97Pz9oT2cUAIAqAlqc2xBAZqPadTI2vMlohowVapUDcKOK+SIVRrVSDOBRxAHEAVZd8iTj++6ShEoDZc9zAAeCYi8fqjkFGABVVuAZDACCAb0QGBVBXcN4IzroGZxzoaSPyjuP4b4mPE57g+LCvf3Ir5NWe2vZzefrWENEI/QMKpIE9xKJLAAAAAABJRU5ErkJggg==">
                                                        </image>
                                                    </defs>
                                                </svg>
                                            </span>
                                            <span class="account__sing-in__google--text">Sign In with Google</span>
                                        </a>
                                        {{-- <a class="account__form--twitter__btn" href="#"><svg width="19"
                                                height="17" viewBox="0 0 13 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"> --}}
                                                <path
                                                    d="M11.4942 3.3125C11.4942 3.34375 11.4942 3.375 11.4942 3.40625C11.5099 3.42188 11.5099 3.44531 11.4942 3.47656C11.4942 3.50781 11.4942 3.53906 11.4942 3.57031C11.5099 3.58594 11.5099 3.60938 11.4942 3.64062C11.5099 4.4375 11.3614 5.25781 11.0489 6.10156C10.7364 6.94531 10.2833 7.70312 9.68956 8.375C9.11143 9.03125 8.38487 9.57812 7.50987 10.0156C6.63487 10.4375 5.63487 10.6406 4.50987 10.625C4.1505 10.6406 3.80675 10.625 3.47862 10.5781C3.1505 10.5156 2.82237 10.4453 2.49425 10.3672C2.16612 10.2734 1.85362 10.1562 1.55675 10.0156C1.2755 9.85938 0.994246 9.70312 0.712996 9.54688C0.775496 9.53125 0.822371 9.53125 0.853621 9.54688C0.900496 9.5625 0.955184 9.57031 1.01768 9.57031C1.08018 9.55469 1.12706 9.55469 1.15831 9.57031C1.20518 9.57031 1.25987 9.5625 1.32237 9.54688C1.60362 9.5625 1.88487 9.54688 2.16612 9.5C2.44737 9.4375 2.713 9.36719 2.963 9.28906C3.213 9.21094 3.45518 9.10156 3.68956 8.96094C3.93956 8.82031 4.16612 8.67188 4.36925 8.51562C4.10362 8.5 3.84581 8.45312 3.59581 8.375C3.34581 8.29688 3.11925 8.17969 2.91612 8.02344C2.72862 7.85156 2.55675 7.67188 2.4005 7.48438C2.25987 7.28125 2.15831 7.04688 2.09581 6.78125C2.11143 6.8125 2.14268 6.82812 2.18956 6.82812C2.23643 6.8125 2.2755 6.8125 2.30675 6.82812C2.338 6.84375 2.37706 6.85156 2.42393 6.85156C2.47081 6.83594 2.50206 6.83594 2.51768 6.85156C2.59581 6.83594 2.65831 6.83594 2.70518 6.85156C2.75206 6.85156 2.80675 6.84375 2.86925 6.82812C2.93175 6.8125 2.98643 6.80469 3.03331 6.80469C3.08018 6.78906 3.13487 6.77344 3.19737 6.75781C2.9005 6.71094 2.63487 6.60938 2.4005 6.45312C2.16612 6.29688 1.95518 6.11719 1.76768 5.91406C1.59581 5.71094 1.463 5.47656 1.36925 5.21094C1.2755 4.92969 1.22081 4.64844 1.20518 4.36719C1.22081 4.33594 1.22081 4.32812 1.20518 4.34375C1.22081 4.32812 1.22081 4.32031 1.20518 4.32031C1.20518 4.32031 1.213 4.3125 1.22862 4.29688C1.29112 4.35938 1.36925 4.40625 1.463 4.4375C1.55675 4.46875 1.64268 4.5 1.72081 4.53125C1.81456 4.5625 1.91612 4.58594 2.0255 4.60156C2.13487 4.60156 2.22862 4.61719 2.30675 4.64844C2.16612 4.52344 2.01768 4.39062 1.86143 4.25C1.72081 4.10938 1.60362 3.94531 1.50987 3.75781C1.43175 3.57031 1.36143 3.38281 1.29893 3.19531C1.23643 3.00781 1.213 2.79688 1.22862 2.5625C1.213 2.46875 1.213 2.36719 1.22862 2.25781C1.25987 2.13281 1.28331 2.02344 1.29893 1.92969C1.33018 1.83594 1.36925 1.73438 1.41612 1.625C1.463 1.51562 1.50987 1.42187 1.55675 1.34375C1.86925 1.70312 2.20518 2.03906 2.56456 2.35156C2.93956 2.66406 3.34581 2.92969 3.78331 3.14844C4.22081 3.36719 4.67393 3.54688 5.14268 3.6875C5.61143 3.8125 6.11143 3.88281 6.64268 3.89844C6.61143 3.86719 6.59581 3.82812 6.59581 3.78125C6.61143 3.71875 6.61143 3.67187 6.59581 3.64062C6.58018 3.59375 6.57237 3.54688 6.57237 3.5C6.57237 3.4375 6.56456 3.39062 6.54893 3.35938C6.56456 3 6.63487 2.67969 6.75987 2.39844C6.88487 2.10156 7.05675 1.84375 7.2755 1.625C7.50987 1.39062 7.7755 1.21094 8.07237 1.08594C8.36925 0.960938 8.68956 0.890625 9.03331 0.875C9.20518 0.890625 9.37706 0.914063 9.54893 0.945312C9.72081 0.976562 9.87706 1.03125 10.0177 1.10938C10.1739 1.17188 10.3224 1.25 10.463 1.34375C10.6036 1.4375 10.7208 1.54688 10.8146 1.67188C10.9708 1.64063 11.1114 1.60937 11.2364 1.57812C11.3614 1.54688 11.4942 1.5 11.6349 1.4375C11.7755 1.375 11.9005 1.32031 12.0099 1.27344C12.1349 1.21094 12.2677 1.14062 12.4083 1.0625C12.3458 1.21875 12.2833 1.35938 12.2208 1.48438C12.1583 1.60937 12.0724 1.73438 11.963 1.85938C11.8692 1.96875 11.7677 2.07031 11.6583 2.16406C11.5646 2.25781 11.4474 2.35156 11.3067 2.44531C11.4317 2.41406 11.5489 2.39063 11.6583 2.375C11.7833 2.35937 11.9083 2.33594 12.0333 2.30469C12.1583 2.25781 12.2755 2.21875 12.3849 2.1875C12.4942 2.15625 12.6114 2.10156 12.7364 2.02344C12.6427 2.16406 12.5489 2.28906 12.4552 2.39844C12.3771 2.50781 12.2755 2.625 12.1505 2.75C12.0411 2.85938 11.9317 2.96094 11.8224 3.05469C11.7286 3.13281 11.6114 3.22656 11.4708 3.33594L11.4942 3.3125Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            {{-- <span class="visually-hidden">Twitter</span> --}}
                                        </a>
                                    </div>
                                    {{-- <p class="account__form--condition position-relative m-0">
                                        <label class="account__form--condition__label" for="condition">I agree to all Terms & <span>Condition</span> and Feeds</label>
                                        <input class="account__form--condition__input" id="condition" type="checkbox">
                                        <span class="account__form--condition__checkmark"></span>
                                    </p> --}}
                                    <button type="submit" class="account__form--btn solid__btn">
                                        {{ __('Login') }}
                                    </button>

                                    {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                                </div>
                                {{-- <button class="account__form--btn solid__btn">Login Here</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="/">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
</body>
