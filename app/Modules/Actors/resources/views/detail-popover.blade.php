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
        height: 400px !important;
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
        font-size: 17px;
        font-weight: 600;
    }

    .fa-solid {
        color: #fafafa;
        font-size: 17px;
        font-weight: 600;
        margin-left: 7px;
    }

    .close-popup {
        margin-top: -32px;
        color: #fafafa;
        font-size: 21px;
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
</style>
<div id="popover-content">
    <div class="popover-header-section" id="popoverHeader">
        <div class="popover-header">
            <a href="{{ route('admin.profile-detail', $actor->id) }}">
                <b><span class="actor-name">{{ $actor->first_name . ' ' . $actor->last_name }}</span> <i
                        class="fa-solid fa-up-right-from-square"></i></b>
            </a>
            <div class="text-right h4 close-popup" id="close-yt">x</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
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
                                                    <div class="main-image gallary-image border border-dark rounded-6">
                                                        @if (isset($actor?->images[0]?->image))
                                                            <img id="mainImage" src="{{ $actor?->images[0]?->image }}"
                                                                height="200" width="200" />
                                                        @else
                                                            <img id="mainImage"
                                                                src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                                                height="200" width="200" />
                                                        @endif
                                                    </div>
                                                    {{-- <div class="img-select">
                                                        @foreach ($actor?->images as $img_key => $image)
                                                            <div class="img-select-container active">
                                                                <a href="#" data-id="{{ ++$img_key }}">
                                                                    @isset($image->image)
                                                                        <img height="50" width="60"
                                                                            src="{{ $image->image }}" />
                                                                    @else
                                                                        <img height="50" width="60"
                                                                            src="{{ asset('assets/images/default-user.jfif') }}" />
                                                                    @endisset
                                                                </a>
                                                            </div>
                                                        @endforeach

                                                        <div class="img-select-container active">
                                                            @isset($actor?->images[0]?->image)
                                                                <img height="50" width="60"
                                                                    src="{{ $actor?->images[0]?->image }}" />
                                                            @else
                                                                <img height="50" width="60"
                                                                    src="{{ asset('assets/images/default-user.jfif') }}" />
                                                            @endisset

                                                            @isset($actor?->images[1]?->image)
                                                                <img height="50" width="60"
                                                                    src="{{ $actor?->images[1]?->image }}" />
                                                            @else
                                                                <img height="50" width="60"
                                                                    src="{{ asset('assets/images/default-user.jfif') }}" />
                                                            @endisset

                                                        </div>
                                                        <div class="img-select-container active">
                                                            @isset($actor?->images[1]?->image)
                                                                <img height="50" width="60"
                                                                    src="{{ $actor?->images[1]?->image }}" />
                                                            @else
                                                                <img height="50" width="60"
                                                                    src="{{ asset('assets/images/default-user.jfif') }}" />
                                                            @endisset

                                                        </div>
                                                        <div class="img-select-container active">
                                                            @isset($actor?->images[2]?->image)
                                                                <img height="50" width="60"
                                                                    src="{{ $actor?->images[2]?->image }}" />
                                                            @else
                                                                <img height="50" width="60"
                                                                    src="{{ asset('assets/images/default-user.jfif') }}" />
                                                            @endisset

                                                        </div>
                                                    </div> --}}
                                                    <div class="img-select">
                                                        <div class="divId" onmouseover="changeImageOnClick(event)">
                                                            @if (isset($actor?->images[0]?->image))
                                                                <img class="imgStyle"
                                                                    src="{{$actor?->images[0]?->image }}" />
                                                            @else
                                                                <img class="imgStyle"
                                                                    src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                            @endif
                                                            @if (isset($actor?->images[1]?->image))
                                                                <img class="imgStyle"
                                                                    src="{{ $actor?->images[1]?->image }}" />
                                                            @else
                                                                <img class="imgStyle"
                                                                    src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                                            @endif
                                                            @if (isset($actor?->images[2]?->image))
                                                                <img class="imgStyle"
                                                                    src="{{$actor?->images[2]?->image }}" />
                                                            @else
                                                                <img class="imgStyle"
                                                                    src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
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
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
                                                                    {{ $actor?->profile?->email }}</span>

                                                            </p>
                                                            <p class="card__title"><label class="fw-bold"><b>Ethnicity:
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
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
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
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
                                                                    </b></label><span
                                                                    class="c-green text-break text-truncate">
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
</div>
</div>
<script>
    $('#close-yt').on('click', function(e) {
        if (($('.popover').has(e.target).length != 0) || $(e.target).is('.close')) {
            $('.popover').popover('hide');
        }
    });
    // $(function() {
    //     const imgs = document.querySelectorAll('.img-select-container a');
    //     console.log(imgs);
    //     let imgId = 1;

    //     const imgDiv = document.querySelectorAll('.img-select-container');
    //     imgs.forEach((img) => {
    //         img.addEventListener('mousemove', (e) => {
    //             e.preventDefault();
    //             imgId = img.dataset.id;

    //             imgDiv.forEach((img) => {
    //                 img.classList.remove('active');
    //             });

    //             img.parentElement.classList.add('active');

    //             moveImage();
    //         });
    //     });

    //     function moveImage() {

    //         const imgWidth = document.querySelector('.main-image img:first-child').clientWidth;

    //         let width = (imgId - 1) * imgWidth;
    //         document.querySelector('.main-image').style.transform = `translateX(${-width}px)`;

    //     }
    // })
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