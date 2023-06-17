@extends('layouts.submit-profile.app')
@section('title', 'Submit Profile')
@section('header')
@endsection
@section('content')
    <div class="content">
        <div class="row">
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
                                    <div class="mb-3">
                                        <label for="birthdate" class="form-label">Birthdate <span
                                                class="strik-color">*</span></label>
                                        <input type="text" id="datepicker" name="date_of_birth"
                                            value="{{ old('date_of_birth', isset($userProfile?->date_of_birth) ? $userProfile?->date_of_birth : ' ') }}"
                                            class="form-control  {{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}"
                                            placeholder="Enter a date of birthday" />
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
                                        <select name="ethnicity" id="ethnicity"
                                            class="form-control  {{ $errors->has('ethnicity') ? ' is-invalid' : '' }}">
                                            <option value="">Select Ethnicity</option>
                                            @isset($states)
                                                @foreach ($states as $item)
                                                    <option value="{{ $item->value }}"
                                                        {{ old('ethnicity', isset($userProfile->ethnicity) && $item->value) ? 'selected' : ' ' }}>
                                                        {{ $item->name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="profile_head_shot">
                            <h3 class="section-header">HEAD SHOTS, INTRO VIDEO, AND WORK REELS</h3>
                            <div class="card shadow-sm">
                                <div class="card body">
                                    <!-- New gallery image thumbnail -->
                                    <div class="ms-3 mb-3">
                                        <label for="gallery" class="form-label ">Headshot Images <span
                                                class="strik-color">*</span></label>
                                        <div class="d-flex">
                                            <label class="thumbnail" for="image1">
                                                @if (isset($userInfo?->images[0]?->image))
                                                    <img src="{{ $userInfo?->images[0]?->image }}" class="custom-image"
                                                        id="preview1" alt="Image 1">
                                                @else
                                                    <img src="https://via.placeholder.com/180x180" alt="Image 1"
                                                        id="preview1" />
                                                @endif

                                                <input type="file" id="image1" name="image1" class="image-input"
                                                    style="display: none" />
                                            </label>
                                            <label class="thumbnail" for="image2">
                                                @if (isset($userInfo?->images[1]?->image))
                                                    <img src="{{ $userInfo?->images[1]?->image }}" class="custom-image"
                                                        alt="Image 1" id="preview2">
                                                @else
                                                    <img src="https://via.placeholder.com/180x180" alt="Image 2"
                                                        id="preview2" />
                                                @endif

                                                <input type="file" id="image2" name="image2" class="image-input"
                                                    style="display: none" />
                                            </label>
                                            <div class="delete-image"
                                                onclick="deleteSingleHeadShotImage('{{ route('user.delete-single.image', ['image2', auth()->user()->id]) }}')">
                                                <i class="fa fa-trash delete-image"></i>
                                            </div>
                                            <label class="thumbnail" for="image3">
                                                @if (isset($userInfo?->images[2]?->image))
                                                    <img src="{{ $userInfo?->images[2]?->image }}" class="custom-image"
                                                        alt="Image 1" id="preview3">
                                                @else
                                                    <img src="https://via.placeholder.com/180x180" alt="Image 3"
                                                        id="preview3" />
                                                @endif

                                                <input type="file" id="image3" name="image3" class="image-input"
                                                    style="display: none" />
                                            </label>
                                            <div class="delete-image"
                                                onclick="deleteSingleHeadShotImage('{{ route('user.delete-single.image', ['image2', auth()->user()->id]) }}')">
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
                                        <div class="mb-3">
                                            <label for="intro_video" class="form-label">Intro Video <span
                                                    class="strik-color">*</span> <small>(only youtube
                                                    link)</small></label>
                                            <input type="text" id="intro_video" name="intro_video_link"
                                                class="form-control" placeholder="Enter intro video"
                                                value="{{ old('intro_video_link', isset($userIntroVideo?->intro_video_link) ? $userIntroVideo?->intro_video_link : ' ') }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="work_reel_1" class="form-label">Work Reel 1 <small>(only youtube
                                                    link)</small></label>
                                            <input type="text" id="work_reel_1" name="work_reel1"
                                                class="form-control"
                                                value="{{ old('work_reel1', isset($userProfile->work_reel1) ? $userProfile->work_reel1 : ' ') }}"
                                                placeholder="Work Reel 1 - only youtube link" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="work_reel_2" class="form-label">Work Reel 2 <small>(only youtube
                                                    link)</small></label>
                                            <input type="text" id="work_reel_2" name="work_reel2"
                                                class="form-control"
                                                value="{{ old('work_reel2', isset($userProfile->work_reel2) ? $userProfile->work_reel2 : ' ') }}"
                                                placeholder="Work Reel 2 - only youtube link" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="work_reel_3" class="form-label">Work Reel 3 <small>(only youtube
                                                    link)</small></label>
                                            <input type="text" id="work_reel_3" name="work_reel3"
                                                value="{{ old('work_reel3', isset($userProfile->work_reel3) ? $userProfile->work_reel3 : ' ') }}"
                                                class="form-control" placeholder="Work Reel 3 - only youtube link" />
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
                                        <label for="height" class="form-label">Height (feet', inches")</label>
                                        <input type="text" id="height" name="height" class="form-control"
                                            value="{{ old('height', isset($userProfile->height) ? $userProfile->height : ' ') }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Weight (KG)</label>
                                        <input type="text" id="weight" name="weight" class="form-control"
                                            value="{{ old('weight', isset($userProfile->weight) ? $userProfile->weight : ' ') }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="imdb_profile" class="form-label">IMDB Profile <small>(only IMDB link)</small></label>
                                        <input type="text" id="imdb_profile" name="imdb_profile" class="form-control"
                                            value="{{ old('imdb_profile', isset($userProfile->imdb_profile) ? $userProfile->imdb_profile : ' ') }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="skills" class="form-label">Skills</label>
                                        <input type="text" id="skills" name="skills" class="form-control"
                                            value="{{ old('skills', isset($userProfile->skills) ? $userProfile->skills : ' ') }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="formal_acting" class="form-label">Formal training in acting</label>
                                        <input type="text" id="formal_acting" name="formal_acting"
                                            class="form-control"
                                            value="{{ old('formal_acting', isset($userProfile->formal_acting) ? $userProfile->formal_acting : ' ') }}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="about_me_info">
                            <h3 class="section-header">About Me</h3>
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">About me <small style="color:red;">(max
                                                300
                                                chars.)</small></label>
                                        <textarea id="about_me" name="about_me" class="form-control">{{ old('about_me', isset($userProfile->about_me) ? $userProfile->about_me : ' ') }}</textarea>
                                    </div>
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
@endsection
