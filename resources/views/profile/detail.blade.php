<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<style>
    body {
        margin-top: 20px;
    }

    .card-style1 {
        box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
    }

    .border-0 {
        border: 0 !important;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color:#2d282e21;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    section {
        padding: 100px 0;
        overflow: hidden;
        background: #fff;
    }

    .mb-2-3,
    .my-2-3 {
        margin-bottom: 2.3rem;
    }

    .section-title {
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        position: relative;
        display: inline-block;
    }

    .text-primary {
        color: #ceaa4d !important;
    }

    .text-secondary {
        color: #15395A !important;
    }

    .font-weight-600 {
        font-weight: 600;
    }

    .display-26 {
        font-size: 1.3rem;
    }

    @media screen and (min-width: 992px) {
        .p-lg-7 {
            padding: 4rem;
        }
    }

    @media screen and (min-width: 768px) {
        .p-md-6 {
            padding: 3.5rem;
        }
    }

    @media screen and (min-width: 576px) {
        .p-sm-2-3 {
            padding: 2.3rem;
        }
    }

    .p-1-9 {
        padding: 1.9rem;
    }

    .bg-secondary {
        background: #15395A !important;
    }

    @media screen and (min-width: 576px) {

        .pe-sm-6,
        .px-sm-6 {
            padding-right: 3.5rem;
        }
    }

    @media screen and (min-width: 576px) {

        .ps-sm-6,
        .px-sm-6 {
            padding-left: 3.5rem;
        }
    }

    .pe-1-9,
    .px-1-9 {
        padding-right: 1.9rem;
    }

    .ps-1-9,
    .px-1-9 {
        padding-left: 1.9rem;
    }

    .pb-1-9,
    .py-1-9 {
        padding-bottom: 1.9rem;
    }

    .pt-1-9,
    .py-1-9 {
        padding-top: 1.9rem;
    }

    .mb-1-9,
    .my-1-9 {
        margin-bottom: 1.9rem;
    }

    @media (min-width: 992px) {
        .d-lg-inline-block {
            display: inline-block !important;
        }
    }

    .rounded {
        border-radius: 0.25rem !important;
    }

    .left-image {
        margin-bottom: 70px;
    }

    /*Tabs*/
    .tabbable-panel {
        border: 1px solid #eee;
        padding: 10px;
    }

    .tabbable-line>.nav-tabs {
        border: none;
        margin: 0px;
    }

    .tabbable-line>.nav-tabs>li {
        margin-right: 2px;
    }

    .tabbable-line>.nav-tabs>li>a {
        border: 0;
        margin-right: 0;
        color: #737373;
    }

    .tabbable-line>.nav-tabs>li>a>i {
        color: #a6a6a6;
    }

    .tabbable-line>.nav-tabs>li.open,
    .tabbable-line>.nav-tabs>li:hover {
        border-bottom: 4px solid rgb(80, 144, 247);
    }

    .tabbable-line>.nav-tabs>li.open>a,
    .tabbable-line>.nav-tabs>li:hover>a {
        border: 0;
        background: none !important;
        color: #333333;
    }

    .tabbable-line>.nav-tabs>li.open>a>i,
    .tabbable-line>.nav-tabs>li:hover>a>i {
        color: #a6a6a6;
    }

    .tabbable-line>.nav-tabs>li.open .dropdown-menu,
    .tabbable-line>.nav-tabs>li:hover .dropdown-menu {
        margin-top: 0px;
    }

    .tabbable-line>.nav-tabs>li.active {
        border-bottom: 4px solid #32465b;
        position: relative;
    }

    .tabbable-line>.nav-tabs>li.active>a {
        border: 0;
        color: #333333;
    }

    .tabbable-line>.nav-tabs>li.active>a>i {
        color: #404040;
    }

    .tabbable-line>.tab-content {
        margin-top: -3px;
        background-color: #fff;
        border: 0;
        border-top: 1px solid #eee;
        padding: 15px 0;
    }

    .portlet .tabbable-line>.tab-content {
        padding-bottom: 0;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #301b1b;
        background-color: #b16fc23d;
    }

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
        width: 100%;
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
        width: 30%;
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

    /* Next & previous buttons */
    .prev,
    .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
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
</style>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mt-b mb-lg-0 ">
                                <div class="left-image">
                                    <img src="{{ $item?->images[0]?->image }}"style="width:75%;height:75%; object-fit:fill;" onclick="openModal();currentSlide(1)" class="hover-shadow">
                                </div>
                                <div class="d-flex justify-content-center p-3">
                                    <div class="column">
                                        <img src="{{ $item?->images[1]?->image }}" style="width:100%;height:75%; object-fit:fill;" onclick="openModal();currentSlide(2)" class="hover-shadow">
                                    </div>
                                    <div class="column">
                                        <img src="{{ $item?->images[2]?->image }}" style="width:100%;height:75%; object-fit:fill;" onclick="openModal();currentSlide(3)" class="hover-shadow">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">{{ $item?->first_name . ' ' . $item?->last_name }}
                                    </h3>
                                    <span class="text-primary">Actor</span>
                                </div>
                                @php
                                    $dateOfBirth = $item?->profile?->date_of_birth;
                                    $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                @endphp
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Ethnicity:</span>{{ $item?->profile?->ethnicity }}
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Age:</span>
                                        {{ $age }} Years
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                                        {{ $item?->email }}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Phone:</span>
                                        {{ $item?->mobile_no }}
                                    </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span
                                            class="display-26 text-secondary me-2 font-weight-600">Height:</span>
                                        {{ $item?->profile?->height . ' ' . 'CM' }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-12 px-xl-10">
                                <div class="container">
                                    <div class="row">
                                        <!-- Tab Nav -->
                                        <div class="nav-wrapper position-relative mb-2">
                                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <button class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab"
                                                        data-bs-toggle="tab" href="#tabs-text-1" role="tab"
                                                        aria-controls="tabs-text-1" aria-selected="true">About
                                                        me</button>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab"
                                                        data-bs-toggle="tab" href="#tabs-text-2" role="tab"
                                                        aria-controls="tabs-text-2" aria-selected="false">Video</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End of Tab Nav -->
                                        <!-- Tab Content -->
                                        <div class="card border-0">
                                            <div class="card-body p-0">
                                                <div class="tab-content" id="tabcontent1">
                                                    <div class="tab-pane fade show active" id="tabs-text-1"
                                                        role="tabpanel" aria-labelledby="tabs-text-1-tab">
                                                        <div class="col-lg-12 mb-4 mb-sm-5">
                                                            <div>
                                                                <span
                                                                    class="section-title text-primary mb-3 mb-sm-4">About
                                                                    Me</span>

                                                                <p class="mb-0">{!! $item?->profile?->about_me !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tabs-text-2" role="tabpanel"
                                                        aria-labelledby="tabs-text-2-tab">
                                                        <div class="container">
                                                            <h6 class="page-header" id="youtube-gallery">Intro video
                                                            </h6>
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
                                                                                src="{{ $item?->profile->work_reel1 }}">
                                                                            </iframe>
                                                                        </div>
                                                                        <div class="col-md-4 mt-3">
                                                                            <iframe width="100%" height="100%"
                                                                                src="{{ $item?->profile->work_reel2 }}">
                                                                            </iframe>
                                                                        </div>
                                                                        <div class="col-md-4 mt-3">
                                                                            <iframe width="100%" height="100%"
                                                                                src="{{ $item?->profile->work_reel3 }}">
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
                                        <!-- End of Tab Content -->
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
<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <div class="mySlides">
            <div class="numbertext">1 / 3</div>
            <img src="{{ $item?->images[0]?->image }}" style="width:100%;height:100%; object-fit:fill;">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="{{ $item?->images[1]?->image }}" style="width:100%;height:100%;object-fit:fill;">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="{{ $item?->images[2]?->image }}" style="width:100%;height:100%;object-fit:fill;">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
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
