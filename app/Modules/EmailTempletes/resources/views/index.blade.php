@extends('admin.layouts.admin_master')
@section('title','EmailTemplete')
@section('content')
<div class="main">
    <div class="container-fluid">
        <!-- /# row -->
        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive mt-2 border-top reload-table">
                                        <table class="table table-striped table-borderless">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Subject</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @isset($emailTempletes)
                                                    @foreach ($emailTempletes as $key=>$item)
                                                        <tr>
                                                            <td  class="text-center">{{$key+1}}</td>
                                                            <td  class="text-center">{{trim($item?->trans?->subject)}}</td>
                                                            <td  class="text-center">
                                                                <a href="{{route('admin.emailtempletes.edit',$item->id)}}" style="color:rgb(155 101 205);">
                                                                    <i class="fa-solid fa-pen-to-square fa-1x"></i>
                                                                    Edit
                                                                </a>
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
        </section>
    </div>
</div>
@endsection
