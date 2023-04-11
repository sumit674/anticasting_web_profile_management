@extends('front-dashboard.layouts.app')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/front-dashboard/css/view-profile/main-details.css') }}" />
    <style>
        /*Image Gallary*/
        .imgStyle {
            width: 70px;
            height: 60px;
            padding: 3px;

        }

        .mainImage {
            margin-right: 120px;
            margin-top: 5px;
            width: 100%;
            border: 1px solid black;
        }

        .divId {
            margin: 0 40px;
            display: inline-flex;
            width: 212px;
            border: 1px solid #b3aeae;
            cursor: pointer;
        }

        .divId.imgStyle {
            display: flex;
            opacity: 0.4;
            transition: 0.4s;
            height: 100px;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19)
        }

        /*Intro Video*/
        .intro_video {
            margin-top: 150px;
        }

        /*Form text css*/
        #popover-content {
            background: #f5f4f9;
        }

        .close-btn {

            position: absolute;
            /* You may need to change top and right. They depend on padding/widht of .badge */
            top: -10px;
            right: -10px;
            background: red;
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
        }

        .work-reels {
            margin-bottom: 10px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        .image-container {
            width: 308px !important;
            height: 650px !important;
            background-color: #fff;
            display: grid;
            grid-template-columns: 1fr 1fr;
            padding: 5px;
            gap: 10px;
            object-fit: contain;
            /* position: fixed; */
        }

        .gallary-image img {
            display: block;
            box-shadow: 2px 2px 2px 1px rgb(87, 88, 88);
            width: 330px !important;
        }

        .gallary-image img:hover {
            object-fit: fill;
            opacity: 0.5;
        }

        .card-left {
            width: 295px !important;
            overflow: hidden;
        }

        .main-image {
            display: flex;
            transition: all 0.5s ease;
        }

        .img-select {
            margin-top: 15px;
            height: 30px;
            width: 100px !important;
        }

        .img-select-container {
            border: 2px solid white;
        }

        .img-select-container img {
            width: 100% !important;
            display: inline-block;
        }

        .img-select-container img:hover {
            width: 100% !important;
            display: inline-block;
            object-fit: cover;
            opacity: 0.5;
        }

        /* .img-select-container img hover:{
                                                width: 100% !important;
                                                display: inline-block;
                                                border: 1px solid black;
                                                opacity: 0.4;

                                            } */
        .img-select .active {
            border: 1px dotted black;
            height: 50px !important;
            width: 60px !important;
        }

        .card-body {
            max-height: 500px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .popover-header-section {
            position: sticky;
        }

        .actor-name {
            color: #26247b;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div id="popover-content">
            <div class="popover-header-section" id="popoverHeader">
                <div class="popover-header">
                    <b><span class="actor-name">{{ $item->first_name . ' ' . $item->last_name }}</span> </b>

                    <div class="text-right h4" style="margin-top:-23px;" id="close-yt">
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
                                    <div class="col-3">
                                        <div class="pt-1 ms-1">
                                            <div class="image-container">
                                                <div class="card-left">
                                                    <div class="main-image gallary-image border border-dark rounded-6">
                                                        @if (isset($item?->images[0]?->image))
                                                            <img id="mainImage" src="{{ $item?->images[0]?->image }}"
                                                                height="200" width="190" />
                                                        @else
                                                            <img class="imgStyle"
                                                                src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
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
                                                                    src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                            @endif
                                                            @if (isset($item?->images[1]?->image))
                                                                <img class="imgStyle"
                                                                    src="{{ $item?->images[1]?->image }}" />
                                                            @else
                                                                <img class="imgStyle"
                                                                    src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                            @endif
                                                            @if (isset($item?->images[2]?->image))
                                                                <img class="imgStyle"
                                                                    src="{{ $item?->images[2]?->image }}" />
                                                            @else
                                                                <img class="imgStyle"
                                                                    src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="intro_video">
                                                        <div class="c-edit-panel">
                                                            <h4 class="c-edit-panel__header">Intro Video</h4>
                                                            <div class="c-edit-panel__controls"></div>

                                                        </div>
                                                        <div class="c-further-information">
                                                            @if ($item?->introVideo?->intro_video_link != null)
                                                                <div>
                                                                    <iframe width="100%"
                                                                        src="{{ $item?->introVideo?->intro_video_link }}"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                        allowfullscreen>
                                                                    </iframe>
                                                                </div>
                                                            @else
                                                                <div class="d-flex justify-content-center">
                                                                    <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                        alt="" width="70%">
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
                                            <div class="col-6">
                                                <div
                                                    class="c-performers-quick-view__links g-hidden-sm g-col-md-4 g-col-lg-4">
                                                    <div class="c-basic-info-section__edit-panel">
                                                        <div class="c-edit-panel">
                                                            <h4 class="c-edit-panel__header">Details</h4>
                                                            <div class="c-edit-panel__controls"></div>
                                                        </div>
                                                    </div>
                                                    <a href="#" target="_blank"
                                                        class="c-icon-text-link c-icon-text-link--primary" tabindex="0"
                                                        aria-label="Email profile">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        </span>
                                                        <span
                                                            class="c-icon-text-link__text c-icon-text-link__text--icon">Email
                                                            profile</span>
                                                    </a>
                                                    <a href="https://www.spotlight.com/2696-7866-2777?action=print"
                                                        target="_blank" class="c-icon-text-link c-icon-text-link--primary"
                                                        tabindex="0" aria-label="Print profile">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-print" aria-hidden="true"></i>
                                                        </span>
                                                        <span
                                                            class="c-icon-text-link__text c-icon-text-link__text--icon">Print
                                                            profile</span>
                                                    </a>
                                                    <a href="#" target="_blank"
                                                        class="c-icon-text-link c-icon-text-link--primary" tabindex="0"
                                                        aria-label="View/Add notes">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                                        </span>
                                                        <span
                                                            class="c-icon-text-link__text c-icon-text-link__text--icon">View/Add
                                                            notes</span>
                                                    </a>
                                                    <a href="https://mediaviewer.spotlight.com/artist/showreels?artistRef=F291388"
                                                        target="_blank" class="c-icon-text-link c-icon-text-link--primary"
                                                        tabindex="0" aria-label="2 Showreels">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-video" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="c-icon-text-link__text c-icon-text-link__text--icon">2
                                                            Showreels</span>
                                                    </a>
                                                    <a href="https://mediaviewer.spotlight.com/artist/audioclips?artistRef=F291388"
                                                        target="_blank" class="c-icon-text-link c-icon-text-link--primary"
                                                        tabindex="0" aria-label="5 Audio">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fas fa-microphone" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="c-icon-text-link__text c-icon-text-link__text--icon">5
                                                            Audio</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card__content">
                                                    <div class="c-basic-info-section__edit-panel">
                                                        <div class="c-edit-panel">
                                                            <h4 class="c-edit-panel__header">Details</h4>
                                                            <div class="c-edit-panel__controls"></div>
                                                        </div>
                                                    </div>
                                                    <p class="card__title"><label class="fw-bold"><b>Email:
                                                            </b></label><span class="c-green text-break text-truncate">
                                                            {{ $item?->profile?->email }}</span>

                                                    </p>
                                                    <p class="card__title"><label class="fw-bold"><b>Ethnicity:
                                                            </b></label><span class="c-green text-break text-truncate">
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
                                                            I was born and raised in Stockholm, Sweden, by
                                                            Transylvanian-Hungarian parents. Knowing early on that acting
                                                            was in my future I made sure to learn the accents from my
                                                            favorite films. Later I went on to study in Vancouver,
                                                            Stockholm, and Bristol, where I'm currently based.<br><br>I've
                                                            been in films, TV, and commercials, but acting is not my only
                                                            creative outlet. I'm teaching a scene study, I've directed short
                                                            films, and done stand up. In 2019 I got to open for one of
                                                            Sweden’s biggest comedians, Magnus Betnér. <br><br>I'm fully
                                                            vaccinated, can legally work both in the UK and in the EU,
                                                            up-to-date passport.
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
                                                                <div class="col-md-4 mb-1">
                                                                    @if ($item?->profile?->work_reel1 != null)
                                                                        <div>
                                                                            <iframe width="80%"
                                                                                src="{{ $item?->profile?->work_reel1 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen>
                                                                            </iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class="d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" width="70%">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    @if ($item?->profile?->work_reel2 != null)
                                                                        <div>
                                                                            <iframe width="80%"
                                                                                src="{{ $item?->profile?->work_reel2 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen></iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class=" d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" width="70%">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    @if ($item?->profile?->work_reel3 != null)
                                                                        <iframe width="80%"
                                                                            src="{{ $item?->profile?->work_reel3 }}"
                                                                            frameborder="0"
                                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                            allowfullscreen></iframe>
                                                                    @else
                                                                        <div class="d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                                alt="" width="70%">
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
{{-- <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="profile-card-4 z-depth-3">
                <div class="card">
                    <div class="card-body text-center bg-body rounded-top">
                        <div class="user-box">
                            @if (isset($item?->images[0]?->image))
                                <img id="mainImage" src="{{ $item?->images[0]?->image }}" height="200" width="200" />
                            @else
                                <img class="imgStyle" src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                    height="200" width="200" />
                            @endif
                            <br />
                            <div class="divId" onmouseover="changeImageOnClick(event)">
                                @if (isset($item?->images[0]?->image))
                                    <img class="imgStyle" src="{{ $item?->images[0]?->image }}" />
                                @else
                                    <img class="imgStyle"
                                        src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                @endif
                                @if (isset($item?->images[1]?->image))
                                    <img class="imgStyle" src="{{ $item?->images[1]?->image }}" />
                                @else
                                    <img class="imgStyle"
                                        src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                @endif
                                @if (isset($item?->images[2]?->image))
                                    <img class="imgStyle" src="{{ $item?->images[2]?->image }}" />
                                @else
                                    <img class="imgStyle"
                                        src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group shadow-none">
                            <li class="list-group-item">
                                <div class="list-icon">
                                    <i class="fa fa-phone-square"></i>
                                </div>
                                <div class="list-details">
                                    <span>{{ $item?->countryCode . ' ' . $item?->mobile_no }}</span>
                                    <small>Mobile Number</small>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="list-details">
                                    <span>{{ $item?->email }}</span>
                                    <small>Email Address</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card z-depth-3">
                <div class="card-body">
                    <ul class="nav nav-pills nav-pills-primary nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">About
                                    Me</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i
                                    class="icon-envelope-open"></i> <span class="hidden-xs">Videos</span></a>
                        </li>
                      
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active show" id="profile">
                            <h5 class="mb-3">User Profile</h5>
                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="team-single-text padding-50px-left sm-no-padding-left">
                                        <div class="contact-info-section margin-40px-tb">
                                            <ul class="list-style9 no-margin">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-5 col-5">
                                                            <strong class="margin-10px-left text-orange">Name:</strong>
                                                        </div>
                                                        <div class="col-md-7 col-7">
                                                            <p>{{ $item?->first_name . ' ' . $item?->last_name }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>

                                                    <div class="row">
                                                        <div class="col-md-5 col-5">

                                                            <strong
                                                                class="margin-10px-left text-yellow">Ethnicity.:</strong>
                                                        </div>
                                                        <div class="col-md-7 col-7">
                                                            <p>{{ $item?->profile?->ethnicity }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>

                                                    <div class="row">
                                                        <div class="col-md-5 col-5">
                                                            @php
                                                                $dateOfBirth = $item?->profile?->date_of_birth;
                                                                $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                                            @endphp
                                                            <strong class="margin-10px-left text-yellow">Age:</strong>
                                                        </div>
                                                        <div class="col-md-7 col-7">
                                                            <p>{{ $age }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>

                                                    <div class="row">
                                                        <div class="col-md-5 col-5">

                                                            <strong
                                                                class="margin-10px-left text-lightred">Email:</strong>
                                                        </div>
                                                        <div class="col-md-7 col-7">
                                                            <p>{{ $item->email }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>

                                                    <div class="row">
                                                        <div class="col-md-5 col-5">

                                                            <strong class="margin-10px-left text-green">Current
                                                                Location:</strong>
                                                        </div>
                                                        <div class="col-md-7 col-7">
                                                            <p>{{ $item?->profile?->current_location }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>

                                                    <div class="row">
                                                        <div class="col-md-5 col-5">

                                                            <strong
                                                                class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
                                                        </div>
                                                        <div class="col-md-7 col-7">
                                                            <p> {{ $item?->countryCode . ' ' . $item?->mobile_no }}</p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-5 col-5">

                                                            <strong
                                                                class="margin-10px-left xs-margin-four-left text-pink">Gender:</strong>
                                                        </div>
                                                        <div class="col-md-7 col-7">
                                                            <p>{{ $item?->profile?->gender }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages">

                            <div class="container">
                                <h6 class="page-header" id="youtube-gallery">Intro video</h6>
                                <div class="row p-2">
                                    <div class="col-md-12 col-12">

                                        <iframe width="100%" height="120%"
                                            src="{{ $item?->introVideo?->intro_video_link }}">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="container  mt-5">
                                <h6 class="page-header" id="youtube-gallery">Work Reels</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
                                                <iframe width="100%" height="100%"
                                                    src="{{ @$item?->profile->work_reel1 }}">
                                                </iframe>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <iframe width="100%" height="100%"
                                                    src="{{ @$item?->profile->work_reel2 }}">
                                                </iframe>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <iframe width="100%" height="100%"
                                                    src="{{ @$item?->profile->work_reel3 }}">
                                                </iframe>
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
</div> --}}
