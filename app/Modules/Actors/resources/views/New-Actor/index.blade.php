<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>Anticasting | Actors</title>
    <meta name="robots" content="max-image-preview:large">
    <link href="{{ asset('assets/admin/new-actor/css/um-fonticons-fa.css') }}">
    <link href="{{ asset('assets/admin/new-actor/css/ionicons.min.css') }}">
    <link rel="stylesheet" id="models-style-css" href="{{ asset('assets/admin/new-actor/css/style.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="models-layout-css" href="{{ asset('assets/admin/new-actor/css/layout.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="models-theme-responsive-css"
        href="{{ asset('assets/admin/new-actor/css/responsive.css') }}" type="text/css" media="all">

    <link rel="stylesheet" id="um_fonticons_fa-css" href="{{ asset('assets/admin/new-actor/css/um-fonticons-fa.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="select2-css" href="{{ asset('assets/admin/new-actor/css/select2.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_styles-css" href="{{ asset('assets/admin/new-actor/css/um-styles.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('assets/admin/new-actor/css/actor-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/new-actor/css/jquery-ui.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assets/admin/new-actor/css/um-members.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('assets/admin/new-actor/css/um-kaya-models.css') }}" type="text/css"
        media="all">
    <!--n2css-->
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .my-active span {
            /* background-color: #909192 !important; */
            color: #f75b1d !important;
            border-color: #e93d09 !important;
            font-weight: bold;
        }

        ul.pager>li {
            display: inline-flex;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div id="kaya-page-content-wrapper">
        <div class="main-wrapper">
            <!-- Page title section -->
            <!-- Middle content alignment start here -->
            <div id="kaya-mid-content-wrapper">
                <div id="mid-content" class="site-content container">
                    <div class="fullwidth mid-content">
                        <!-- Middle content align -->
                        <article id="post-4865" class="post-4865 page type-page status-publish hentry">
                            <div class="um um-directory um-2d7fb um-loaded" data-hash="2d7fb" data-base-post="4865"
                                data-must-search="0" data-searched="1" data-view_type="grid" data-page="1"
                                data-sorting="" style="opacity: 1;">
                                <div class="um-members-overlay" style="display: none;">
                                    <div class="um-ajax-loading"></div>
                                </div>
                                <div class="search-grid-container">
                                    <div class="search-results-box">
                                        <div class="um-members-wrapper kaya_grid_style">
                                            <div class="um-members-grid-wrapper" id="actors_list_div">
                                                <div class="um-members um-members-list">
                                                    @if (isset($actors))
                                                        @foreach ($actors as $k => $item)
                                                            @if (isset($item?->profile))
                                                                <div
                                                                    class="um-member um-role-um_models approved with-cover">
                                                                    <span class="um-member-status approved">
                                                                        Approved
                                                                    </span>
                                                                    <div class="um-member-cover" data-ratio="2.7:1"
                                                                        style="height: 0px;">
                                                                        <div class="um-member-cover-e">
                                                                            <a
                                                                                href="https://kayapati.com/demos/models/user/benna/">

                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="um-member-photo radius-1 um-member-photo-grayscale">
                                                                        @isset($item->images[0]->image)
                                                                            <a
                                                                                href="https://kayapati.com/demos/models/user/benna/">

                                                                                <img src="{{ $item->images[0]?->image }}"
                                                                                    class="gravatar avatar avatar-320 um-avatar um-avatar-uploaded"
                                                                                    alt="Actor Image"
                                                                                    data-default="https://source.unsplash.com/random/234x156/?nature"
                                                                                    onerror="if ( ! this.getAttribute('data-load-error') ){ this.setAttribute('data-load-error', '1');this.setAttribute('src', this.getAttribute('data-default'));}"
                                                                                    width="320" height="320">
                                                                            </a>
                                                                        @else
                                                                            <a
                                                                                href="https://kayapati.com/demos/models/user/benna/">

                                                                                <img src="https://source.unsplash.com/random/234x156/?nature"
                                                                                    class="gravatar avatar avatar-320 um-avatar um-avatar-uploaded"
                                                                                    alt="Actor Image"
                                                                                    data-default="https://source.unsplash.com/random/234x156/?nature"
                                                                                    onerror="if ( ! this.getAttribute('data-load-error') ){ this.setAttribute('data-load-error', '1');this.setAttribute('src', this.getAttribute('data-default'));}"
                                                                                    width="320" height="320" />
                                                                            </a>
                                                                        @endisset
                                                                        <div class="um-member-card-wrap-on ">
                                                                            <div class="um-member-card ">
                                                                                <div class="um-member-meta-main">
                                                                                    <div class="um-member-tagline um-member-tagline-birth_date"
                                                                                        data-key="birth_date">
                                                                                        @php
                                                                                            $dateOfBirth = $item?->profile?->date_of_birth;
                                                                                            $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                                                                        @endphp
                                                                                        {{ $age }} years old
                                                                                    </div>
                                                                                    <div
                                                                                        class="um-member-meta no-animate">
                                                                                        <div
                                                                                            class="um-member-metaline um-member-metaline-model_categories">
                                                                                            <strong>Date Of
                                                                                                Birth:</strong>
                                                                                            {{ $item?->profile?->date_of_birth }}

                                                                                        </div>
                                                                                        <div
                                                                                            class="um-member-metaline um-member-metaline-country">
                                                                                            <strong>Ethnicity:</strong>
                                                                                            {{ $item?->profile?->ethnicity }}
                                                                                        </div>
                                                                                        <div
                                                                                            class="um-member-metaline um-member-metaline-country">
                                                                                            <strong>Weight:</strong>
                                                                                            {{ $item?->profile?->weight }}
                                                                                            CM
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="um-member-name">
                                                                        <h3><a
                                                                                href="https://kayapati.com/demos/models/user/benna/">
                                                                                {{ $item?->first_name . ' ' . $item?->last_name }}
                                                                            </a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    <div class="um-clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="um-members-pagination-box">
                                            <div class="um-members-pagi uimob340-hide uimob500-hide">
                                                {{-- <nav data-pagination>
                                                    {{ $actors->links('Actors::pagination') }}
                                                </nav> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="search-filter-box">
                                        <div class="um-member-directory-header">
                                            <div class="um-member-directory-header-row um-member-directory-search-row">
                                                <div class="um-member-directory-search-line">
                                                    <label>
                                                        <span>Search:</span>
                                                        <input type="search" class="um-search-line"
                                                            placeholder="Search" value="" aria-label="Search"
                                                            speech="">
                                                    </label>
                                                    <input type="button" class="um-do-search" value="Search">
                                                </div>
                                            </div>
                                            <div class="search_filter_header_wrap_sidebar">
                                                <div class="um-member-directory-header-row">
                                                    <div class="um-member-directory-nav-line">
                                                        <span class="um-member-directory-filters">
                                                            <span
                                                                class="um-member-directory-filters-a um-member-directory-filters-visible">
                                                                <a href="javascript:void(0);">
                                                                    More filters </a>
                                                                &nbsp;<i class="um-faicon-caret-down"></i><i
                                                                    class="um-faicon-caret-up"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div
                                                    class="um-member-directory-header-row um-member-directory-filters-bar">
                                                    <div class="um-search um-search-9">
                                                        <div class="um-search-filter um-select-filter-type ">
                                                            <select class="um-s1 select2-hidden-accessible"
                                                                id="model_ethnicity" name="model_ethnicity"
                                                                onchange="getEthnicityFilter()"
                                                                data-placeholder="Ethnicity" aria-label="Ethnicity"
                                                                style="display: block;" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option data-select2-id="16"></option>
                                                                @if (isset($state))
                                                                    @php
                                                                        $selectedStates = [];
                                                                        if (isset(request()->filter_model_ethnicity_2d7fb)) {
                                                                            $selectedStates = explode("||", request()->filter_model_ethnicity_2d7fb);
                                                                        }
                                                                    @endphp
                                                                    @foreach ($state as $item)
                                                                        <option value="{{ $item->value }}"
                                                                            data-value_label="Ethnicity"
                                                                            @if (isset($selectedStates) && in_array($item->value, $selectedStates)) selected @endif>
                                                                            {{ $item->name }}</option>
                                                                    @endforeach
                                                                @endif

                                                            </select>
                                                        </div>
                                                        <div
                                                            class="um-search-filter um-select-filter-type um-search-filter-2">
                                                            <select class="um-s1 select2-hidden-accessible"
                                                                id="gender" name="gender"
                                                                onchange="getGenderFilter()" data-placeholder="Gender"
                                                                aria-label="Gender" style="display: block;"
                                                                tabindex="-1" aria-hidden="true"
                                                                data-select2-id="gender">
                                                                <option data-select2-id="20"></option>
                                                                <option value='Male' data-value_label="Male"
                                                                    @if (isset(request()->gender) && in_array('Male', old('gender', request()->gender))) selected @endif>
                                                                    Male
                                                                </option>
                                                                <option value='Female' data-value_label="Female"
                                                                    @if (isset(request()->gender) && in_array('Female', old('gender', request()->gender))) selected @endif>
                                                                    Female
                                                                </option>
                                                                <option value='prefernottosay'
                                                                    data-value_label="Female"
                                                                    @if (isset(request()->gender) && in_array('prefernottosay', old('gender', request()->gender))) selected @endif>
                                                                    Prefer not
                                                                    to
                                                                    say
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="um-search-filter um-slider-filter-type ">
                                                            <input type="hidden" id="birth_date_min"
                                                                name="birth_date[]" class="um_range_min"
                                                                value="14">
                                                            <input type="hidden" id="birth_date_max"
                                                                name="birth_date[]" class="um_range_max"
                                                                value="56">
                                                            <div class="um-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                                                data-field_name="birth_date" data-min="0"
                                                                data-max="56">
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                    style="left: 0%; width: 100%;"></div>
                                                                <span tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 25%;"></span><span tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 100%;"></span>
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                    style="left: 25%; width: 75%;"></div>
                                                            </div>
                                                            <div class="um-slider-range"
                                                                data-placeholder-s="<strong>Age:</strong>&nbsp;{value} years old"
                                                                data-placeholder-p="<strong>Age:</strong>&nbsp;{min_range} - {max_range} years old"
                                                                data-label="Birth Date">
                                                                <strong>Age:</strong>&nbsp;14 -
                                                                56 years old
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="um-member-directory-header-row">
                                                    <div class="um-filtered-line">
                                                        <div class="um-members-filter-tag">
                                                            <strong>Age:</strong>&nbsp;14 - 56 years old
                                                            <div class="um-members-filter-remove um-tip-n"
                                                                data-name="birth_date" data-value="14,56"
                                                                data-range="" data-type="slider"
                                                                title="Remove filter">×</div>
                                                        </div>
                                                        <div class="um-members-filter-tag">
                                                            <strong>Model Height In CM:</strong>&nbsp;113 - 189
                                                            <div class="um-members-filter-remove um-tip-n"
                                                                data-name="model_height_in_CM" data-value="113,189"
                                                                data-range="" data-type="slider"
                                                                title="Remove filter">×</div>
                                                        </div>
                                                        <div class="um-members-filter-tag">
                                                            <strong>Hip Size In CM:</strong>&nbsp;55 - 100
                                                            <div class="um-members-filter-remove um-tip-n"
                                                                data-name="hip_size_in_CM" data-value="55,100"
                                                                data-range="" data-type="slider"
                                                                title="Remove filter">×</div>
                                                        </div>
                                                        <div class="um-clear-filters" style="display: block;"><a
                                                                href="{{ route('admin.actors') }}"
                                                                class="um-clear-filters-a"
                                                                title="Remove all filters">Clear all</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

                        <script>
                            function getEthnicityFilter() {
                                var url = (new URL(document.location)).searchParams;
                                var ethnicity = url.get("filter_model_ethnicity_2d7fb");
                                $.ajax({
                                    url: "{{ route('admin.filter-actors') }}",
                                    type: 'GET',
                                    data: {
                                        'ethnicity': ethnicity,
                                    },
                                    //see the $_token
                                    dataType: 'json',
                                    success: function(data) {
                                        console.log(data);
                                        $("#actors_list_div").html(data.html);
                                    },
                                    // error:function(xhr, textStatus, thrownError) {
                                    //     alert(xhr + "\n" + textStatus + "\n" + thrownError);
                                    // }

                                });

                            }

                            getEthnicityFilter();

                            function getGenderFilter() {
                                var url = (new URL(document.location)).searchParams;
                                var gender = url.get("filter_gender_2d7fb");
                                $.ajax({
                                    url: "{{ route('admin.filter-actors') }}",
                                    type: 'GET',
                                    data: {
                                        'gender': gender,
                                    },
                                    //see the $_token
                                    dataType: 'json',
                                    success: function(data) {
                                        console.log(data);
                                        $("#actors_list_div").html(data.html);
                                    },
                                    // error:function(xhr, textStatus, thrownError) {
                                    //     alert(xhr + "\n" + textStatus + "\n" + thrownError);
                                    // }

                                });
                            }
                        </script>

                        {{-- <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/jquery.min.js') }}" id="jquery-core-js">
                         </script> --}}
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/underscore.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/wp-util.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/core.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/mouse.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/hooks.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/select2.full.min.js') }}"></script>
                        <script type="text/javascript" id="um_scripts-js-extra">
                            /* <![CDATA[ */
                            var um_scripts = {
                                "max_upload_size": "536870912",
                                "nonce": "ecdf37bbc7"
                            };
                            /* ]]> */
                        </script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/um-scripts.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/slider.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/dropdown.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/um-members.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/kaya-um-custom.js') }}"></script>


</body>

</html>
