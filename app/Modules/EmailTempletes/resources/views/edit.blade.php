@extends('admin.layouts.admin_master')
@section('title', 'EmailTemplete')
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
                            <form action="{{ route('admin.emailtempletes.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label class="form-label" id=""><b>Project name
                                            </b><span style="color:red;">*</span>
                                        </label>
                                        <div class="form-group">

                                            <input type="text" name="project_name" class="form-control" id="project_name"
                                                placeholder="Enter project name" />
                                            @error('project_name')
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

                        </div>
                        <center>
                            <input type="submit" class="btn btn-danger" value="Save" />
                        </center>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
@endsection
