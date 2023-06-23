@extends('layouts.submit-profile.app')
@section('title', 'View Profile')
@section('header')
    <style>
        .custom-image.up {
            transform: rotate(180deg);
            position: absolute;
        }

        .custom-image.down {
            transform: rotate(180deg);
            position: absolute;
        }

        .custom-image.expanded {
            transform: scale(1.3);
            position: absolute;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="row main-section">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h3 class="section-header">Personal Information</h3>
                    </div>
                    <div class="">
                        <a href="{{ route('users.profile', [$userInfo?->id, 'flag' => 'profile']) }}"
                            class="text-decoration-none">Edit</a>
                    </div>

                </div>
                <div class="card mb-3">
                    <div class="card-body shadow  bg-body rounded">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="personal-main-first">
                                    <span
                                        class="personal-info-name">{{ $userInfo?->first_name . ' ' . $userInfo?->last_name }}</span>
                                    @php
                                        $dateOfBirth = Carbon\Carbon::parse($userInfo?->profile?->date_of_birth)->format('d  M  Y');
                                        $years = Carbon\Carbon::parse($userInfo?->profile?->date_of_birth)->diffInYears(Carbon\Carbon::now());
                                    @endphp
                                    <span class="personal-info">{{ $dateOfBirth }} &nbsp({{ $years }} Yrs age)</span>
                                    <span class="personal-info">{{ $userInfo?->profile?->gender }}</span>
                                </div>
                                <div class="personal-main-second">
                                    <span class="personal-info-phone">{{ $userInfo?->profile?->email }}</span>
                                    <span
                                        class="personal-info-phone">{{ $userInfo?->countryCode . ' ' . $userInfo?->mobile_no }}</span>
                                </div>
                                <hr />
                                <div class="row mt-2">
                                    <div class="col-md-4  align-items-baseline">
                                        <div class="">Ethnicity</div>
                                        <div class="other-value">{{ $userInfo?->profile?->ethnicity }}</div>
                                    </div>
                                    <div class="col-md-4  align-items-baseline">
                                        <div class="">Current Location </div>
                                        <div class="other-value">{{ $userInfo?->profile?->current_location }}</div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class=" ">
                        <h3 class="section-header">
                            Head shots, Intro video, and Work Reels
                        </h3>
                    </div>
                    <div class="">
                        <a href="{{ route('users.profile', [$userInfo?->id, 'flag' => 'pics']) }}"
                            class="text-decoration-none">Edit</a>
                    </div>
                </div>
                <div class="card mb-3 custom-card">
                    <div class="card-body shadow bg-body rounded">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12 col-12 ">
                                <div class="gallery-container">
                                    <div class="gallery-item">
                                        @if (isset($userInfo?->profile?->image1))
                                            <img src="{{ asset('upload/profile/' . $userInfo?->profile?->image1) }}"
                                                class="custom-image" alt="Image 1">
                                        @else
                                            <img src="{{ asset('assets/images/user-default-image.png') }}"
                                                class="custom-image" alt="Image 3">
                                        @endif
                                    </div>
                                    <div class="gallery-item">
                                        @if (isset($userInfo?->introVideo))
                                            <iframe src="{{ $userInfo?->introVideo->intro_video_link }}" frameborder="0"
                                                allowfullscreen height="239" width="200"></iframe>
                                        @else
                                            <iframe src="https://www.youtube.com/embed/ROqDTIxRX0Y" frameborder="0"
                                                allowfullscreen height="239" width="200"></iframe>
                                        @endif

                                    </div>
                                    <div class="gallery-item">
                                        @if (isset($userInfo?->profile?->image2))
                                            <img src="{{ asset('upload/profile/' . $userInfo?->profile?->image2) }}"
                                                class="custom-image" alt="Image 2">
                                        @else
                                            <img src="{{ asset('assets/images/user-default-image.png') }}"
                                                class="custom-image" alt="Image 3">
                                        @endif
                                    </div>
                                    <div class="gallery-item">
                                        @if (isset($userInfo?->profile?->image3))
                                            <img src="{{ asset('upload/profile/' . $userInfo?->profile?->image3) }}"
                                                class="custom-image" alt="Image 3">
                                        @else
                                            <img src="{{ asset('assets/images/user-default-image.png') }}"
                                                class="custom-image" alt="Image 4">
                                        @endif

                                    </div>
                                    <div class="gallery-item">
                                        @if (isset($userInfo?->profile?->work_reel1) && $userInfo?->profile?->work_reel1 != null)
                                            <iframe src="{{ $userInfo?->profile?->work_reel1 }}" frameborder="0"
                                                allowfullscreen height="239" width="200"></iframe>
                                        @else
                                            <img src="{{ asset('assets/website/images/youtube.png') }}" alt=""
                                                class="custom-image">
                                        @endif

                                    </div>
                                    <div class="gallery-item">
                                        @if (isset($userInfo?->profile?->work_reel2) && $userInfo?->profile?->work_reel2 != null)
                                            <iframe src="{{ $userInfo?->profile?->work_reel2 }}" frameborder="0"
                                                allowfullscreen height="239" width="200"></iframe>
                                        @else
                                            <img src="{{ asset('assets/website/images/youtube.png') }}" alt=""
                                                class="custom-image">
                                        @endif

                                    </div>
                                    <div class="gallery-item">
                                        @if (isset($userInfo?->profile?->work_reel3) && $userInfo?->profile?->work_reel3 != null)
                                            <iframe height="239" width="200"
                                                src="{{ $userInfo?->profile?->work_reel3 }}" frameborder="0"
                                                allowfullscreen></iframe>
                                        @else
                                            <img src="{{ asset('assets/website/images/youtube.png') }}" alt=""
                                                class="custom-image">
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class=" ">
                        <h3 class="section-header">Other Information</h3>
                    </div>
                    <div class="">
                        <a href="{{ route('users.profile', [$userInfo?->id, 'flag' => 'other_info']) }}"
                            class="text-decoration-none">Edit</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body shadow  bg-body rounded">
                        <div class="row">

                            <!-- <div class="col-md-2">
                          <img
                            src="https://via.placeholder.com/170x230"
                            alt="Profile Image"
                            class="img-fluid"
                          />
                        </div> -->
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4  align-items-baseline">
                                        <div>Height (ft', in")</div>
                                        <div class="other-value">
                                            {{ $userInfo?->profile?->height }}
                                        </div>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-lg-4  align-items-baseline">
                                        <div>Weight (Kg)</div>
                                        <div class="other-value">
                                            {{ $userInfo?->profile?->weight }}
                                        </div>
                                    </div>
                                    <div class="col-md-4  col-sm-4 col-lg-4 align-items-baseline">
                                        <div>IMDB Profile</div>
                                        <div class="other-value">
                                            <a href="{{ $userInfo?->profile?->imdb_profile }}"
                                                class="text-decoration-none">
                                                <span class="johns-profile me-2">{{ $userInfo?->first_name }}'s
                                                    Profile</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">Skills</div>
                            <span class="other-value">{{$userInfo?->profile?->skills}}&nbsp;</span>
                            <div class="mt-3">Formal training in acting</div>
                            <span class="other-value">{{ $userInfo?->profile?->formal_acting }}</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class=" ">
                        <h3 class="section-header">About Me</h3>
                    </div>
                    <div class="">
                        <a href="{{ route('users.profile', [$userInfo?->id, 'flag' => 'about']) }}"
                            class="text-decoration-none">Edit</a>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body shadow  bg-body rounded">
                        <p class="about-me">
                            {!! $userInfo?->profile?->about_me !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        const images = document.querySelectorAll('.custom-image');

        images.forEach((image) => {
            image.addEventListener('click', () => {
                image.classList.toggle('up');
                image.classList.toggle('down');
                image.classList.toggle('expanded');
            });
        });
    </script>
@endsection
