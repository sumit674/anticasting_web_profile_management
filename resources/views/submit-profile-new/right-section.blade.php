<style>
    .close-btn {
        padding: .2rem .6rem;
        position: relative;
        /* You may need to change top and right. They depend on padding/widht of .badge */
        top: -10px;
        right: -10px;
        background: red;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
    }

    .delete-single-btn {
        padding: .2rem .6rem;
        position: relative;
        top: -10px;
        right: -70px;
        background: red;
        border-radius: 50%;
        color: #fff;
        cursor: pointer;
        width: 20px;
        height: 20px;
    }

    .card-top {
        margin-bottom: 15px !important;
        height: 383px !important;
        align-items: center;
    }

    .close-itm-btn {
        background: rgb(235, 217, 217)(201, 47, 47);
        /* width: 18px; */
        height: 18px;
        position: absolute;
        top: 0;
        right: 93px;
        color: red;
        /* padding: 2px 2px 2px 2px; */
        background: #fcf0f0;
    }


    /* .item-wrapper .close {
        position: absolute;
        left: 100%;
        margin-left: -10px;
        margin-top: 2px;
        cursor: pointer;
    } */
</style>
<div class="card card-top me-0">
    <div class="card-body">

        <div class="d-flex justify-content-between">
            <h3 class="h6 fw-bold">Headshot Images <b><span style="color:red;">*</span></b></h3>
            <div class="info" style="cursor:pointer;" tabindex="0" data-bs-placement="top" data-bs-toggle="popover"
                data-bs-content-id="popover-content" data-bs-trigger="focus" title="Headshot Image">
                <i class="fa fa-info-circle"></i>
            </div>
            {{-- @if (count($userInfo?->images) > 0)
                <div class="close-btn"
                    onclick="deleteAllHeadShotImages('{{ route('user.delete-all-headshots', auth()->user()->id) }}')">x
                </div>
            @endif --}}
        </div>
        <div id="popover-content" class="d-none">
            <div class="form-group">
                {{-- <label class="form-label" for="LocationInput">Sample Headshot Image</label> --}}
                <div class="yt-video">
                    <img width="200"
                        src="https://t4.ftcdn.net/jpg/02/86/91/07/360_F_286910763_zOX9bUhDQPUvk45vWOaNsGAvDf18oSod.jpg"
                        border="1">

                </div>
                <strong class="form-label">Sample resolutions</strong>
                <ul>
                    <li>width: 250px</li>
                    <li>height: 167px</li>
                </ul>
                <strong class="form-label">Sample Image Size/Type</strong>
                <span>Maximum: 4MB</span>
                <br />
                <span>Type: jpg, jfif, jpeg, png, gif</span>
            </div>
        </div>
        <div class="feature" @if (count($userInfo?->images) == 0) id="upload-default" @endif>
            <figure class="featured-item r-3-2 transition main-img img portrait">
                @if (count($userInfo?->images) == 0)
                    <img id="default-img" src="{{ asset('assets/images/default-user.jfif') }}" alt="User"
                        title="Please select an image" style="width:100%; cursor: pointer;">
                @endif
            </figure>
        </div>
        <div class="gallery-wrapper">
            <div class="gallery d-flex">
                <div class="item-wrapper d-inline-flex">
                    {{-- <div class="delete-single-btn">x</div> --}}
                    {{-- @if (count($userInfo?->images) > 0)
                        <div class="close-itm-btn"
                            onclick="deleteAllHeadShotImages('{{ route('user.delete-all-headshots', auth()->user()->id) }}')">x
                        </div>
                    @endif --}}
                    <figure class="gallery-item image-holder r-3-2 active transition" id="image1" data-value="1">
                    </figure>

                </div>
                <div class="item-wrapper d-inline-flex">
                    @if (isset($userInfo?->images) && isset($userInfo?->images[1]->field_name) && $userInfo?->images[1]->field_name != '')
                        <div class="close-itm-btn close-1" style="display: none;"
                            onclick="deleteSingleHeadShotImage('{{ route('user.delete-single.image', ['image2', auth()->user()->id]) }}')">
                            <i class="fa fa-trash"></i>
                        </div>
                    @endif
                    <figure class="gallery-item image-holder r-3-2 transition" id="image2" data-value="2"></figure>
                </div>
                <div class="item-wrapper d-inline-flex">
                    @if (isset($userInfo?->images) && isset($userInfo?->images[2]->field_name) && $userInfo?->images[2]->field_name != '')
                        <div class="close-itm-btn close-2" style="display: none;"
                            onclick="deleteSingleHeadShotImage('{{ route('user.delete-single.image', ['image3', auth()->user()->id]) }}')">
                            <i class="fa fa-trash"></i>
                        </div>
                    @endif
                    <figure class="gallery-item image-holder r-3-2 transition" id="image3" data-value="3"></figure>
                </div>

            </div>
        </div>
        @error('image1')
            <div class="d-inline-flex">
                <span class="text-danger">
                    Please select at-least one image.
                </span>
            </div>
        @enderror
    </div>
</div>
<div class="card mb-5">
    <div class="card-body ms-1">

        <div class="d-flex justify-content-between">
            <span class="h6 fw-bold">Intro video <b><span style="color:red;">*</span></b></span>
        </div>
        <div class="row">
            {{-- <form action="{{ route('users.introvideos') }}" method="post">
                @csrf --}}
            <div class="col-md-12 col-lg-12 col-sm-6">
                <div class="form-group">
                    {{-- <label  class="form-label" for="">Upload video</label> --}}
                    <input type="text" class="form-control {{ $errors->has('intro_video_link') ? ' is-invalid' : '' }}" name="intro_video_link"
                        placeholder="Please enter  intro video" id="show_intro_video"
                        value="{{ old('intro_video_link', isset($userIntroVideo->intro_video_link) ? $userIntroVideo->intro_video_link : '') }}" />
                    {{-- <button class="btn btn-sm" style="background-color: #ff5b00;" type="submit">Save</button> --}}
                </div>
            </div>
            {{-- </form> --}}
        </div>
        <div class="form-group mt-2">
            {{--  @if (isset($userIntroVideo) && $userIntroVideo != null)  --}}
                {{--  <iframe style="width:100%; display:none;" src="{{ isset($userIntroVideo->intro_video_link) ? $userIntroVideo->intro_video_link : '' }}" allowfullscreen="true" id="introvideo"></iframe>  --}}
                <iframe style="width:100%; display:none;" allowfullscreen="true" id="introvideo"></iframe>
                <img id="default-video" src="{{ asset('assets/images/video-thumb.png') }}" alt="" style="width: 100%;">
            {{--  @else  --}}
                {{--  <iframe style="width: 100%;" src=" " allowfullscreen="true" id="video_intro">  --}}
                {{--  </iframe>  --}}
                {{--  <img src="{{ asset('assets/images/video-thumb.png') }}" alt="" style="width: 100%;">  --}}
            {{--  @endif  --}}

        </div>
        <div class="row mt-3">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="d-flex justify-content-between">
                    <span class="h6 fw-bold">Sample intro video</span>
                </div>
                <div id="video-section" class="mb-2">
                    <div class="sample-yt-video">
                        <div id="intro_hindi">
                            <iframe class="video" style="width: 100%;" src="https://www.youtube.com/embed/q22JrhzFEuQ"
                                allowfullscreen="true">
                            </iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@include('submit-profile-new.upload-image')
