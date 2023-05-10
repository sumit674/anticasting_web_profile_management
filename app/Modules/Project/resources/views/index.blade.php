@extends('admin.layouts.admin_master')
@section('title')
    Manage Bucket
@endsection
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/profiles/project-manage.css') }}" />
@endsection
@section('content')
    <div class="main">
        <div class="container-fluid">

            <!-- /# row -->
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
                                                    aria-selected="true">Active<span class="marker"></span>
                                                </a>

                                            </li>
                                            <li class="nav-item" id="archive_tab">
                                                <a class="nav-link" id="archive" data-toggle="tab" href="#archivelist"
                                                    role="tab" aria-controls="archive"
                                                    aria-selected="false">Archive<span class="marker"></span></a>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="activelist" role="tabpanel"
                                                aria-labelledby="active-tab">
                                                <div class="row mt-2">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('admin.projects.create') }}"
                                                            class="btn btn-labeled btn-primary open-model-create">
                                                            <span class="btn-label"><i class="fa fa-plus"></i></span>Add
                                                            Movie</a>

                                                    </div>
                                                </div>
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
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Project Name</th>
                                                                <th class="text-center">Parent</th>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (isset($items))
                                                                @foreach ($items as $k => $item)
                                                                    <tr>
                                                                        <th scope="row">{{ $k + 1 }}</th>
                                                                        <td>{{ $item->trans->project_name }}</td>
                                                                        <td class="user_name_col_{{ $item->id }}">
                                                                            @if (isset($item->parents) && count($item->parents) > 0)
                                                                                {{ $item->parents[0]->trans->project_name }}
                                                                            @else
                                                                                --
                                                                            @endif
                                                                        </td>
                                                                        {{-- <td>
                                                                        {!! $item->trans->description !!}
                                                                    </td> --}}
                                                                        <td>
                                                                            @if ($item->active === 1)
                                                                                <span
                                                                                    class="badge badge-success">Active</span>
                                                                            @else
                                                                                <span
                                                                                    class="badge badge-danger">InActive</span>
                                                                            @endif
                                                                        </td>
                                                                        <td class="text-left">
                                                                            <a href="{{ route('admin.categories.edit', $item->id) }}"
                                                                                class="btn btn-success btn-flat btn-addon m-l-5">
                                                                                <i class="ti-pencil"></i>
                                                                                Edit
                                                                            </a>
                                                                            <a href="{{ route('admin.categories.delete', $item->id) }}"
                                                                                class="btn btn-danger btn-flat btn-addon m-l-5"
                                                                                onclick="return confirm('Do you really want to delete this item?')">
                                                                                <i class="ti-minus"></i>
                                                                                Delete
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="archivelist" role="tabpanel"
                                                aria-labelledby="archive-tab">


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{--  @include('Bucket::shortlist-show')  --}}
                {{--  @include('Project::edit-popup')  --}}
                {{--  @include('Bucket::archive')  --}}
            </section>
        </div>
    </div>
@endsection
@section('footer')
    <script></script>
@endsection
