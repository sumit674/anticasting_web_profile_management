@extends('admin.layouts.admin_master')
@section('title', 'EmailTemplete')
<style>
    .card {
        border-radius: 25px !important;
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
                            <form action="{{ route('admin.emailtempletes.update', $item->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label class="form-label" id=""><b>Subject
                                            </b><span style="color:red;">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" id="subject"
                                                placeholder="Enter subject" value="{{ old('subject', $trans?->subject) }}" />
                                            @error('subject')
                                                <span style="color:red;"><b>{{ $message }}</b></span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label class="form-label" id=""><b>Content</b>
                                            {{--  <span style="color:red;">*</span>  --}}
                                        </label>
                                        <div class="form-group">
                                            <textarea name="content" class="form-control" id="content">{{ $trans?->html_content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mx-5 mt-2">
                                    <div class="">
                                        <a href="{{ route('admin.emailtempletes') }}" class="btn btn-warning btn-sm text-white">
                                            <i class='fas fa-caret-left' style='font-size:18px;'></i><i class='fas fa-caret-left' style='font-size:18px;'></i>
                                            Back
                                        </a>
                                    </div>
                                    <div class="">
                                        <input type="submit" class="btn btn-success btn-sm" value="Update" />
                                     </div>
                                </div>
                            </form>
                        </div>
                   </div>
                </div>
            </div>
    </div>
    </section>
@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>


@endsection
