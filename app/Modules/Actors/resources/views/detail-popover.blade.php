<style>
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
        width: 280px !important;
        height: 678px !important;
        background-color: #fff;
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding: 5px;
        gap: 10px;
        object-fit: contain;
        border-radius: 35px;
        margin-top: 9px;
        border: 1px solid #dadada;
        margin-left: 20px;
    }
    .main-image {
        max-width: 195px;
        width: 60%;
        height: auto;
        margin-left:38px;
        border-radius: 10px;
        margin-top: 26px;
    }
    .gallary-image img {
        display: block;
        box-shadow: 2px 2px 2px 1px rgb(87, 88, 88);
        width:195px !important;
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

    /* .img-select {
        display: flex;
        margin-top: 2px;
        height: 30px;
        width: 325px !important;
        margin-left: 60px;
    } */

    /* .img-select-container {
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
    } */

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
        overflow-x: scroll;
    }

    .popover-header-section {
        position: sticky;
    }

    .actor-name {
        color: #fafafa;
        font-size: 24px;
        font-weight: 700;
    }

    .fa-solid {
        color: #fafafa;
        font-size: 24px;
        font-weight: 600;
        margin-left: 10px;
    }

    .fa-brands {
        color: #fafafa;
        font-size: 24px;
        margin-left: 10px;
    }

    .close-popup {
        margin-top: -61px;
        color: #fafafa;
        font-size: 35px;
        font-weight: 600;
    }

    .c-further-information p {
        font-size: 14px;
        padding: 10px;
        word-break: break-word;
    }
    .c-further-information-intro-video{
        margin-left: 30px;
        margin-top: 15px;
    }
    /* Closable button inside the expanded image */
    .closebtn {
        position: absolute;
        top: -2px;
        right: 194px;
        color: white;
        font-size: 50px;
        cursor: pointer;
    }

    .refresh-icon {
        margin-right: 10px;
        cursor: pointer;
        font-size: 19px;
    }

    .refresh-icon .fa-refresh {
        color: white;
        font-size: 20px;
        padding-top: 3px;
    }

    /*Image Gallary*/
    .imgStyle {
        width: 70px;
        height: 82px;
        padding: 3px;
        object-fit: cover;

    }
    .divId {
        margin: 10px 17px;
        display: inline-flex;
        width: 230px;
        border: 1px solid #b3aeae;
        cursor: pointer;
        border-radius: 8px;
    }
    .imgStyle {
        width: 70px;
        height: 64px;
        margin: 3px;
        object-fit: cover;
        border-radius: 15px;
        border: 1px solid;
        padding: 3px;
    }
    /*main-image portarit landscap*/
    .gallary-image{
        overflow: hidden;
    }
    /* Rating Star Widgets Style */
    .rating-stars ul {
        list-style-type: none;
        padding: 0;
        margin-right: 80px;
        /* margin-top: -35px; */
        -moz-user-select: none;
        -webkit-user-select: none;
    }

    .rating-stars ul>li.star {
        display: inline-block;

    }

    /* Idle State of the stars */
    .rating-stars ul>li.star>i.fa {
        font-size: 18px;
        /* Change the size of the stars */
        color: #cc8fcd;
        /* Color on idle state */
    }

    /* Hover state of the stars */
    .rating-stars ul>li.star.hover>i.fa {
        color: rgb(230, 192, 26);
    }

    /* Selected state of the stars */
    .rating-stars ul>li.star.selected>i.fa {
        color: #f8f52d;
    }

    .user-dtl-head {
        line-height: 38px;
        height: 50px;
    }
    .intro_video{
        margin-top:100px;
    }
    .c-edit-panel-wer{
            border-bottom: 1px solid #b3aeae;
            width: 272px;
            display: inline-flex;
    }
    .work_reel_iframe {
        margin-left: -7px;
        width: 110%;
    }
