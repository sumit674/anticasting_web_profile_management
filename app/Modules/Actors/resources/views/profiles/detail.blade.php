@extends('admin.layouts.admin_master')
@section('title')
    Manage Actors | Details
@endsection
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/profiles/main-details.css') }}" />
    <style>
        /*Light box css*/
        .row>.column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Create four equal columns that floats next to eachother */
        .column {
            float: left;
            width: 155px;
        }

        .column img {

            width: 150px;
            height: 150px;
            object-fit: cover;
            display: block;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: #0000008c;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 40% !important;
            height: 33% !important;
            max-width: 1200px;

        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        /* Hide the slides by default */
        .mySlides {
            display: none;
        }

        .mySlides img {
            width: 100%;
            height: 80%;
            object-fit: fill;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 100%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
            width: 330px !important;
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
            width: 325px !important;
            overflow: hidden;
        }

        .main-image {
            display: flex;
            transition: all 0.5s ease;
        }

        .img-select {
            margin-top: 2px;
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
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Manage Actor</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Actor</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section id="main-content">
        <div id="popover-content">
            <div class="popover-header-section" id="popoverHeader">
                <div class="popover-header">
                    <b><span class="actor-name">{{ $item->first_name . ' ' . $item->last_name }}</span></b>
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
                                                            <img src="{{ $item?->images[0]?->image }}"
                                                                style="width:240px; object-fit:contain;"
                                                                onclick="openModal();currentSlide(1)" class="hover-shadow">
                                                        @else
                                                            <img src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                                                style="width:240px; object-fit:contain;"
                                                                onclick="openModal();currentSlide(1)" class="hover-shadow">
                                                        @endif
                                                    </div>
                                                    <div class="img-select">
                                                        <div class=" d-flex p-3">
                                                            <div class="column">
                                                                @if (isset($item?->images[1]?->image))
                                                                    <img src="{{ $item?->images[1]?->image }}"
                                                                        onclick="openModal();currentSlide(2)"
                                                                        class="hover-shadow">
                                                                @else
                                                                    <img src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                                                        style="width:240px; object-fit:contain;"
                                                                        onclick="openModal();currentSlide(2)"
                                                                        class="hover-shadow">
                                                                @endif
                                                            </div>
                                                            <div class="column">
                                                                @if (isset($item?->images[2]?->image))
                                                                    <img src="{{ $item?->images[2]?->image }}"
                                                                        onclick="openModal();currentSlide(3)"
                                                                        class="hover-shadow">
                                                                @else
                                                                    <img src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                                                        style="width:240px; object-fit:contain;"
                                                                        onclick="openModal();currentSlide(3)"
                                                                        class="hover-shadow">
                                                                @endif
                                                            </div>
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
                                                                        alt="" width="100%">
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
                                                            {{ $item?->profile?->about_me }}
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
        <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">

                    <div class="numbertext">1 / 3</div>
                    @if (isset($item?->images[0]?->image))
                        <img src="{{ $item?->images[0]?->image }}">
                    @else
                        <img src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}">
                    @endif
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 3</div>
                    @if (isset($item?->images[1]?->image))
                        <img src="{{ $item?->images[1]?->image }}">
                    @else
                        <img src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}">
                    @endif
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 3</div>
                    @if (isset($item?->images[2]?->image))
                        <img src="{{ $item?->images[2]?->image }}">
                    @else
                        <img src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}">
                    @endif
                </div>

                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>

    </section>
@endsection
@section('footer')
    <script>
        // Open the Modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
@endsection
