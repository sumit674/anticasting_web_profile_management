@extends('admin.layouts.admin_master')
@section('title')
    Manage Actors | Details
@endsection
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/profiles/main-details.css') }}" />
@endsection
@section('content')
    <section id="main-content">
        <div id="popover-content mt-5">
            <div class="popover-header-section" id="popoverHeader">
                <div class="popover-header row">
                    <div class="col-8">
                        <b><span class="actor-name">{{ $item->first_name . ' ' . $item->last_name }}</span> </b>
                    </div>
                    <div class="col-4">

                        <div class="text-right rating-widget h4" id="close-yt">

                            <!-- Rating Stars Box -->
                            <div class='rating-stars text-right'>
                                <div class="text-left refresh-icon">
                                    <b><span class="fa fa-refresh" onclick="removeStar()"></span></b>
                                </div>
                                <ul id='stars'>

                                    <li class='star {{ $selectStar?->rating >= 1 ? 'selected' : ' ' }}' title='Poor'
                                        data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star  {{ $selectStar?->rating >= 2 ? 'selected' : ' ' }}' title='Fair'
                                        data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star  {{ $selectStar?->rating >= 3 ? 'selected' : ' ' }}' title='Good'
                                        data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star  {{ $selectStar?->rating >= 4 ? 'selected' : ' ' }}' title='Excellent'
                                        data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star {{ $selectStar?->rating == 5 ? 'selected' : ' ' }}' title='WOW!!!'
                                        data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-details">
                        <div class="card-body">
                            <div class="card-section">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="pt-1 ms-1">
                                            <div class="image-container">
                                                <div class="card-left">
                                                    @if (isset($item?->images) && count($item?->images) > 0)
                                                        <div class="main-image gallary-image border border-dark rounded-6">
                                                            @if (isset($item?->images[0]?->image))
                                                                <img id="mainImage" src="{{ $item?->images[0]?->image }}"
                                                                    height="200" width="200" />
                                                            @else
                                                                <img id="mainImage"
                                                                    src="{{ asset('assets/images/user-default-image.png') }}"
                                                                    height="200" width="200" />
                                                            @endif
                                                        </div>

                                                        <div class="img-select">
                                                            <div class="divId" onmouseover="changeImageOnClick(event)">
                                                                @if (isset($item?->images[0]?->image))
                                                                    <img class="imgStyle"
                                                                        src="{{ $item?->images[0]?->image }}" />
                                                                @else
                                                                    <img class="imgStyle"
                                                                        src="{{ asset('assets/images/user-default-image.png') }}" />
                                                                @endif
                                                                @if (isset($item?->images[1]?->image))
                                                                    <img class="imgStyle"
                                                                        src="{{ $item?->images[1]?->image }}" />
                                                                @else
                                                                    <img class="imgStyle"
                                                                        src="{{ asset('assets/images/user-default-image.png') }}" />
                                                                @endif
                                                                @if (isset($item?->images[2]?->image))
                                                                    <img class="imgStyle"
                                                                        src="{{ $item?->images[2]?->image }}" />
                                                                @else
                                                                    <img class="imgStyle"
                                                                        src="{{ asset('assets/images/user-default-image.png') }}" />
                                                                @endif

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <img id="mainImage"
                                                                src="{{ asset('assets/images/user-default-image.png') }}"
                                                                height="200" width="200" />
                                                        </div>
                                                    @endif


                                                    <div class="intro_video">
                                                        <div class="c-edit-panel">
                                                            <h4 class="c-edit-panel__header">Intro Video</h4>
                                                            <div class="c-edit-panel__controls"></div>

                                                        </div>
                                                        <div class="c-further-information">
                                                            @if ($item?->introVideo?->intro_video_link != null)
                                                                <div class="intro_video_ifram">
                                                                    <iframe width="100%" height="100%"
                                                                        src="{{ $item?->introVideo?->intro_video_link }}"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                        allowfullscreen scrolling="yes">
                                                                    </iframe>
                                                                </div>
                                                            @else
                                                                <div class="d-flex justify-content-center">
                                                                    <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                        alt="" height="100" width="100">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="card__content">

                                                            <p class="card__title"><label class="fw-bold"><b>Email:
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
                                                                    {{ $item?->profile?->email }}</span>

                                                            </p>
                                                            <p class="card__title"><label class="fw-bold"><b>Ethnicity:
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
                                                                    {{ $item?->profile?->ethnicity }}</span>

                                                            </p>
                                                            <p class="card__title">
                                                                <label class="fw-bold"><b>Gender: </b></label>
                                                                <span class="c-green text-break text-truncate">
                                                                    {{ $item?->profile?->gender }}</span>
                                                            </p>
                                                            <p class="card__title">
                                                                <label class="fw-bold"><b>Date Of Birth: </b></label>
                                                                <span class="c-green text-break text-truncate">
                                                                    {{ $item?->profile?->date_of_birth }}</span>
                                                            </p>

                                                            <p class="card__title">
                                                                <label class="fw-bold "><b>Current Location: </b></label>
                                                                <span class="c-green text-break text-truncate">
                                                                    {{ $item?->profile?->current_location }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="card__content">

                                                            <p class="card__title"><label class="fw-bold"><b>Mobile:
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
                                                                    {{ $item->countryCode . '  ' . $item?->mobile_no }}</span>

                                                            </p>
                                                            @php
                                                                $dateOfBirth = $item?->profile?->date_of_birth;
                                                                //$age = \Carbon\Carbon::parse($dateOfBirth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days'); //\Carbon\Carbon::parse($dateOfBirth)->age;
                                                                $age = \Carbon\Carbon::parse($dateOfBirth)
                                                                    ->diff(\Carbon\Carbon::now())
                                                                    ->format('%y years');
                                                            @endphp
                                                            <p class="card__title"><label class="fw-bold"><b>Age:
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
                                                                    {{ $age }}</span>

                                                            </p>
                                                            <p class="card__title">
                                                                <label class="fw-bold"><b>Weight: </b></label>
                                                                <span class="c-green text-break text-truncate">
                                                                    {{ $item?->profile?->weight . ' ' . 'KG' }} </span>
                                                            </p>
                                                            <p class="card__title">
                                                                <label class="fw-bold"><b>Height: </b></label>
                                                                <span class="c-green text-break text-truncate">
                                                                    {{ $item?->profile?->height . ' ' . 'CM' }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="g-content-area p-main-page__content">
                                                    <div class="p-main-page__about-me-section g-col-lg-12">
                                                        <div class="c-edit-panel">
                                                            <h4 class="c-edit-panel__header">About me</h4>
                                                            <div class="c-edit-panel__controls"></div>
                                                        </div>
                                                        <div class="c-further-information-about-me">
                                                            <p>
                                                                {!! $item?->profile?->about_me !!}
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="g-content-area p-main-page__content">
                                                    <div class="p-main-page__about-me-section g-col-lg-12">
                                                        <div class="c-edit-panel">
                                                            <h4 class="c-edit-panel__header">Work Reels</h4>
                                                            <div class="c-edit-panel__controls"></div>
                                                        </div>
                                                        <div class="c-further-information-work-reels">
                                                            <div class="row">
                                                                <div class="col-md-4 mb-1">
                                                                    @if ($item?->profile?->work_reel1 != null)
                                                                        <div class="work_reel_iframe">
                                                                            <iframe width="100%"
                                                                                src="{{ $item?->profile?->work_reel1 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen scrolling="yes">
                                                                            </iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class="d-flex justify-content-center work_reel_iframe">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" height="100"
                                                                                width="100">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    @if ($item?->profile?->work_reel2 != null)
                                                                        <div class="work_reel_iframe">
                                                                            <iframe width="100%"
                                                                                src="{{ $item?->profile?->work_reel2 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen scrolling="yes"></iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class=" d-flex justify-content-center work_reel_iframe">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" height="100"
                                                                                width="100">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    @if ($item?->profile?->work_reel3 != null)
                                                                        <div class="work_reel_iframe">
                                                                            <iframe width="100%"
                                                                                src="{{ $item?->profile?->work_reel3 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen scrolling="yes"></iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class="d-flex justify-content-center work_reel_iframe">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" height="100"
                                                                                width="100">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <script>
        $(document).ready(function() {

            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e) {
                    if (e < onStar) {
                        $(this).addClass('hover');
                    } else {
                        $(this).removeClass('hover');
                    }
                });

            }).on('mouseout', function() {
                $(this).parent().children('li.star').each(function(e) {
                    $(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            $('#stars li').on('click', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');

                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }

                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                var msg = "";
                if (ratingValue > 1) {
                    msg = "Thanks! You rated this " + ratingValue + " stars.";
                } else {
                    msg = "You rated this " + ratingValue + " stars.";
                }
                responseMessage(msg, ratingValue);

            });


        });

        function responseMessage(msg, ratingValue) {
            $('.text-message b').html("<span>" + msg + "</span>");

            $.ajax({
                url: "{{ route('admin.rating') }}",
                type: "GET",
                data: {
                    'rateingValue': ratingValue,
                    'user_id': '{{ $item->id }}',

                },
                dataType: 'json',
                success: function(resp) {},
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            })

        }
        /*Image Slider*/
        var images = document.getElementsByTagName("img");

        for (var i = 0; i < images.length; i++) {
            images[i].onmouseover = function() {
                this.style.cursor = "hand";
                this.style.borderColor = "red";
            };
            images[i].onmouseout = function() {
                this.style.cursor = "pointer";
                this.style.borderColor = "grey";
            };
        }

        function changeImageOnClick(event) {
            // debugger;
            var targetElement = event.srcElement;
            // debugger;
            if (targetElement.tagName === "IMG") {
                mainImage.src = targetElement.getAttribute("src");
            }
        }

        function removeStar() {
            $.ajax({
                url: "{{ route('admin.rating.remove') }}",
                type: "GET",
                data: {
                    'user_id': '{{ $item->id }}',

                },
                dataType: 'json',
                success: function(resp) {

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                }
            })

        }
        $(window).on('load', function() {
            $('.main-image').each(
                function() { //you need to put this inside the window.onload-function (not document.ready), otherwise the image dimensions won't be available yet
                    if ($(this).width() / $(this).height() >= 1) {
                        $(this).addClass('landscape');
                    } else {
                        $(this).addClass('portrait');
                    }
                });
        });
    </script>
@endsection
