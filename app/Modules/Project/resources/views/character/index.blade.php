@extends('admin.layouts.admin_master')
@section('title', 'Character')
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
                                <div class="d-flex justify-content-between mt-2 mx-2">
                                    <div>
                                        <a href="{{ route('admin.projects') }}"
                                                    class="btn btn-warning btn-sm text-white">
                                                    <i class='fas fa-caret-left' style='font-size:18px'></i><i
                                                        class='fas fa-caret-left' style='font-size:18px'></i>
                                                    Back
                                                </a>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('admin.character.create', $project->id) }}"
                                            class="btn btn-labeled btn-primary btn-sm open-model-create">
                                            <span class="btn-label"><i class="fa fa-plus"></i></span>Add
                                            Character</a>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive mt-2 border-top reload-table">
                                            <table class="table table-striped table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Character Name</th>
                                                        {{--  <th class="text-center">Active</th>  --}}
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($character)
                                                        @foreach ($character as $item)
                                                            <tr>
                                                                <td class="text-center">
                                                                    {{ $item->trans->project_name }}
                                                                </td>
                                                                {{--  <td class="text-center">
                                                                    @if (isset($item->active) && $item->active == 1)
                                                                        <span class="badge badge-success">Active</span>
                                                                    @else
                                                                        <span class="badge badge-danger">Inactive</span>
                                                                    @endif
                                                                </td>  --}}
                                                                <td class="text-center">
                                                                    <a href="{{ route('admin.character.edit',[$project->id,$item->id]) }}"
                                                                        class="btn btn-success  btn-sm btn-flat btn-addon m-l-5">
                                                                        <i class="ti-pencil"></i>
                                                                        Edit
                                                                    </a>
                                                                    {{--  <a href="{{ route('admin.character.delete',[$project->id,$item->id]) }}"
                                                                        class="btn btn-danger  btn-sm btn-flat btn-addon m-l-5">
                                                                        <i class="ti-trash"></i>
                                                                        Delete
                                                                    </a>  --}}
                                                                </td>

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
