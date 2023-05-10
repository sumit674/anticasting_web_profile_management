@extends('admin.layouts.admin_master')
@section('title')
    Actor Manage Bucket
@endsection
<style>
    #contact_select {


        background: #FFF;
        color: #aaa;
    }
</style>

@section('content')
    <div class="main">
        <section id="main-content">
            @if (Session::has('error'))
                {
                <script>
                    alert("{{ Session::get('error') }}");
                </script>
                }
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <label for="parent_id">Categories</label>
                                                <select class="form-control" name="parent_id" id="parent_id"
                                                    placeholder="Category">
                                                    <option value="0" selected>Parent</option>
                                                    @if (isset($category))
                                                        @foreach ($category as $cat)
                                                            <option value="{{ $cat->id }}"
                                                                @if (old('parent_id') == $cat->id) selected @endif>
                                                                {{ $cat->trans->project_name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="text-danger error-text parent_id_err"></span>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <label class="form-label" id="project"><b>Project name
                                                    </b><span style="color:red;">*</span>
                                                </label>
                                                <div class="form-group">

                                                    <input type="text" name="project_name" class="form-control"
                                                        id="project_name" placeholder="Enter project name" />
                                                    @error('bucket_name')
                                                        <span style="color:red;"><b>{{ $message }}</b></span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="description">Description</label>
                                                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                                                </div>
                                                <span class="text-danger error-text description_err"></span>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                                                <div class="checkbox">
                                                    <label for="active">
                                                        <input type="checkbox" id="active" name="active"> Active
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        <center>
                            <input type="submit" class="btn btn-danger" value="Save" />
                        </center>
                        </form>
                        <hr />
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- Initialize Quill editor -->

@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
        // $(document).ready(function() {
        //     $('#description').summernote({
        //         placeholder: 'Enter movie description goes here..',
        //         // tabsize: 2,
        //         height: 300,
        //         // followingToolbar: true,
        //         toolbar: [
        //             ['style', ['style']],
        //             ['font', ['bold', 'underline', 'clear']],
        //             ['fontname', ['fontname']],
        //             ['color', ['color']],
        //             ['para', ['ul', 'ol', 'paragraph']],
        //             ['table', ['table']],
        //             ['insert', ['link', 'picture', 'video']],
        //             ['view', ['fullscreen', 'codeview', 'help']],
        //         ],
        //         popover: {
        //             image: [
        //                 ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
        //                 ['float', ['floatLeft', 'floatRight', 'floatNone']],
        //                 ['remove', ['removeMedia']]
        //             ],
        //             link: [
        //                 ['link', ['linkDialogShow', 'unlink']]
        //             ],
        //             table: [
        //                 ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
        //                 ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
        //             ],
        //             air: [
        //                 ['color', ['color']],
        //                 ['font', ['bold', 'underline', 'clear']],
        //                 ['para', ['ul', 'paragraph']],
        //                 ['table', ['table']],
        //                 ['insert', ['link', 'picture']]
        //             ]
        //         }

        //     })
        //     //.summernote("code", '{!! old('policy', isset($item->policy) ? $item->policy : '') !!}');

        //     // var postForm = function() {
        //     //     var content = $('textarea[name="policy"]').html($('#policycontent').code());
        //     // }
        // });
    </script>
@endsection

{{--  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title  mt-2" id="exampleModalLabel">Add Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <hr />
            <form action="#" method="POST" id="add_project_form">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <label for="parent_id">Categories</label>
                            <select class="form-control" name="parent_id" id="parent_id" placeholder="Category">
                                <option value="0" selected>Parent</option>
                                @if (isset($category))
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}"
                                            @if (old('parent_id') == $cat->id) selected @endif>{{ $cat->trans->project_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            <span class="text-danger error-text parent_id_err"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <label for="project_name">Project Name</label>
                            <input type="text" name="project_name" class="form-control" id="project_name"
                                placeholder="Enter project name"/>
                            <span class="text-danger error-text project_name_err"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                            <span class="text-danger error-text description_err"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <div class="checkbox">
                                <label for="active">
                                    <input type="checkbox" id="active" name="active"> Active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="add_project_btn" class="btn btn-primary">Add Project</button>
                </div>
            </form>
        </div>
    </div>
</div>  --}}
