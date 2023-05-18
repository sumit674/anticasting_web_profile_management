@extends('admin.layouts.admin_master')
@section('title','Actor')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/profiles/main-popover.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/admin/css/actors.css') }}" /> --}}
    <style>
        .main.page-header {
            min-height: 50px;
            margin: 0px 0 0px;
            padding: 0 0px;
            border-bottom: 0;
            border-radius: 3px;
        }

        .my-active span {
            /* background-color: #909192 !important; */
            color: #7f7f81 !important;
            border-color: #0f100f !important;
            font-weight: bold;
        }

        ul.pager>li {
            display: inline-flex;
            padding: 5px;
        }

        .container {
            margin: 0px auto !important;
        }

        .popover {
            max-width: 100% !important;
            margin: 18px 0 0 26px;
        }

        /* .bucket-wrapper {
                                            height: 50px;
                                            border-top: 1px solid rgba(255, 255, 255, .2);
                                            border-bottom: 1px solid rgba(255, 255, 255, .2);
                                            position: sticky;
                                            bottom: 0;
                                            width: 100%;
                                        } */
        .bucket-wrapper {
            position: sticky;
            /* left: 0; */
            bottom: 0;
            /* width: 100%; */
            width: 100%;
            /* background-color: red; */
            color: white;
            top: 320px;
            /* text-align: center; */
        }

        #content {
            height: 500px;
            overflow-y: scroll;
            overflow-x: scroll;
        }
    </style>
