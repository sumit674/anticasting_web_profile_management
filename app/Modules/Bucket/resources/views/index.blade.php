@extends('admin.layouts.admin_master')
@section('title')
    Manage Bucket
@endsection
@section('content')
    <div class="main">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Manage Bucket</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <a href="{{ route('admin.bucket.manage.create') }}" class="btn btn-primary">Add Bucket</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Bucket</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title pr">
                                <h6><b class="breadcrumb-item">Bucket</b></h6>
                            </div>
                            <div class="justify-content-start" style="margin-left:8px;">
                                <input type="checkbox" class="ms-5" id="check_all"
                                    onclick="getAllBucket({{ $allItems }})" />
                                <span class="ms-1" style="margin-left:8px; font-size:16px;">Select all</span>
                            </div>
                            <hr />
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-striped table-borderless">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center">Id</th>
                                                <th class="text-center">Bucket</th>
                                                <th class="text-center">Movie</th>
                                                <th class="text-center">Move Link</th>
                                                <th class="text-center">Description</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $key=>$item)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="all_list_item" class="select_all_list"
                                                            onclick="getBucket({{ $item->id }})" />
                                                    </td>
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td class="text-center">

                                                        {{ $item->bucket_name }}
                                                    </td>
                                                    <td class="text-center">{{ $item->movie_name }}</td>
                                                    <td class="text-center">
                                                        <a class="text-truncate" href="{{ $item->movie_link }}"></a>
                                                        {{ $item->movie_link }}
                                                    </td>
                                                    <td class="text-center">
                                                        {!! $item->description !!}
                                                    </td>
                                                    @if (isset($item->status) && $item->status == 1)
                                                        <td>
                                                            <span class="badge badge-success text-center">
                                                                Active
                                                            </span>

                                                        </td>
                                                    @else
                                                        <td>
                                                            <span class="badge bg-danger text-center">
                                                                Inactive
                                                            </span>
                                                        </td>
                                                    @endif
                                                    <td class="text-center">
                                                        <a href="{{ route('admin.bucket.manage.edit', $item->id) }}"
                                                            class="btn btn-success btn-sm">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="{{ route('admin.bucket.manage.details', $item->id) }}"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.bucket.manage.delete', $item->id) }}"
                                                            class="btn btn-danger btn-sm">
                                                            <i class="fa-solid fa-trash-arrow-up"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">No Record</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    {{ $items->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('Bucket::shortlist-show')
            </section>
        </div>
    </div>
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
            if(collectionBucket.length == 0){
                $('#shortlist-page').hide();
            }
            else{
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

        // $("#check_all").on("click", function() {

        //     if ($(this).is(':checked', true)) {
        //         $(".select_all_list").prop('checked', true);


        //     } else {
        //         $(".select_all_list").prop('checked', false);

        //     }
        // });
    </script>
@endsection
