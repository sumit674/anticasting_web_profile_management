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
        margin-bottom: 13px !important;
        height: 412px !important;
        align-items: center;
    }
</style>
<div class="card card-top me-0">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h3 class="h6 fw-bold">Headshot Images <b><span style="color:red;">*</span></b></h3>
            <div class="info" style="cursor:pointer;" tabindex="0" data-bs-placement="top" data-bs-toggle="popover"
                data-bs-content-id="popover-content" data-bs-trigger="focus" title="Headshot Image">
                <i class="fa fa-info-circle"></i>
            </div>
            @if (count($userInfo?->images) > 0)
                <div class="close-btn"
                    onclick="deleteAllHeadShotImages('{{ route('user.delete-all-headshots', auth()->user()->id) }}')">x
                </div>
            @endif
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
            </div>
        </div>
        <div class="feature" @if (count($userInfo?->images) == 0) id="upload-default" @endif>
            <figure class="featured-item r-3-2 transition main-img img">
                @if (count($userInfo?->images) == 0)
                    <img id="default-img" src="{{ asset('assets/images/default-user.jfif') }}" alt="User"
                        title="Please select an image" style="width:100%; cursor: pointer;">
                @endif
            </figure>
        </div>
        <div class="gallery-wrapper">
            <div class="gallery">
                <div class="item-wrapper">
                    {{-- <div class="delete-single-btn">x</div> --}}
                    <figure class="gallery-item image-holder r-3-2 active transition" id="image1" data-value="1">
                    </figure>
                </div>
                <div class="item-wrapper">
                    <figure class="gallery-item image-holder r-3-2 transition" id="image2" data-value="2"></figure>
                </div>
                <div class="item-wrapper">
                    <figure class="gallery-item image-holder r-3-2 transition" id="image3" data-value="3"></figure>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="card mb-5">
    <div class="card-body ms-1">

        <div class="d-flex justify-content-between">
            <span class="h6 fw-bold">Upload Intro video <b><span style="color:red;">*</span></b></span>
        </div>
        <div class="row" style="margin-top:20px;">
            {{-- <form action="{{ route('users.introvideos') }}" method="post">
                @csrf --}}
            <div class="col-md-12 col-lg-12 col-sm-6">
                <div class="input-group">
                    <input type="text" class="form-control" name="intro_video_link"
                        placeholder="Please enter  intro video"
                        value="{{ old('intro_video_link', isset($userIntroVideo->intro_video_link) ? $userIntroVideo->intro_video_link : '') }}" />
                    {{-- <button class="btn btn-sm" style="background-color: #ff5b00;" type="submit">Save</button> --}}
                </div>
                @error('intro_video_link')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            {{-- </form> --}}
        </div>
        <div class="form-group mt-3 ms-3">
            @if (isset($userIntroVideo) && $userIntroVideo != null)
                <iframe style="width:75%;" src="{{ $userIntroVideo->intro_video_link }}" allowfullscreen="true">
                </iframe>
            @else
                <img src="{{ asset('assets/images/video-thumb.png') }}" alt="" style="width:75%;">
            @endif
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                <div class="d-flex justify-content-between">
                    <span class="h6 fw-bold">Sample intro video</span>
                </div>
                <div id="video-section" class="mb-2 ms-3">
                    <div class="sample-yt-video mt-2">
                        <div id="intro_hindi">
                            <iframe class="video" style="width:75%;" src="https://www.youtube.com/embed/q22JrhzFEuQ"
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
