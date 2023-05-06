<style>
    .welcome-user {
        /* background-color: rgb(239 101 3) !important; */
        /* background-color:rgb(121, 112, 125) !important; */
        background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%) !important;
        /* box-shadow: 3px 4px #a98585; */
        padding: 5px !important;
        font-size: 25px !important;
    }
    .welcome-user:hover {
        color: #fff !important;
    }
</style>
<div class="page-banner">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="breadcrumbs-content mb-3">
                        <h1 class="page-title">Talent Submission Form</h1>
                    </div>

                    <ul class="breadcrumb-nav">
                        @auth
                            <li>
                                <span class="welcome-user">Welcome <b
                                        style="font-size:10px;display: inline-block;">-</b>&nbsp;{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
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
