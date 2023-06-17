@extends('layouts.submit-profile.app')
@section('title','View Profile')
@section('header')
@endsection
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex justify-content-between">
          <div class="">
            <h3 class="section-header">Personal Information <span class="Complete-this-secti">
                (Complete this section)
              </span></h3>
          </div>
          <div class="">
            <a href="{{route('users.profile',[$userInfo?->id,'flag'=>'profile'])}}" class="text-decoration-none">Edit</a>
          </div>

        </div>
        <div class="card mb-3">
          <div class="card-body shadow  bg-body rounded">
            <span class="personal-info">{{$userInfo?->first_name.' '.$userInfo?->last_name }}</span>
            @php
                $dateOfBirth = Carbon\Carbon::parse($userInfo?->profile?->date_of_birth)->format('d-m-Y');

            @endphp
            <span class="personal-info">{{$dateOfBirth}} ({{$userInfo?->age}} Yrs)</span>
            <span class="personal-info">{{$userInfo?->profile?->gender}}</span>
            <span class="personal-info">{{$userInfo?->profile?->email}}</span>
            <span class="personal-info-mobile-no">{{$userInfo?->countryCode.' '.$userInfo?->mobile_no}}</span>
            <hr />
            <div class="row mt-2">
              <div class="col-md-4  align-items-baseline">
                <div class="">Ethnicity</div>
                <div class="other-value">{{$userInfo?->profile?->ethnicity}}</div>
              </div>
              <div class="col-md-4  align-items-baseline">
                <div class="">Current Location </div>
                <div class="other-value">{{$userInfo?->profile?->current_location}}</div>
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
            <a href="{{route('users.profile',[$userInfo?->id,'flag'=>'pics'])}}" class="text-decoration-none">Edit</a>
          </div>
        </div>
        <div class="card mb-3 custom-card">
          <div class="card-body shadow bg-body rounded">
            <div class="row">
              <div class="col-md-12">
                <div class="gallery-container">
                  <div class="gallery-item">
                    @if (isset($userInfo?->images[0]?->image))
                    <img src="{{$userInfo?->images[0]?->image}}" class="custom-image" alt="Image 1">
                      @else
                        <img src="{{ asset('assets/images/user-default-image.png') }}" class="custom-image" alt="Image 3">
                    @endif
                </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->introVideo))
                       <iframe src="{{$userInfo?->introVideo->intro_video_link}}" frameborder="0" allowfullscreen
                        height="239" width="200"></iframe>
                    @else
                    <iframe src="https://www.youtube.com/embed/ROqDTIxRX0Y" frameborder="0" allowfullscreen
                    height="239" width="200"></iframe>
                    @endif

                  </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->images[1]?->image))
                       <img src="{{$userInfo?->images[1]?->image}}" class="custom-image" alt="Image 1">
                      @else
                        <img src="{{ asset('assets/images/user-default-image.png') }}" class="custom-image" alt="Image 3">
                    @endif
                   </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->images[2]?->image))
                    <img src="{{$userInfo?->images[2]?->image}}" class="custom-image" alt="Image 1">
                    @else
                     <img src="{{ asset('assets/images/user-default-image.png') }}" class="custom-image" alt="Image 4">
                    @endif

                  </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->profile?->work_reel1)&& $userInfo?->profile?->work_reel1 !=null)
                    <iframe src="{{$userInfo?->profile?->work_reel1}}" frameborder="0" allowfullscreen
                     height="239" width="200"></iframe>
                     @else
                     <img src="{{ asset('assets/website/images/youtube.png') }}"
                     alt="" class="custom-image">
                     @endif

                  </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->profile?->work_reel2) && $userInfo?->profile?->work_reel2 !=null)
                    <iframe src="{{$userInfo?->profile?->work_reel2}}" frameborder="0" allowfullscreen
                    height="239" width="200"></iframe>
                   @else
                   <img src="{{ asset('assets/website/images/youtube.png') }}"
                   alt="" class="custom-image">
                 @endif

                  </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->profile?->work_reel3) && $userInfo?->profile?->work_reel3 !=null)
                    <iframe height="239" width="200" src="{{$userInfo?->profile?->work_reel3}}" frameborder="0"
                    allowfullscreen></iframe>
                   @else
                   <img src="{{ asset('assets/website/images/youtube.png') }}"
                   alt=""  class="custom-image">
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
            <a href="{{route('users.profile',[$userInfo?->id,'flag'=>'other_info'])}}" class="text-decoration-none">Edit</a>
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
                          {{$userInfo?->profile?->height}}
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-4 col-lg-4  align-items-baseline">
                        <div>Weight (Kg)</div>
                       <div class="other-value">
                        {{$userInfo?->profile?->weight}}
                       </div>
                    </div>
                    <div class="col-md-4  col-sm-4 col-lg-4 align-items-baseline">
                        <div>IMDB Profile</div>
                        <div class="other-value">
                            <a href="{{$userInfo?->profile?->imdb_profile}}" class="text-decoration-none">
                          <span class="johns-profile me-2">{{$userInfo?->first_name}} 's Profile</span>
                        </a>
                        </div>
                    </div>
                </div>
              </div>
                  <div class="mt-3">Skills</div>
                  <span class="other-value">{{$userInfo?->profile?->skills}} &nbsp;</span>
                   <div class="mt-3">Formal training in acting</div>
                    <span class="other-value">{{$userInfo?->profile?->formal_acting}}</span>

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
            <a href="{{route('users.profile',[$userInfo?->id,'flag'=>'about'])}}" class="text-decoration-none">Edit</a>
          </div>
        </div>
        <div class="card mb-3">
          <div class="card-body shadow  bg-body rounded">
            <p class="about-me">
                {!!$userInfo?->profile?->about_me !!}
            </p>
          </div>
        </div>
      </div>


    </div>
  </div>
@endsection
@section('footer')
@endsection
