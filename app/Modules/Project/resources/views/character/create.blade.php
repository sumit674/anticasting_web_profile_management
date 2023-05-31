@extends('admin.layouts.admin_master')
@section('title', 'Character')
<style>
    #contact_select {


        background: #FFF;
        color: #aaa;
    }
    .small-character {
        color: red;
        font-size: 11px;
        font-weight: 700;
    }
    .card{
        border-radius:25px !important;
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
                    <div class="card mt-2">
                        <div class="card-body">
                            <form action="{{ route('admin.character.store', $project->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label class="form-label" id=""><b>Project name
                                            </b><span style="color:red;">*</span>
                                        </label>
                                        <div class="form-group">

                                            <input type="text" name="project_name" class="form-control" id="project_name"
                                                placeholder="Enter project name"
                                                value="{{ old('project_name', $project?->trans?->project_name) }}"
                                                readonly />
                                            @error('project_name')
                                                <span style="color:red;"><b>{{ $message }}</b></span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label class="form-label" id=""><b>Character name (<small
                                            class="small-character">Only 30 Character</small>)
                                            </b><span style="color:red;">*</span>
                                        </label>
                                        <div class="form-group">

                                            <input type="text" name="character_name" class="form-control"
                                                id="character_name" placeholder="Enter character name" />
                                            @error('character_name')
                                                <span style="color:red;"><b>{{ $message }}</b></span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                {{--  <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-2">
                                                <div class="checkbox">
                                                    <label for="active">Active</label>
                                                        <input type="checkbox" id="active" name="active">

                                                </div>
                                            </div>
                                        </div>  --}}
                                <div class="d-flex justify-content-between mx-2">
                                    <div class="">
                                        <a href="{{ route('admin.character',$project->id) }}" class="btn btn-warning btn-sm text-white">
                                            <i class='fas fa-caret-left' style='font-size:18px;'></i><i class='fas fa-caret-left' style='font-size:18px;'></i>
                                            Back
                                        </a>
                                     </div>
                                    <div class="">
                                        <input type="submit" class="btn btn-primary btn-sm" value="Save" />
                                    </div>
                                </div>
                            </form>
                        </div>
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
            $('#description').summernote({
                placeholder: 'Enter movie description goes here..',
                // tabsize: 2,
                height: 300,
                // followingToolbar: true,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
                popover: {
                    image: [
                        ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']]
                    ],
                    link: [
                        ['link', ['linkDialogShow', 'unlink']]
                    ],
                    table: [
                        ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                        ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                    ],
                    air: [
                        ['color', ['color']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture']]
                    ]
                }

            })
            //.summernote("code", '{!! old('policy', isset($item->policy) ? $item->policy : '') !!}');

            // var postForm = function() {
            //     var content = $('textarea[name="policy"]').html($('#policycontent').code());
            // }
        });
    </script>
@endsection
