@extends('admin.layouts.admin_master')
@section('title', 'Project')
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
                                                    aria-selected="true">Active <span
                                                        class="marker"></span>
                                                </a>

                                            </li>
                                            <li class="nav-item" id="archive_tab">
                                                <a class="nav-link" id="archive" data-toggle="tab" href="#archivelist"
                                                    role="tab" aria-controls="archive" aria-selected="false">Archive
                                                   <span class="marker"></span></a>
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
                                                            Project</a>

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

                                                                <th class="text-center">Project name</th>
                                                                <th class="text-center">Total Character</th>
                                                                <th class="text-center">Active</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (isset($activeItems))
                                                                @foreach ($activeItems as $k => $item)
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" name="all_list_item"
                                                                                class="select_all_list"
                                                                                value="{{ $item->id }}" />
                                                                        </td>
                                                                        <td class="text-center">
                                                                            {{ $item->trans->project_name }}
                                                                        </td>
                                                                         <td class="text-center">
                                                                            {{ count($item->child) }}
                                                                         </td>
                                                                        {{--  <td class="text-center">
                                                                            <a href="{{ route('admin.projects.archive', $item->id) }}"
                                                                                class="btn btn-danger btn-sm">
                                                                                Archive
                                                                            </a>
                                                                        </td>  --}}
                                                                        <td class="text-center">
                                                                            @if (isset($item->active) && $item->active == 1)
                                                                                <span
                                                                                    class="badge badge-success">Active</span>
                                                                            @else
                                                                                <span
                                                                                    class="badge badge-danger">Inactive</span>
                                                                            @endif
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <a href="{{ route('admin.projects.edit', $item->id) }}"
                                                                                class="btn btn-success  btn-sm btn-flat btn-addon m-l-5">
                                                                                <i class="ti-pencil"></i>
                                                                                Edit
                                                                            </a>
                                                                            <a href="{{ route('admin.projects.delete', $item->id) }}"
                                                                                class="btn btn-danger  btn-sm btn-flat btn-addon m-l-5">
                                                                                <i class="ti-trash"></i>
                                                                                Delete
                                                                            </a>
                                                                            <a href="{{ route('admin.character', $item->id) }}"
                                                                                class="btn btn-primary  btn-sm">

                                                                               Character
                                                                            </a>
                                                                            {{--  <a href="{{ route('admin.projects.delete', $item->id) }}"
                                                                                class="btn btn-danger  btn-sm btn-flat btn-addon m-l-5"
                                                                                onclick="return confirm('Do you really want to delete this item?')">
                                                                                <i class="ti-minus"></i>
                                                                                Character
                                                                            </a>  --}}
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
                                                <div class="table-responsive mt-2 border-top reload-table">
                                                </div>

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
                {{--  @include('Project::archive')  --}}
            </section>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        var collectionBucket = []
        $('.select_all_list').click(function() {
            $("#check_all").prop('checked', false);
            var selectedValue = $(this).val();
            if (collectionBucket.indexOf(selectedValue) === -1) {

                collectionBucket.push(selectedValue);

            } else {

                let index = collectionBucket.indexOf(selectedValue);
                collectionBucket.splice(index, 1)
            }
            document.getElementById('project-id').innerHTML =
                collectionBucket.length;

            document.querySelector('#archive-item').value = collectionBucket.join(',');

        });
        $("#check_all").on("click", function() {
            if ($(this).is(':checked', true)) {
                $(".select_all_list").prop('checked', true);
                var checkboxes = document.getElementsByClassName('select_all_list');

                for (var i = 0; i < checkboxes.length; i++) {
                    if (collectionBucket.indexOf(checkboxes[i].value) === -1) {
                        collectionBucket.push(checkboxes[i].value);
                    } else {

                        let index = collectionBucket.indexOf(checkboxes[i].value);
                        collectionBucket.splice(index, 1)
                        collectionBucket.push(checkboxes[i].value);
                    }
                    document.getElementById('project-id').innerHTML =
                        collectionBucket.length;
                    document.querySelector('#archive-item').value = collectionBucket.join(',');
                }

            } else {
                $(".select_all_list").prop('checked', false);
                document.getElementById('project-id').innerHTML = 0;
                document.querySelector('#archive-item').value = null;
            }
        })
    </script>
@endsection
