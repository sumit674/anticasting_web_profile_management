@extends('admin.layouts.admin_master')
@section('title')
    Bucket | Details
@endsection
<style>
    .card {
        margin: 5% 0%;
    }

    .card-body {
        margin: 0% 0% 0% 3%;
        padding: 6% 0%;
    }

    .bg-gray-950 {
        background-color: #fafafa;
    }

    .bg-gradient-red-green {
        background: linear-gradient(45deg, #ad4ca6, #4e4bb3);
        color: #fff;
    }
</style>
@php
    //     $movie_video_link = $item->movie_link;
    //     $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
    //     $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';
    //     $youtube_video_link = ' ';
    //     if (preg_match($longUrlRegex, $movie_video_link, $matches)) {
    //         $youtube_id = $matches[count($matches) - 1];
    //         $youtube_video_link = 'https://www.youtube.com/embed/' . $youtube_id;
    //     }
    //     if (preg_match($shortUrlRegex, $movie_video_link, $matches)) {
    //         $youtube_id = $matches[count($matches) - 1];
    //         $youtube_video_link = 'https://www.youtube.com/embed/' . $youtube_id;
    //     }
@endphp
@section('content')
    <div class="main">

        <div class="container-fluid">
            @if (Session::has('error'))
                {
                <script>
                    alert("{{ Session::get('error') }}");
                </script>
                }
            @endif
            <div class="row">
                <div class="col-lg-6 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Manage Shortlist</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Shortlist</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row bg-gradient-red-green d-flex">
                        <div class="col-md-12">
                            <div class="card-block ">
                                <h4 class="card-title text-white">{{$item->bucket_name}}</h4>
                                <p class="card-text">Dreamcatcher kombucha drinking vinegar cold-pressed hoodie
                                    craft beer literally blog microdosing trust organic flannel blue bottle
                                    fingerstache. Blog skateboard cronut chips brunch pug. Heirloom coloring book,
                                    pitchfork flannel bicycle rights deep v meditation. </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
