<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('assets/website/backend/css/actor-front-details.css')}}" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mt-b mb-lg-0 ">
                                <div class="left-image">
                                    <img src="{{ $item?->images[0]?->image }}" style="width:240px; object-fit:contain;"
                                        onclick="openModal();currentSlide(1)" class="hover-shadow">
                                </div>
                                <div class="d-flex justify-content-left p-3">
                                    <div class="column">
                                        <img src="{{ $item?->images[1]?->image }}"
                                            onclick="openModal();currentSlide(2)" class="hover-shadow">
                                    </div>
                                    <div class="column">
                                        <img src="{{ $item?->images[2]?->image }}"
                                            onclick="openModal();currentSlide(3)" class="hover-shadow">
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
                        <div class="row">
                            <div class="col-lg-12 px-xl-10">

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
                                                            <h6 class="page-header mt-4" id="youtube-gallery">Intro video
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
            <img src="{{ $item?->images[0]?->image }}">
        </div>

        <div class="mySlides">
            <div class="numbertext">2 / 3</div>
            <img src="{{ $item?->images[1]?->image }}">
        </div>

        <div class="mySlides">
            <div class="numbertext">3 / 3</div>
            <img src="{{ $item?->images[2]?->image }}">
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
