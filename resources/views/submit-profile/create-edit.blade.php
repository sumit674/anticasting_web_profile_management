@extends('layouts.submit-profile.app')
@section('title', 'Submit Profile')
@section('header')
@endsection
@section('content')
    <div class="content">
        <div class="row main-section">
            <div class="col-md-12">

                <div class="mb-3 edit-profile-card">
                    <form method="POST" action="{{ route('users.submit-profile') }}" enctype="multipart/form-data">
                        @csrf
                        <div id="profile_info">
                            <h3 class="section-header">Personal Information</h3>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="first-name" class="form-label">First Name <span
                                                class="strik-color">*</span></label>
                                        <input type="text" id="name" name="first_name"
                                            class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                            value="{{ old('first_name', isset($userInfo?->first_name) ? $userInfo?->first_name : ' ') }}"
                                            placeholder="Enter a first name" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Last Name <span
                                                class="strik-color">*</span></label>
                                        <input type="text" id="name" name="last_name"
                                            value="{{ old('last_name', isset($userInfo?->last_name) ? $userInfo?->last_name : ' ') }}"
                                            class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                            placeholder="Enter a last name" />
                                    </div>
                                    <?php
                                    $date = date('Y-m-d');
                                    $newDate = date('Y-m-d', strtotime('-1 day', strtotime($date)));
                                    ?>
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Birthdate <span
                                                class="strik-color">*</span></label>
                                        <input type="date" name="date_of_birth"
                                            value="{{ old('date_of_birth', isset($userProfile?->date_of_birth) ? $userProfile?->date_of_birth : ' ') }}"
                                            class="form-control  {{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}"
                                            placeholder="Enter a date of birthday" max="<?php echo $newDate; ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <span
                                                class="strik-color">*</span></label>
                                        <input type="email" id="email" name="email"
                                            value="{{ old('email', isset($userInfo?->email) ? $userInfo?->email : ' ') }}"
                                            class="form-control" placeholder="Enter a  email" readonly />
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Mobile Number <span
                                                class="strik-color">*</span></label>
                                        <input type="tel"
                                            class="form-control intel-input-width {{ $errors->has('mobile_no') ? ' is-invalid' : '' }}"
                                            id="mobile_number" name="mobile_no"
                                            value="{{ old('mobile_no', isset($userInfo?->mobile_no) ? $userInfo?->mobile_no : ' ') }}"
                                            placeholder="Mobile number" />
                                        <input type="hidden" name="iso2" id="phone_country_code" value="+91" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="current_location" class="form-label">Current Location <span
                                                class="strik-color">*</span></label>
                                        <input type="text" id="current_location" name="current_location"
                                            value="{{ old('current_location', isset($userProfile->current_location) ? $userProfile->current_location : ' ') }}"
                                            class="form-control {{ $errors->has('current_location') ? ' is-invalid' : '' }}"
                                            placeholder="Enter current location" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender <span
                                                class="strik-color">*</span></label>
                                        <select name="gender" id="gender"
                                            class="form-control  {{ $errors->has('gender') ? ' is-invalid' : '' }}">
                                            <option value="">Select Gender</option>
                                            <option value="Male"
                                                {{ old('gender', isset($userProfile->gender) && $userProfile->gender ? $userProfile->gender : ' ') == 'Male' ? 'selected' : ' ' }}>
                                                Male</option>
                                            <option
                                                value="Female"{{ old('gender', isset($userProfile->gender) && $userProfile->gender ? $userProfile->gender : ' ') == 'Female' ? 'selected' : ' ' }}>
                                                Female</option>
                                            <option value="prefernottosay"
                                                {{ old('gender', isset($userProfile->gender) && $userProfile->gender ? $userProfile->gender : ' ') == 'prefernottosay' ? 'selected' : ' ' }}>
                                                Prefer not to say</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ethnicity" class="form-label">Ethnicity <span
                                                class="strik-color">*</span></label>
                                        <select name="ethnicity" id="ethnicity" class="form-control">
                                            <option
                                                value="{{ isset($userProfile?->ethnicity) ? $userProfile?->ethnicity : '' }}">
                                                {{ isset($userProfile?->ethnicity) ? $userProfile?->ethnicity : '' }}
                                            </option>
                                            @isset($states)
                                                @foreach ($states as $item)
                                                    <option value="{{ $item->value }}"
                                                        {{ old('ethnicity', $userProfile?->ethnicity) == $item?->value ? 'selected' : '' }}>
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                        @error('ethnicity')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="profile_head_shot">
                            <h3 class="section-header">HEAD SHOTS, INTRO VIDEO, AND WORK REELS</h3>
                            <div class="card shadow-sm">
                                <div class="card body">
                                    <!-- New gallery image thumbnail -->

                                    <div id="popover-content" class="d-none">
                                        <div class="form-group">
                                            {{-- <label class="form-label" for="LocationInput">Sample Headshot Image</label> --}}
                                            <div id="" class="yt-video">
                                                <img width="200"
                                                    src="https://t4.ftcdn.net/jpg/02/86/91/07/360_F_286910763_zOX9bUhDQPUvk45vWOaNsGAvDf18oSod.jpg"
                                                    border="1">
                                            </div>
                                            <strong class="form-label">Sample resolutions</strong>
                                            <ul>
                                                <li>width: 250px</li>
                                                <li>height: 167px</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="ms-3 mb-3">
                                        <label for="gallery" class="form-label ">Headshot Images <span
                                                class="strik-color">*</span></label>
                                        <span class="info" style="cursor:pointer;" tabindex="0"
                                            data-bs-placement="top" data-bs-toggle="popover"
                                            data-bs-content-id="popover-content" data-bs-trigger="focus"
                                            title="Headshot Image">
                                            <i class="fa fa-info-circle"></i>
                                        </span>
                                        <div class="strik-color validation-image-mark">*</div>
                                        <div class="d-flex">

                                            <label class="thumbnail" for="image1">

                                                @if (isset($userInfo?->profile?->image1))
                                                    <img src="{{ asset('upload/profile/' . $userInfo?->profile?->image1) }}"
                                                        class="custom-image-create" id="preview1" alt="Image 1">
                                                @else
                                                    <img src="{{ asset('assets/images/user-default-image.png') }}"
                                                        alt="Image 1" id="preview1" />
                                                @endif

                                                <input type="file" id="image1" name="image1" class="image-input"
                                                    style="display: none" />
                                            </label>
                                            <label class="thumbnail" for="image2">
                                                @if (isset($userInfo?->profile?->image2))
                                                    <img src="{{ asset('upload/profile/' . $userInfo?->profile?->image2) }}"
                                                        class="custom-image-create" alt="Image 1" id="preview2">
                                                @else
                                                    <img src="{{ asset('assets/images/user-default-image.png') }}"
                                                        alt="Image 2" id="preview2" />
                                                @endif

                                                <input type="file" id="image2" name="image2" class="image-input"
                                                    style="display: none" />
                                            </label>
                                            <div class="delete-image"
                                                onclick="deleteSingleHeadShotImage('{{ route('users.delete-one.image', $userInfo?->profile?->id) }}')">
                                                <i class="fa fa-trash delete-image"></i>
                                            </div>
                                            <label class="thumbnail" for="image3">
                                                @if (isset($userInfo?->profile?->image3))
                                                    <img src="{{ asset('upload/profile/' . $userInfo?->profile?->image3) }}"
                                                        class="custom-image-create" alt="Image 3" id="preview3">
                                                @else
                                                    <img src="{{ asset('assets/images/user-default-image.png') }}"
                                                        alt="Image 3" id="preview3" />
                                                @endif

                                                <input type="file" id="image3" name="image3" class="image-input"
                                                    style="display: none" />
                                            </label>
                                            <div class="delete-image"
                                                onclick="deleteSingleHeadShotImage('{{ route('users.delete-two.image', $userInfo?->profile?->id) }}')">
                                                <i class="fa fa-trash"></i>
                                            </div>
                                        </div>
                                        @error('image1')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                            <br />
                                        @enderror
                                        <small class="fst-italic small text-danger">*Click thumbnail to upload headshot
                                            images</small>
                                    </div>
                                    <div class="ms-3 me-3">
                                        @include('submit-profile.sample-video')
                                        <div class="mb-3">
                                            <label for="intro_video" class="form-label">Intro Video <span
                                                    class="strik-color">*</span> <small class="text-danger">(only youtube
                                                    link)</small></label>
                                            <span class="fa fa-play-circle" data-bs-toggle="modal"
                                                data-bs-target="#videoModal"></span>

                                            <input type="text" id="IntroVideoYoutubeUrlInput" name="intro_video_link"
                                                class="form-control  {{ $errors->has('intro_video_link') ? ' is-invalid' : '' }}"
                                                placeholder="Enter intro video"
                                                value="{{ old('intro_video_link', isset($userIntroVideo?->intro_video_link) ? $userIntroVideo?->intro_video_link : ' ') }}" />
                                            <span id="IntroVideoYoutubeUrlValidationMessage" class="text-danger"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="WorkReelOneVideoYoutubeUrlInput" class="form-label">Work Reel 1
                                                <small class="text-danger">(only youtube
                                                    link)</small></label>
                                            <input type="text" id="WorkReelOneVideoYoutubeUrlInput" name="work_reel1"
                                                class="form-control {{ $errors->has('work_reel1') ? ' is-invalid' : '' }}"
                                                value="{{ old('work_reel1', isset($userProfile->work_reel1) ? $userProfile->work_reel1 : ' ') }}"
                                                placeholder="Work Reel 1 - only youtube link" />
                                            <span id="WorkReelOneYoutubeUrlValidationMessage"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkReelTwoVideoYoutubeUrlInput" class="form-label">Work Reel 2
                                                <small class="text-danger">(only youtube
                                                    link)</small></label>
                                            <input type="text" id="WorkReelTwoVideoYoutubeUrlInput" name="work_reel2"
                                                class="form-control  {{ $errors->has('work_reel2') ? ' is-invalid' : '' }}"
                                                value="{{ old('work_reel2', isset($userProfile->work_reel2) ? $userProfile->work_reel2 : ' ') }}"
                                                placeholder="Work Reel 2 - only youtube link" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkReelThreeVideoYoutubeUrlInput" class="form-label">Work Reel 3
                                                <small class="text-danger">(only youtube
                                                    link)</small></label>
                                            <input type="text" id="WorkReelThreeVideoYoutubeUrlInput"
                                                name="work_reel3"
                                                value="{{ old('work_reel3', isset($userProfile->work_reel3) ? $userProfile->work_reel3 : ' ') }}"
                                                class="form-control  {{ $errors->has('work_reel3') ? ' is-invalid' : '' }}"
                                                placeholder="Work Reel 3 - only youtube link" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="profile_other_information">
                            <h3 class="section-header">Other Information</h3>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="height" class="form-label">Height <small
                                                class="text-danger">(feet', inches")</small></label>
                                        <input type="text" id="height" name="height"
                                            class="form-control  {{ $errors->has('height') ? ' is-invalid' : '' }}"
                                            value="{{ old('height', isset($userProfile->height) ? $userProfile->height : ' ') }}"
                                            placeholder="Height (e.g.,5.6)" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Weight <small
                                                class="text-danger">(kg)</small></label>
                                        <input type="text" id="weight" name="weight"
                                            class="form-control  {{ $errors->has('weight') ? ' is-invalid' : '' }}"
                                            value="{{ old('weight', isset($userProfile->weight) ? $userProfile->weight : ' ') }}"
                                            placeholder="Weight (KG)" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="ImdbUrlInput" class="form-label">IMDB Profile <small
                                                class="text-danger">(only IMDB
                                                link)</small></label>
                                        <input type="text" id="ImdbUrlInput" name="imdb_profile"
                                            class="form-control  {{ $errors->has('imdb_profile') ? ' is-invalid' : '' }}"
                                            value="{{ old('imdb_profile', isset($userProfile->imdb_profile) ? $userProfile->imdb_profile : ' ') }}"
                                            placeholder="IMDB Profile-only imdb link" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="skills" class="form-label">Skills <small class="text-danger">(max
                                                300
                                                chars.)</small></label>
                                        <input type="text" id="skills" name="skills"
                                            class="form-control  {{ $errors->has('skills') ? ' is-invalid' : '' }}"
                                            value="{{ old('skills', isset($userProfile->skills) ? $userProfile->skills : ' ') }}"
                                            placeholder="Enter your skills" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="formal_acting" class="form-label">Formal training in acting <small class="text-danger">(max
                                                300
                                                chars.)</small></label>
                                        <input type="text" id="formal_acting" name="formal_acting"
                                            class="form-control  {{ $errors->has('formal_acting') ? ' is-invalid' : '' }}"
                                            value="{{ old('formal_acting', isset($userProfile->formal_acting) ? $userProfile->formal_acting : ' ') }}"
                                            placeholder="Enter formal training in acting" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="about_me_info">
                            <h3 class="section-header">About Me</h3>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">About me <small class="text-danger">(max
                                                300
                                                chars.)</small></label>
                                        <textarea id="about_me" name="about_me" class="form-control {{ $errors->has('about_me') ? ' is-invalid' : '' }}">{{ old('about_me', isset($userProfile->about_me) ? $userProfile->about_me : ' ') }}</textarea>
                                    </div>
                                    @error('about_me')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-3 ms-3 me-3 mb-3">
                            <a href="{{ route('users.view-profile') }}" class="btn btn-sm btn-secondary">
                                View Profile
                            </a>
                            <button type="submit" class="btn btn-sm btn-primary submit-btn">
                                Save
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
@section('footer')
    <script src="{{ asset('assets/intl-telephone/js/intlTelInput.js') }}" type="text/javascript"></script>
    </script>
    <script>
        var selectedFlag = 'in'
        $("#mobile_number").intlTelInput({
            //preferredCountries: ['in','ae', 'us'],
            preferredCountries: ['in', 'ae', 'us'],
            autoPlaceholder: true,
            separateDialCode: true,
            // onlyCountries: ['in','ae', 'us'],
            initialCountry: selectedFlag,
            utilsScript: '{{ asset('assets/intl-telephone/js/utils.js') }}'
        });
        $("#mobile_number").on("countrychange", function(e, countryData) {
            $("#phone_country_code").val(countryData.dialCode);
        });
    </script>
    <script>
        //About Me Editor.
        $(document).ready(function() {
            $('#about_me').summernote({
                placeholder: 'Enter movie description goes here..',
                // tabsize: 2,
                height: 80,
                // followingToolbar: true,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['table', ['table']],
                    // ['insert', ['link', 'picture', 'video']],
                    // ['view', ['fullscreen', 'codeview', 'help']],
                ],
                popover: {
                    image: [
                        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    table: [
                        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                        ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                }

            })
            $('.dropdown-toggle').dropdown();
        });

        /*Upload Image then will be show the in image*/
        // First Image
        $(document).ready(function() {
            $('#image1').change(function() {
                var file = $(this)[0].files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview1').attr('src', e.target.result);
                        $('#preview1').show();
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
        // Second Image
        $(document).ready(function() {
            $('#image2').change(function() {
                var file = $(this)[0].files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview2').attr('src', e.target.result);
                        $('#preview2').show();
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
        //Third Image
        $(document).ready(function() {
            $('#image3').change(function() {
                var file = $(this)[0].files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#preview3').attr('src', e.target.result);
                        $('#preview3').show();
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
        //date picker
        $(document).ready(function() {
            // Initialize the datepicker
            $("#datepicker").datepicker({
                dateFormat: "dd-mm-yy",
            });
        });
        //HeadShot Delete Image
        function deleteSingleHeadShotImage(url) {
            if (confirm('Do you really want to delete this headshot image?')) {
                document.location.href = url;
            }
        }
        //Popover Sample Image
        const list = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        list.map((el) => {
            let opts = {
                animation: false,
            }
            if (el.hasAttribute('data-bs-content-id')) {
                opts.content = document.getElementById(el.getAttribute('data-bs-content-id')).innerHTML;
                opts.html = true;
            }
            new bootstrap.Popover(el, opts);
        })
        //close intro video
        $(document).ready(function() {
            $('#videoModal').on('hide.bs.modal', function() {
                var videoPlayer = document.getElementById('videoPlayer');
                var videoSrc = videoPlayer.getAttribute('src');
                videoPlayer.setAttribute('src', '');
                videoPlayer.setAttribute('src', videoSrc);
            });
        });
    </script>
    <script>
        var editFlag = '{{ $flag }}';
        $(document).ready(function() {
            var divName = "";
            if (editFlag == "profile") {
                divName = "#profile_info";
            } else if (editFlag == "pics") {
                divName = "#profile_head_shot";
            } else if (editFlag == "other_info") {
                divName = "#profile_other_information";
            } else if (editFlag == "about") {
                divName = "#about_me_info";
            } else {
                divName = "#profile_info";
            }
            $('html,body').animate({
                    // scrollTop: $(".second").offset().top},
                    // 'slow');
                    //$('html,body').animate({
                    scrollTop: $(divName).offset().top
                },
                'slow');
        });
    </script>
    <script>
        // check Intro video  Youtube  url

        $(document).ready(function() {
            $('#IntroVideoYoutubeUrlInput').on('keyup', function() {
                var youtubeUrl = $(this).val();
                $.ajax({
                    url: "{{ route('youtubeVideoValidUrl') }}",
                    method: 'GET',
                    data: {
                        url: youtubeUrl
                    },
                    success: function(response) {
                        if (response.isValid) {
                            //    $('#IntroVideoYoutubeUrlValidationMessage').text(
                            // 'This URL is valid.').show();
                            $('#IntroVideoYoutubeUrlInput').removeClass('is-invalid')
                                .addClass(
                                    'is-valid');
                        } else {
                            if (youtubeUrl.trim() !== '') {
                                $('#IntroVideoYoutubeUrlInput').removeClass('is-valid')
                                    .addClass(
                                        'is-invalid');
                            } else {
                                $('#IntroVideoYoutubeUrlInput').removeClass(
                                    'is-invalid is-valid');
                            }

                        }
                    }
                });


            });
        });
        // check workreel one video  Youtube  url

        $(document).ready(function() {
            $('#WorkReelOneVideoYoutubeUrlInput').on('keyup', function() {
                var youtubeUrl = $(this).val();
                $.ajax({
                    url: "{{ route('youtubeVideoValidUrl') }}",
                    method: 'GET',
                    data: {
                        url: youtubeUrl
                    },
                    success: function(response) {
                        if (response.isValid) {
                            //    $('#IntroVideoYoutubeUrlValidationMessage').text(
                            // 'This URL is valid.').show();
                            $('#WorkReelOneVideoYoutubeUrlInput').removeClass('is-invalid')
                                .addClass(
                                    'is-valid');
                        } else {
                            if (youtubeUrl.trim() !== '') {
                                $('#WorkReelOneVideoYoutubeUrlInput').removeClass('is-valid')
                                    .addClass(
                                        'is-invalid');
                            } else {
                                $('#WorkReelOneVideoYoutubeUrlInput').removeClass(
                                    'is-invalid is-valid');
                            }

                        }
                    }
                });
            });
        });

        // check workreel two video  Youtube  url

        $(document).ready(function() {
            $('#WorkReelTwoVideoYoutubeUrlInput').on('keyup', function() {
                var youtubeUrl = $(this).val();
                $.ajax({
                    url: "{{ route('youtubeVideoValidUrl') }}",
                    method: 'GET',
                    data: {
                        url: youtubeUrl
                    },
                    success: function(response) {
                        if (response.isValid) {
                            //    $('#IntroVideoYoutubeUrlValidationMessage').text(
                            // 'This URL is valid.').show();
                            $('#WorkReelTwoVideoYoutubeUrlInput').removeClass('is-invalid')
                                .addClass(
                                    'is-valid');
                        } else {
                            if (youtubeUrl.trim() !== '') {
                                $('#WorkReelTwoVideoYoutubeUrlInput').removeClass('is-valid')
                                    .addClass(
                                        'is-invalid');
                            } else {
                                $('#WorkReelTwoVideoYoutubeUrlInput').removeClass(
                                    'is-invalid is-valid');
                            }

                        }
                    }
                });
            });
        });
        // check workreel three video  Youtube  url
        $(document).ready(function() {
            $('#WorkReelThreeVideoYoutubeUrlInput').on('keyup', function() {
                var youtubeUrl = $(this).val();
                $.ajax({
                    url: "{{ route('youtubeVideoValidUrl') }}",
                    method: 'GET',
                    data: {
                        url: youtubeUrl
                    },
                    success: function(response) {
                        if (response.isValid) {
                            //    $('#IntroVideoYoutubeUrlValidationMessage').text(
                            // 'This URL is valid.').show();
                            $('#WorkReelThreeVideoYoutubeUrlInput').removeClass('is-invalid')
                                .addClass(
                                    'is-valid');
                        } else {
                            if (youtubeUrl.trim() !== '') {
                                $('#WorkReelThreeVideoYoutubeUrlInput').removeClass('is-valid')
                                    .addClass(
                                        'is-invalid');
                            } else {
                                $('#WorkReelThreeVideoYoutubeUrlInput').removeClass(
                                    'is-invalid is-valid');
                            }

                        }
                    }
                });
            });
        });
         // check imdb url
         $(document).ready(function() {
            $('#ImdbUrlInput').on('keyup', function() {
                var imdbUrl = $(this).val();
                $.ajax({
                    url: "{{ route('imdbVideoValidUrl') }}",
                    method: 'GET',
                    data: {
                        url: imdbUrl
                    },
                    success: function(response) {
                        if (response.isValid) {
                            //    $('#IntroVideoYoutubeUrlValidationMessage').text(
                            // 'This URL is valid.').show();
                            $('#ImdbUrlInput').removeClass('is-invalid')
                                .addClass(
                                    'is-valid');
                        } else {
                            if (imdbUrl.trim() !== '') {
                                $('#ImdbUrlInput').removeClass('is-valid')
                                    .addClass(
                                        'is-invalid');
                            } else {
                                $('#ImdbUrlInput').removeClass(
                                    'is-invalid is-valid');
                            }

                        }
                    }
                });
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            // Initialize select2 with data
            $('#ethnicity').select2({
                placeholder: 'Select Ethnicity',
                tags: true,
                theme: 'bootstrap'
            });
            $('form').on('submit', function() {
                if ($('#ethnicity').val() == '') {
                    $('#ethnicity').addClass('is-invalid');
                }
            });
        });
    </script>

@endsection
