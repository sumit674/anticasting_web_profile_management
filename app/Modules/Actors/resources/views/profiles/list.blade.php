@extends('admin.layouts.admin_master')
@section('title')
    Manage Actors
@endsection
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/profiles/main.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/admin/css/actors.css') }}" /> --}}
    <style>
        .main .page-header {
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
            max-width: 600px !important;
            max-height: 600px !important;
        }
    </style>
@endsection
@section('content')
    <div class="main">
        <div class="container-fluid">
            @if (Session::has('success'))
                <script>
                    alert("{{ Session::get('success') }}")
                </script>
            @endif
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
            <!-- /# .container -->
            <div class="container">
                <div class="bg-white rounded d-flex align-items-center justify-content-between" id="header">
                    @include('Actors::profiles.topbar')
                </div>
                <div id="content" class="my-3">
                    @include('Actors::profiles.filter')
                    <div id="products">
                        <div class="row mx-0">
                            @if (isset($actors))
                                @foreach ($actors as $k => $item)
                                    @if (isset($item?->profile))
                                        @php
                                            $dateOfBirth = $item?->profile?->date_of_birth;
                                            $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                        @endphp
                                        <div class="col-lg-3 col-md-6 pt-md-0 pt-3">
                                            <div class="card d-flex flex-column align-items-center actor-grid">

                                                {{-- <div class="product-name">Torn Jeans for Men</div> --}}
                                                <div class="card-img">
                                                    @isset($item->images[0]->image)
                                                        <img class="" src="{{ $item->images[0]?->image }}" />
                                                        {{-- <img class="pic-2 actor-img" src="{{ $item->images[0]?->image }}" /> --}}
                                                    @else
                                                        <img class=""
                                                            src="https://source.unsplash.com/random/234x156/?nature" />
                                                    @endisset

                                                </div>
                                                <div class="card-body pt-1">
                                                    <div class="text-muted text-center mt-auto">
                                                        <h6>{{ $item?->first_name . ' ' . $item?->last_name }}</h6>
                                                    </div>
                                                    <div class="text-muted text-center mt-auto">
                                                        Mobile no : {{ $item?->mobile_no }}
                                                    </div>
                                                    <div class="text-muted text-center mt-auto">
                                                        Age: {{ $age . ', ' }} Height:
                                                        {{ $item?->profile?->height . ' ' . ' ' }} cm
                                                    </div>
                                                    <div class="text-muted text-center mt-auto">
                                                        Weight: {{ $item?->profile?->weight . ' ' . ' ' }}kg
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center justify-content-center colors my-2">
                                                        <div class="price">
                                                            <span style="cursor: pointer;" data-toggle="popover"
                                                                data-poload="{{ route('admin.actors.video', $item->id) }}">
                                                                <i class="fa fa-video-camera fa-1x" aria-hidden="true"></i>
                                                            </span>
                                                            &nbsp;&nbsp;
                                                            <span style="cursor: pointer;" data-toggle="popover"
                                                                data-poload="{{ route('admin.actors.detail', $item->id) }}">
                                                                <i class="fa-solid fa-eye fa-1x" aria-hidden="true"></i>
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
                                    @endisset
                                @endforeach
                            @endif
                            {{-- <div class="col-lg-3 col-md-6 pt-md-0 pt-3">
                                <div class="card d-flex flex-column align-items-center">
                                    <div class="product-name">Torn Jeans for Men</div>
                                    <div class="card-img"> <img
                                            src="https://www.freepnglogos.com/uploads/jeans-png/jeans-mens-pants-cliparts-download-clip-art-37.png"
                                            alt=""> </div>
                                    <div class="card-body pt-5">
                                        <div class="text-muted text-center mt-auto">Available Colors</div>
                                        <div class="d-flex align-items-center justify-content-center colors my-2">
                                            <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                                data-placement="right" title="choose color">
                                                <label class="btn btn-red form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-blue form-check-label active">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-green form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-orange form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-pink form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center price">
                                            <div class="del mr-2"><span class="text-dark">5500 uah</span></div>
                                            <div class="font-weight-bold">4500 uah</div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-md-6 pt-md-0 pt-3">
                                <div class="card d-flex flex-column align-items-center">
                                    <div class="product-name">Nike Tshirts for Men</div>
                                    <div class="card-img"> <img
                                            src="https://www.freepnglogos.com/uploads/t-shirt-png/t-shirt-png-printed-shirts-south-africa-20.png"
                                            alt="" height="100" id="shirt"> </div>
                                    <div class="text-muted text-center mt-auto">Available Sizes</div>
                                    <div id="avail-size">
                                        <div class="btn-group d-flex align-items-center flex-wrap" data-toggle="buttons">
                                            <label class="btn btn-success form-check-label">
                                                <input class="form-check-input" type="checkbox"> 80 </label>
                                            <label class="btn btn-success form-check-label">
                                                <input class="form-check-input" type="checkbox" checked> 92 </label>
                                            <label class="btn btn-success form-check-label">
                                                <input class="form-check-input" type="checkbox" checked> 102 </label>
                                            <label class="btn btn-success form-check-label">
                                                <input class="form-check-input" type="checkbox" checked> 104 </label>
                                            <label class="btn btn-success form-check-label">
                                                <input class="form-check-input" type="checkbox" checked> 106 </label>
                                            <label class="btn btn-success form-check-label">
                                                <input class="form-check-input" type="checkbox" checked> 108 </label>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="text-muted text-center mt-auto">Available Colors</div>
                                        <div class="d-flex align-items-center justify-content-center colors my-2">
                                            <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                                data-placement="right" title="choose color">
                                                <label class="btn btn-light border form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-blue form-check-label active">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-green form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-orange form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-pink form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center price">
                                            <div class="del mr-2"><span class="text-dark">5500 uah</span></div>
                                            <div class="font-weight-bold">4500 uah</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 pt-lg-0 pt-md-4 pt-3">
                                <div class="card d-flex flex-column align-items-center">
                                    <div class="product-name text-center">Casual Dress Belts For Men</div>
                                    <div class="card-img"> <img
                                            src="https://www.freepnglogos.com/uploads/belts-png/casual-dress-belts-for-men-28.png"
                                            alt=""> </div>
                                    <div class="card-body pt-5">
                                        <div class="text-muted text-center mt-auto">Available Colors</div>
                                        <div class="d-flex align-items-center justify-content-center colors my-2">
                                            <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                                data-placement="right" title="choose color">
                                                <label class="btn btn-dark border form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-brown form-check-label active">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center price">
                                            <div class="font-weight-bold">500 uah</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 pt-md-0 pt-3">
                                <div class="card d-flex flex-column align-items-center">
                                    <div class="product-name text-center">Footwear For Women</div>
                                    <div class="card-img"> <img
                                            src="https://www.freepnglogos.com/uploads/women-shoes-png/download-women-shoes-png-image-png-image-pngimg-2.png"
                                            alt=""> </div>
                                    <div class="card-body pt-5">
                                        <div class="text-muted text-center mt-auto">Available Colors</div>
                                        <div class="d-flex align-items-center justify-content-center colors my-2">
                                            <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                                data-placement="right" title="choose color">
                                                <label class="btn btn-dark border form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-brown form-check-label active">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-pink form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-red form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center price">
                                            <div class="font-weight-bold">1500 uah</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 pt-md-0 pt-3">
                                <div class="card d-flex flex-column align-items-center">
                                    <div class="product-name text-center">Nike Jogging shoes For Men</div>
                                    <div class="card-img"> <img
                                            src="https://www.freepnglogos.com/uploads/shoes-png/find-your-perfect-running-shoes-26.png"
                                            alt=""> </div>
                                    <div class="card-body pt-5">
                                        <div class="text-muted text-center mt-auto">Available Colors</div>
                                        <div class="d-flex align-items-center justify-content-center colors my-2">
                                            <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                                data-placement="right" title="choose color">
                                                <label class="btn btn-dark border form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-pink form-check-label active">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-blue form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-orange form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center price">
                                            <div class="font-weight-bold">1200 uah</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 pt-md-0 pt-3">
                                <div class="card d-flex flex-column align-items-center">
                                    <div class="product-name text-center">Leather Wallets For Men</div>
                                    <div class="card-img"> <img
                                            src="https://www.freepnglogos.com/uploads/money-png/money-wallet-dollar-image-money-pictures-download-27.png"
                                            alt=""> </div>
                                    <div class="card-body pt-5">
                                        <div class="text-muted text-center mt-auto">Available Colors</div>
                                        <div class="d-flex align-items-center justify-content-center colors my-2">
                                            <div class="btn-group" data-toggle="buttons" data-tooltip="tooltip"
                                                data-placement="right" title="choose color">
                                                <label class="btn btn-dark border form-check-label">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                                <label class="btn btn-brown form-check-label active">
                                                    <input class="form-check-input" type="radio" autocomplete="off">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center price">
                                            <div class="font-weight-bold">900 uah</div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script src="text/javascript" src="{{ asset('assets/admin/js/profiles/main.js') }}"></script>

<script>
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
            max: 60,
            values: [5, 100],
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
</script>
@endsection
