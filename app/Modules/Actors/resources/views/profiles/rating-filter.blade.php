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
                                               />
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
                                        <label>Mobile no:</label> {{ $item?->mobile_no }}
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

                                    <div class="d-flex align-items-center justify-content-center colors my-2">
                                        <div class="price">
                                            <span style="cursor: pointer;" data-toggle="popover"
                                                data-poload="{{ route('admin.actors.video', $item->id) }}">
                                                <i class="fa fa-video-camera fa-2x" aria-hidden="true"></i>
                                            </span>
                                            &nbsp;&nbsp;
                                            <span style="cursor: pointer;" data-toggle="popover"
                                                {{-- data-poload="{{ route('admin.actors.detail', $item->id) }}" --}}>
                                                <a href="{{ route('admin.profile-detail', $item->id) }}" target="__blank">
                                                <i class="fa-solid fa-eye fa-2x" aria-hidden="true"></i>
                                                </a>
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
</div>
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
 </script>   