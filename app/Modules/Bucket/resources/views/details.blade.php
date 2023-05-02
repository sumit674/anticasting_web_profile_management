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

    .card-title {
        margin-left: 11px;
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
                    <div class="card-body">
                        <h5 class="card-title1 text-center text-muted"><b>Active Profile</b></h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-flex">
                                    <div class="card-block">
                                        <span class="text-muted"><b>Bucket Name:</b></span>
                                        <span class="card-title">{{ $item->bucket_name }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                {{-- <div class="d-flex">
                                    <div class="card-block">
                                        <span class="text-muted"><b>Profile Number:</b></span>
                                        <span class="card-title">89</span>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex">
                                    <div class="card-block">
                                        <span class="text-muted"><b>Status:</b></span>
                                        @if (isset($item->status) && $item->status == true)
                                            <span class="badge bg-success text-capitalize">Active</span>
                                        @else
                                            <span class="badge bg-danger text-capitalize">Archive</span>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-8 col-sm-8 col-lg-8">
                                <div class="justify-content-start" style="margin-left:8px;">
                                    <input type="checkbox" class="ms-5" id="check_all" onclick="getAllBucket()" />
                                    <span class="ms-1" style="margin-left:8px; font-size:16px;">Select all</span>
                                </div>
                                <div class="table-responsive">
                                    @if (isset($bucket_members))
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Name</th>
                                                    {{-- <th class="text-center">Movie</th>
                                                <th class="text-center">Move Link</th>
                                                <th class="text-center">Description</th> --}}
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($bucket_members as $key=>$member)
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" name="all_list_item"
                                                                class="select_all_list"
                                                                onclick="getBucket({{ $member->id }})" />
                                                        </td>
                                                        <td class="text-center">{{ $key + 1 }}</td>
                                                        <td class="text-center">

                                                            {{ $member->user->first_name . ' ' . $member->user->last_name }}
                                                        </td>

                                                        <td class="text-center">
                                                            {{-- <a href="{{ route('admin.bucket.manage.edit', $member->id) }}"
                                                            class="btn btn-success btn-sm">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="{{ route('admin.bucket.manage.details', $member->id) }}"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a> --}}
                                                            <a onclick="return confirm('Do you really want to archive?');" 
                                                            href="{{ route('admin.bucket.member.archive', [$member->user->id, $item->id]) }}"
                                                                class="btn btn-danger btn-sm">
                                                                <i class="fa-solid fa-trash-arrow-up"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">No Record</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('Bucket::archive')
@endsection
@section('footer')
    <script>
        /*Select all checkbox*/

        var collectionBucket = []

        function getBucket(id) {

            if (collectionBucket.indexOf(id) === -1) {
                collectionBucket.push(id);
            } else {

                let index = collectionBucket.indexOf(id);
                collectionBucket.splice(index, 1)
            }

            const bucketvalue = document.getElementById('bucket-ids').innerHTML = collectionBucket.length;
            if (collectionBucket.length == 0) {
                $('#shortlist-page').hide();
            } else {
                $('#shortlist-page').show();
            }

        }

        function getAllBucket(getAllBucket) {

            $('#check_all').on('click', function() {
                if ($(this).is(':checked', true)) {
                    $(".select_all_list").prop('checked', true);
                    $('#shortlist-page').show();
                    document.getElementById('bucket-ids').innerHTML = getAllBucket;

                } else {
                    $(".select_all_list").prop('checked', false);
                    document.getElementById('bucket-ids').innerHTML = 0;
                    $('#shortlist-page').hide();
                }
            })

        }

        $("#check_all").on("click", function() {

            if ($(this).is(':checked', true)) {
                $(".select_all_list").prop('checked', true);
            } else {
                $(".select_all_list").prop('checked', false);

            }
        });
    </script>
@endsection
