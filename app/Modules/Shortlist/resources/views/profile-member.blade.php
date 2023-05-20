@extends('admin.layouts.admin_master')
@section('title', 'ProfileMember')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/shortlistMember/shorlist-member.css') }}" />
@endsection
@section('content')
    <div class="main">
        <div class="container-fluid mt-5">
            <section id="main-content">
                <div class="g-content-area">
                    <div class="c-checkbox c-shortlist-performers-table__checkbox-select-all g-col-lg-4">
                        <div class="c-checkbox__wrapper c-checkbox__additionalMargin"><input type="checkbox"
                                name="chkSelectAll" id="chkSelectAll" value="chkSelectAll">
                            <div class="c-checkbox__box"></div><label class="c-checkbox__label" for="chkSelectAll">Select
                                all</label>
                        </div>
                    </div>
                </div>
                @isset($projectProfileMember)
                    @foreach ($projectProfileMember as $key => $item)
                        <div class="c-performer-card">
                            <div class="g-inner-grid-12">
                                <div class="c-performer-card__common-info g-col-lg-8">
                                    <div class="c-performer-card__photo"><a href="#"
                                            class="c-performer-card__photo-container"><img
                                                src="{{ $item?->user?->images[0]?->image }}"
                                                class="c-performer-card__photo-image" alt="CHRISTINA TAM"></a>
                                        <div class="c-performer-card__photo-triangle">
                                            <div class="c-performer-card__photo-runningOrder">{{ $key + 1 }}</div>
                                        </div>
                                    </div>
                                    <div class="c-performer-card__performer-info">
                                        <div class="c-performer-card__performer-info-name"><a href="#"
                                                class="g-alternative-link g-alternative-link--lg">{{ $item?->user?->first_name . ' ' . $item?->user?->last_name }}</a>
                                        </div>
                                        <div class="c-performer-card__performer-info-membership-type">Character</div>
                                    </div>
                                    <div class="c-performer-card__performer-note c-performer-card__performer-note--full-size">
                                        <div class="c-textarea c-textarea--resizable c-textarea--shows-character-count">
                                            <div class="c-input-wrapper">
                                                <div class="c-input-label"></div>
                                                <div class="c-textarea__spacer">
                                                    <div class="c-textarea__resizable-container"
                                                        style="position: relative; user-select: auto; width: 100%; height: auto; box-sizing: border-box;">
                                                        <div class="c-textarea__container">
                                                            <textarea placeholder="Add notes..." maxlength="2200" class="c-textarea__input--shows-character-count"></textarea>
                                                            <div class="c-textarea__bottom-controls-container">
                                                                <div class="c-textarea__character-count"></div>
                                                            </div>
                                                        </div><span>
                                                            <div class=""
                                                                style="position: absolute; user-select: none; width: 20px; height: 20px; right: -1px; bottom: 1px; cursor: se-resize;">
                                                                <div class="c-textarea__resize-handle g-hidden-sm"><svg
                                                                        width="16px" height="16px" viewBox="0 0 50 50"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                        <title>icon/noticon/expander</title>
                                                                        <desc>Created with Sketch.</desc>
                                                                        <g id="icon/noticon/expander" stroke="none"
                                                                            stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <path
                                                                                d="M1.600631,35.0939178 L58.9799413,35.0939178 C60.8081943,35.0939178 62.2902862,36.4370635 62.2902862,38.0939178 C62.2902862,39.6915986 60.9121676,40.9975786 59.1744493,41.0888251 L58.9799413,41.0939178 L1.600631,41.0939178 C-0.227621961,41.0939178 -1.70971382,39.750772 -1.70971382,38.0939178 C-1.70971382,36.4962369 -0.331595242,35.1902569 1.4061231,35.0990105 L1.600631,35.0939178 L58.9799413,35.0939178 L1.600631,35.0939178 Z M17.0649465,19.8625856 L44.5199706,19.8625856 C46.0511734,19.8625856 47.2924585,21.2057314 47.2924585,22.8625856 C47.2924585,24.4602665 46.1382533,25.7662465 44.6828753,25.8574929 L44.5199706,25.8625856 L17.0649465,25.8625856 C15.5337437,25.8625856 14.2924585,24.5194399 14.2924585,22.8625856 C14.2924585,21.2649048 15.4466637,19.9589248 16.9020417,19.8676783 L17.0649465,19.8625856 L44.5199706,19.8625856 L17.0649465,19.8625856 Z"
                                                                                id="Radio-Signal" fill="#75797E"
                                                                                transform="translate(30.290286, 30.478252) rotate(-224.000000) translate(-30.290286, -30.478252) ">
                                                                            </path>
                                                                        </g>
                                                                    </svg></div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <div class="__resizable_base__"
                                                        style="width: 100%; height: 100%; position: absolute; transform: scale(0, 0); left: 0px; flex: 0 1 0%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                $dateOfBirth = $item?->user?->profile?->date_of_birth;

                                $age = \Carbon\Carbon::parse($dateOfBirth)
                                    ->diff(\Carbon\Carbon::now())
                                    ->format('%y years');
                               @endphp
                                <div class="c-agency__card-agency-info g-col-lg-4">
                                    <div class="c-agency__card-agency-name">{{$item?->user?->profile?->ethnicity}}</div>
                                    <div class="c-agency__card-agency-address"><span
                                            class="c-agency__card-agency-address-ellipsis">Height {{$item?->user?->profile?->height}},
                                           Weight {{$item?->user?->profile?->weight}}, Age {{$age}}</span></div>
                                    <div class="c-agency__card-agency-contactInfo">
                                        <div class="c-agency__card-agency-contactPhones"><a href="tel://020-7038 3737"
                                                class="g-alternative-link">{{$item?->user?->countryCode .' '.$item?->user?->mobile_no}}</a><a href="tel://"
                                                class="g-alternative-link"></a>
                                        </div><a href="mailto:agents@granthamhazeldine.com"
                                            class="g-alternative-link c-agency__card-agency-contactPhones--with-width">{{$item?->user?->email}}</a>
                                    </div>
                                </div>
                                <div class="c-checkbox c-performer-card__select">
                                    <div class="c-checkbox__wrapper c-checkbox__additionalMargin"><input type="checkbox"
                                            name="selectCard" value="selectCard">
                                        <div class="c-checkbox__box"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset

            </section>
        </div>
    </div>


@endsection
