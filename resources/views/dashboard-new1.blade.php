@extends('front-dashboard.layouts.app')
@section('content')
    <title>Anticasting | View Profile</title>
    <meta name="robots" content="max-image-preview:large">
    <link rel="alternate" type="application/rss+xml" title="Models » Feed" href="https://kayapati.com/demos/models/feed/">
    <link ref="style" href=" https://fontawesome.com/icons/link?f=classic&s=solid" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/kayapati.com\/demos\/models\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([
                            55356, 56826, 55356, 56819
                        ], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418,
                            56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <script src="./assets-details-page/js/wp-emoji-release.min.js" type="text/javascript" defer=""></script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('assets/view-profile/css/frontend.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-5285-css" href="{{ asset('assets/view-profile/css/post-5285.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-global-css" href="{{ asset('assets/view-profile/css/global.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-5364-css" href="{{ asset('assets/view-profile/css/post-5364.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="hfe-widgets-style-css" href="{{ asset('assets/view-profile/css/frontend.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-post-5193-css" href="{{ asset('assets/view-profile/css/post-5193.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="models-style-css" href="{{ asset('assets/view-profile/css/style.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="font-awesome-css" href="{{ asset('assets/view-profile/css/font-awesome.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="models-menu-css" href="{{ asset('assets/view-profile/css/smart-menu.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="models-layout-css" href="{{ asset('assets/view-profile/css/layout.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="models-theme-responsive-css" href="{{ asset('assets/view-profile/css/responsive.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="buttons-css" href="{{ asset('assets/view-profile/css/buttons.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" id="dashicons-css" href="{{ asset('assets/view-profile/css/dashicons.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="mediaelement-css"
        href="{{ asset('assets/view-profile/css/mediaelementplayer-legacy.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="wp-mediaelement-css" href="{{ asset('assets/view-profile/css/wp-mediaelement.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="media-views-css" href="{{ asset('assets/view-profile/css/media-views.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="imgareaselect-css" href="{{ asset('assets/view-profile/css/imgareaselect.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="simple-lightbox-css-css" href="{{ asset('assets/view-profile/css/lightbox.min.css') }}"
        type="text/css" media="all">
    <link rel="stylesheet" id="drweb-print-style-css"
        href="https://kayapati.com/demos/models/wp-content/themes/models/ultimate-member/assets/css/um-kaya-compcard.css?ver=20130821"
        type="text/css" media="print">
    <link rel="stylesheet" id="um_fonticons_ii-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-fonticons-ii.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_fonticons_fa-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-fonticons-fa.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="select2-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/select2/select2.min.css?ver=4.0.13"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_crop-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-crop.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_modal-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-modal.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_styles-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-styles.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_profile-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-profile.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_account-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-account.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_misc-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-misc.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_fileupload-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-fileupload.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_datetime-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/pickadate/default.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_datetime_date-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/pickadate/default.date.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_datetime_time-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/pickadate/default.time.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_raty-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-raty.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_scrollbar-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/simplebar.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_tipsy-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-tipsy.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_responsive-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-responsive.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="um_default_css-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/css/um-old-default.css?ver=2.4.2"
        type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CComfortaa%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.1.1"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3"
        type="text/css" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-regular-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3"
        type="text/css" media="all">
    <!--n2css-->
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/jquery/jquery.min.js?ver=3.6.1"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" id="utils-js-extra">
        /* <![CDATA[ */
        var userSettings = {
            "url": "\/demos\/models\/",
            "uid": "0",
            "time": "1679982290",
            "secure": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/utils.min.js?ver=6.1.1"
        id="utils-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/plupload/moxie.min.js?ver=1.3.5"
        id="moxiejs-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/plupload/plupload.min.js?ver=2.1.9"
        id="plupload-js"></script>
    <!--[if lt IE 8]>
                    <script type='text/javascript' src='https://kayapati.com/demos/models/wp-includes/js/json2.min.js?ver=2015-05-03'
                        id='json2-js'></script>
                    <![endif]-->
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-gdpr.min.js?ver=2.4.2"
        id="um-gdpr-js"></script>
    <link rel="https://api.w.org/" href="https://kayapati.com/demos/models/wp-json/">
    <link rel="alternate" type="application/json" href="https://kayapati.com/demos/models/wp-json/wp/v2/pages/4859">
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://kayapati.com/demos/models/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://kayapati.com/demos/models/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 6.1.1">
    <link rel="canonical" href="https://kayapati.com/demos/models/user/lavanphoto/">
    <link rel="shortlink" href="https://kayapati.com/demos/models/?p=4859">
    <link rel="alternate" type="application/json+oembed"
        href="https://kayapati.com/demos/models/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkayapati.com%2Fdemos%2Fmodels%2Fuser%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://kayapati.com/demos/models/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fkayapati.com%2Fdemos%2Fmodels%2Fuser%2F&amp;format=xml">
    <style type="text/css">
        .um_request_name {
            display: none !important;
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style> <!-- START - Ultimate Member profile SEO meta tags -->

    <link rel="image_src"
        href="https://kayapati.com/demos/models/wp-content/uploads/ultimatemember/5/profile_photo-320x320.jpg?1679982290">

    <meta name="description" content="karala lavan is on Models. Join Models to view karala lavan's profile">

    <meta property="og:type" content="profile">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Models">
    <meta property="og:title" content="karala lavan">
    <meta property="og:description" content="karala lavan is on Models. Join Models to view karala lavan's profile">
    <meta property="og:image"
        content="https://kayapati.com/demos/models/wp-content/uploads/ultimatemember/5/profile_photo-320x320.jpg?1679982290">
    <meta property="og:image:alt" content="Profile photo">
    <meta property="og:image:height" content="320">
    <meta property="og:image:width" content="320">
    <meta property="og:url" content="https://kayapati.com/demos/models/user/lavanphoto/">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@https://www.twitter.com/ramk">
    <meta name="twitter:title" content="karala lavan">
    <meta name="twitter:description" content="karala lavan is on Models. Join Models to view karala lavan's profile">
    <meta name="twitter:image"
        content="https://kayapati.com/demos/models/wp-content/uploads/ultimatemember/5/profile_photo-320x320.jpg?1679982290">
    <meta name="twitter:image:alt" content="Profile photo">
    <meta name="twitter:url" content="https://kayapati.com/demos/models/user/lavanphoto/">

    <script
    type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Person","name":"karala lavan","description":"karala lavan is on Models. Join Models to view karala lavan&#039;s profile","image":"https:\/\/kayapati.com\/demos\/models\/wp-content\/uploads\/ultimatemember\/5\/profile_photo-320x320.jpg?1679982290","url":"https:\/\/kayapati.com\/demos\/models\/user\/lavanphoto\/"}</script>

    <!-- END - Ultimate Member profile SEO meta tags -->
    <style id="kirki-inline-styles">
        #kaya-header-content-wrapper {
            background-color: #f9f9f9 !important;
        }

        .kaya-page-titlebar-wrapper .page-title {
            background-color: #f4f4f4;
        }

        .kaya-page-titlebar-wrapper .page-title,
        .main-menu-btn-icon {
            color: #101010;
        }

        .main-menu-btn-icon,
        .main-menu-btn-icon:before,
        .main-menu-btn-icon:after {
            background-color: #222222;
        }

        #header-navigation {
            background-color: #000000 !important;
            border-bottom-color: #ff5722 !important;
        }

        nav#header-navigation a {
            color: #ffffff;
        }

        nav#header-navigation a:hover {
            color: #e63f19;
        }

        nav#header-navigation ul#main-menu li.current-menu-parent,
        nav#header-navigation ul#main-menu li.current-menu-item,
        nav#header-navigation ul#main-menu li.current-menu-ancestor {
            background-color: #ff5722 !important;
        }

        nav#header-navigation ul#main-menu li.current-menu-parent a,
        nav#header-navigation ul#main-menu li.current-menu-item a,
        nav#header-navigation ul#main-menu li.current-menu-ancestor a,
            {
            color: #ff5722;
        }

        nav#header-navigation ul#main-menu li ul.sub-menu li {
            background-color: #000000 !important;
        }

        nav#header-navigation ul#main-menu li ul.sub-menu li a {
            color: #ffffff !important;
        }

        nav#header-navigation ul#main-menu li ul.sub-menu li:hover {
            background-color: #222222 !important;
        }

        nav#header-navigation ul#main-menu li ul.sub-menu li a:hover {
            color: #ffffff !important;
        }

        nav#header-navigation ul#main-menu li ul.sub-menu li.current-menu-item a {
            background-color: #ff5722 !important;
            color: #ffffff !important;
        }

        .footer_bottom_position_fix span.copyright {
            color: #ccc;
        }

        .um-member-name,
        .um-member-name a {
            color: #303030 !important;
        }

        .um-directory .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-meta-main {
            background-color: #ff5722;
        }

        .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member-card,
        .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member-card a {
            color: #ffffff;
        }

        .um-members-wrapper .um-members.um-members-list .um-member-card,
        .um-members-wrapper .um-members.um-members-list .um-member-card a,
        .um-directory .um-members-wrapper .um-members.um-members-list .um-member .um-member-card-container .um-member-card .um-member-card-content .um-member-card-header .um-member-name a {
            color: #666666;
        }

        .kaya-um-row .um-field-divider-text span {
            color: #333 !important;
        }

        .um-profile.um-viewing .um-field-label,
        .um-field-label,
        .um-account-main div.um-account-heading,
        .um-name a {
            color: #303030 !important;
        }

        .um-profile.um-viewing .um-field .um-field-value,
        .um-profile-body,
        .um-meta-text,
        .um-meta,
        .um {
            color: #606060 !important;
        }

        .um-profile-meta a,
        .um-field-value a {
            color: #303030 !important;
        }

        .um-profile-meta a:hover,
        .um-field-value a:hover {
            color: #303030 !important;
        }

        .um-profile-nav a,
        .um-profile-nav-item a,
        .um-row-heading,
        .kaya-um-row-heading {
            background-color: #333333 !important;
        }

        .um-profile-nav-item a,
        .um-row-heading,
        .kaya-um-row-heading {
            color: #ffffff !important;
        }

        .um-profile-nav a:hover,
        .um-profile-nav-item a:hover {
            background-color: #333333 !important;
            color: #ffffff !important;
        }

        .um .um-profile-nav-item.active a,
        .um .um-profile-nav-item.active a:hover,
        .um-viewing div.kaya-um-tabs-wrap .kaya_pt_active {
            background-color: #ffffff !important;
        }

        .um-profile-nav {
            border-bottom-color: #ffffff !important;
        }

        div.kaya-um-tabs {
            border-top-color: #ffffff !important;
        }

        .um .um-profile-nav-item.active a,
        .um .um-profile-nav-item.active a:hover a,
        .um-viewing div.kaya-um-tabs-wrap .kaya_pt_active {
            color: #444444 !important;
        }

        .search_filter_header_wrap,
        .search_filter_header_wrap_sidebar,
        .toggle_search_wrapper .um-member-directory-header {
            background-color: #eeeeee !important;
        }

        .search_filter_header_wrap,
        .search_filter_header_wrap_sidebar,
        .um-member-directory-filters-a um-member-directory-filters-visible,
        .um-member-directory-filters-a a,
        .um-clear-filters-a,
        .overlay_toggle_search_icon,
        .toggle_search_wrapper .um-member-directory-header .searchbox_toggle_close {
            color: #888888 !important;
        }

        .um-do-search {
            background-color: #ff3918 !important;
        }

        .um-member-directory-search-line button,
        .um-member-directory-search-line input[type="button"],
        .um-member-directory-search-line input[type="reset"],
        .um-member-directory-search-line input[type="submit"] {
            color: #ffffff;
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            background-color: #ffffff !important;
            border-color: #ffffff !important;
        }

        .um a.um-link,
        .um .um-tip:hover,
        .um .um-field-radio.active:not(.um-field-radio-state-disabled) i,
        .um .um-field-checkbox.active:not(.um-field-radio-state-disabled) i,
        .um .um-member-name a:hover,
        .um .um-member-more a:hover,
        .um .um-member-less a:hover,
        .um .um-members-pagi a:hover,
        .um .um-cover-add:hover,
        .um .um-profile-subnav a.active,
        .um .um-item-meta a,
        .um-account-name a:hover,
        .um-account-nav a.current,
        .um-account-side li a.current span.um-account-icon,
        .um-account-side li a.current:hover span.um-account-icon,
        .um-dropdown li a:hover,
        i.um-active-color,
        span.um-active-color {
            color: #ff5722 !important;
        }

        .um a.um-link:hover,
        .um a.um-link-hvr:hover {
            color: #dd3333 !important;
        }

        .um .um-field-group-head,
        .picker__box,
        .picker__nav--prev:hover,
        .picker__nav--next:hover,
        .um .um-members-pagi span.current,
        .um .um-members-pagi span.current:hover,
        .upload,
        .um-modal-header,
        .um-modal-btn,
        .um-modal-btn.disabled,
        .um-modal-btn.disabled:hover,
        div.uimob800 .um-account-side li a.current,
        div.uimob800 .um-account-side li a.current:hover,
        .um .um-button,
        .um a.um-button,
        .um a.um-button.um-disabled:hover,
        .um a.um-button.um-disabled:focus,
        .um a.um-button.um-disabled:active,
        .um input[type=submit].um-button,
        .um input[type=submit].um-button:focus,
        .um input[type=submit]:disabled:hover,
        .cc_print_button,
        .um-request-button,
        span#sndmailusers,
        span#sndmailfrnds,
        div#send_friends span#sendmail_friends,
        div#send_users span#sendmail_members,
        .overlay_toggle_search_icon,
        .um-member-photo .talent-btn,
        .search_close,
        .customemediauploader {
            background-color: #ff5722 !important;
            color: #ffffff !important;
        }

        .um .um-field-group-head:hover,
        .picker__footer,
        .picker__header,
        .picker__day--infocus:hover,
        .picker__day--outfocus:hover,
        .picker__day--highlighted:hover,
        .picker--focused .picker__day--highlighted,
        .picker__list-item:hover,
        .picker__list-item--highlighted:hover,
        .picker--focused .picker__list-item--highlighted,
        .picker__list-item--selected,
        .picker__list-item--selected:hover,
        .picker--focused .picker__list-item--selected,
        .um .um-button:hover,
        .um a.um-button:hover,
        .um input[type=submit].um-button:hover,
        .um-request-button:hover,
        span#sndmailusers:hover,
        span#sndmailfrnds:hover,
        div#send_friends span#sendmail_friends:hover {
            background-color: #dd3333 !important;
        }

        .um .um-field-group-head:hover,
        .picker__footer,
        .picker__header,
        .picker__day--infocus:hover,
        .picker__day--outfocus:hover,
        .picker__day--highlighted:hover,
        .picker--focused .picker__day--highlighted,
        .picker__list-item:hover,
        .picker__list-item--highlighted:hover,
        .picker--focused .picker__list-item--highlighted,
        .picker__list-item--selected,
        .picker__list-item--selected:hover,
        .picker--focused .picker__list-item--selected,
        .um .um-button:hover,
        .um a.um-button:hover,
        .um input[type=submit].um-button:hover,
        .um-request-button:hover,
        span#sndmailusers:hover,
        span#sndmailfrnds:hover,
        div#send_friends span#sendmail_friends:hover,
        div#send_users span#sendmail_members:hover {
            color: ##eeeeee !important;
        }

        .um .um-button.um-alt,
        .um input[type=submit].um-button.um-alt {
            background-color: #eeeeee !important;
            color: #333333 !important;
        }

        .um .um-button.um-alt:hover,
        .um input[type=submit].um-button.um-alt:hover {
            background-color: #e5e5e5 !important;
        }
    </style>
    <style>
        body {
            background: #fff;
            min-height: 100vh;
            background: linear-gradient(to right bottom, #273c75, #079992);
            background-repeat: no-repeat;
        }

        img {
            max-width: 100%;
        }

        .container-img {
            padding: 40px 0;
        }

        figure {
            max-width: 800px;
            margin: 0 auto 40px;
            border: 2px solid #fff;
        }

        figure img {
            max-width: 100%;
            min-width: 100%;
            display: block;
            height: 210px;
            width: 210px;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        ul {
            list-style: none;
            margin: 0;
            text-align: center;
        }

        .img-ul li{
            margin: 0 5px;
            display:flex;
            width: 150px;
            border: 1px solid #fff;
            cursor: pointer;
        }

        .img-ul li img {
            display: block;
            opacity: 0.4;
            transition: 0.4s;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19)
        }
    </style>


    <div id="kaya-page-content-wrapper" class="">
        <div class="main-wrapper">
            <!-- Page title section -->

            <!-- Middle content alignment start here -->
            <div id="kaya-mid-content-wrapper">
                <div id="mid-content" class="site-content container">
                    <div class="fullwidth mid-content">
                        <!-- Middle content align -->

                        <article id="post-4859" class="post-4859 page type-page status-publish hentry">

                            <div class="entry-content">


                                <div class="preload" style="display: none;"><img src="http://i.imgur.com/KUJoe.gif"
                                        width="30px" height="30px"></div>

                                <div class="um um-profile um-viewing um-8 um-role-um_models kaya-um-tabs-on"
                                    style="opacity: 1;">

                                    <div class="um-form" data-mode="profile">


                                        <div class="one_fifth profile_head_sidebar">
                                            <div class="container-img">
                                                <figure>
                                                    <img id="mainImg" src="{{ $item?->images[0]?->image }}">
                                                </figure>
                                                <ul class="img-ul">
                                                    <li><img src="{{ $item?->images[0]?->image }}"></li>
                                                    <li><img src="{{ $item?->images[1]?->image }}"></li>
                                                    <li><img src="{{ $item?->images[2]?->image }}"></li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                    $('ul img').on({
                                                        alert('Mahesh')
                                                            mouseover: function () {
                                                                    $(this).css({
                                                                            'opacity': 1,
                                                                    });
                                                            },
                                                            mouseout: function () {
                                                                    $(this).css({
                                                                            'opacity': 0.4
                                                                    });
                                                            },
                                                            click: function () {
                                                                    var imageURL = $(this).attr('src');
                                                                    $('#mainImg').fadeOut(500, function () {
                                                                            $(this).attr('src', imageURL);
                                                                    }).fadeIn(500);
                                                            }
                                                    });
                                            });
                                    </script>
                                        <div class="four_fifth_last">

                                            <div class="um-profile-navbar ">
                                                <div class="um-clear"></div>
                                            </div>


                                            <div class="um-profile-body main main-default kaya-um-tabs-wrap">

                                                <p class="um-profile-note"><i class="um-faicon-frown-o"></i><span>This
                                                        user has not added any information to their profile yet.</span>
                                                </p>
                                                <div class="um-row-heading kaya_pt_active"
                                                    style="margin: 0px 0px 30px 0px;margin-bottom: 0px;border-width: 0px 0px 0px 0px;border-style: solid;border-radius: 0px 0px 0px 0px;border-bottom-width: 0px;">
                                                    <span class="um-row-heading-icon" style=""></span>About Me
                                                </div>
                                                <div class="um-row _um_row_2 kaya-um-tabs"
                                                    style="padding: 0px;margin: 0px 0px 30px 0px;margin-top: 0px;border-width: 0px 0px 0px 0px;border-top-width: 0px;border-style: solid;border-radius: 0px 0px 0px 0px;">
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-col-1">
                                                            <div class="um-field um-field-block  um-field-block um-field-type_block"
                                                                data-key="um_block_8_36">
                                                                <h4 class="kaya-um-row-heading">GENERAL DETAILS </h4>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-col-121">
                                                            <div id="um_field_8_model_categories"
                                                                class="um-field um-field-checkbox  um-field-model_categories um-field-checkbox um-field-type_checkbox"
                                                                data-key="model_categories">
                                                                <div class="um-field-label"><label
                                                                        for="model_categories-8">Name
                                                                    </label>
                                                                    <div class="um-clear"></div>
                                                                </div>
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="model_categories-8">
                                                                        {{ $item?->first_name . ' ' . $item?->last_name }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="um_field_8_model_categories"
                                                                class="um-field um-field-checkbox  um-field-model_categories um-field-checkbox um-field-type_checkbox"
                                                                data-key="model_categories">
                                                                <div class="um-field-label"><label
                                                                        for="model_categories-8">Email
                                                                    </label>
                                                                    <div class="um-clear"></div>
                                                                </div>
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="model_categories-8">
                                                                        {{ $item?->email }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="um_field_8_model_categories"
                                                                class="um-field um-field-checkbox  um-field-model_categories um-field-checkbox um-field-type_checkbox"
                                                                data-key="model_categories">
                                                                <div class="um-field-label"><label
                                                                        for="model_categories-8">Phone No
                                                                    </label>
                                                                    <div class="um-clear"></div>
                                                                </div>
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="model_categories-8">
                                                                        {{ $item?->countryCode . ' ' . $item?->mobile_no }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="um_field_8_birth_date"
                                                                class="um-field um-field-date  um-field-birth_date um-field-date um-field-type_date"
                                                                data-key="birth_date">
                                                                <div class="um-field-label"><label
                                                                        for="birth_date-8">Birth Date</label>
                                                                    <div class="um-clear"></div>
                                                                </div>
                                                                <div class="um-field-area">
                                                                    @php
                                                                        $dateOfBirth = $item?->profile?->date_of_birth;
                                                                        $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                                                    @endphp
                                                                    <div class="um-field-value" id="birth_date-8">
                                                                        {{ $age }}
                                                                        years old</div>
                                                                </div>
                                                            </div>
                                                            <div id="um_field_8_gender"
                                                                class="um-field um-field-radio  um-field-gender um-field-radio um-field-type_radio"
                                                                data-key="gender">
                                                                <div class="um-field-label"><label
                                                                        for="gender-8">Gender</label>
                                                                    <div class="um-clear"></div>
                                                                </div>
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="gender-8">
                                                                        {{ $item?->profile?->gender }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="um_field_8_country"
                                                                class="um-field um-field-select  um-field-country um-field-select um-field-type_select"
                                                                data-key="country">
                                                                <div class="um-field-label"><label
                                                                        for="country-8">Ethnicity</label>
                                                                    <div class="um-clear"></div>
                                                                </div>
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="country-8">
                                                                        {{ $item?->profile?->ethnicity }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="um_field_8_languages"
                                                                class="um-field um-field-multiselect  um-field-languages um-field-multiselect um-field-type_multiselect"
                                                                data-key="languages">
                                                                <div class="um-field-label"><label
                                                                        for="languages-8">Current Location</label>
                                                                    <div class="um-clear"></div>
                                                                </div>
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="languages-8">
                                                                        {{ $item?->profile?->current_location }}</div>
                                                                </div>
                                                            </div>
                                                            {{-- <div id="um_field_8_user_url"
                                                            class="um-field um-field-url  um-field-user_url um-field-url um-field-type_url"
                                                            data-key="user_url">
                                                            <div class="um-field-label"><label
                                                                    for="user_url-8">Website URL</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="user_url-8"><a
                                                                        href="http://www.yoursite.com"
                                                                        title="http://www.yoursite.com"
                                                                        target="_blank">http://www.yoursite.com</a>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                            {{-- <div id="um_field_8_model_categories"
                                                            class="um-field um-field-checkbox  um-field-model_categories um-field-checkbox um-field-type_checkbox"
                                                            data-key="model_categories">
                                                            <div class="um-field-label"><label
                                                                    for="model_categories-8">Model
                                                                    Categories</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value"
                                                                    id="model_categories-8">
                                                                    Fashion Model, Commercial Model, Fitness Model
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                            {{-- <div id="um_field_8_years_of_experience"
                                                            class="um-field um-field-number  um-field-years_of_experience um-field-number um-field-type_number"
                                                            data-key="years_of_experience">
                                                            <div class="um-field-label"><label
                                                                    for="years_of_experience-8">Years Of Experience
                                                                </label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value"
                                                                    id="years_of_experience-8">2</div>
                                                            </div>
                                                        </div> --}}
                                                        </div>
                                                    </article>
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-col-122"></div>
                                                    </article>
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-clear"></div>
                                                    </article>
                                                    {{-- <article class="kaya-um-tabs-content">
                                                    <div class="um-col-1">
                                                        <div class="um-field um-field-block  um-field-block um-field-type_block"
                                                            data-key="um_block_8_37">
                                                            <h4 class="kaya-um-row-heading"> PHYSICAL ATTRIBUTES
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="kaya-um-tabs-content">
                                                    <div class="um-col-121">
                                                        <div id="um_field_8_eye_color"
                                                            class="um-field um-field-select  um-field-eye_color um-field-select um-field-type_select"
                                                            data-key="eye_color">
                                                            <div class="um-field-label"><label
                                                                    for="eye_color-8">Eye
                                                                    Color</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="eye_color-8">Blue
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_skin_color"
                                                            class="um-field um-field-select  um-field-skin_color um-field-select um-field-type_select"
                                                            data-key="skin_color">
                                                            <div class="um-field-label"><label
                                                                    for="skin_color-8">Skin Color</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="skin_color-8">
                                                                    Light
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_hair_color"
                                                            class="um-field um-field-select  um-field-hair_color um-field-select um-field-type_select"
                                                            data-key="hair_color">
                                                            <div class="um-field-label"><label
                                                                    for="hair_color-8">Hair Color</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="hair_color-8">
                                                                    Brown
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_model_height_in_CM"
                                                            class="um-field um-field-number  um-field-model_height_in_CM um-field-number um-field-type_number"
                                                            data-key="model_height_in_CM">
                                                            <div class="um-field-label"><label
                                                                    for="model_height_in_CM-8">Model Height in
                                                                    CM</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value"
                                                                    id="model_height_in_CM-8">156</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article> --}}
                                                    {{-- <article class="kaya-um-tabs-content">
                                                    <div class="um-col-122">
                                                        <div id="um_field_8_hair_type"
                                                            class="um-field um-field-select  um-field-hair_type um-field-select um-field-type_select"
                                                            data-key="hair_type">
                                                            <div class="um-field-label"><label
                                                                    for="hair_type-8">Hair Type</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="hair_type-8">Long
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_dress_size"
                                                            class="um-field um-field-select  um-field-dress_size um-field-select um-field-type_select"
                                                            data-key="dress_size">
                                                            <div class="um-field-label"><label
                                                                    for="dress_size-8">Dress Size</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="dress_size-8">
                                                                    2XL/46
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_shoe_size"
                                                            class="um-field um-field-select  um-field-shoe_size um-field-select um-field-type_select"
                                                            data-key="shoe_size">
                                                            <div class="um-field-label"><label
                                                                    for="shoe_size-8">Shoe Size</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="shoe_size-8">6
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_bra_size_in_cm"
                                                            class="um-field um-field-number  um-field-bra_size_in_cm um-field-number um-field-type_number"
                                                            data-key="bra_size_in_cm">
                                                            <div class="um-field-label"><label
                                                                    for="bra_size_in_cm-8">Bra Size in CM</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="bra_size_in_cm-8">
                                                                    57
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_hip_size_in_CM"
                                                            class="um-field um-field-number  um-field-hip_size_in_CM um-field-number um-field-type_number"
                                                            data-key="hip_size_in_CM">
                                                            <div class="um-field-label"><label
                                                                    for="hip_size_in_CM-8">Hip Size in CM</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="hip_size_in_CM-8">
                                                                    50
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="kaya-um-tabs-content">
                                                    <div class="um-clear"></div>
                                                </article> --}}
                                                </div>
                                                <div class="um-row-heading"
                                                    style="margin: 0px 0px 30px 0px;margin-bottom: 0px;border-width: 0px 0px 0px 0px;border-style: solid;border-radius: 0px 0px 0px 0px;border-bottom-width: 0px;">
                                                    <span class="um-row-heading-icon" style=""></span>Gallery
                                                </div>
                                                <div class="um-row _um_row_3 kaya-um-tabs gallery-section"
                                                    style="padding: 0px; margin: 0px 0px 30px; border-width: 0px; border-style: solid; border-radius: 0px; display: none;">
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-col-1">
                                                            <div id="um_field_8_img_gallery"
                                                                class="um-field um-field-custommem  um-field-img_gallery um-field-custommem um-field-type_custommem"
                                                                data-key="img_gallery">
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="img_gallery-8">
                                                                        <style>
                                                                            .custommediawrapper-out {
                                                                                display: grid;
                                                                                grid-template-columns: repeat(3, 1fr);
                                                                                grid-template-rows: 1fr;
                                                                                grid-column-gap: 0px;
                                                                                grid-row-gap: 0px;
                                                                            }
                                                                        </style>
                                                                        <div class="custommediawrapper-out1"
                                                                            id="custommediagallery-img_gallery">
                                                                            {{-- <div class="umem_media_sepeartor"><a
                                                                                    href="#"
                                                                                    data-lightbox="test"><img
                                                                                        src="{{ $item?->images[0]?->image }}"
                                                                                        width="350px" height="350px"></a>
                                                                            </div> --}}
                                                                            <div class="umem_media_sepeartor"><a
                                                                                    href="#"
                                                                                    data-lightbox="test"><img
                                                                                        src="{{ $item?->images[0]?->image }}"
                                                                                        style="width:350px;height:120px; object-fit:fill;"></a>
                                                                            </div>
                                                                            <div class="umem_media_sepeartor"><a
                                                                                    href="#"
                                                                                    data-lightbox="test"><img
                                                                                        src="{{ $item?->images[1]?->image }}"
                                                                                        style="width:350px;height:120px; object-fit:cover;"></a>
                                                                            </div>
                                                                            <div class="umem_media_sepeartor"><a
                                                                                    href="#"
                                                                                    data-lightbox="test"><img
                                                                                        src="{{ $item?->images[2]?->image }}"
                                                                                        style="width:350px;height:120px; object-fit:cover;"></a>
                                                                            </div>

                                                                        </div>
                                                                        <script>
                                                                            lightbox.option({
                                                                                'resizeDuration': 50,
                                                                                'wrapAround': true
                                                                            })
                                                                        </script>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="um-row-heading"
                                                    style="margin: 0px 0px 30px 0px;margin-bottom: 0px;border-width: 0px 0px 0px 0px;border-style: solid;border-radius: 0px 0px 0px 0px;border-bottom-width: 0px;">
                                                    <span class="um-row-heading-icon" style=""></span>Work Reel
                                                </div>
                                                <div class="um-row _um_row_4 kaya-um-tabs"
                                                    style="padding: 0px; margin: 0px 0px 30px; border-width: 0px; border-style: solid; border-radius: 0px; display: none;">
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-clear">
                                                            <div id="um_field_8_youtubevideo1_38"
                                                                class="um-field um-field-youtube_video  um-field-youtubevideo1_38 um-field-youtube_video um-field-type_youtube_video"
                                                                data-key="youtubevideo1_38">
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="youtubevideo1_38-8">
                                                                        <div class="um-youtube">
                                                                            <iframe width="600" height="450"
                                                                                src="{{ $item?->profile->work_reel1 }}"
                                                                                frameborder="0"
                                                                                allowfullscreen=""></iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-clear">
                                                            <div id="um_field_8_youtubevideo1_38"
                                                                class="um-field um-field-youtube_video  um-field-youtubevideo1_38 um-field-youtube_video um-field-type_youtube_video"
                                                                data-key="youtubevideo1_38">
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="youtubevideo1_38-8">
                                                                        <div class="um-youtube">
                                                                            <iframe width="600" height="450"
                                                                                src="{{ $item?->profile->work_reel2 }}"
                                                                                frameborder="0"
                                                                                allowfullscreen=""></iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-clear">
                                                            <div id="um_field_8_youtubevideo1_38"
                                                                class="um-field um-field-youtube_video  um-field-youtubevideo1_38 um-field-youtube_video um-field-type_youtube_video"
                                                                data-key="youtubevideo1_38">
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="youtubevideo1_38-8">
                                                                        <div class="um-youtube">
                                                                            <iframe width="600" height="450"
                                                                                src="{{ $item?->profile->work_reel3 }}"
                                                                                frameborder="0"
                                                                                allowfullscreen=""></iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>

                                                <div class="um-row-heading"
                                                    style="margin: 0px 0px 30px 0px;margin-bottom: 0px;border-width: 0px 0px 0px 0px;border-style: solid;border-radius: 0px 0px 0px 0px;border-bottom-width: 0px;">
                                                    <span class="um-row-heading-icon" style=""></span>Intro
                                                    Video
                                                </div>
                                                <div class="um-row _um_row_4 kaya-um-tabs"
                                                    style="padding: 0px; margin: 0px 0px 30px; border-width: 0px; border-style: solid; border-radius: 0px; display: none;">
                                                    <article class="kaya-um-tabs-content">
                                                        <div class="um-clear">
                                                            <div id="um_field_8_youtubevideo1_38"
                                                                class="um-field um-field-youtube_video  um-field-youtubevideo1_38 um-field-youtube_video um-field-type_youtube_video"
                                                                data-key="youtubevideo1_38">
                                                                <div class="um-field-area">
                                                                    <div class="um-field-value" id="youtubevideo1_38-8">
                                                                        <div class="um-youtube">
                                                                            <iframe width="600" height="450"
                                                                                src="{{ $item?->introVideo?->intro_video_link }}"
                                                                                frameborder="0"
                                                                                allowfullscreen=""></iframe>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                {{-- <div class="um-row-heading"
                                                style="margin: 0px 0px 30px 0px;margin-bottom: 0px;border-width: 0px 0px 0px 0px;border-style: solid;border-radius: 0px 0px 0px 0px;border-bottom-width: 0px;">
                                                <span class="um-row-heading-icon" style=""><i
                                                        class="um-icon-android-call"></i></span>Contact Me
                                            </div>
                                            <div class="um-row _um_row_5 kaya-um-tabs"
                                                style="padding: 0px; margin: 0px 0px 30px; border-width: 0px; border-style: solid; border-radius: 0px; display: none;">
                                                <article class="kaya-um-tabs-content">
                                                    <div class="um-col-121">
                                                        <div class="um-field um-field-shortcode  um-field-shortcode um-field-type_shortcode"
                                                            data-key="um_shortcode_8_40">
                                                            <div role="form" class="wpcf7" id="wpcf7-f5287-p4859-o1"
                                                                lang="en-US" dir="ltr">
                                                                <div class="screen-reader-response">
                                                                    <p role="status" aria-live="polite"
                                                                        aria-atomic="true"></p>
                                                                    <ul></ul>
                                                                </div>
                                                                <form
                                                                    action="/demos/models/user/lavanphoto/#wpcf7-f5287-p4859-o1"
                                                                    method="post" class="wpcf7-form init"
                                                                    novalidate="novalidate" data-status="init">
                                                                    <div style="display: none;">
                                                                        <input type="hidden" name="_wpcf7"
                                                                            value="5287">
                                                                        <input type="hidden" name="_wpcf7_version"
                                                                            value="5.6">
                                                                        <input type="hidden" name="_wpcf7_locale"
                                                                            value="en_US">
                                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                                            value="wpcf7-f5287-p4859-o1">
                                                                        <input type="hidden"
                                                                            name="_wpcf7_container_post"
                                                                            value="4859">
                                                                        <input type="hidden"
                                                                            name="_wpcf7_posted_data_hash" value="">
                                                                        <input type="hidden"
                                                                            name="_wpcf7_ultimate_member_profile_id"
                                                                            value="5">
                                                                    </div>
                                                                    <p><label> Your Name (required)<br>
                                                                            <span class="wpcf7-form-control-wrap"
                                                                                data-name="your-name"><input
                                                                                    type="text" name="your-name"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"></span>
                                                                        </label></p>
                                                                    <p><label> Your Email (required)<br>
                                                                            <span class="wpcf7-form-control-wrap"
                                                                                data-name="your-email"><input
                                                                                    type="email" name="your-email"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"></span>
                                                                        </label></p>
                                                                    <p><label> Subject<br>
                                                                            <span class="wpcf7-form-control-wrap"
                                                                                data-name="your-subject"><input
                                                                                    type="text" name="your-subject"
                                                                                    value="" size="40"
                                                                                    class="wpcf7-form-control wpcf7-text"
                                                                                    aria-invalid="false"></span>
                                                                        </label></p>
                                                                    <p><label> Your Message<br>
                                                                            <span class="wpcf7-form-control-wrap"
                                                                                data-name="your-message"><textarea
                                                                                    name="your-message" cols="40"
                                                                                    rows="10"
                                                                                    class="wpcf7-form-control wpcf7-textarea"
                                                                                    aria-invalid="false"></textarea></span>
                                                                        </label></p>
                                                                    <p><input type="submit" value="Send"
                                                                            class="wpcf7-form-control has-spinner wpcf7-submit"><span
                                                                            class="wpcf7-spinner"></span></p>
                                                                    <div class="wpcf7-response-output"
                                                                        aria-hidden="true"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="kaya-um-tabs-content">
                                                    <div class="um-col-122"></div>
                                                </article>
                                                <article class="kaya-um-tabs-content">
                                                    <div class="um-clear"></div>
                                                </article>
                                            </div> --}}
                                                <div class="um-row _um_row_6 compcard landscape"
                                                    style="padding: 20PX;background-color: #ffffff;margin: 0px 0px 30px 0px;border-width: 0px 0px 0px 0px;border-style: solid;border-radius: 1px;"
                                                    id="compcard">
                                                    <div class="um-col-121">
                                                        <div id="um_field_8_hs_img"
                                                            class="um-field um-field-image  um-field-hs_img um-field-image um-field-type_image"
                                                            data-key="hs_img">
                                                            <div class="um-field-label"><label for="hs_img-8">Head
                                                                    SHot</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="hs_img-8">
                                                                    <div class="um-photo"><a href="#"
                                                                            class="um-photo-modal"
                                                                            data-src="https://kayapati.com/demos/models/um-download/8/hs_img/5/3cb97a1f4b?t=1679982290"><img
                                                                                src="https://kayapati.com/demos/models/um-download/8/hs_img/5/3cb97a1f4b?t=1679982290"
                                                                                alt="Head shot" title="Head shot"
                                                                                class=""></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_nickname"
                                                            class="um-field um-field-text  um-field-nickname um-field-text um-field-type_text"
                                                            data-key="nickname">
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="nickname-8">lavanphoto
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="um-col-122">
                                                        <div id="um_field_8_img1"
                                                            class="um-field um-field-image  um-field-img1 um-field-image um-field-type_image"
                                                            data-key="img1">
                                                            <div class="um-field-label"><label
                                                                    for="img1-8">Image1</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="img1-8">
                                                                    <div class="um-photo"><a href="#"
                                                                            class="um-photo-modal"
                                                                            data-src="https://kayapati.com/demos/models/um-download/8/img1/5/3cb97a1f4b?t=1679982290"><img
                                                                                src="https://kayapati.com/demos/models/um-download/8/img1/5/3cb97a1f4b?t=1679982290"
                                                                                alt="Image 1" title="Image 1"
                                                                                class=""></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_img2"
                                                            class="um-field um-field-image  um-field-img2 um-field-image um-field-type_image"
                                                            data-key="img2">
                                                            <div class="um-field-label"><label for="img2-8">Image
                                                                    2</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="img2-8">
                                                                    <div class="um-photo"><a href="#"
                                                                            class="um-photo-modal"
                                                                            data-src="https://kayapati.com/demos/models/um-download/8/img2/5/3cb97a1f4b?t=1679982290"><img
                                                                                src="https://kayapati.com/demos/models/um-download/8/img2/5/3cb97a1f4b?t=1679982290"
                                                                                alt="Image 2" title="Image 2"
                                                                                class=""></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="um-field um-field-block  um-field-block um-field-type_block"
                                                            data-key="um_block_8_12">
                                                            <h3> Model Agency </h3>
                                                            Contact: 123-2145-7896
                                                            Colorado
                                                            DC
                                                        </div>
                                                        <div id="um_field_8_img3"
                                                            class="um-field um-field-image  um-field-img3 um-field-image um-field-type_image"
                                                            data-key="img3">
                                                            <div class="um-field-label"><label for="img3-8">Image
                                                                    3</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="img3-8">
                                                                    <div class="um-photo"><a href="#"
                                                                            class="um-photo-modal"
                                                                            data-src="https://kayapati.com/demos/models/um-download/8/img3/5/3cb97a1f4b?t=1679982290"><img
                                                                                src="https://kayapati.com/demos/models/um-download/8/img3/5/3cb97a1f4b?t=1679982290"
                                                                                alt="Image 3" title="Image 3"
                                                                                class=""></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="um_field_8_img4"
                                                            class="um-field um-field-image  um-field-img4 um-field-image um-field-type_image"
                                                            data-key="img4">
                                                            <div class="um-field-label"><label for="img4-8">Image
                                                                    4</label>
                                                                <div class="um-clear"></div>
                                                            </div>
                                                            <div class="um-field-area">
                                                                <div class="um-field-value" id="img4-8">
                                                                    <div class="um-photo"><a href="#"
                                                                            class="um-photo-modal"
                                                                            data-src="https://kayapati.com/demos/models/um-download/8/img4/5/3cb97a1f4b?t=1679982290"><img
                                                                                src="https://kayapati.com/demos/models/um-download/8/img4/5/3cb97a1f4b?t=1679982290"
                                                                                alt="Image 4" title="Image 4"
                                                                                class=""></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="um-field um-field-shortcode  um-field-shortcode um-field-type_shortcode"
                                                            data-key="um_shortcode_8_13"><span class="kaya_um_user_meta">
                                                                <strong> Country: </strong>
                                                                Belgium </span>

                                                            <span class="kaya_um_user_meta"> <strong> Eye Color:
                                                                </strong> Blue </span>
                                                            <span class="kaya_um_user_meta"> <strong> Hair Color:
                                                                </strong> Brown </span>
                                                            <span class="kaya_um_user_meta"> <strong> Skin Color:
                                                                </strong> Light </span>

                                                            <span class="kaya_um_user_meta"> <strong> Bra Size in CM:
                                                                </strong> 57 </span>
                                                            <span class="kaya_um_user_meta"> <strong> Hip Size in CM:
                                                                </strong> 50 </span>
                                                        </div>
                                                    </div>
                                                    <div class="um-clear"></div>
                                                </div> <input type="hidden" name="form_id" id="form_id_8"
                                                    value="8">

                                                <p class="um_request_name">
                                                    <label for="um_request_8">Only fill in if you are not human</label>
                                                    <input type="hidden" name="um_request" id="um_request_8"
                                                        class="input" value="" size="25" autocomplete="off">
                                                </p>


                                                <div class="clear"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <style type="text/css">
                                    .um-8.um {
                                        max-width: 100%;
                                    }
                                </style>

                                <style type="text/css">
                                    .um-8.um .um-profile-body {
                                        max-width: 100%;
                                    }

                                    .um-8.um .um-profile-photo a.um-profile-photo-img {
                                        width: 320px;
                                        height: 320px;
                                    }

                                    .um-8.um .um-profile-photo a.um-profile-photo-img {
                                        top: -170px;
                                    }

                                    .um-8.um .um-profile-meta {
                                        padding-left: 380px;
                                    }
                                </style>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </div> <!-- End -->

                </div><!-- #content -->
            </div>
        </div>
        <div class="clear"></div>
    </div><!-- #page -->
    <style type="text/css">
        #um-editing .um-profile-body .custommediawrapper table:not(.pods-meta):not(.picker__table):not(.page-50).custommediatable {
            display: block !important;
        }

        #umem_media_sepeartor {
            margin: 5px 2px;
        }
    </style>
    <style>
        /* Disable cover image */
        .um-cover,
        .um-member-cover,
        .um-member-more,
        .um-member-less {
            display: none !important;
            height: 0px !important;
        }

        .psgal.photoswipe_showme {
            opacity: 1 !important;
        }

        /* Search results text alignment to center */
        .um-directory .um-members-wrapper .um-members .um-members-none {
            width: 100% !Important;
            position: absolute;
        }

        .user-title-meta-info h3 a,
        .user-title-meta-info h3 a:visited {
            color: #eee !important;
        }

        .um-directory .um-members-wrapper .um-members a {
            color: inherit;
        }


        /*--------------------------------------------------------------
                # Profile form editing
                --------------------------------------------------------------*/
        table.form-table.pods-meta {
            background: #fff;
            border: 10px solid #dedede;
        }

        .cleditorMain {
            background-color: #eeeeee;
        }

        .um-editing .um-profile-body h131,
        .um-editing #um_role_selector_wrapper,
        .um-editing .um-profile-body table:not(.pods-meta):not(.picker__table):not(.page-50) {
            display: none !important;
        }

        .pods-meta iframe {
            height: auto !important;
        }

        .pods-meta table th,
        .mce-item-table th,
        table caption {
            width: inherit !important;

        }

        .um-field-block hr {
            margin: 0px !important;
        }

        .um-editing .um-single-image-preview.show,
        .um-editing .um-single-file-preview.show,
        .um-editing .um-single-image-preview>img {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .um-editing .wp-editor-container textarea.wp-editor-area {
            height: 100px !Important;
        }

        /*--------------------------------------------------------------
                # UM Directory Search Filter
                --------------------------------------------------------------*/
        /* search filter overlay loader */
        .um-members-overlay {
            background-color: #fff !important;
            opacity: .5;
        }


        /* search slider margin fixing */
        .um-directory .um-member-directory-header .um-member-directory-header-row .um-search .um-search-filter.um-slider-filter-type .um-slider.ui-slider.ui-slider-horizontal {
            margin: 8px 8px;
        }

        .search-grid-container {
            display: grid;
            grid-gap: 15px;
            grid-template-columns: auto 300px;
            position: relative;
        }

        .search-grid-container-for-left-search-box {
            display: grid;
            grid-gap: 15px;
            grid-template-columns: 300px auto;
            position: relative;
        }

        .search-grid-container-for-left-search-box div:nth-child(2) {
            grid-column: 1 / 1;
            grid-row: 1 / 1;
        }

        /* search filter box left side code end*/
        @media (max-width: 1024px) {

            .search-grid-container,
            .search-grid-container-for-left-search-box {
                grid-template-columns: auto;
            }

            .one_fifth,
            .four_fifth_last {
                width: 100%;
            }

            .search-grid-container div:nth-child(2),
            .search-grid-container-for-left-search-box div:nth-child(2) {
                grid-column: 1 / 1;
                grid-row: 1 / 1;
            }

            .um-directory .um-member-directory-header .search_filter_header_wrap_sidebar .um-member-directory-header-row .um-search {
                grid-template-rows: auto 2fr !important;
                grid-template-columns: repeat(2, 2fr) !important;
                grid-gap: 20px;
            }

        }

        @media (max-width: 500px) {
            .um-directory .um-member-directory-header .search_filter_header_wrap_sidebar .um-member-directory-header-row .um-search {
                grid-template-rows: auto 1fr !important;
                grid-template-columns: repeat(1, 1fr) !important;
                grid-gap: 20px;
            }
        }

        @media (min-width: 1025px) {
            .um-directory .um-member-directory-header .search_filter_header_wrap_sidebar .um-member-directory-header-row .um-search {
                grid-template-rows: auto 1fr !important;
                grid-template-columns: repeat(1, 1fr) !important;
                grid-gap: 20px;
            }

        }

        /* search filter sidebar */
        .um-directory .um-member-directory-header .um-member-directory-header-row .um-member-directory-search-line {
            width: 100%;
        }

        .search_filter_header_wrap,
        .search_filter_header_wrap_sidebar {
            padding: 10px;
            border-style: 1px solid #ddd;
            width: calc(100% - 20px);
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        }

        .um-directory .um-member-directory-header .um-member-directory-header-row .um-filtered-line .um-members-filter-tag {
            background-color: rgba(200, 200, 200, 0.5)
        }

        /*--------------------------------------------------------------
                # managing grid image width height for responsiveness
                --------------------------------------------------------------*/

        .um-directory.uimob960 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo,
        .um-directory.uimob960 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo a,

        .um-directory.uimob800 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo,
        .um-directory.uimob800 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo a,

        .um-directory.uimob500 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo,
        .um-directory.uimob500 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo a,
        .um-directory.uimob340 .um-members-wrapper .um-members.um-members-list .um-member .um-member-photo,
        .um-directory.uimob340 .um-members-wrapper .um-members.um-members-list .um-member .um-member-photo a {
            width: inherit !important;
            height: inherit !important;

        }

        .um-directory.uimob960 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo a img,
        .um-directory.uimob800 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo a img,
        .um-directory.uimob500 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo a img,
        .um-directory.uimob340 .um-members-wrapper .um-members.um-members-list .um-member .um-member-photo a img {
            width: 100% !important;
            height: inherit !important;
        }

        .um-directory.uimob800 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo,
        .um-directory.uimob800 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-card,
        .um-directory.uimob500 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-card,
        .um-directory.uimob340 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-card {
            width: unset;
        }

        .um-directory.uimob800 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo,
        .um-directory.uimob500 .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo,

            {
            margin: 0px;
        }

        /*--------------------------------------------------------------
                # Compcard Style
                --------------------------------------------------------------*/

        #campcard_wrap {
            display: none;
            text-align: center;
        }

        .cc_print_button {
            padding: 10px 15px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .um-viewing .compcard {
            display: none;
        }

        /*--------------------------------------------------------------
                #  um member photo disable round
                --------------------------------------------------------------*/

        .um-header {

            border-bottom: none !important;
        }

        /* Member Directory  photo round disable */
        .um-directory .um-members-wrapper .um-members .um-member .um-member-photo.radius-1 a img,
        .um-directory .um-members-wrapper .um-members .um-member {
            -moz-border-radius: 3px !important;
            -webkit-border-radius: 3px !important;
            border-radius: 3px !important;
            box-shadow: 3px 3px 3px rgba(127, 127, 127, 0.1);
        }


        /*--------------------------------------------------------------
                # UM Directory List styles
                --------------------------------------------------------------*/
        .um-directory .um-members-wrapper .um-members.um-members-list {
            display: grid;
            grid-gap: 15px;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            align-items: flex-start;
        }

        .um-directory .um-members-wrapper .um-members.um-members-list .um-member {
            padding: 0px;
            background-color: transparent;
        }

        .um-directory .um-members-wrapper .um-members.um-members-list .um-member .um-member-card-container .um-member-card .um-member-card-content .um-member-meta-main .um-member-meta .um-member-metaline {
            padding: 3px 0px;
            line-height: inherit;
        }

        .um-directory .um-members-wrapper .um-members.um-members-list .um-member .um-member-card-container .um-member-card .um-member-card-content .um-member-meta-main .um-member-meta {
            margin: 0px;
        }

        .um-directory .um-members-wrapper .um-members.um-members-list .um-member .um-member-card-container .um-member-card .um-member-card-content .um-member-tagline {
            color: inherit;
        }

        /*--------------------------------------------------------------
                # UM Profile Page Styles
                --------------------------------------------------------------*/
        .um-8.um .um-profile-body,
        .um-8.um {
            max-width: 100%;
        }

        /* Profile photo disable round */
        .um .um-profile-photo a.um-profile-photo-img,
        .um .um-profile-photo img,
        .um .um-profile-photo span.um-profile-photo-overlay,
        .um-profile-photo a.um-profile-photo-img {
            border-radius: 3px !important;
            -webkit-border-radius: 3px !important;
            border: none !important;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 3px 3px 3px rgba(127, 127, 127, 0.5);
        }

        /* Profile photo responsive */
        .um-profile-photo {
            width: inherit;

        }

        .um-profile-photo a {
            max-width: 100%;
            height: unset !important;
        }

        /* Profile Navbar */
        .um-profile-nav {
            padding: unset;
            background: transparent;
            text-align: center;
            margin-left: 25px;

        }

        .um-profile-nav-item a {
            padding: 10px 30px;
            border-radius: 0px;
            margin-bottom: -1px;

        }

        .um-profile-nav-item i {
            top: 10px;
        }

        /* user bio text font size */
        .um-meta-text {
            font-size: inherit;
        }

        .um-profile .profile_head_sidebar #campcard_wrap {
            text-align: center;
            margin-bottom: 15px;
        }

        /* Profile Photo responsive  */
        div.uimob960 .um-profile-photo a.um-profile-photo-img {
            width: inherit !important;
            height: inherit !important;
            top: inherit !important;
        }

        .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-photo a img,
        .um-8.um .um-profile-photo a.um-profile-photo-img {
            max-height: 100% !important;
        }

        /* Profile page right side box  */
        .um-profile .um-profile-body {
            background-color: #f9f9f9;
            border: 1px solid #eee;
            min-height: 100px;
            padding: 30px !important;
            max-width: 100% !important;
        }

        .um-profile-note {
            padding-top: inherit;
        }

        /* Profile page meat data styles  */
        @media (min-width: 768px) {
            .um-profile.um-viewing .um-field-label {
                display: inline-block;
                float: left;
                border: none;
                margin: 0px 10px 0px 0px;
                color: #333;

            }
        }

        .um-profile.um-viewing .um-field-label label::after {
            content: " :";
        }

        .um-profile.um-viewing .um-field {
            display: block;
            margin: 0px;
        }

        .um-profile.um-viewing .um-field .um-field-value {
            color: #868686;
        }

        .psgal {
            width: inherit !important;
        }

        .um-member-photo.radius-1 {
            background-color: #eee;

        }

        /* Enable grayscale mode
                .um-member-photo a img {
                  -webkit-filter: grayscale(100%);
                  filter: grayscale(100%);
                }

                .um-member-photo a img {
                  opacity: 0.9;
                }

                .um-member-photo a img:hover {
                  opacity: 1;
                    -webkit-filter: grayscale(0%);
                  filter: grayscale(0%);
                }
                */


        /*--------------------------------------------------------------
                # Ultimate Member   Directory Grid Column Settings
                --------------------------------------------------------------*/

        .um-directory .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list {
            display: grid !important;
            grid-gap: 15px;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            align-items: start;
        }

        .um-directory .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member img {
            min-height: 275px;
            object-fit: cover !important;
            width: 100%;
        }

        /* hack for making the profile photo height more than width */
        @media (min-width: 1024px) {
            .um-profile-photo a.um-profile-photo-img img {
                min-height: 275px;
                object-fit: cover !important;
                width: 100%;
            }
        }

        /*--------------------------------------------------------------
                # Member Card Hover Styles
                --------------------------------------------------------------*/

        /* Enable grayscale mode
                */
        .um-member-photo-grayscale a img.um-avatar {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        .um-member-photo-grayscale a img.um-avatar {
            opacity: 0.9;
        }

        .um-member-photo-grayscale a img:hover,
        .um-member:hover .um-member-photo-grayscale a img {
            opacity: 1;
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
        }



        .um-member-photo.radius-1 {
            position: relative;
        }

        @media (min-width: 1025px) {
            .um-directory .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-card-wrap-on .um-member-meta-main {
                position: absolute;
                bottom: 0px;
                padding: 10px;
                width: calc(100% - 20px);
            }

            .um-member-card-wrap-on {
                opacity: 0;
                transition: 0.4s;
                transform-style: preserve-3d;
                transform: rotateX(-50deg);
            }

            .um-member:hover .um-member-card-wrap-on {
                transform: rotateX(180deg);
                opacity: 1;
            }

        }



        .um-directory .um-members-wrapper .um-members-grid-wrapper .um-members.um-members-list .um-member .um-member-card-wrap-off .um-member-meta-main {
            position: relative !important;
            padding: 10px;

        }


        /* Meta fields data style and font size */
        .um-member-tagline,
        .um-member-name,
        .um-member-metaline {
            border-bottom: none;
            padding: 0px;
            font-size: inherit !important;
            text-align: center;
        }

        .um-member-tagline,
        .um-member-metaline {
            border-bottom: 1px solid rgba(127, 127, 127, 0.1);
            padding: 2px 5px;
        }

        .um-members-grid-wrapper .um-member,
        .um-member-photo.radius-1 {
            transition: 0.6s;
            transform-style: preserve-3d;
            transform: rotateY(-0deg);

        }

        .um-members-grid-wrapper .um-member:hover .um-member-card-wrap-on {
            transform: rotateY(-360deg);
            z-index: 10 !important;
        }

        .um-members-grid-wrapper .um-member:hover .um-member-card-wrap-on {
            transform: rotateY(-0deg);

        }


        .um-member-name h3 {
            margin-top: 10px;
        }

        /*--------------------------------------------------------------
                # Profile Tab section style
                --------------------------------------------------------------*/


        .um-viewing .um-profile {
            display: none;
        }

        .preload {
            width: 100px;
            height: 100px;
            position: fixed;
            top: 50%;
            left: 50%;
        }

        .kaya-um-tabs {
            background-color: #fff;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;

        }

        .um-viewing .kaya-um-tabs,
        .um-editing .kaya-um-tabs {

            padding: 1px 0px !important;

        }

        .kaya-um-tabs-content {
            display: block !important;
            margin: 20px !important;
        }


        .um-row-heading {
            cursor: pointer;
            background: #dedede;
            color: #333;
            padding: 8px 12px !important;
            margin-bottom: 1px !important;

        }


        .um-row-heading i {
            font-size: 20px;
            line-height: 22px;
            margin: 0px 4px 0px 0px !important;

        }

        .kaya-um-tabs .um-tabs-heading:hover {
            background-color: #2a282a;

        }

        .kaya-um-tabs-wrap .kaya_pt_active {

            background: #795624;
            display: block;
            height: 20px;
            color: #fff;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
        }


        :root {
            --tab-button-order: 1;
            --tab-content-order: 10;
        }


        @media (min-width: 768px) {
            .um-viewing .kaya-um-tabs-wrap {
                display: flex;
                flex-wrap: wrap;

            }

            .um-viewing .kaya-um-tabs-wrap .um-row-heading {
                order: var(--tab-button-order);
                height: auto;
                margin-right: 2px !important;

            }

            .um-viewing .um-row-heading {
                border-top-right-radius: 5px !important;
                border-top-left-radius: 5px !important;
                margin-bottom: unset !important;

            }

            .um-viewing .kaya-um-tabs-wrap div.kaya-um-tabs {
                background-color: #fff;
                order: var(--tab-content-order);
                width: -webkit-fill-available;
                border-top: 0px solid #e63f19 !important;
                align-items: flex-start;
            }
        }

        .um-viewing .gallery-section .kaya-um-tabs-content>div {
            -webkit-column-count: 4;
            -moz-column-count: 4;
            column-count: 4;
            -webkit-column-width: 150px;
            -moz-column-width: 150px;
            column-width: 150px;

        }

        #custommediagallery-video-gallery {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
            -webkit-column-width: 320px;
            -moz-column-width: 320px;
            column-width: 320px;

        }

        #custommediagallery-audios {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 200px;
            -moz-column-width: 200px;
            column-width: 200px;
            column-gap: 20px;

        }

        #custommediagallery-video-gallery video {
            max-width: 100%;

        }

        .kaya-um-row-heading {
            color: #333;
            padding: 5px 10px;
            margin-bottom: 0px;

        }

        .kaya-um-tabs-off .um-row-heading {

            font-size: 19px !important;
            font-weight: bold;
        }

        .hide-kaya-um-tabs,
        .hide-um-row-heading {
            display: none;
        }

        .gallery-section .um-photo,
        .gallery-section div.um-photo a,
        .gallery-section .um-field,
        .um-editing #um_field_img-gallery,
        .um-editing #um_field_video-gallery,
        .um-editing #um_field_audios {

            margin: 0px;
            padding: 0px !important;
            border: none !important;
            box-shadow: none !important;
            display: block;


        }

        .customemediauploader {
            padding: 12px 20px !important;
            border-radius: 5px;
            margin-bottom: 20px;
        }


        .um-viewing .gallery-section div img,
        .umem_video_sepeartor,
        #custommediagallery-audios div {
            box-shadow: 0px !important;
            padding-bottom: 15px !important;
            vertical-align: top;
        }

        .um-editing .gallery-section .kaya-um-tabs-content>div,
        .um-editing .custommediatable {

            display: flex;
            flex-wrap: wrap;
            align-items: left;
            justify-content: left;
            gap: 20px;
        }
    </style>
    <link rel="stylesheet" id="e-animations-css"
        href="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.6.7"
        type="text/css" media="all">
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9"
        id="regenerator-runtime-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
        id="wp-polyfill-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.6"
        id="contact-form-7-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/themes/models/js/jquery.smartmenus.min.js?ver=6.1.1"
        id="smartmenus.min-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/themes/models/js/navigation.js?ver=20151215"
        id="models-navigation-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-content/themes/models/js/custom.js?ver=6.1.1"
        id="models-custom-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/underscore.min.js?ver=1.13.4"
        id="underscore-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/shortcode.min.js?ver=6.1.1"
        id="shortcode-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/backbone.min.js?ver=1.4.1"
        id="backbone-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/wp-util.min.js?ver=6.1.1"
        id="wp-util-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/wp-backbone.min.js?ver=6.1.1"
        id="wp-backbone-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/media-models.min.js?ver=6.1.1"
        id="media-models-js"></script>

    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/plupload/wp-plupload.min.js?ver=6.1.1" id="wp-plupload-js">
    </script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2"
        id="jquery-ui-mouse-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/jquery/ui/sortable.min.js?ver=1.13.2"
        id="jquery-ui-sortable-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.17"
        id="mediaelement-core-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=6.1.1"
        id="mediaelement-migrate-js"></script>

    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=6.1.1"
        id="wp-mediaelement-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/api-request.min.js?ver=6.1.1"
        id="wp-api-request-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca"
        id="wp-dom-ready-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js">
    </script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js">
    </script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/dist/a11y.min.js?ver=ecce20f002eda4c19664" id="wp-a11y-js">
    </script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/clipboard.min.js?ver=2.0.11"
        id="clipboard-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/media-views.min.js?ver=6.1.1"
        id="media-views-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/media-editor.min.js?ver=6.1.1"
        id="media-editor-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/media-audiovideo.min.js?ver=6.1.1"
        id="media-audiovideo-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/themes/models/ultimate-member/assets/js/upload-media-frontend.js?ver=6.1.1"
        id="models-um-media-js-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/themes/models/ultimate-member/assets/js/lightbox.min.js?ver=6.1.1"
        id="simple-lightbox-js-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/select2/select2.full.min.js?ver=4.0.13"
        id="select2-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-crop.min.js?ver=2.4.2"
        id="um_crop-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-modal.min.js?ver=2.4.2"
        id="um_modal-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-jquery-form.min.js?ver=2.4.2"
        id="um_jquery_form-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-fileupload.js?ver=2.4.2"
        id="um_fileupload-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.js?ver=2.4.2"
        id="um_datetime-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.date.js?ver=2.4.2"
        id="um_datetime_date-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/pickadate/picker.time.js?ver=2.4.2"
        id="um_datetime_time-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-raty.min.js?ver=2.4.2"
        id="um_raty-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-tipsy.min.js?ver=2.4.2"
        id="um_tipsy-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/imagesloaded.min.js?ver=4.1.4"
        id="imagesloaded-js"></script>
    <script type="text/javascript" src="https://kayapati.com/demos/models/wp-includes/js/masonry.min.js?ver=4.2.2"
        id="masonry-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-includes/js/jquery/jquery.masonry.min.js?ver=3.1.2b"
        id="jquery-masonry-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/simplebar.min.js?ver=2.4.2"
        id="um_scrollbar-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-functions.min.js?ver=2.4.2"
        id="um_functions-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-responsive.min.js?ver=2.4.2"
        id="um_responsive-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-conditional.min.js?ver=2.4.2"
        id="um_conditional-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-scripts.min.js?ver=2.4.2"
        id="um_scripts-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-profile.min.js?ver=2.4.2"
        id="um_profile-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/ultimate-member/assets/js/um-account.min.js?ver=2.4.2"
        id="um_account-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.6.12"
        id="hfe-frontend-js-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/themes/models/ultimate-member/assets/js/kaya-um-custom.js?ver=6.1.1"
        id="models-um-js-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.7"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.7"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6"
        id="swiper-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.6.7"
        id="share-link-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0"
        id="elementor-dialog-js"></script>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.7"
        id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
    <script type="text/javascript"
        src="https://kayapati.com/demos/models/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.6.7"
        id="preloaded-modules-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
    <script type="text/javascript">
        jQuery(window).on('load', function() {
            jQuery('input[name="um_request"]').val('');
        });
    </script>
@endsection
