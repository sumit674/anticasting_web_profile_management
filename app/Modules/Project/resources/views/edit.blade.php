@extends('admin.layouts.admin_master')
@section('title','Project')

<style>

    .edit-card{
        border-radius:30px !important;
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
                    <div class="card mt-5 edit-card">
                        <div class="card-body">
                            {{--  {{ dd($catItem) }}  --}}
                            <form action="{{ route('admin.projects.update',$catItem->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                     <div class="row">
                                           <div class="col-lg-12 col-md-12 col-sm-12">
                                                <label class="form-label" id=""><b>Project name
                                                    </b><span style="color:red;">*</span>
                                                </label>
                                                <div class="form-group">
                                                 <input type="text" name="project_name" class="form-control"
                                                        id="project_name"
                                                        value="{{ old('project_name', $catItem?->trans?->project_name) }}"
                                                        placeholder="Enter project name" />
                                                    @error('project_name')
                                                        <span style="color:red;"><b>{{ $message }}</b></span>
                                                    @enderror

                                                </div>
                                            </div>
                                        </div>
                                        {{--  <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="checkbox">
                                                    <label for="active">Active</label>
                                                     <input type="checkbox" id="active" name="active" value="1" {{isset($catItem->active) && $catItem->active == true ? 'checked' : ' ' }}/>

                                                </div>
                                            </div>
                                        </div>  --}}

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



{{--  <div class="modal fade" id="editBucketModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title  mt-2" id="exampleModalLabel">Add Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <hr/>
            <form action="#" method="POST" id="edit_bucket_form">
                @csrf
                <input type="hidden" name="bucket_id" id="bucket_id">
                <div class="modal-body p-4 bg-light">
                    <div class="my-2">
                        <label for="movie_name">Movie Name</label>
                        <input type="text" name="movie_name" id="movie_name" class="form-control" placeholder="Enter a movie name"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="edit_Bucket_btn" class="btn btn-success">Update Bucket</button>
                </div>
            </form>
        </div>
    </div>
</div>  --}}
