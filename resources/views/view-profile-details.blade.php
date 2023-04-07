@extends('front-dashboard.layouts.app')
@section('header')
    <style>
        /* User Cards */
        .user-box .mainImage {
            width: 110px;
            margin: auto;
            margin-top: 20px;

        }

        .user-box .mainImage {
            width: 100%;
            height: 100%;
            padding: 3px;
            margin-right: 100px;
            background: #fff;
            -webkit-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
            -ms-box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
        }

        .profile-card-2 .card {
            position: relative;
        }

        .profile-card-2 .card .card-body {
            z-index: 1;
        }

        .profile-card-2 .card::before {
            content: "";
            position: absolute;
            top: 0px;
            right: 0px;
            left: 0px;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            height: 112px;
            background-color: #e6e6e6;
        }

        .profile-card-2 .card.profile-primary::before {
            background-color: #4E73DF;
        }

        .profile-card-2 .card.profile-success::before {
            background-color: #15ca20;
        }

        .profile-card-2 .card.profile-danger::before {
            background-color: #fd3550;
        }

        .profile-card-2 .card.profile-warning::before {
            background-color: #ff9700;
        }

        .profile-card-2 .user-box {
            margin-top: 30px;
        }

        .profile-card-3 .user-fullimage {
            position: relative;
        }

        .profile-card-3 .user-fullimage .details {
            position: absolute;
            bottom: 0;
            left: 0px;
            width: 100%;
        }

        .profile-card-4 .user-box {
            width: 240px;
            margin: auto;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .profile-card-4 .list-icon {
            display: table-cell;
            font-size: 30px;
            padding-right: 20px;
            vertical-align: middle;
            color: #223035;
        }

        .profile-card-4 .list-details {
            display: table-cell;
            vertical-align: middle;
            font-weight: 600;
            color: #223035;
            font-size: 15px;
            line-height: 15px;
        }

        .profile-card-4 .list-details small {
            display: table-cell;
            vertical-align: middle;
            font-size: 12px;
            font-weight: 400;
            color: #808080;
        }

        /*Nav Tabs & Pills */
        .nav-tabs .nav-link {
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            margin: 2px;
            margin-bottom: 0;
            padding: 12px 20px;
            text-transform: uppercase;
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;

        }

        .nav-tabs .nav-link:hover {
            border: 1px solid transparent;
        }

        .nav-tabs .nav-link i {
            margin-right: 2px;
            font-weight: 600;
        }

        .top-icon.nav-tabs .nav-link i {
            margin: 0px;
            font-weight: 500;
            display: block;
            font-size: 20px;
            padding: 5px 0;
        }

        .nav-tabs-primary.nav-tabs {
            border-bottom: 1px solid #4E73DF;
        }

        .nav-tabs-primary .nav-link.active,
        .nav-tabs-primary .nav-item.show>.nav-link {
            color: #4E73DF;
            background-color: #fff;
            border-color: #4E73DF #4E73DF #fff;
            border-top: 3px solid #4E73DF;
        }

        .nav-tabs-success.nav-tabs {
            border-bottom: 1px solid #15ca20;
        }

        .nav-tabs-success .nav-link.active,
        .nav-tabs-success .nav-item.show>.nav-link {
            color: #15ca20;
            background-color: #fff;
            border-color: #15ca20 #15ca20 #fff;
            border-top: 3px solid #15ca20;
        }

        .nav-tabs-info.nav-tabs {
            border-bottom: 1px solid #0dceec;
        }

        .nav-tabs-info .nav-link.active,
        .nav-tabs-info .nav-item.show>.nav-link {
            color: #0dceec;
            background-color: #fff;
            border-color: #0dceec #0dceec #fff;
            border-top: 3px solid #0dceec;
        }

        .nav-tabs-danger.nav-tabs {
            border-bottom: 1px solid #fd3550;
        }

        .nav-tabs-danger .nav-link.active,
        .nav-tabs-danger .nav-item.show>.nav-link {
            color: #fd3550;
            background-color: #fff;
            border-color: #fd3550 #fd3550 #fff;
            border-top: 3px solid #fd3550;
        }

        .nav-tabs-warning.nav-tabs {
            border-bottom: 1px solid #ff9700;
        }

        .nav-tabs-warning .nav-link.active,
        .nav-tabs-warning .nav-item.show>.nav-link {
            color: #ff9700;
            background-color: #fff;
            border-color: #ff9700 #ff9700 #fff;
            border-top: 3px solid #ff9700;
        }

        .nav-tabs-dark.nav-tabs {
            border-bottom: 1px solid #223035;
        }

        .nav-tabs-dark .nav-link.active,
        .nav-tabs-dark .nav-item.show>.nav-link {
            color: #223035;
            background-color: #fff;
            border-color: #223035 #223035 #fff;
            border-top: 3px solid #223035;
        }

        .nav-tabs-secondary.nav-tabs {
            border-bottom: 1px solid #75808a;
        }

        .nav-tabs-secondary .nav-link.active,
        .nav-tabs-secondary .nav-item.show>.nav-link {
            color: #75808a;
            background-color: #fff;
            border-color: #75808a #75808a #fff;
            border-top: 3px solid #75808a;
        }

        .tabs-vertical .nav-tabs .nav-link {
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            margin: 2px;
            margin-right: -1px;
            padding: 12px 1px;
            text-transform: uppercase;
            border: 1px solid transparent;
            border-radius: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
        }

        .tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #dee2e6;
        }

        .tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: 1px solid #dee2e6;
            border-right: 0;
            border-left: 1px solid #dee2e6;
        }

        .tabs-vertical-primary.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #4E73DF;
        }

        .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-primary.tabs-vertical .nav-tabs .nav-link.active {
            color: #4E73DF;
            background-color: #fff;
            border-color: #4E73DF #4E73DF #fff;
            border-bottom: 1px solid #4E73DF;
            border-right: 0;
            border-left: 3px solid #4E73DF;
        }

        .tabs-vertical-success.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #15ca20;
        }

        .tabs-vertical-success.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-success.tabs-vertical .nav-tabs .nav-link.active {
            color: #15ca20;
            background-color: #fff;
            border-color: #15ca20 #15ca20 #fff;
            border-bottom: 1px solid #15ca20;
            border-right: 0;
            border-left: 3px solid #15ca20;
        }

        .tabs-vertical-info.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #0dceec;
        }

        .tabs-vertical-info.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-info.tabs-vertical .nav-tabs .nav-link.active {
            color: #0dceec;
            background-color: #fff;
            border-color: #0dceec #0dceec #fff;
            border-bottom: 1px solid #0dceec;
            border-right: 0;
            border-left: 3px solid #0dceec;
        }

        .tabs-vertical-danger.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #fd3550;
        }

        .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-danger.tabs-vertical .nav-tabs .nav-link.active {
            color: #fd3550;
            background-color: #fff;
            border-color: #fd3550 #fd3550 #fff;
            border-bottom: 1px solid #fd3550;
            border-right: 0;
            border-left: 3px solid #fd3550;
        }

        .tabs-vertical-warning.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #ff9700;
        }

        .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-warning.tabs-vertical .nav-tabs .nav-link.active {
            color: #ff9700;
            background-color: #fff;
            border-color: #ff9700 #ff9700 #fff;
            border-bottom: 1px solid #ff9700;
            border-right: 0;
            border-left: 3px solid #ff9700;
        }

        .tabs-vertical-dark.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #223035;
        }

        .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-dark.tabs-vertical .nav-tabs .nav-link.active {
            color: #223035;
            background-color: #fff;
            border-color: #223035 #223035 #fff;
            border-bottom: 1px solid #223035;
            border-right: 0;
            border-left: 3px solid #223035;
        }

        .tabs-vertical-secondary.tabs-vertical .nav-tabs {
            border: 0;
            border-right: 1px solid #75808a;
        }

        .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-item.show .nav-link,
        .tabs-vertical-secondary.tabs-vertical .nav-tabs .nav-link.active {
            color: #75808a;
            background-color: #fff;
            border-color: #75808a #75808a #fff;
            border-bottom: 1px solid #75808a;
            border-right: 0;
            border-left: 3px solid #75808a;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
            color: #223035;
            font-size: 12px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 3px;
            padding: 12px 20px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;

        }

        .nav-pills .nav-link:hover {
            background-color: #f4f5fa;
        }

        .nav-pills .nav-link i {
            margin-right: 2px;
            font-weight: 600;
        }

        .top-icon.nav-pills .nav-link i {
            margin: 0px;
            font-weight: 500;
            display: block;
            font-size: 20px;
            padding: 5px 0;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #0a0a0a;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(0, 140, 255, 0.5);
        }

        .nav-pills-success .nav-link.active,
        .nav-pills-success .show>.nav-link {
            color: #fff;
            background-color: #15ca20;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(21, 202, 32, .5);
        }

        .nav-pills-info .nav-link.active,
        .nav-pills-info .show>.nav-link {
            color: #fff;
            background-color: #0dceec;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(13, 206, 236, 0.5);
        }

        .nav-pills-danger .nav-link.active,
        .nav-pills-danger .show>.nav-link {
            color: #fff;
            background-color: #fd3550;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(253, 53, 80, .5);
        }

        .nav-pills-warning .nav-link.active,
        .nav-pills-warning .show>.nav-link {
            color: #fff;
            background-color: #ff9700;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(255, 151, 0, .5);
        }

        .nav-pills-dark .nav-link.active,
        .nav-pills-dark .show>.nav-link {
            color: #fff;
            background-color: #223035;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(34, 48, 53, .5);
        }

        .nav-pills-secondary .nav-link.active,
        .nav-pills-secondary .show>.nav-link {
            color: #fff;
            background-color: #75808a;
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, .14), 0 7px 10px -5px rgba(117, 128, 138, .5);
        }

        .card .tab-content {
            padding: 1rem 0 0 0;
        }

        .z-depth-3 {
            -webkit-box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
            box-shadow: 0 11px 7px 0 rgba(0, 0, 0, 0.19), 0 13px 25px 0 rgba(0, 0, 0, 0.3);
        }

        /*Text Style*/
        .font-size38 {
            font-size: 38px;
        }

        .team-single-text .section-heading h4,
        .section-heading h5 {
            font-size: 36px
        }

        .team-single-text .section-heading.half {
            margin-bottom: 20px
        }

        @media screen and (max-width: 1199px) {

            .team-single-text .section-heading h4,
            .section-heading h5 {
                font-size: 32px
            }

            .team-single-text .section-heading.half {
                margin-bottom: 15px
            }
        }

        @media screen and (max-width: 991px) {

            .team-single-text .section-heading h4,
            .section-heading h5 {
                font-size: 28px
            }

            .team-single-text .section-heading.half {
                margin-bottom: 10px
            }
        }

        @media screen and (max-width: 767px) {

            .team-single-text .section-heading h4,
            .section-heading h5 {
                font-size: 24px
            }
        }


        .team-single-icons ul li {
            display: inline-block;
            border: 1px solid #02c2c7;
            border-radius: 50%;
            color: #86bc42;
            margin-right: 8px;
            margin-bottom: 5px;
            -webkit-transition-duration: .3s;
            transition-duration: .3s
        }

        .team-single-icons ul li a {
            color: #02c2c7;
            display: block;
            font-size: 14px;
            height: 25px;
            line-height: 26px;
            text-align: center;
            width: 25px
        }

        .team-single-icons ul li:hover {
            background: #02c2c7;
            border-color: #02c2c7
        }

        .team-single-icons ul li:hover a {
            color: #fff
        }

        .team-social-icon li {
            display: inline-block;
            margin-right: 5px
        }

        .team-social-icon li:last-child {
            margin-right: 0
        }

        .team-social-icon i {
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            font-size: 15px;
            border-radius: 50px
        }



        .list-style9 {
            list-style: none;
            padding: 0
        }

        .list-style9 li {
            position: relative;
            padding: 0 0 15px 0;
            margin: 0 0 15px 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
        }

        .list-style9 li:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0
        }

        .custom-progress {
            height: 10px;
            border-radius: 50px;
            box-shadow: none;
            margin-bottom: 25px;
        }


        /*Image Gallary*/
        .imgStyle {
            width: 70px;
            height: 60px;
            padding: 3px;

        }

        .mainImage {
            margin-right: 120px;
            margin-top: 5px;
            width: 100%;
            border: 1px solid black;
        }

        .divId {
            margin: 0 5px;
            display: inline-flex;
            width: 202px;
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
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="profile-card-4 z-depth-3">
                    <div class="card">
                        <div class="card-body text-center bg-body rounded-top">
                            <div class="user-box">
                                @if (isset($item?->images[0]?->image))
                                    <img id="mainImage" src="{{ $item?->images[0]?->image }}" height="200" width="200" />
                                @else
                                    <img class="imgStyle" src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}"
                                        height="200" width="200" />
                                @endif
                                <br />
                                <div class="divId" onmouseover="changeImageOnClick(event)">
                                    @if (isset($item?->images[0]?->image))
                                        <img class="imgStyle" src="{{ $item?->images[0]?->image }}" />
                                    @else
                                        <img class="imgStyle"
                                            src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                    @endif
                                    @if (isset($item?->images[1]?->image))
                                        <img class="imgStyle" src="{{ $item?->images[1]?->image }}" />
                                    @else
                                        <img class="imgStyle"
                                            src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                    @endif
                                    @if (isset($item?->images[2]?->image))
                                        <img class="imgStyle" src="{{ $item?->images[2]?->image }}" />
                                    @else
                                        <img class="imgStyle"
                                            src="{{ asset('assets/images/actor-image-thumbnail.jpg') }}" />
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group shadow-none">
                                <li class="list-group-item">
                                    <div class="list-icon">
                                        <i class="fa fa-phone-square"></i>
                                    </div>
                                    <div class="list-details">
                                        <span>{{ $item?->countryCode . ' ' . $item?->mobile_no }}</span>
                                        <small>Mobile Number</small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="list-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="list-details">
                                        <span>{{ $item?->email }}</span>
                                        <small>Email Address</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card z-depth-3">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-pills-primary nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active show"><i class="icon-user"></i> <span class="hidden-xs">About
                                        Me</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i
                                        class="icon-envelope-open"></i> <span class="hidden-xs">Videos</span></a>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i
                                        class="icon-note"></i> <span class="hidden-xs">Images</span></a>
                            </li> --}}
                        </ul>
                        <div class="tab-content p-3">
                            <div class="tab-pane active show" id="profile">
                                <h5 class="mb-3">User Profile</h5>
                                <div class="row">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="team-single-text padding-50px-left sm-no-padding-left">
                                            <div class="contact-info-section margin-40px-tb">
                                                <ul class="list-style9 no-margin">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-5 col-5">
                                                                <strong class="margin-10px-left text-orange">Name:</strong>
                                                            </div>
                                                            <div class="col-md-7 col-7">
                                                                <p>{{ $item?->first_name . ' ' . $item?->last_name }}</p>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>

                                                        <div class="row">
                                                            <div class="col-md-5 col-5">

                                                                <strong
                                                                    class="margin-10px-left text-yellow">Ethnicity.:</strong>
                                                            </div>
                                                            <div class="col-md-7 col-7">
                                                                <p>{{ $item?->profile?->ethnicity }}</p>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>

                                                        <div class="row">
                                                            <div class="col-md-5 col-5">
                                                                @php
                                                                    $dateOfBirth = $item?->profile?->date_of_birth;
                                                                    $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                                                @endphp
                                                                <strong class="margin-10px-left text-yellow">Age:</strong>
                                                            </div>
                                                            <div class="col-md-7 col-7">
                                                                <p>{{ $age }}</p>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>

                                                        <div class="row">
                                                            <div class="col-md-5 col-5">

                                                                <strong
                                                                    class="margin-10px-left text-lightred">Email:</strong>
                                                            </div>
                                                            <div class="col-md-7 col-7">
                                                                <p>{{ $item->email }}</p>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>

                                                        <div class="row">
                                                            <div class="col-md-5 col-5">

                                                                <strong class="margin-10px-left text-green">Current
                                                                    Location:</strong>
                                                            </div>
                                                            <div class="col-md-7 col-7">
                                                                <p>{{ $item?->profile?->current_location }}</p>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>

                                                        <div class="row">
                                                            <div class="col-md-5 col-5">

                                                                <strong
                                                                    class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
                                                            </div>
                                                            <div class="col-md-7 col-7">
                                                                <p> {{ $item?->countryCode . ' ' . $item?->mobile_no }}</p>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-md-5 col-5">

                                                                <strong
                                                                    class="margin-10px-left xs-margin-four-left text-pink">Gender:</strong>
                                                            </div>
                                                            <div class="col-md-7 col-7">
                                                                <p>{{ $item?->profile?->gender }}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- </tbody>
                                    </table> --}}
                                </div>
                                <!--/row-->
                            </div>
                            <div class="tab-pane" id="messages">

                                <div class="container">
                                    <h6 class="page-header" id="youtube-gallery">Intro video</h6>
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
                            {{-- <div class="tab-pane" id="edit">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="Mark">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="Jhonsan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" value="mark@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Change profile</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="url" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value=""
                                                placeholder="Street">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" value=""
                                                placeholder="City">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value=""
                                                placeholder="State">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="jhonsanmark">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" value="11111122333">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Cancel">
                                            <input type="button" class="btn btn-primary" value="Save Changes">
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('footer')
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
@endsection
