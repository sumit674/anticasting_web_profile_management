@extends('front-dashboard.layouts.app')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/front-dashboard/css/view-profile/main-details.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/website/css/view-profile.css') }}" />
@endsection
@section('content')
    <div class="container">
        <div id="popover-content">
            <div class="popover-header-section" id="popoverHeader">
                <div class="popover-header">
                    <strong><span class="actor-name">{{ $item->first_name . ' ' . $item->last_name }}</span> </strong>
                    <div class="text-right" style="margin-top:-25px;" id="close-yt">
                        <a href="{{ route('users.submitProfile') }}">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card-details">
                        <div class="card-body">
                            <div class="card-section">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="d-flex">
                                            <div class="image-container">
                                                <div class="card-left">
                                                    @if (isset($item?->images[0]?->image) && count($item?->images))
                                                        <div class="main-image gallary-image border border-dark rounded-6">
                                                            @if (isset($item?->images[0]?->image))
                                                                <img id="mainImage" src="{{ $item?->images[0]?->image }}"
                                                                    width="295" height="200" />
                                                            @else
                                                                <img id="mainImage"
                                                                    src="{{ asset('assets/images/user-default-image.png') }}"
                                                                    width="295" height="200" />
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
                                                    <div class="d-flex justify-content-center align-items-center mt-3">
                                                        <img id="mainImage"
                                                            src="{{ asset('assets/images/user-default-image.png') }}"
                                                            height="250" width="250" style="object-fit:fill;" />
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
                                                                    <iframe width="100%"  height="100%"
                                                                        src="{{ $item?->introVideo?->intro_video_link }}"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                        allowfullscreen
                                                                        scrolling="yes"
                                                                        >
                                                                    </iframe>
                                                                </div>
                                                            @else
                                                                <div class="d-flex justify-content-center">
                                                                    <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                        alt="" width="100"  height="100">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                {{-- <div class="card__content">
                                                    <div class="c-basic-info-section__edit-panel">
                                                        <div class="c-edit-panel  justify-content-center">
                                                            <h4 class="c-edit-panel__main_header">Details</h4>
                                                            <div class="c-edit-panel__controls"></div>
                                                        </div>
                                                    </div>
                                                </div> --}}
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
                                                                    {{ $item?->countryCode . ' ' . $item?->mobile_no }}</span>

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
                                                        <div class="c-further-information">
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
                                                        <div class="c-further-information">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    @if ($item?->profile?->work_reel1 != null)
                                                                        <div class="work_reel_iframe">
                                                                            <iframe width="100%" height="100%"
                                                                                src="{{ $item?->profile?->work_reel1 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen
                                                                                scrolling="yes"
                                                                                >
                                                                            </iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class="d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" width="100"  height="100">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4">
                                                                    @if ($item?->profile?->work_reel2 != null)
                                                                        <div  class="work_reel_iframe">
                                                                            <iframe width="100%" height="100%"
                                                                                src="{{ $item?->profile?->work_reel2 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen
                                                                                scrolling="yes"
                                                                                ></iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class=" d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" width="100"  height="100">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4">
                                                                    @if ($item?->profile?->work_reel3 != null)
                                                                    <div  class="work_reel_iframe">
                                                                        <iframe  width="100%" height="100%"
                                                                            src="{{ $item?->profile?->work_reel3 }}"
                                                                            frameborder="0"
                                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                            allowfullscreen
                                                                            scrolling="yes"
                                                                            ></iframe>
                                                                    </div>
                                                                    @else
                                                                        <div class="d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" width="100"  height="100">
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
    </div>
@endsection
@section('footer')
    <script>
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
    </script>
@endsection
