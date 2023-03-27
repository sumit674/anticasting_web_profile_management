<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <!--n2css-->
    <script type="text/javascript" src="{{ asset('assets/admin/new-actor/js/jquery.min.js') }}" id="jquery-core-js">
    </script>
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
                                            <div class="um-members-grid-wrapper">
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
                                                {{-- <script type="text/template" id="tmpl-um-members-filtered-line">
                           <# if ( data.filters.length > 0 ) { #>
                           	<# _.each( data.filters, function( filter, key, list ) { #>
                           		<div class="um-members-filter-tag">
                           			<# if ( filter.type == 'slider' ) { #>
                           				<# if ( filter.value[0] == filter.value[1] ) { #>
                           					<strong>{{{filter.label}}}</strong>: {{{filter.value[0]}}}
                           				<# } else { #>
                           					{{{filter.value_label}}}
                           				<# } #>
                           			<# } else { #>
                           				<strong>{{{filter.label}}}</strong>: {{{filter.value_label}}}
                           			<# } #>
                           			<div class="um-members-filter-remove um-tip-n" data-name="{{{filter.name}}}"
                           			     data-value="{{{filter.value}}}" data-range="{{{filter.range}}}"
                           			     data-type="{{{filter.type}}}" title="Remove filter">&times;</div>
                           		</div>
                           	<# }); #>
                           <# } #>
                        </script> --}}
                                                <div
                                                    class="um-member-directory-header-row um-member-directory-filters-bar">
                                                    <div class="um-search um-search-9">
                                                        <div class="um-search-filter um-select-filter-type ">
                                                            <select class="um-s1 select2-hidden-accessible"
                                                                id="model_categories" name="model_categories"
                                                                data-placeholder="Ethnicity" aria-label="Ethnicity"
                                                                style="display: block;" tabindex="-1"
                                                                aria-hidden="true" data-select2-id="model_categories">
                                                                <option data-select2-id="16"></option>

                                                                @if (isset($state))
                                                                    @foreach ($state as $item)
                                                                        <option value="{{ $item->value }}"
                                                                            data-value_label="Ethnicity"
                                                                            @if (isset(request()->ethnicity) && in_array($item->value, old('ethnicity', request()->ethnicity))) selected @endif>
                                                                            {{ $item->name }}</option>
                                                                    @endforeach
                                                                @endif

                                                            </select>
                                                        </div>
                                                        <div
                                                            class="um-search-filter um-select-filter-type um-search-filter-2">
                                                            <select class="um-s1 select2-hidden-accessible"
                                                                id="gender" name="gender"
                                                                data-placeholder="Gender" aria-label="Gender"
                                                                style="display: block;" tabindex="-1"
                                                                aria-hidden="true" data-select2-id="gender">
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
                                                                data-label="Birth Date"><strong>Age:</strong>&nbsp;14 -
                                                                56 years old</div>
                                                        </div>
                                                        <div
                                                            class="um-search-filter um-slider-filter-type um-search-filter-2">
                                                            <input type="hidden" id="model_height_in_CM_min"
                                                                name="model_height_in_CM[]" class="um_range_min"
                                                                value="113">
                                                            <input type="hidden" id="model_height_in_CM_max"
                                                                name="model_height_in_CM[]" class="um_range_max"
                                                                value="189">
                                                            <div class="um-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                                                data-field_name="model_height_in_CM" data-min="100"
                                                                data-max="189">
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                    style="left: 0%; width: 100%;"></div>
                                                                <span tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 14.6067%;"></span><span
                                                                    tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 100%;"></span>
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                    style="left: 14.6067%; width: 85.3933%;"></div>
                                                            </div>
                                                            <div class="um-slider-range"
                                                                data-placeholder-s="<strong>Model Height In CM:</strong>&nbsp;{value}"
                                                                data-placeholder-p="<strong>Model Height In CM:</strong>&nbsp;{min_range} - {max_range}"
                                                                data-label="Model Height in CM"><strong>Model Height In
                                                                    CM:</strong>&nbsp;113 - 189</div>
                                                        </div>
                                                        <div class="um-search-filter um-slider-filter-type ">
                                                            <input type="hidden" id="hip_size_in_CM_min"
                                                                name="hip_size_in_CM[]" class="um_range_min"
                                                                value="55">
                                                            <input type="hidden" id="hip_size_in_CM_max"
                                                                name="hip_size_in_CM[]" class="um_range_max"
                                                                value="100">
                                                            <div class="um-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                                                data-field_name="hip_size_in_CM" data-min="30"
                                                                data-max="100">
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                    style="left: 0%; width: 100%;"></div>
                                                                <span tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 35.7143%;"></span><span
                                                                    tabindex="0"
                                                                    class="ui-slider-handle ui-corner-all ui-state-default"
                                                                    style="left: 100%;"></span>
                                                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                                                    style="left: 35.7143%; width: 64.2857%;"></div>
                                                            </div>
                                                            <div class="um-slider-range"
                                                                data-placeholder-s="<strong>Hip Size In CM:</strong>&nbsp;{value}"
                                                                data-placeholder-p="<strong>Hip Size In CM:</strong>&nbsp;{min_range} - {max_range}"
                                                                data-label="Hip Size in CM"><strong>Hip Size In
                                                                    CM:</strong>&nbsp;55 - 100</div>
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
                                                                href="{{route('admin.actors')}}" class="um-clear-filters-a"
                                                                title="Remove all filters">Clear all</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <link rel="stylesheet" href="{{ asset('assets/admin/new-actor/css/jquery-ui.css') }}"
                            type="text/css" media="all">
                        <link rel="stylesheet" href="{{ asset('assets/admin/new-actor/css/um-members.css') }}"
                            type="text/css" media="all">
                        <link rel="stylesheet" href="{{ asset('assets/admin/new-actor/css/um-kaya-models.css') }}"
                            type="text/css" media="all">
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
