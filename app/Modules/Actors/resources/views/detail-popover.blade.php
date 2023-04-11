<style>
    #popover-content{
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
    .gallary-image img:hover{
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
        display: flex;
        margin-top: 2px;
        height: 30px;
        width: 325px !important;
        margin-left:60px;
    }

    .img-select-container {
        border: 2px solid white;
    }

    .img-select-container img{
        width: 100% !important;
        display: inline-block;
    }
    .img-select-container img:hover{
        width: 100% !important;
        display: inline-block;
        object-fit:cover;
        opacity: 0.5;
    }
    /* .img-select-container img hover:{
        width: 100% !important;
        display: inline-block;
        border: 1px solid black;
        opacity: 0.4;

    } */
    .img-select .active{
        border: 1px dotted black;
        height: 50px !important;
        width: 60px !important;
    }

    .card-body{
        max-height: 500px;
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .popover-header-section{
        position: sticky;
    }
    .actor-name{
        color: #26247b;
    }
</style>
<div id="popover-content">
    <div class="popover-header-section" id="popoverHeader">
        <div class="popover-header">
            <a href="{{route('admin.profile-detail',$actor->id)}}">
                <b><span class="actor-name">{{ $actor->first_name . ' ' . $actor->last_name }}</span> <i class="fa-solid fa-up-right-from-square"></i></b>
            </a>
            <div class="text-right h4" style="margin-top:-32px;" id="close-yt">x</div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
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
                                                        @foreach ( $actor?->images as $image)
                                                            @isset($image->image)
                                                            <a href="{{route('admin.profile-detail',$actor->id)}}">
                                                                <img height="330" src="{{ $image->image }}" />
                                                            </a>   
                                                            @else
                                                                <img src="{{ asset('assets/images/default-user.jfif') }}" />
                                                            @endisset
                                                        @endforeach
                                                    </div>
                                                    <div class="img-select">
                                                        @foreach ( $actor?->images as $img_key => $image)
                                                            <div class="img-select-container active">
                                                                <a  href="#" data-id="{{ ++$img_key }}">
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


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="c-performers-quick-view__links g-hidden-sm g-col-md-4 g-col-lg-4">
                                                    <div class="c-basic-info-section__edit-panel"><div class="c-edit-panel"><h4 class="c-edit-panel__header">Details</h4><div class="c-edit-panel__controls"></div></div></div>
                                                    <a href="#" target="_blank" class="c-icon-text-link c-icon-text-link--primary" tabindex="0" aria-label="Email profile">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="c-icon-text-link__text c-icon-text-link__text--icon">Email profile</span>
                                                    </a>
                                                    <a href="https://www.spotlight.com/2696-7866-2777?action=print" target="_blank" class="c-icon-text-link c-icon-text-link--primary" tabindex="0" aria-label="Print profile">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-print" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="c-icon-text-link__text c-icon-text-link__text--icon">Print profile</span>
                                                    </a>
                                                    <a href="#" target="_blank" class="c-icon-text-link c-icon-text-link--primary" tabindex="0" aria-label="View/Add notes">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="c-icon-text-link__text c-icon-text-link__text--icon">View/Add notes</span>
                                                    </a>
                                                    <a href="https://mediaviewer.spotlight.com/artist/showreels?artistRef=F291388" target="_blank" class="c-icon-text-link c-icon-text-link--primary" tabindex="0" aria-label="2 Showreels">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fa fa-video" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="c-icon-text-link__text c-icon-text-link__text--icon">2 Showreels</span>
                                                    </a>
                                                    <a href="https://mediaviewer.spotlight.com/artist/audioclips?artistRef=F291388" target="_blank" class="c-icon-text-link c-icon-text-link--primary" tabindex="0" aria-label="5 Audio">
                                                        <span class="c-icon-text-link__icon">
                                                            <i class="fas fa-microphone" aria-hidden="true"></i>
                                                        </span>
                                                        <span class="c-icon-text-link__text c-icon-text-link__text--icon">5 Audio</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="card__content">
                                                    <div class="c-basic-info-section__edit-panel"><div class="c-edit-panel"><h4 class="c-edit-panel__header">Details</h4><div class="c-edit-panel__controls"></div></div></div>
                                                    <p class="card__title"><label class="fw-bold"><b>Email: </b></label><span
                                                        class="c-green text-break text-truncate"> {{ $actor?->profile?->email }}</span>

                                                </p>
                                                <p class="card__title"><label class="fw-bold"><b>Ethnicity: </b></label><span
                                                        class="c-green text-break text-truncate"> {{ $actor?->profile?->ethnicity }}</span>

                                                </p>
                                                <p class="card__title">
                                                    <label class="fw-bold"><b>Gender: </b></label>
                                                    <span
                                                        class="c-green text-break text-truncate"> {{ $actor?->profile?->gender }}</span>
                                                </p>
                                                <p class="card__title">
                                                    <label class="fw-bold"><b>Date Of Birth: </b></label>
                                                    <span
                                                        class="c-green text-break text-truncate"> {{ $actor?->profile?->date_of_birth }}</span>
                                                </p>

                                                <p class="card__title">
                                                    <label class="fw-bold "><b>Current Location: </b></label>
                                                    <span
                                                        class="c-green text-break text-truncate"> {{ $actor?->profile?->current_location }}</span>
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
                                                            I was born and raised in Stockholm, Sweden, by Transylvanian-Hungarian parents. Knowing early on that acting was in my future I made sure to learn the accents from my favorite films. Later I went on to study in Vancouver, Stockholm, and Bristol, where I'm currently based.<br><br>I've been in films, TV, and commercials, but acting is not my only creative outlet. I'm teaching a scene study, I've directed short films, and done stand up. In 2019 I got to open for one of Sweden’s biggest comedians, Magnus Betnér. <br><br>I'm fully vaccinated, can legally work both in the UK and in the EU, up-to-date passport.
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
                                                                            <iframe width="80%" src="{{ $actor?->profile?->work_reel1 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen>
                                                                            </iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class="d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}" alt=""
                                                                                width="70%">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                    @if ($actor?->profile?->work_reel2 != null)
                                                                        <div>
                                                                            <iframe  width="80%" src="{{ $actor?->profile?->work_reel2 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                allowfullscreen></iframe>
                                                                        </div>
                                                                    @else
                                                                        <div class=" d-flex justify-content-center">
                                                                            <img src="{{ asset('assets/website/images/youtube.png') }}" alt=""
                                                                                width="70%">
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-4 mb-3">
                                                                        @if ($actor?->profile?->work_reel3 != null)
                                                                            <iframe  width="80%" src="{{ $actor?->profile?->work_reel3 }}"
                                                                                frameborder="0"
                                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                                            allowfullscreen></iframe>

                                                                        @else
                                                                            <div class="d-flex justify-content-center">
                                                                                <img src="{{ asset('assets/website/images/youtube.png') }}" alt=""
                                                                                    width="70%">
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
    $(function() {
        const imgs = document.querySelectorAll('.img-select-container a');
        let imgId = 1;

        const imgDiv = document.querySelectorAll('.img-select-container');
        imgs.forEach((img) => {
            img.addEventListener('mousemove', (e) => {
                e.preventDefault();
                imgId = img.dataset.id;

                imgDiv.forEach((img) => {
                    img.classList.remove('active');
                });

                img.parentElement.classList.add('active');

                moveImage();
            });
        });

        function moveImage() {
            const imgWidth = document.querySelector('.main-image img:first-child').clientWidth;

            let width = (imgId - 1) * imgWidth;
            document.querySelector('.main-image').style.transform = `translateX(${-width}px)`;

        }
    })
</script>