@endsection
@section('content')
    {{-- <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Manage Actors</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Actors</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
    <br />
    <section id="main-content">
        <!-- /# .container -->
        <div class="container">
            <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header">
                @include('Actors::profiles.topbar')
            </div>
            <div id="content" class="my-3">
                @include('Actors::profiles.filter')
                <div id="products">
                    <div class="row mx-0">
                        @php
                            $avgrating = 0;
                        @endphp
                        @if (isset($actors))
                            @foreach ($actors as $k => $item)
                                @php
                                    $dateOfBirth = $item?->profile?->date_of_birth;
                                    //$age = \Carbon\Carbon::parse($dateOfBirth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days'); //\Carbon\Carbon::parse($dateOfBirth)->age;
                                    $age = \Carbon\Carbon::parse($dateOfBirth)
                                        ->diff(\Carbon\Carbon::now())
                                        ->format('%y years');
                                @endphp
                                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-0 pt-3">
                                    <div class="card d-flex flex-column align-items-center actor-grid">
                                        <div class="card-img c-card__image-container">
                                            <div style="cursor: pointer;" data-toggle="popover" {{-- data-poload="{{ route('admin.actors.detail', $item->id) }}" --}}>
                                                @isset($item->images[0]->image)
                                                    <a href="{{ route('admin.profile-detail', $item->id) }}" target="__blank">
                                                        <img class="c-card__image" src="{{ $item->images[0]?->image }}" />
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.profile-detail', $item->id) }}">
                                                        <img class="c-card__image"
                                                            src="https://source.unsplash.com/random/234x156/?nature" />
                                                    </a>
                                                @endisset

                                            </div>
                                            <div>
                                                <label class="product-discount-label check-container"
                                                    for="actor-{{ $item->id }}">
                                                    {{-- <span class="product-discount-label"> --}}
                                                    <input type="checkbox" name="actor" id="actor-{{ $item->id }}"
                                                        value="{{ $item->id }}" class="actor-item"
                                                        data-id="{{ $item->id }}"
                                                        onclick="GetBucketId({{ $item->id }})" />
                                                    {{-- </span> --}}
                                                    <span class="mark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="c-card__content">
                                            <div class="c-card__name">
                                                <label><a
                                                        href="{{ route('admin.profile-detail', [$item?->id]) }}"class="c-card__name-link"
                                                        target="_blank">{{ $item?->first_name . ' ' . $item?->last_name }}</a></label>
                                            </div>
                                            <div class="c-card__title">
                                                <label>Mobile no:</label>
                                                {{ $item?->countryCode . ' ' . $item?->mobile_no }}
                                            </div>
                                            <div class="c-card__title">
                                                <label>Age:</label> {{ $age }}
                                            </div>
                                            <div class="c-card__title">
                                                <label>Height:</label>
                                                {{ $item?->profile?->height . ' ' . ' ' }} cm
                                            </div>
                                            <div class="c-card__title">
                                                <label>Weight:</label> {{ $item?->profile?->weight . ' ' . ' ' }}kg
                                            </div>
                                            <div class="c-card__title" id="actor-rating-{{ $item->id }}">
                                                @if (isset($item?->rating) && $item?->rating != ' ')
                                                    @for ($i = 0; $i < $item?->rating; $i++)
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                    @endfor
                                                @else
                                                    <i class="fa-solid fa-star text-white"></i>
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center colors my-2">
                                                <div class="price">
                                                    <span style="cursor: pointer;" data-toggle="popover"
                                                        data-poload="{{ route('admin.actors.video', $item->id) }}">
                                                        <i class="fa fa-video-camera fa-2x" aria-hidden="true"></i>
                                                    </span>
                                                    &nbsp;&nbsp;
                                                    <span style="cursor: pointer;" data-toggle="popover"
                                                        data-poload="{{ route('admin.actors.detail', $item->id) }}">
                                                        <i class="fa-solid fa-eye fa-2x" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>


                                            {{-- <div
                                                        class="d-flex align-items-center justify-content-center colors my-2">
                                                        <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                                            data-placement="right" title="choose color">
                                                            <label class="btn btn-red form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-blue form-check-label active">
                                                                <input class="form-check-input" type="radio"
                                                                    autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-green form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-orange form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    autocomplete="off">
                                                            </label>
                                                            <label class="btn btn-pink form-check-label">
                                                                <input class="form-check-input" type="radio"
                                                                    autocomplete="off">
                                                            </label>
                                                        </div>
                                                    </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="bucket-wrapper" style="display: none;">
                <div class="row ">
                    <div class="col-lg-12 title-margin-right">
                        @include('Actors::bucket')
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
@section('footer')
    <script src="{{ asset('assets/admin/js/profiles/main.js') }}"></script>

    <script>
        /*bucket List*/
        var array = [];

        function GetBucketId(id) {
            $('.bucket-wrapper').show();
            if (array.indexOf(id) === -1) {
                array.push(id);

            } else {
                let index = array.indexOf(id);
                array.splice(index, 1);
            }
            document.getElementById('actor-ids').innerHTML = array.length;;
            document.querySelector('#bucket-item').value = array.join(',');

            //  alert(array.join(','))
            if (array.length === 0) {
                $('.bucket-wrapper').hide();
            }
        }
        $('body').on('click', function(e) {
            $('[data-toggle="popover"]').each(function() {
                if (!$(this).is(e.target) &&
                    $(this).has(e.target).length === 0 &&
                    $('.popover').has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });
        // $('[data-toggle="popover"]').on('click', function(e) {
        //     $('[data-toggle="popover"]').not(this).popover('hide');
        // });
        $('*[data-poload]').click(function() {
            var e = $(this);
            // e.off('click');
            $.get(e.data('poload'), function(d) {
                e.popover({
                    html: true,
                    placement: "bottom",
                    container: 'body',
                    trigger: 'focus',
                    content: d
                }).popover('show');
            });
        });
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 90,
                values: [0, 90],
                slide: function(event, ui) {
                    $(".age").html(ui.values[0] + " " + "-" + " " + ui.values[1]);
                    document.querySelector('#max_age').value = ui.values[1];
                    document.querySelector('#min_age').value = ui.values[0];

                }
            });
            $(".age").html($("#slider-range").slider("values", 0) + " " + "-" + " " + $("#slider-range").slider(
                "values", 1));
            document.querySelector('#max_age').value = $("#slider-range").slider("values", 1);
            document.querySelector('#min_age').value = $("#slider-range").slider("values", 0);
        });
        /*Select box list dropdown */

        $("#selecter2").select2({
            placeholder: "Shortlist name",
            allowClear: true
        });

        $(function() {
            $('.ethnicity').fSelect();
        });
        $(function() {
            $('.gender').fSelect();
        });
        $(function() {
            $('.rating').fSelect();
        });
        (function() {
            $(function() {
                return $('.bucket-select').select2({
                    width: 'resolve'
                });
            });

        }).call(this);

        $(function() {
            $('.parent_id').on('change', function() {
                var parentId = this.value;
                $("#child_id").html('');
                $.ajax({
                    url: "{{ route('admin.actors.get-child-categories') }}",
                    type: "POST",
                    data: {
                        parent_id: parentId,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                      $('#child_id').html(
                            '<option value="">-- Select Child Project --</option>');
                        $.each(result.categories, function(key, value) {

                            $("#child_id").append('<option value="' + value
                                .id +'">' + value.trans.project_name + '</option>');
                        });
                    }
                });
            });
        });
        /*Select Project categories validation.*/
        $(document).ready(function(){

            $("#bucket-form").validate({
                debug: false,
                errorClass: 'text-danger',
                errorElement: "span",
                rules: {
                parent_id: "required"
               },
               messages: {
                parent_id: "Please select parent project."

               }
            })
        })
        $('#btn').on('click', function() {
            $("#bucket_list").valid();
        });
    </script>
@endsection
