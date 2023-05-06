@extends('admin.layouts.admin_master')
@section('title')
    Manage Bucket
@endsection
@section('header')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/profiles/bucket-manage.css') }}" />
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
                                                        <button type="button"
                                                            class="btn btn-labeled btn-primary open-model-create">
                                                            <span class="btn-label"><i class="fa fa-plus"></i></span>Add
                                                            Bucket</button>

                                                    </div>
                                                </div>
                                                <div class="justify-content-start" style="margin-left:8px;">
                                                    <input type="checkbox" class="mt-3 ms-5" id="check_all"
                                                        onclick="selecteAllItems()" />
                                                    <span class="ms-1" style="margin-left:8px; font-size:16px;">Select
                                                        all</span>
                                                </div>
                                                <div class="table-responsive mt-2 border-top reload-table">
                                                    <table class="table table-striped table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th class="text-center">Id</th>
                                                                <th class="text-center">Bucket List</th>
                                                                {{-- <th class="text-center">Status</th> --}}
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($items as $key=>$item)
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" name="all_list_item"
                                                                            class="select_all_list"
                                                                            onclick="getBucket({{ $item->id }})" />
                                                                    </td>
                                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                                    <td class="text-center">

                                                                        {{ $item->bucket_name }}
                                                                    </td>
                                                                    {{-- @if (isset($item->status) && $item->status == 1)
                                                                        <td class="text-center">
                                                                            <span
                                                                                class="badge badge-success text-center text-capitalize">
                                                                                Active
                                                                            </span>

                                                                        </td>
                                                                    @else
                                                                        <td class="text-center">
                                                                            <span
                                                                                class="badge bg-danger text-center text-capitalize">
                                                                                Archive
                                                                            </span>
                                                                        </td>
                                                                    @endif --}}
                                                                    <td class="text-center">
                                                                        <a href="#" id="{{ $item->id }}"
                                                                            class=" btn btn-success mx-1 editIcon"
                                                                            data-toggle="modal"
                                                                            data-target="#editBucketModal">
                                                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                                                        {{-- <button class="btn btn-success btn-sm "
                                                                            id="#open_edit_model_{{ $item->id }}"
                                                                            onclick="openEditModel({{ $item->id }})">

                                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                                        </button> --}}
                                                                        @if (isset($item->status) && $item->status == 1)
                                                                            <a href="{{ route('admin.bucket.manage.details', $item->id) }}"
                                                                                class="btn btn-primary btn-sm">
                                                                                <i class="fa-solid fa-eye"></i>
                                                                            </a>
                                                                        @else
                                                                            <a href="{{ route('admin.bucket.manage.details', $item->id) }}"
                                                                                class="btn btn-primary btn-sm disabled">
                                                                                <i class="fa-solid fa-eye"></i>
                                                                            </a>
                                                                        @endif

                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td colspan="4" class="text-center">No Record</td>
                                                                </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div>
                                                    {{ $items->links('pagination::bootstrap-5') }}
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="archivelist" role="tabpanel"
                                                aria-labelledby="archive-tab">
                                                <div class="table-responsive mt-3 border-top">
                                                    {{-- @if (isset($bucket_archive_members))
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>

                                                                    <th class="text-center">Id</th>
                                                                    <th class="text-center">Name</th>
                                                                    <th class="text-center">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($bucket_archive_members as $key=>$member)
                                                                    <tr>

                                                                        <td class="text-center">{{ $key + 1 }}</td>
                                                                        <td class="text-center">

                                                                            {{ $member?->user?->first_name . ' ' . $member?->user?->last_name }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            <a onclick="return confirm('Do you really want to move shortlist?');"
                                                                                href="{{ route('admin.bucket.member.unarchive', [$member?->user?->id, $item->id]) }}"
                                                                                class="btn btn-success btn-sm">
                                                                                Move to Shortlist
                                                                                <i class="fas fa-undo"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                @empty
                                                                    <tr>
                                                                        <td colspan="4" class="text-center">No Record
                                                                        </td>
                                                                    </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    @endif --}}
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @include('Bucket::create-popup')
                @include('Bucket::shortlist-show')
                @include('Bucket::edit-popup')
            </section>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        //Open popup  for bucket create
        $(document).ready(function() {
            $(".open-model-create").click(function() {
                $("#myModal").modal('show');
                $('#myModal').appendTo('body');
            });
        });
        // add new employee ajax request
        $("#add_bucket_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_bucket_btn").text('Adding...');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('admin.bucket.manage.store') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Added!',
                            'Bucket Added Successfully!',
                            'success'
                        )
                    }
                    $("#add_bucket_btn").text('Add Bucket');
                    $("#add_bucket_form")[0].reset();
                    $("#myModal").modal('hide');
                      location.reload(true);
                }
            });
        });
        //Edit get request 
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('admin.bucket.manage.edit') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#bucket_name").val(response.bucket_name);
                    $("#bucket_id").val(response.id);
                }
            });
        });

        // update Bucket ajax request
        $("#edit_bucket_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_Bucket_btn").text('Updating...');
            $.ajax({
                url: '{{ route('admin.bucket.manage.update') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Updated!',
                            'Bucket Updated Successfully!',
                            'success'
                        )
                       
                    }
                    $("#edit_Bucket_btn").text('Bucket Employee');
                    $("#edit_bucket_form")[0].reset();
                    $("#editBucketModal").modal('hide');
                    location.reload(true);
                }
            });
        });
    </script>
@endsection
