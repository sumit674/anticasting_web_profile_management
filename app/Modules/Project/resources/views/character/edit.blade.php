@extends('admin.layouts.admin_master')
@section('title','Character')
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
                            <form action="{{ route('admin.character.update',[$project->id,$character->id]) }}" method="post">
                                @csrf
                                       <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <label class="form-label" id=""><b>Project name
                                                    </b><span style="color:red;">*</span>
                                                </label>
                                                <div class="form-group">

                                                    <input type="text" name="project_name" class="form-control"
                                                        id="project_name" placeholder="Enter project name" value="{{old('project_name',$project?->trans?->project_name)}}" readonly/>
                                                    @error('project_name')
                                                        <span style="color:red;"><b>{{ $message }}</b></span>
                                                    @enderror

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <label class="form-label" id=""><b>Character name
                                                    </b><span style="color:red;">*</span>
                                                </label>
                                                <div class="form-group">

                                                    <input type="text" name="character_name" class="form-control"
                                                        id="character_name" placeholder="Enter character name"
                                                        value="{{ old('character_name',$character?->trans?->project_name) }}"/>
                                                    @error('character_name')
                                                        <span style="color:red;"><b>{{ $message }}</b></span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-2">
                                                <div class="checkbox">
                                                    <label for="active">Active</label>
                                                    <input type="checkbox" id="active" name="active" value="1" {{isset($character?->active) && $character?->active == true ? 'checked' : ' ' }}/>

                                                </div>
                                            </div>
                                        </div>

                                   </div>
                        <center>
                            <input type="submit" class="btn btn-success" value="Update" />
                        </center>
                        </form>
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