</style>
<div id="popover-content">
    <div class="popover-header-section" id="popoverHeader">
        <div class="popover-header">
            <div class="d-flex justify-content-between align-middle user-dtl-head">
                <div>
                    <a href="{{ route('admin.profile-detail', $actor->id) }}" target="__blank">
                        <b><span class="actor-name">{{ $actor->first_name . ' ' . $actor->last_name }}</span> <i
                                class="fa-solid fa-up-right-from-square"></i></b>
                    </a>
                    <b><span class="fa-brands fa-facebook"></span></b>
                    <b><span class="fa-brands fa-square-instagram"></span></b>
                </div>
                <div class='d-flex rating-stars'>
                    <div class="text-right refresh-icon">
                        <b><span class="fa fa-refresh" onclick="removeStar()"></span></b>
                    </div>
                    <ul id='stars'>
                        <li class='star {{ $selectStar?->rating >= 1 ? 'selected' : '' }}' title='Poor'
                            data-value='1'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star {{ $selectStar?->rating >= 2 ? 'selected' : '' }}' title='Fair'
                            data-value='2'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star {{ $selectStar?->rating >= 3 ? 'selected' : '' }}' title='Good'
                            data-value='3'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star {{ $selectStar?->rating >= 4 ? 'selected' : '' }}' title='Excellent'
                            data-value='4'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star {{ $selectStar?->rating == 5 ? 'selected' : '' }}' title='WOW!!!'
                            data-value='5'>
                            <i class='fa fa-star fa-fw'></i>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="text-right h4 close-popup" data-userid="{{ $actor->id }}" id="close-yt">x</div>
        </div>
    </div>
    <div class="card-details">
        <div class="card-body">
            <div class="card-section">
                @if (isset($actor))
                    @isset($actor?->profile)
                        <div class="row">
                            <div class="col-3">
                                <div class="pt-1 ms-1">
                                    <div class="image-container">
                                        <div class="card-left">
                                            @if (isset($actor?->images) && count($actor?->images) > 0)
                                                <div class="main-image gallary-image border border-dark rounded-6">
                                                    @if (isset($actor?->images[0]?->image))
                                                        <a href="{{ route('admin.profile-detail', $actor->id) }}"
                                                            target="__blank">
                                                            <img id="mainImage" src="{{ $actor?->images[0]?->image }}"
                                                                height="200" width="200" />
                                                        </a>
                                                    @else
                                                        <a href="{{ route('admin.profile-detail', $actor->id) }}"
                                                            target="__blank">
                                                            <img id="mainImage"
                                                                src="{{ asset('assets/images/user-default-image.png') }}"
                                                                height="200" width="200" />
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="img-select">
                                                    <div class="divId" onmouseover="changeImageOnClick(event)">
                                                        @if (isset($actor?->images[0]?->image))
                                                            <img class="imgStyle" src="{{ $actor?->images[0]?->image }}" />
                                                        @else
                                                            <img class="imgStyle"
                                                                src="{{ asset('assets/images/user-default-image.png') }}" />
                                                        @endif
                                                        @if (isset($actor?->images[1]?->image))
                                                            <img class="imgStyle" src="{{ $actor?->images[1]?->image }}" />
                                                        @else
                                                            <img class="imgStyle"
                                                                src="{{ asset('assets/images/user-default-image.png') }}" />
                                                        @endif
                                                        @if (isset($actor?->images[2]?->image))
                                                            <img class="imgStyle" src="{{ $actor?->images[2]?->image }}" />
                                                        @else
                                                            <img class="imgStyle"
                                                                src="{{ asset('assets/images/user-default-image.png') }}" />
                                                        @endif

                                                    </div>
                                                </div>
                                            @else
                                                <div class="d-flex justify-content-center align-items-center mt-3">
                                                    <a href="{{ route('admin.profile-detail', $actor->id) }}"
                                                        target="__blank">
                                                        <img id="mainImage"
                                                            src="{{ asset('assets/images/user-default-image.png') }}"
                                                            height="250" width="250" style="object-fit:fill;" />
                                                    </a>
                                                </div>
                                            @endif
                                            <div class="intro_video">
                                                <div class="c-edit-panel-wer">
                                                    <h4 class="c-edit-panel__header">Intro Video</h4>
                                                    <div class="c-edit-panel__controls"></div>

                                                </div>
                                                <div class="c-further-information-intro-video">
                                                    @if ($actor?->introVideo?->intro_video_link != null)
                                                        <div class="intro_video_ifram">
                                                            <iframe width="70%" height="100%"
                                                                src="{{ $actor?->introVideo?->intro_video_link }}"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen scrolling="yes">
                                                            </iframe>
                                                        </div>
                                                    @else
                                                    <div class="intro_video_ifram">
                                                        <div class="d-flex justify-content-center">
                                                            <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                alt="" height="100" width="100">
                                                        </div>
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
                                    <div class="col-md-12 col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <div class="card__content">

                                                    <p class="card__title"><label class="fw-bold"><b>Email:
                                                            </b></label><span class="c-green text-break text-truncate">
                                                            {{ $actor?->profile?->email }}</span>

                                                    </p>
                                                    <p class="card__title"><label class="fw-bold"><b>Ethnicity:
                                                            </b></label><span class="c-green text-break text-truncate">
                                                            {{ $actor?->profile?->ethnicity }}</span>

                                                    </p>
                                                    <p class="card__title">
                                                        <label class="fw-bold"><b>Gender: </b></label>
                                                        <span class="c-green text-break text-truncate">
                                                            {{ $actor?->profile?->gender }}</span>
                                                    </p>
                                                    <p class="card__title">
                                                        <label class="fw-bold"><b>Date Of Birth: </b></label>
                                                        <span class="c-green text-break text-truncate">
                                                            {{ $actor?->profile?->date_of_birth }}</span>
                                                    </p>

                                                    <p class="card__title">
                                                        <label class="fw-bold "><b>Current Location: </b></label>
                                                        <span class="c-green text-break text-truncate">
                                                            {{ $actor?->profile?->current_location }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-6">
                                                <div class="card__content">

                                                    <p class="card__title"><label class="fw-bold"><b>Mobile:
                                                            </b></label><span class="c-green text-break text-truncate">
                                                            {{ ' ' . $actor?->countryCode . ' ' . $actor?->mobile_no }}</span>

                                                    </p>
                                                    @php
                                                        $dateOfBirth = $actor?->profile?->date_of_birth;
                                                        //$age = \Carbon\Carbon::parse($dateOfBirth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days'); //\Carbon\Carbon::parse($dateOfBirth)->age;
                                                        $age = \Carbon\Carbon::parse($dateOfBirth)
                                                            ->diff(\Carbon\Carbon::now())
                                                            ->format('%y years');
                                                    @endphp
                                                    <p class="card__title"><label class="fw-bold"><b>Age:
                                                            </b></label><span class="c-green text-break text-truncate">
                                                            {{ $age }}</span>

                                                    </p>
                                                    <p class="card__title">
                                                        <label class="fw-bold"><b>Weight: </b></label>
                                                        <span class="c-green text-break text-truncate">
                                                            {{ $actor?->profile?->weight . ' ' . 'KG' }}</span>
                                                    </p>
                                                    <p class="card__title">
                                                        <label class="fw-bold"><b>Height: </b></label>
                                                        <span class="c-green text-break text-truncate">
                                                            {{ $actor?->profile?->height . ' ' . ' CM' }}</span>
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
                                                    <p class="text-body">
                                                        {!! $actor?->profile?->about_me !!}
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
                                                        <div class="col-md-4 mb-1">
                                                            @if ($actor?->profile?->work_reel1 != null)
                                                                <div class="work_reel_iframe">
                                                                    <iframe width="100%" height="100%"
                                                                        src="{{ $actor?->profile?->work_reel1 }}"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                        allowfullscreen scrolling="yes">
                                                                    </iframe>
                                                                </div>
                                                            @else
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="work_reel_iframe">
                                                                    <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                        alt="" width="70%">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            @if ($actor?->profile?->work_reel2 != null)
                                                                <div class="work_reel_iframe">
                                                                    <iframe width="100%" height="100%"
                                                                        src="{{ $actor?->profile?->work_reel2 }}"
                                                                        frameborder="0"
                                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                        allowfullscreen scrolling="yes"></iframe>
                                                                </div>
                                                            @else
                                                                <div class=" d-flex justify-content-center">
                                                                    <div class="work_reel_iframe">
                                                                    <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                        alt="" width="70%">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            @if ($actor?->profile?->work_reel3 != null)
                                                            <div class="work_reel_iframe">
                                                                <iframe width="100%" height="100%"
                                                                    src="{{ $actor?->profile?->work_reel3 }}"
                                                                    frameborder="0"
                                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                    allowfullscreen scrolling="yes"></iframe>
                                                            </div>
                                                            @else
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="work_reel_iframe">
                                                                    <img src="{{ asset('assets/website/images/youtube.png') }}"
                                                                        alt="" width="70%">
                                                                    </div>
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
            @endisset
            @endif
        </div>
    </div>
</div>
</div>
<input type="hidden" id="selected_rating" value="{{$selectStar->rating}}" />
<script>
    $('#close-yt').on('click', function(e) {
        if (($('.popover').has(e.target).length != 0) || $(e.target).is('.close')) {
            $('.popover').popover('hide');
            if ($('#selected_rating').val().length > 0) {
                $('#actor-rating-' + e.target.dataset.userid).html("");
                for (i = 0; i < $('#selected_rating').val(); i++) {
                    $('#actor-rating-' + e.target.dataset.userid).append(
                        '<i class="fa-solid fa-star text-warning"></i>');
                }
            }
        }
    });
</script>
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
<script>
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
        $('#selected_rating').val(ratingValue);
        responseMessage(msg, ratingValue);

    });

    function responseMessage(msg, ratingValue) {
        $('.text-message b').html("<span>" + msg + "</span>");

        $.ajax({
            url: "{{ route('admin.rating') }}",
            type: "GET",
            data: {
                'rateingValue': ratingValue,
                'user_id': '{{ $actor->id }}',

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

    function removeStar() {
        $.ajax({
            url: "{{ route('admin.rating.remove') }}",
            type: "GET",
            data: {
                'user_id': '{{ $actor->id }}',

            },
            dataType: 'json',
            success: function(resp) {
             location.replace(location.href);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        })

    }
    $(window).on('load', function() {
        $('.gallary-image').each(
            function() { //you need to put this inside the window.onload-function (not document.ready), otherwise the image dimensions won't be available yet
                if ($(this).width() / $(this).height() >= 1) {
                    $(this).addClass('landscape');
                } else {
                    $(this).addClass('portrait');
                }
            });
    });
</script>
