@extends('admin.layouts.admin_master')
@section('title','Shortlist')
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/profiles/project-manage.css') }}" />
@endsection
@section('content')
    <div class="main">
        <div class="container-fluid">
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs tabs-marker tabs-dark bg-dark" id="myTab"
                                            role="tablist">
                                            <li class="nav-item" id="active_tab">
                                                <a class="nav-link active" id="active" data-toggle="tab"
                                                    href="#activelist" role="tab" aria-controls="active"
                                                    aria-selected="true">Active ()<span class="marker"></span>
                                                </a>

                                            </li>
                                            <li class="nav-item" id="archive_tab">
                                                <a class="nav-link" id="archive" data-toggle="tab" href="#archivelist"
                                                    role="tab" aria-controls="archive"
                                                    aria-selected="false">Archive ()<span class="marker"></span></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="activelist" role="tabpanel"
                                                aria-labelledby="active-tab">
                                                <div class="justify-content-start" style="margin-left:8px;">
                                                    <input type="checkbox" class="mt-3 ms-5" id="check_all" />
                                                    <span class="ms-1" style="margin-left:8px; font-size:16px;">Select
                                                        all</span>
                                                </div>
                                                <div class="table-responsive mt-2 border-top reload-table">
                                                    <table class="table table-striped table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                {{--  <th class="text-center">Id</th>  --}}
                                                                <th class="text-center">Movie name</th>
                                                                <th class="text-center">Total Profile</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @isset($bucketMemberActive)
                                                                @foreach ($bucketMemberActive as $member)
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" name="all_list_member"
                                                                                class="select_all_list"
                                                                                 value="{{ $member->id }}"
                                                                             />
                                                                        </td>
                                                                        {{--  <td class="text-center" scope="row">{{ $k + 1 }}</td>  --}}
                                                                        <td class="text-center">{{$member?->category?->trans?->project_name }}</td>
                                                                        {{--  <td class="text-center">{{$member?->user?->first_name.' '.$member?->user?->last_name }}</td>  --}}
                                                                        {{--  <td class="text-center">
                                                                           <a class="btn btn-danger btn-sm" href="{{route('admin.shortlist.archive',$member?->id)}}">
                                                                              Archive
                                                                           </a>  --}}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endisset

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="archivelist" role="tabpanel"
                                                aria-labelledby="archive-tab">
                                                <div class="table-responsive mt-2 border-top reload-table">
                                                    <table class="table table-striped table-borderless">
                                                        <thead>
                                                            <tr>
                                                                {{--  <th class="text-center">Id</th>  --}}
                                                                <th class="text-center">Movie Name</th>
                                                                <th class="text-center">Total Profile</th>
                                                                <th class="text-center">Status</th>

                                                            </tr>
                                                        </thead>+9*
                                                        <tbody>
                                                            @isset($bucketMemberActive)
                                                                @foreach ($bucketMemberActive as $member)
                                                                    <tr>
                                                                        {{--  <td class="text-center" scope="row">{{ $k + 1 }}</td>  --}}
                                                                        <td class="text-center">{{$member?->category?->trans?->project_name }}</td>
                                                                        {{--  <td class="text-center">{{$member?->user?->first_name.' '.$member?->user?->last_name }}</td>  --}}
                                                                        {{--  <td class="text-center">
                                                                           <a class="btn btn-success btn-sm" href="{{route('admin.shortlist.active',$member?->id)}}">
                                                                              Active
                                                                           </a>
                                                                        </td>  --}}
                                                                    </tr>
                                                                @endforeach
                                                            @endisset

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
