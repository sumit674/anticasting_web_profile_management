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
        width: 330px !important;
        height: 335px !important;
        background-color: #fff;
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding: 5px;
        gap: 10px;
        object-fit: contain;
        position: fixed;
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
        overflow-x: hidden;
    }

    .popover-header-section {
        position: sticky;
    }

    .actor-name {
        color: #fafafa;
        font-size:24px;
        font-weight:700;
    }

    .fa-solid {
        color: #fafafa;
        font-size: 24px;
        font-weight: 600;
        margin-left: 10px;
    }
    .fa-brands{
        color: #fafafa;
        font-size: 24px;
        margin-left: 10px;
    }
    .close-popup {
        margin-top: -44px;
        color: #fafafa;
        font-size:35px;
        font-weight: 600;
    }

    .c-further-information p {
        font-size: 14px;
        padding: 10px;
        word-break: break-word;
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

    /*Image Gallary*/
    .imgStyle {
        width: 70px;
        height: 82px;
        padding: 3px;
        object-fit: cover;

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

    /* Rating Star Widgets Style */
    .rating-stars ul {
        list-style-type: none;
        padding: 0;
        margin-right:80px;
        margin-top: -19px;
        -moz-user-select: none;
        -webkit-user-select: none;
    }

    .rating-stars ul>li.star {
        display: inline-block;

    }

    /* Idle State of the stars */
    .rating-stars ul>li.star>i.fa {
        font-size: 24px;
        /* Change the size of the stars */
        color: #fff;
        /* Color on idle state */
    }

    /* Hover state of the stars */
    .rating-stars ul>li.star.hover>i.fa {
        color: red;
    }

    /* Selected state of the stars */
    .rating-stars ul>li.star.selected>i.fa {
        color: #FF912C;
    }
</style>
<div id="popover-content">
    <div class="popover-header-section" id="popoverHeader">
        <div class="popover-header">
            <a href="{{ route('admin.profile-detail', $actor->id) }}" target="__blank">
                <b><span class="actor-name">{{ $actor->first_name . ' ' . $actor->last_name }}</span> <i
                        class="fa-solid fa-up-right-from-square"></i></b>
            </a>
            <b><span class="fa-brands fa-facebook"></span></b>
            <b><span class="fa-brands fa-square-instagram"></span></b>
            <div class='text-message text-center' style="margin-top:-23px;color:hsl(0, 0%, 99%);">
                <b></b>
            </div>
            <div class='rating-stars text-right'>

                <ul id='stars'>
                    <li class='star' title='Poor' data-value='1'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Fair' data-value='2'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Good' data-value='3'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Excellent' data-value='4'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='WOW!!!' data-value='5'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                </ul>
            </div>
            <div class="text-right h4 close-popup" id="close-yt">x</div>
        </div>
        {{-- <div class="popover-header">
            <b><span class="actor-name">{{ $actor->first_name . ' ' .  $actor->last_name }}</span> </b>
            <b><span class="fa-brands fa-facebook"></span></b>
            <b><span class="fa-brands fa-square-instagram"></span></b>
            <div class='text-message text-center' style="margin-top:-23px;color:hsl(0, 0%, 99%);">
                <b></b>
            </div>
            <div class="text-right rating-widget h4 " style="margin-top:-23px;" id="close-yt">

                <!-- Rating Stars Box -->
               
            </div>
        </div> --}}
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
                                                    <img id="mainImage"
                                                        src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                                        height="200" width="200" />
                                                @endif
                                            </div>
                                            <div class="img-select">
                                                <div class="divId" onmouseover="changeImageOnClick(event)">
                                                    @if (isset($actor?->images[0]?->image))
                                                        <img class="imgStyle" src="{{ $actor?->images[0]?->image }}" />
                                                    @else
                                                        <img class="imgStyle"
                                                            src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                    @endif
                                                    @if (isset($actor?->images[1]?->image))
                                                        <img class="imgStyle" src="{{ $actor?->images[1]?->image }}" />
                                                    @else
                                                        <img class="imgStyle"
                                                            src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                    @endif
                                                    @if (isset($actor?->images[2]?->image))
                                                        <img class="imgStyle" src="{{ $actor?->images[2]?->image }}" />
                                                    @else
                                                        <img class="imgStyle"
                                                            src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                    @endif

                                                </div>
                                            </div>
                                            @else
                                            <div class="d-flex justify-content-center align-items-center mt-3">
                                                <a href="{{ route('admin.profile-detail', $actor->id) }}"
                                                    target="__blank">
                                                <img id="mainImage"
                                                    src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                                    height="250" width="250" style="object-fit:fill;" />
                                                </a>
                                            </div>
                                            @endif
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
                                                <div class="c-further-information">
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
                                                                <div>
                                                                    <iframe width="80%"
                                                                        src="{{ $actor?->profile?->work_reel1 }}"
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
                                                            @if ($actor?->profile?->work_reel2 != null)
                                                                <div>
                                                                    <iframe width="80%"
                                                                        src="{{ $actor?->profile?->work_reel2 }}"
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
                                                            @if ($actor?->profile?->work_reel3 != null)
                                                                <iframe width="80%"
                                                                    src="{{ $actor?->profile?->work_reel3 }}"
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
            @endisset
            @endif
        </div>
    </div>

</div>
</div>
<script>
    $('#close-yt').on('click', function(e) {
        if (($('.popover').has(e.target).length != 0) || $(e.target).is('.close')) {
            $('.popover').popover('hide');
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
                alert(resp.message);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        })

    }
</script>
