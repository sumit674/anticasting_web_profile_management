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
            <a href="{{route('users.profile',$userInfo?->id)}}" class="text-decoration-none">Edit</a>
          </div>

        </div>
        <div class="card mb-3">
          <div class="card-body shadow  bg-body rounded">
            <span class="personal-info">{{$userInfo?->first_name.' '.$userInfo?->last_name }}</span>
            <span class="personal-info">{{$userInfo?->profile?->date_of_birth}} ({{$userInfo?->age}} Yrs)</span>
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
            <a href="{{route('users.profile',$userInfo?->id)}}" class="text-decoration-none">Edit</a>
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
                        <img src="{{ asset('assets/website/frontend/images/v1_25.png') }}" class="custom-image" alt="Image 3">
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
                        <img src="{{ asset('assets/website/frontend/images/v1_26.png') }}" class="custom-image" alt="Image 3">
                    @endif
                   </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->images[2]?->image))
                    <img src="{{$userInfo?->images[2]?->image}}" class="custom-image" alt="Image 1">
                    @else
                   <img src="{{ asset('assets/website/frontend/images/v1_27.png') }}" class="custom-image" alt="Image 4">
                    @endif

                  </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->profile?->work_reel1))
                    <iframe src="{{$userInfo?->profile?->work_reel1}}" frameborder="0" allowfullscreen
                     height="239" width="200"></iframe>
                     @else
                     <iframe src="https://www.youtube.com/embed/l70UhhNalqA" frameborder="0" allowfullscreen
                     height="239" width="200"></iframe>
                     @endif

                  </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->profile?->work_reel2))
                    <iframe src="{{$userInfo?->profile?->work_reel2}}" frameborder="0" allowfullscreen
                    height="239" width="200"></iframe>
                   @else
                   <iframe src="https://www.youtube.com/embed/XDrB5c4-c9Y" frameborder="0" allowfullscreen
                   height="239" width="200"></iframe>
                 @endif

                  </div>
                  <div class="gallery-item">
                    @if (isset($userInfo?->profile?->work_reel3))
                    <iframe height="239" width="200" src="{{$userInfo?->profile?->work_reel3}}" frameborder="0"
                    allowfullscreen></iframe>
                   @else
                   <iframe height="239" width="200" src="https://www.youtube.com/embed/UXP307MGQzs" frameborder="0"
                   allowfullscreen></iframe>
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
            <h3 class="section-header">About Me</h3>
          </div>
          <div class="">
            <a href="{{route('users.profile',$userInfo?->id)}}" class="text-decoration-none">Edit</a>
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

      <div class="col-md-12">
        <div class="d-flex justify-content-between">
          <div class=" ">
            <h3 class="section-header">Other Information</h3>
          </div>
          <div class="">
            <a href="{{route('users.profile',$userInfo?->id)}}" class="text-decoration-none">Edit</a>
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
                <table>
                  <tr class="mb-5">
                    <td class="mb-5">
                      <div>Height</div>
                      <div class="other-value">
                        {{$userInfo?->profile?->height}} <span class="other-unit">cm</span>
                      </div>
                    </td>
                    <td class="mb-5">
                      <div>Weight</div>
                      <div class="other-value">
                        {{$userInfo?->profile?->weight}} <span class="other-unit">kg</span>
                      </div>
                    </td>
                    <td class="mb-5">
                      <div>IMDB Profile</div>
                      <div class="other-value">
                        <span class="johns-profile">Actor s Profile</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="mt-3">Skills</div>
                      <span class="other-value">dancing, singing, marital arts &nbsp;</span>
                    </td>
                    <td>
                      <div class="mt-3">Formal training in acting</div>
                      <span class="other-value">No record</span>
                    </td>
                  </tr>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('footer')
@endsection
