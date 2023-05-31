@extends('admin.layouts.admin_master')
@section('title', 'ProfileMember')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/shortlistMember/shorlist-member.css') }}" />
@endsection
@section('content')
    <div class="main">
        <div class="container-fluid mt-5">
            <section id="main-content">
                <div class="g-content-area ">
                    {{--  <div class="c-checkbox c-shortlist-performers-table__checkbox-select-all g-col-lg-4">
                        <div class="c-checkbox__wrapper c-checkbox__additionalMargin"><input type="checkbox"
                                name="chkSelectAll" id="chkSelectAll" value="chkSelectAll">
                            <div class="c-checkbox__box"></div><label class="c-checkbox__label" for="chkSelectAll">Select
                                all</label>
                        </div>
                    </div>  --}}
                </div>
                <div class="d-flex justify-content-start mt-5 back-btn">
                    <a href="{{ route('admin.character.breakdown',$cId) }}" class="btn btn-sm" style="background-color:#26247b;color:white;">
                        <i class='fas fa-caret-left' style='font-size:18px;'></i><i class='fas fa-caret-left'
                            style='font-size:18px;'></i>
                        Back
                    </a>
                </div>
                <div class="member-list mt-2">
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
                                            @if (isset($item?->user?->rating) && $item?->user?->rating != ' ')
                                                    @for ($i = 0; $i < $item?->user?->rating; $i++)
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                    @endfor
                                                @endif
                                            <div class="c-performer-card__performer-info-membership-type"></div>
                                        </div>
                                        <div
                                            class="c-performer-card__performer-note c-performer-card__performer-note--full-size">
                                            <div class="c-textarea c-textarea--resizable c-textarea--shows-character-count">
                                                <div class="c-input-wrapper">
                                                    <div class="c-input-label"></div>
                                                    <div class="c-textarea__spacer">
                                                        <div class="c-textarea__resizable-container"
                                                            style="position: relative; user-select: auto; width: 100%; height: auto; box-sizing: border-box;">
                                                            <div class="c-textarea__container">
                                                                <textarea placeholder="Add notes..." maxlength="2200" name="add_notes" id="add_notes_{{ $item?->user?->id }}"
                                                                    class="c-textarea__input--shows-character-count"></textarea>
                                                                <div class="c-textarea__bottom-controls-container">
                                                                    <div class="c-textarea__character-count"></div>
                                                                </div>
                                                            </div>
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
                                        <div class="d-flex justify-content-between">
                                            <div class="c-agency__card-agency-name">
                                                {{ $item?->user?->profile?->ethnicity }}
                                            </div>
                                            <div class="ms-5">
                                                 <a href="{{route('admin.member.delete',[$item?->category_id,$item?->id])}}" class="btn btn-sm btn-danger">Remove</a>
                                            </div>
                                        </div>

                                        <div class="c-agency__card-agency-address"><span
                                                class="c-agency__card-agency-address-ellipsis">
                                                {{ $item?->user?->profile?->height }} CM,
                                                 {{ $item?->user?->profile?->weight }} KG, Age {{ $age }}</span>
                                        </div>
                                        <div class="c-agency__card-agency-contactInfo">
                                            <div class="c-agency__card-agency-contactPhones"><a href="tel://020-7038 3737"
                                                    class="g-alternative-link">{{ $item?->user?->countryCode . ' ' . $item?->user?->mobile_no }}</a><a
                                                    href="tel://" class="g-alternative-link"></a>
                                            </div><a href="mailto:agents@granthamhazeldine.com"
                                                class="g-alternative-link c-agency__card-agency-contactPhones--with-width">{{ $item?->user?->email }}</a>

                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-sm"
                                                onclick="SubmitAddNotes({{ $item?->user?->id }},{{ $item?->user?->id }})"
                                                style="background-color:#26247b;color:white;">Send</button>
                                        </div>
                                    </div>

                                    {{--  <div class="c-checkbox c-performer-card__select">
                                    <div class="c-checkbox__wrapper c-checkbox__additionalMargin"><input type="checkbox"
                                            name="selectCard" value="selectCard">
                                        <div class="c-checkbox__box"></div>
                                    </div>
                                </div>  --}}
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>

            </section>
        </div>
    </div>

@endsection
@section('footer')
    <script>
        function SubmitAddNotes(user_id, id) {
            var add_notes = $('#add_notes_' + user_id).val();
            $.ajax({
                url: "{{ route('admin.sendEmail') }}",
                type: 'GET',
                data: {
                    'notes': add_notes,
                    'user_id': id
                },
                dataType: 'json',
                success: function(data) {

                    if (data.success == true) {
                        $.toast({
                            heading: 'Success',
                            text: data.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-right',
                            allowToastClose: true, // Show the close button or not
                            hideAfter: 15000,
                        })
                    } else {
                        $.toast({
                            heading: 'Error',
                            text: data.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                            position: 'top-right',
                            allowToastClose: true, // Show the close button or not
                            hideAfter: 15000,
                        });
                    }

                }
            });

        }
    </script>
@endsection
