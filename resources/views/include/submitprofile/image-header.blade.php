<style>
    {{--  .breadcrumbs{
        background: url('{{ asset('assets/images/banner-left.gif') }}')
    }  --}}
    .welcome-user {

        padding: 5px !important;
        font-size: 22px;
    }
    .welcome-user:hover {
        color: #fff !important;
    }
</style>
<div class="page-banner">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 bg-img">
                    <div class="breadcrumbs-content mb-3">
                        <h1 class="page-title">Talent Submission Form</h1>
                    </div>

                    <ul class="breadcrumb-nav">
                        @auth
                            <li>

                                <span class="welcome-user">Welcome! <b
                                        style="font-size:10px;display: inline-block;"></b>&nbsp;{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
                                    &nbsp;</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('users.login') }}">Login</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
