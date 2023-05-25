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
                            <form action="{{ route('admin.emailtempletes.update',$item->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label class="form-label" id=""><b>Subject
                                            </b><span style="color:red;">*</span>
                                        </label>
                                        <div class="form-group">
                                           <input type="text" name="subject" class="form-control" id="subject"
                                                placeholder="Enter subject" value="{{ old('subject',$trans?->subject) }}" />
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
                                           <textarea  name="content" class="form-control" id="content">{{$trans?->html_content}}</textarea>
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
@endsection
@section('footer')
<script>
    $(document).ready(function() {
        $('#content').summernote();
      });
</script>


@endsection
