<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<style>
    body {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    }

    .emp-profile {
        padding: 2%;
        margin-top:140px;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    /* .profile-img img {
        width: 70%;
        height: 100%;
    } */

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }

    .container {
        max-width: 960px;
    }

    /*Image CSS*/
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    .image-container {
        width: 190px;
        height: 190px;
        background-color: #fff;
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding: 0px;
        gap: 10px;
    }

    img {
        width: 100%;
        display: block;
    }

    .card-left {
        width: 226px !important;
        overflow: hidden;
    }

    .main-image {
        display: flex;
        transition: all 0.5s ease;

    }

    .img-select {
        display: flex;
        margin-top: 2px;
    }

    .img-select-container {
        border: 2px solid white;
    }

    .active {
        border-color: black;

    }
</style>
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                        alt="" /> --}}
                    <div class="image-container">
                        <div class="card-left">
                            <div class="main-image">
                                @isset($item?->images[0]?->image)
                                    <img src="{{ $item?->images[0]?->image }}" />
                                @else
                                    <img src="{{ asset('assets/images/default-user.jfif') }}" />
                                @endisset
                                @isset($item?->images[1]?->image)
                                    <img src="{{ $item?->images[1]?->image }}" />
                                @else
                                    <img src="{{ asset('assets/images/default-user.jfif') }}" />
                                @endisset
                                @isset($item?->images[2]?->image)
                                    <img src="{{ $item?->images[2]?->image }}" />
                                @else
                                    <img src="{{ asset('assets/images/default-user.jfif') }}" />
                                @endisset

                            </div>
                            <div class="img-select">
                                <div class="img-select-container active">
                                    <a href="#" data-id="1">
                                        @isset($item?->images[0]?->image)
                                            <img src="{{ $item?->images[0]?->image }}" />
                                        @else
                                            <img src="{{ asset('assets/images/default-user.jfif') }}" />
                                        @endisset
                                    </a>
                                </div>
                                <div class="img-select-container">
                                    <a href="#" data-id="2">
                                        @isset($item?->images[1]?->image)
                                            <img src="{{ $item?->images[1]?->image }}" />
                                        @else
                                            <img src="{{ asset('assets/images/default-user.jfif') }}" />
                                        @endisset
                                    </a>
                                </div>
                                <div class="img-select-container">
                                    <a href="#" data-id="3">
                                        @isset($item?->images[2]?->image)
                                            <img src="{{ $item?->images[2]?->image }}" />
                                        @else
                                            <img src="{{ asset('assets/images/default-user.jfif') }}" />
                                        @endisset
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        {{ $item->first_name . ' ' . $item->last_name }}
                    </h5>
                    <h6>
                        Web Developer
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Videos</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>WORK LINK</p>
                    <a href="">Website Link</a><br />
                    <a href="">Bootsnipp Profile</a><br />
                    <a href="">Bootply Profile</a>
                    <p>SKILLS</p>
                    <a href="">Web Designer</a><br />
                    <a href="">Web Developer</a><br />
                    <a href="">WordPress</a><br />
                    <a href="">WooCommerce</a><br />
                    <a href="">PHP, .Net</a><br />
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $item->first_name . ' ' . $item->last_name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $item->email }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $item->countryCode . ' ' . $item->mobile_no }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Ethnicity</label>
                            </div>
                            <div class="col-md-6">
                                <p> {{ $item?->profile?->ethnicity }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Date Of Bith</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $item?->profile?->date_of_birth }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Current Location</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $item?->profile?->current_location }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br />
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    const imgs = document.querySelectorAll('.img-select-container a');
    let imgId = 1;

    const imgDiv = document.querySelectorAll('.img-select-container');

    imgs.forEach((img) => {
        img.addEventListener('click', (e) => {
            alert('Maheh')
            e.preventDefault();
            imgId = img.dataset.id;

            imgDiv.forEach((img) => {
                img.classList.remove('active');
            });

            img.parentElement.classList.add('active');

            moveImage();
        });
    });

    function moveImage() {

        const imgWidth = document.querySelector('.main-image img:first-child').clientWidth;

        let width = (imgId - 1) * imgWidth;
        document.querySelector('.main-image').style.transform = `translateX(${-width}px)`;

    }
</script>
