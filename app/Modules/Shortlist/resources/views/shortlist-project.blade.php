@extends('admin.layouts.admin_master')
@section('title', 'Shortlist | Project')
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
                                        <div class="table-responsive mt-2 border-top reload-table">
                                            <table class="table table-striped table-borderless">
                                                <thead>
                                                    <tr>

                                                        {{--  <th class="text-center">Id</th>  --}}
                                                        <th class="text-center">List name</th>
                                                        <th class="text-center">Number of Breakdowns</th>
                                                        {{--  <th class="text-center">Number of Profile</th>  --}}
                                                        <th class="text-center">Last modified</th>
                                                        {{--  <th class="text-center">Action</th>  --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($bucketMemberActive)
                                                        @foreach ($bucketMemberActive as $item)
                                                            <tr>
                                                                {{--  <td>
                                                                    <input type="checkbox" name="all_list_item"
                                                                        class="select_all_list"
                                                                         value="{{ $item->id }}"
                                                                     />
                                                                </td>  --}}
                                                                <td class="text-center">
                                                                    <a
                                                                        href="{{ route('admin.character.breakdown', $item?->id) }}">
                                                                        {{ $item?->trans?->project_name }}
                                                                    </a>
                                                                </td>
                                                                <td class="text-center">{{ $item?->breakdowns }}</td>
                                                                {{--  <td class="text-center">
                                                                    @if ($item?->members_count > 0)
                                                                        <a
                                                                            href="{{ route('admin.show.allMember', $item?->id) }}">
                                                                            {{ $item?->members_count }}
                                                                        </a>
                                                                    @else
                                                                       {{ $item?->members_count }}
                                                                    @endif
                                                                </td>  --}}
                                                                <td class="text-center">
                                                                    {{ date('y-m-d h:i:s', strtotime($item->updated_at)) }}
                                                                </td>
                                                                {{--  <td class="text-center">
                                                                    <a class="btn btn-danger btn-sm"
                                                                        href="{{ route('admin.shortlist.archive', $item?->id) }}">
                                                                        Archive
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
            </section>
        </div>
    </div>
@endsection
{{--  <ul class="nav nav-tabs tabs-marker tabs-dark bg-dark" id="myTab"
role="tablist">
<li class="nav-item" id="active_tab">
    <a class="nav-link active" id="active" data-toggle="tab"
        href="#activelist" role="tab" aria-controls="active"
        aria-selected="true">Active ({{ count($bucketMemberActive) }})<span
            class="marker"></span>
    </a>

</li>
<li class="nav-item" id="archive_tab">
    <a class="nav-link" id="archive" data-toggle="tab" href="#archivelist"
        role="tab" aria-controls="archive" aria-selected="false">Archive
        ({{ count($bucketMemberArchives) }})<span class="marker"></span></a>
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

                    <th class="text-center">Id</th>
                    <th class="text-center">List name</th>
                    <th class="text-center">Number of Breakdowns</th>
                    <th class="text-center">Number of Profile</th>
                    <th class="text-center">Last modified</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($bucketMemberActive)
                    @foreach ($bucketMemberActive as $item)
                        <tr>
                            <td>
                                <input type="checkbox" name="all_list_item"
                                    class="select_all_list"
                                     value="{{ $item->id }}"
                                 />
                            </td>
                            <td class="text-center">
                                <a
                                    href="{{ route('admin.character.breakdown', $item?->id) }}">
                                    {{ $item?->trans?->project_name }}
                                </a>
                            </td>
                            <td class="text-center">{{ $item?->breakdowns }}</td>
                            <td class="text-center">
                                @if ($item?->members_count > 0)
                                    <a
                                        href="{{ route('admin.show.allMember', $item?->id) }}">
                                        {{ $item?->members_count }}
                                    </a>
                                @else
                                   {{ $item?->members_count }}
                                @endif
                            </td>
                            <td class="text-center">
                                {{ date('y-m-d h:i:s', strtotime($item->updated_at)) }}
                            </td>
                            <td class="text-center">
                                <a class="btn btn-danger btn-sm"
                                    href="{{ route('admin.shortlist.archive', $item?->id) }}">
                                    Archive
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endisset

            </tbody>
        </table>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="{{route('admin.shortlist')}}" class="btn btn-sm btn-primary">
                <i class='fas fa-caret-left' style='font-size:18px'></i><i
                    class='fas fa-caret-left' style='font-size:18px'></i>
                    Back
            </a>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="archivelist" role="tabpanel"
    aria-labelledby="archive-tab">
    <div class="table-responsive mt-2 border-top reload-table">
        <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th class="text-center">List name</th>
                    <th class="text-center">Number of Breakdowns</th>
                    <th class="text-center">Number of Profile</th>
                    <th class="text-center">Last modified</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($bucketMemberArchives)
                    @foreach ($bucketMemberArchives as $item)
                        <tr>
                            <td class="text-center">
                                <a
                                href="{{ route('admin.character.breakdown', $item?->id) }}">
                                {{ $item?->trans?->project_name }}
                                </a>
                            </td>
                            <td class="text-center">{{ $item?->breakdowns }}</td>
                            <td class="text-center">
                                @if ($item?->members_count > 0)
                                    <a
                                        href="{{ route('admin.show.allMember', $item?->id) }}">
                                        {{ $item?->members_count }}
                                    </a>
                                @else
                                   {{ $item?->members_count }}
                                @endif
                            </td>
                            <td class="text-center">
                                {{ date('y-m-d h:i:s', strtotime($item->updated_at)) }}
                            </td>
                            <td class="text-center">
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.shortlist.active', $item?->id) }}">
                                    Activate
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endisset

            </tbody>
        </table>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="{{route('admin.shortlist')}}" class="btn btn-sm btn-primary">
                <i class='fas fa-caret-left' style='font-size:18px'></i><i
                    class='fas fa-caret-left' style='font-size:18px'></i>
                    Back
            </a>
        </div>
    </div>
</div>
</div>  --}}
