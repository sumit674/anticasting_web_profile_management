@extends('layouts.submit-profile-new')
{{-- @extends('layouts.master') --}}
@section('header')
    {{-- <link rel="stylesheet" href="{{ asset('assets/website/css/submit-profile.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/website/css/image-gallery.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/alertbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/webcam.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/crop-image.css') }}" />
@endsection
@section('content')
    @include('include.submitprofile.image-header')
    <section id="contact-us" class="contact-us section page-background">
        <div class="container">
            <form class="form-disable" id="profile-valdation" action="{{ route('users.submitProfile.store') }}"
                method="post">
                @csrf
                <input type="hidden" name="image1" id="picture1" />
                <input type="hidden" name="image2" id="picture2" />
                <input type="hidden" name="image3" id="picture3" />
                {{-- @error('image1')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
                @error('image2')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
                @error('image3')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror --}}
                <input type="hidden" name="capture_image" id="capture_image" />
                <div class="row">
                    <div class="col-lg-8 col-12">
                        @if (Session::has('message'))
                            <script>
                                $.toast({
                                    heading: 'Can I add <em>icons</em>?',
                                    text: 'Yes! check this <a href="https://github.com/kamranahmedse/jquery-toast-plugin/commits/master">update</a>.',
                                    hideAfter: false,
                                    icon: 'success'
                                })
                            </script>
                        @endif
                        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="h6 fw-bold">Personal Information</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">
                                                <b>
                                                    First name
                                                    <span style="color:red;"><b>*</b></span>
                                                </b>
                                            </label>
                                            <input type="text" class="form-control" placeholder="First Name"
                                                name="first_name" value="{{ old('first_name', $userInfo->first_name) }}" />
                                            @error('first_name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">
                                                <b>
                                                    Last name
                                                    <span style="color:red;"><b>*</b></span>
                                                </b>
                                            </label>
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                name="last_name" value="{{ old('last_name', $userInfo->last_name) }}" />
                                            @error('last_name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <?php
                                $date = date('Y-m-d');
                                $newDate = date('Y-m-d', strtotime($date . ' - 5 years'));
                                ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">
                                                <b>
                                                    Date Of Birth
                                                    <span style="color:red;"><b>*</b></span>
                                                </b>
                                            </label>
                                            <input type="date" class="form-control" placeholder="Date of Birth"
                                                name="date_of_birth" max="<?php echo $newDate; ?>"
                                                value="{{ old('date_of_birth', isset($userProfile->date_of_birth) ? $userProfile->date_of_birth : ' ') }}" />

                                            @error('date_of_birth')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">
                                                <b>
                                                    Gender
                                                    <span style="color:red;"><b>*</b></span>
                                                </b>
                                            </label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="" selected="selected" class="0">
                                                    Gender
                                                </option>
                                                <option value="Male" @if (isset($userProfile->gender) && $userProfile->gender == 'Male') selected @endif>
                                                    Male</option>
                                                <option value="Female" @if (isset($userProfile->gender) && $userProfile->gender == 'Female') selected @endif>
                                                    Female</option>
                                                <option
                                                    value="prefernottosay"@if (isset($userProfile->gender) && $userProfile->gender == 'prefernottosay') selected @endif>
                                                    Prefer not to say</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">
                                                <b>
                                                    Current Location
                                                    <span style="color:red;"><b>*</b></span>
                                                </b>
                                            </label>
                                            <input type="text" class="form-control" name="current_location"
                                                placeholder="Enter current location"
                                                value="{{ old('current_location', isset($userProfile->current_location) ? $userProfile->current_location : ' ') }}" />
                                            @error('current_location')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">
                                                <b>
                                                    Ethnicity
                                                    <span style="color:red;"><b>*</b></span>
                                                </b>
                                            </label>
                                            <select name="ethnicity" id="ethnicity" class="form-control">
                                                <option value="" selected="selected" class="0">
                                                    Select Ethnicity
                                                </option>
                                                @if (isset($states))
                                                    @foreach ($states as $item)
                                                        <option value="{{ $item->value }}"
                                                            @if (isset($userProfile->ethnicity) && $userProfile->ethnicity == $item->value) selected @endif>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('ethnicity')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label"><b>Email
                                                    <span style="color:red;"><b>*</b></span>
                                                </b></label>
                                            <input type="email" class="form-control" placeholder="Email"
                                                name="email" readonly value="{{ old('email', $userInfo->email) }}" />

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="inputmobileNumber" class="form-label"><b>Moblile
                                                    Number</b>&nbsp;<span style="color:red;"><b>*</b></span></label>
                                            <div class="input-group mb-3">
                                                <!--
                                                                                                                                                                                                                      <span class="input-group-text" style="width:10px;">+</span>
                                                                                                                                                                                                                     -->
                                                {{-- <input type="text" class="form-control" name="countryCode" readonly
                                                    style="width:15px;"
                                                    value="{{ old('countryCode', $userInfo->countryCode) }}" />
                                                <input type="text" class="form-control d-flex text-left"
                                                    name="mobile_no" readonly style="width:248px;"
                                                    value="{{ old('mobile_no', $userInfo->mobile_no) }}" /> --}}

                                                <input type="tel" class="form-control intel-input-width" id="mobile_number"
                                                    name="mobile_no" style="width:113%;"
                                                    value="{{ old('mobile_no', isset($userInfo->mobile_no) ? $userInfo->mobile_no : ' ') }}"
                                                    placeholder="Mobile number" />
                                                <input type="hidden" name="iso2" id="phone_country_code"
                                                    value="+91" />
                                                @error('mobile_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label"><b>Height (CM)</b></label>
                                            <input type="text" class="form-control" placeholder="Enter height"
                                                name="height"
                                                value="{{ old('height', isset($userProfile->height) ? $userProfile->height : ' ') }}" />
                                            @error('height')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label"><b>Weight (KG)</b></label>
                                            <input type="text" class="form-control" placeholder="Enter weight"
                                                name="weight"
                                                value="{{ old('weight', isset($userProfile->weight) ? $userProfile->weight : ' ') }}" />
                                            @error('weight')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">
                                                <b>About me</b>
                                            </label>
                                            <textarea id="about_me" name="about_me" class="form-control">
                                                @isset($userProfile->about_me)
                                                    {{ $userProfile->about_me }}
                                                 @endisset
                                             </textarea>

                                        </div>
                                    </div>
                                </div>
                                <label class="form-label"><b>Work Reels</b>&nbsp;<span><b>(only youtube
                                            links)</b></span></label>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <input type="text" class="form-control" name="work_reel1"
                                                placeholder="Work Reel 1 - only youtube link"
                                                value="{{ old('work_reel1', isset($userProfile->work_reel1) ? $userProfile->work_reel1 : '') }}" />
                                            @error('work_reel1')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <input type="text" class="form-control" name="work_reel2"
                                                placeholder="Work Reel 2 - only youtube link"
                                                value="{{ old('work_reel2', isset($userProfile->work_reel2) ? $userProfile->work_reel2 : '') }}" />
                                            @error('work_reel2')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <input type="text" class="form-control" name="work_reel3"
                                                placeholder="Work Reel 3 - only youtube link"
                                                value="{{ old('work_reel3', isset($userProfile->work_reel3) ? $userProfile->work_reel3 : '') }}" />
                                            @error('work_reel3')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <input type="submit" style="margin-bottom:10px;"
                                class="btn btn-sm toster-show cust_btn" id="btn" value="Submit" tabindex="75"
                                onclick="toster()" />
                            <a href="{{ route('users.view-profile') }}" class="btn btn-sm cust_btn"
                                style="margin-bottom:10px;">Profile View</a>

                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        @include('submit-profile-new.right-section')
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('footer')
    <script>
        var images = @json($userInfo?->images?->pluck('image')?->toArray());

        let camWidth = 400;
        let camHeight = 225;
    </script>
    <script src="{{ asset('assets/website/js/submit-profile/image-gallery.js') }}"></script>
    <script src="{{ asset('assets/website/js/submit-profile/image-crop.js') }}"></script>
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
                height: 85,
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
    </script>
    <script>
        $(function() {
            $("#success").dialog({
                autoOpen: true,
                modal: true,
                width: camWidth,
                height: camHeight,
                buttons: [
                    // {
                    //     text: 'Yes, proceed!',
                    //     open: function() {
                    //         $(this).addClass('yescls')
                    //     },
                    //     click: function() {
                    //         $(this).dialog("close")
                    //     }
                    // },
                    {
                        text: "OK",
                        open: function() {
                            $(this).addClass('okcls')
                        },
                        click: function() {
                            $(this).dialog("close")
                        }
                    }
                ],
                show: {
                    effect: "bounce",
                    duration: 1500
                },
                hide: {
                    effect: "fade",
                    duration: 1000
                },
                open: function(event, ui) {
                    $(".ui-dialog-titlebar", $(this).parent())
                        .hide();
                }
            });
        });
    </script>
    <script>
        //  $('#show-intro').on('click', function() {
        //     $('#video-section').slideToggle();
        // });
        //     /*Sample Intro video js*/
        //     $('#intro_video').hide();
        //     $('#hide').on('click', function() {
        //         $('#intro_video').hide();
        //     })
        //     $('#show').on('click', function() {
        //         $('#intro_video').show();
        //     })
        //     /*Choose Intro video js*/
        //     $('#hindi').on('click', function() {

        //         $('#intro_hindi').show();
        //         $('#intro_english').hide();
        //     })
        //     $('#intro_english').hide();
        //     $('#english').on('click', function() {

        //       $('#intro_hindi').hide();
        //       $('#intro_english').show();
        //   })
        // to stop the ifram video
        function stopVideo(element) {
            // getting every iframe from the body
            var iframes = element.querySelectorAll('iframe');
            // reinitializing the values of the src attribute of every iframe to stop the YouTube video.
            for (let i = 0; i < iframes.length; i++) {
                if (iframes[i] !== null) {
                    var temp = iframes[i].src;
                    iframes[i].src = temp;
                }
            }
        };
        // $('#first').click(function(){
        //     alert('Mahesh')
        //     $('#content').viewbox();
        // })
        // $(function() {

        //     $('.popperOpen').popover({
        //         placement: 'bottom',
        //         container: 'body',
        //         html: true,
        //         content: function() {
        //             return $(this).next('#popover-content-head').html();
        //         }
        //     })
        // });

        //Popover Sample Headshot Image
        // const Poplist = [].slice.call(document.querySelectorAll('[data-toggle="popover"]'))
        // Poplist.map((el) => {
        //     let opts = {
        //         animation: false,
        //         html:true,
        //     }
        //     if (el.hasAttribute('data-bs-content-id')) {
        //         opts.content = document.getElementById(el.getAttribute('data-bs-content-id')).innerHTML;
        //         opts.html = true;
        //     }
        //     new bootstrap.Popover(el, opts);
        // })
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
        /*Image Size Validation*/
        $('.pictureCls').prop("disabled", true);
        var a = 0;
        //binds to onchange event of your input field
        $('.image').bind('change', function() {
            if ($('.pictureCls').attr('disabled', false)) {
                $('.pictureCls').attr('disabled', true);
            }
            var ext = $('#picture').val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg', 'jfif']) == -1) {
                $('#error1').slideDown("slow");
                $('#error2').slideUp("slow");
                a = 0;
            } else {
                const fi = document.getElementById('picture');
                if (fi.files.length > 0) {
                    for (let i = 0; i <= fi.files.length - 1; i++) {

                        const fsize = fi.files.item(i).size;
                        const file = Math.round((fsize / 1024));

                        // The size of the file.
                        // if (file >= 4096) {
                        // $('#error2').slideDown("slow");
                        //   a = 0;
                        // }
                        if (file > 4096) {
                            $('#error3').slideDown("slow");
                            a = 0;
                        } else {
                            a = 1;
                            // $('#error2').slideUp("slow");
                            $('#error3').slideUp("slow");
                        }
                        $('#error1').slideUp("slow");
                        // $('#error2').slideDown("slow");
                        //  $('#error3').slideDown("slow");
                        if (a == 1) {
                            $('.pictureCls').attr('disabled', false);
                        }
                    }
                }
                // var picsize = (this.files[0].size);
                // if (picsize >= 2048 && picsize < 4096){

                //     $('#error2').slideDown("slow");
                //     a = 0;
                // } else {

                //    a = 1;
                //     $('#error2').slideUp("slow");
                // }
                // $('#error1').slideUp("slow");
                // if (a == 1) {

                //     $('input:submit').attr('disabled', false);
                // }
            }
        });
        @if (count($userInfo?->images) == 0)
            let defaultUpload = document.querySelector('#upload-default');

            defaultUpload.addEventListener('click', () => {
                $('#upload-image-modal').modal('show');
                $('#upload-image-modal').appendTo('body');
                $('#image_number').val(1);
            })
        @endif
        function deleteAllHeadShotImages(url) {
            if (confirm('Do you really want to delete all headshot images?')) {
                document.location.href = url;
            }
        }
        function deleteSingleHeadShotImage(url) {
            if (confirm('Do you really want to delete this headshot image?')) {
                document.location.href = url;
            }
        }
    </script>
    <script>
        //Phone number validation of submit profile

        $('#profile-valdation').validate({
            debug: false,
            errorClass: 'text-danger',
            errorElement: "span",
            rules: {
                mobile_no: {
                    required: true, // field is mandatory
                    intlTelNumber: true, // must contain a valid phone number
                    minlength: 10,
                },
            },
            messages: {
                mobile_no: {

                    required: "Please enter your mobile number",
                    // remote:"Mobile number already exist",
                    minlength: "Mobile number must be at least 10 digit long"
                },
            },
            highlight: function(element) {
                $(element).parent().addClass("field-error");
            },
            unhighlight: function(element) {
                $(element).parent().removeClass("field-error");
            },
            submitHandler: function(form) {
                form.submit();
            }

        });

        jQuery.validator.addMethod("intlTelNumber", function(value, element) {
            return this.optional(element) || $(element).intlTelInput("isValidNumber");
        }, "Please enter a valid phone number 10 digits");
    </script>
    <script>
        /*Upload Image JavaScript*/

        $('.upload-capture').hide()
        $('#image-upload').on('click', function() {
            Webcam.reset();
            $('.upload-picture').show();
            $('.upload-capture').hide();
        })
        $('#image-capture').on('click', function() {
            $('.upload-capture').show();
            $('.upload-picture').hide();

            Webcam.set({
                width: camWidth,
                height: camHeight,
                image_format: 'jpeg',
                jpeg_quality: 108,
                flip_horiz: true
            });
            Webcam.attach('#my_camera');
        })
    </script>
    <script>
        /*Upload web cam on pop up*/
        $('.take-snap-configuration').hide();
        $('.take-snap-second').hide();
        /* Webcam.set({
            width: camWidth,
            height: camHeight,
            image_format: 'jpeg',
            jpeg_quality:108,
            flip_horiz: true
        });
        Webcam.attach('#my_camera'); */
        function take_snapshot() {

            let imgId = $('#image_number').val();

            $('#take').hide();
            $('#retake').show();
            $('#my_camera').hide();
            $('#results').show();
            $('#take-btn').show();
            // $('.take-snap-first').hide();
            $('.take-snap-configuration').show();
            $('.take-snap-second').show();
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri +
                    '"  class="image-snapshot"/>';
                // document.querySelector('#capture_image').value = data_uri;

                // $('#upload-image-modal').modal('hide');
                if (imgId == 1) {
                    // document.querySelector("#default-img").src = evt.target.result;
                    $("#default-img").attr('src', data_uri);
                    // document.querySelector("#image1").style.backgroundImage = 'url(' + data_uri + ')';
                    $('#image1').css("background-image", 'url(' + data_uri + ')');
                    document.querySelector("#picture1").value = data_uri;
                }
                if (imgId == 2) {
                    document.querySelector("#image2").style.backgroundImage = 'url(' + data_uri + ')';
                    document.querySelector("#picture2").value = data_uri;
                }
                if (imgId == 3) {
                    document.querySelector("#image3").style.backgroundImage = 'url(' + data_uri + ')';
                    document.querySelector("#picture3").value = data_uri;
                }

            });
        }

        function ReConfigureCamera() {
            Webcam.reset();

            Webcam.set({
                width: camWidth,
                height: camHeight,
                image_format: 'jpeg',
                jpeg_quality: 90,
                flip_horiz: true
            });
            $('#my_camera').show();
            $('#take').show();
            $('#retake').hide();
            $('#results').hide();
            $('#take-btn').hide();
            Webcam.attach('#my_camera');
        }

        function Retake_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri +
                    '"class="image-snapshot"/>';
                document.querySelector('#capture_image').value = data_uri;
            });
        }

        {{--  $(window).on('load', function() {
            $('.featured-item').each(
                function() {
                    if ($(this).width() / $(this).height() >= 1) {
                        $(this).addClass('landscape');
                    } else {
                        $(this).addClass('portrait');
                    }
                });
        });  --}}
    </script>
@endsection
