@extends('admin.index-main')
@section('csscontent')
<style>
    .profile-photo-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }

    .profile-photo-preview {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #f3a142; /* Border color matching the theme */
        background-color: #f3f3f3; /* Background color for the placeholder */
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .upload-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #f3a142; /* Button color */
        color: white;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .upload-btn:hover {
        background-color: #d38f36; /* Darker shade on hover */
    }

    #profile_photo {
        display: none; /* Hide the original file input field */
    }
</style>
@endsection
@section('content')
    <main class="main__content_wrapper">
        <!-- dashboard container -->
        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Display success message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="dashboard__container setting__container">
            <div class="add__property--heading mb-30">
                <h2 class="add__property--heading__title">Settings Page</h2>
                <p class="add__property--desc">We are glad to see you again!</p>
            </div>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="setting__page--inner d-flex">
                    <div class="setting__profile my-profile">
                        <div class="setting__my--profile">
                            <h3 class="setting__profile--title">My Profile</h3>
                            <div class="setting__profile--author d-flex align-items-center">
                 <div class="profile-photo-container">
    <!-- Profile Photo Preview -->
    <div id="profilePhotoPreview" class="profile-photo-preview">
        <img id="previewImage" src="https://via.placeholder.com/150" alt="Profile Photo" style="border-radius: 50%; width: 100%; height: 100%; object-fit: cover;">
    </div>

    <!-- Custom Styled Upload Button -->
    <label for="profile_photo" class="upload-btn">Upload Profile Photo</label>

    <!-- File Input -->
    <input id="profile_photo" name="profile_photo" type="file" accept="image/*">
</div>
                                {{-- <div class="setting__profile--author__text">
                                    <h3 class="setting__profile--author__name">Edit your photo</h3>
                                    <div class="setting__profile--author__btn d-flex">
                                        <button class="delete">Delete</button>
                                        <button class="update">Update</button>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="setting__profile--inner">
                                <div class="add__listing--textarea__box mb-15">
                                    <label class="add__listing--input__label" for="bio">Bio</label>
                                    <textarea class="add__listing--textarea__field" id="bio" name="bio" placeholder="Type Bio Here.........."></textarea>
                                </div>
                                <div class="add__listing--input__box mb-20">
                                    <label class="add__listing--input__label" for="email">Email-Address</label>
                                    <input class="add__listing--input__field" id="email" name="email"
                                        placeholder="Email-Address" type="email" value="{{ Auth::user()->email }}"
                                        readonly>
                                </div>
                                <div class="add__listing--input__box">
                                    <label class="add__listing--input__label" for="user">User Name</label>
                                    <input class="add__listing--input__field" id="user" name="user"
                                        placeholder="user2413@gmail.com" value="{{ Auth::user()->email }}" type="email">
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="setting__profile edit-profile">
                        <div class="edit__profile--step">
                            <h3 class="setting__profile--title">Edit Profile</h3>
                            <div class="setting__profile--inner">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                         <div class="add__listing--input__box mb-20">
        <label class="add__listing--input__label" for="first_name">First Name</label>
        <input class="add__listing--input__field" id="first_name" name="first_name" placeholder="First Name" type="text" value="{{ old('first_name', Auth::user()->first_name ?? '') }}">
    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                         <div class="add__listing--input__box mb-20">
        <label class="add__listing--input__label" for="last_name">Last Name</label>
        <input class="add__listing--input__field" id="last_name" name="last_name" placeholder="Last Name" type="text" value="{{ old('last_name', Auth::user()->last_name ?? '') }}">
    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="edit__profile--step">
                            <h3 class="setting__profile--title">Personal information :</h3>
                            <div class="setting__profile--inner">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="email2">Email Address :</label>
                                            <input class="add__listing--input__field" id="email2"
                                                placeholder="Email Address" type="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="contact">Contact Details</label>
                                            <input class="add__listing--input__field" id="contact" name="contact"
                                                placeholder="Contact Details" type="text"
                                                value="{{ old('contact', $profile->contact ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="language">Language:</label>
                                                {{-- <select class="add__listing--form__select">
                                                    <option selected="" value="1">English</option>
                                                    <option value="2">Arabic</option>
                                                    <option value="3">Bangla</option>
                                                </select> --}}
        <input class="add__listing--input__field" id="language" name="language" placeholder="Enter the preferred language" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="add__listing--input__box mb-20">
                                         <label class="add__listing--input__label" for="country">Country:</label>
                                            {{-- <div class="select position-relative">
                                                <select class="add__listing--form__select">
                                                    <option selected="" value="1">United</option>
                                                    <option value="2">Arabic</option>
                                                    <option value="3">Bangladesh</option>
                                                </select>
                                            </div> --}}
                                              <input class="add__listing--input__field" id="country" name="country" placeholder="Enter the Country" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="add__listing--textarea__box mb-20">
                                            <label class="add__listing--input__label" for="about_me">About Me</label>
                                            <textarea class="add__listing--textarea__field" id="about_me" name="about_me"
                                                placeholder="Enter About description">{{ old('about_me', $profile->about_me ?? '') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit__profile--button d-flex justify-content-end">
                                    <button class="edit__profile--default__btn">Restore Default</button>
                                    <button class="solid__btn add__property--btn" type="submit">Save</button>
            </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <!-- dashboard container .\ -->
    </main>
@endsection
@section('jscontent')
<script>
    document.getElementById('profile_photo').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImage = document.getElementById('previewImage');
                previewImage.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });
</script>

@endsection
