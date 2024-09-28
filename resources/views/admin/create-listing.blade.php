@extends('admin.index-main')
@section('csscontent')
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/plugins/swiper-bundle.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Nunito:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets1/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/creat-listing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets1/css/dark.css') }}">

    <style>
    .add__property--heading__title {
            color: #00404A; 
            font-family: 'Arial', sans-serif;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
            transition: color 0.3s;
        }

        .add__property--heading__title:hover {
            color: #4CAF50;
        }

        .add__property--desc {
            color: #666666;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            text-align: center;
            margin-bottom: 20px;
            transition: color 0.3s;
        }

        .add__property--desc:hover {
            color: #4CAF50;
        }
     .add__property--box__title {
            color: #00404A;
            font-family: Arial, sans-serif;
            font-size: 24px;
            transition: color 0.3s;
        }

        /* Hover effect */
        .add__property--box__title:hover {
            color: #4CAF50; 
        }

        .cke_notifications_area {
            display: none;
        }

        .solid__btn {
            display: block;
            margin: 0 auto;
            background-color: #00404A; 
            color: white;
            border: none; 
            padding: 10px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .solid__btn:hover {
            background-color: #4CAF50; 
            border-color: #00404A;
        }
        .sub-btn {
            display: inline-block;
            background-color: #00404A; 
            color: white;
            border: none;
            padding: 5px 10px; 
            border-radius: 3px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 14px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .sub-btn:hover {
            background-color: #4CAF50;
            border-color: #00404A; 
        }
    </style>
@endsection

@section('content')
    <main class="main__content_wrapper">
        <div class="dashboard__container add__property--container">
            <div class="add__property--heading mb-30">
                <h2 class="add__property--heading__title">Add New Property</h2>
                <p class="add__property--desc">We are glad to see you again!</p>
            </div>
            <div class="add__property__inner d-flex">
                <div class="add__property--step left">
                    <div class="add__property--step__inner">
                        <div class="add__property--box mb-30">
                            <h3 class="add__property--box__title mb-20">Create Listing</h3>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ Route('save-property') }}" method="post" enctype="multipart/form-data"
                                style="margin: 20px;">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="title"
                                                class="form-label">Society
                                                Name</label>
                                            <input class="add__listing--input__field" type="text" class="form-control"
                                                id="title" name="title" value="{{ old('title') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="add__listing--textarea__box mb-15">
                                            <label class="add__listing--input__label" for="description"
                                                class="form-label">Description</label>
                                            <textarea class="add__listing--textarea__field" class="form-control" id="description" name="description" rows="3"
                                                required>{{ old('description') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="city"
                                                class="form-label">City</label>
                                            <input class="add__listing--input__field" type="text" class="form-control"
                                                id="city" name="city" value="{{ old('city') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="zip" class="form-label">ZIP
                                                Code</label>
                                            <input class="add__listing--input__field" type="text" class="form-control"
                                                id="zip" name="zip" value="{{ old('zip') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="address"
                                                class="form-label">Address</label>
                                            <input class="add__listing--input__field" type="text" class="form-control"
                                                id="address" name="address" value="{{ old('address') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="country"
                                                class="form-label">Country</label>
                                            <input class="add__listing--input__field" type="text" class="form-control"
                                                id="country" name="country" value="{{ old('country') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="map_link"
                                                class="form-label">Google Maps Link (Optional)</label>
                                            <input class="add__listing--input__field" type="url" class="form-control"
                                                id="map_link" name="map_link" value="{{ old('map_link') }}">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="property_details"
                                                class="form-label">Property Details</label>
                                            <div id="property-details-wrapper">
                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <input class="add__listing--input__field" type="text"
                                                            class="form-control" name="property_details[type][]"
                                                            placeholder="Type (e.g., Bedroom)" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="add__listing--input__field" type="number"
                                                            class="form-control" name="property_details[count][]"
                                                            placeholder="Count" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" id="add-property-detail"
                                                class="sub-btn mt-2">Add
                                                More</button>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="add__listing--input__box mb-20">
                                            <label class="add__listing--input__label" for="amenities"
                                                class="form-label">Amenities</label>
                                            <div id="amenities-wrapper">
                                                <input class="add__listing--input__field mb-2" type="text"
                                                    class="form-control mb-2" name="amenities[]" required>
                                            </div>
                                              <button type="button" id="add-amenity" class="sub-btn mt-2">Add More</button>
                                        </div>
                                    </div>

                                    {{-- <div class="add__property--box mb-30">
                                        <h3 class="add__property--box__title mb-20">Property media</h3>
                                        <div class="property__media--wrapper d-flex justify-content-between">
                                            <div class="add__listing--input__box mb-20">
                                                <label class="add__listing--input__label" for="images"
                                                    class="form-label">Property Images</label>
                                                <input class="add__listing--input__field" type="file"
                                                    class="form-control" id="images" name="images[]" multiple
                                                    required>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="add__property--box">
                                        <h3 class="add__property--box__title mb-20">Property media</h3>
                                        <div class="property__media--wrapper d-flex justify-content-between">
                                            <div class="add__listing--input__box mb-30">
                                                <label class="add__listing--input__label" for="images"
                                                    class="form-label">Property Images</label>
                                                <input class="add__listing--input__field" type="file"
                                                    class="form-control" id="images" name="images[]" multiple required
                                                    style="display: inline-block; border-color: #4CAF50;   padding: 10px 20px;border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; transition: background-color 0.3s; ">
                                                {{-- <label for="images"
                                                    style="display: inline-block; background-color: #4CAF50; color: white;  padding: 10px 20px;border-radius: 5px; cursor: pointer; font-family: Arial, sans-serif; transition: background-color 0.3s; ">Choose File</label> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="solid__btn add__property--btn"
                                        >Save</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // JavaScript to add more dynamic input fields for property details and amenities
        document.getElementById('add-property-detail').addEventListener('click', function() {
            var wrapper = document.getElementById('property-details-wrapper');

            var row = document.createElement('div');
            row.className = 'row mb-2';

            // Column for Property Type
            var colType = document.createElement('div');
            colType.className = 'col-md-6';
            var inputType = document.createElement('input');
            inputType.type = 'text';
            inputType.name = 'property_details[type][]';
            inputType.placeholder = 'Type (e.g., Bedroom)';
            inputType.className = 'add__listing--input__field';
            inputType.required = true;
            colType.appendChild(inputType);

            // Column for Property Count
            var colCount = document.createElement('div');
            colCount.className = 'col-md-6';
            var inputCount = document.createElement('input');
            inputCount.type = 'number';
            inputCount.name = 'property_details[count][]';
            inputCount.placeholder = 'Count';
            inputCount.className = 'add__listing--input__field';
            inputCount.required = true;
            colCount.appendChild(inputCount);

            // Append both columns to the row
            row.appendChild(colType);
            row.appendChild(colCount);

            // Append the row to the wrapper
            wrapper.appendChild(row);
        });


        document.getElementById('add-amenity').addEventListener('click', function() {
            var wrapper = document.getElementById('amenities-wrapper');
            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'amenities[]';
            input.className = 'add__listing--input__field mb-2';
            wrapper.appendChild(input);
        });
    </script>
@endsection
