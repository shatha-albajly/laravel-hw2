@extends('_header')
<!-- contact us -->
<section class="home overflow-hidden" id="home">
    <div class="mt-5 bg-danger vw-100 overflow-hidden">
        <!-- slider -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" class="vw-100">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/slider11.webp" class="d-block w-100 img-fluid" style="height: 380px" />
                </div>
                <div class="carousel-item">
                    <img src="/images/slider0.webp" class="d-block w-100 img-fluid" style="height: 380px" />
                </div>

                <div class="carousel-item">
                    <img src="images/slider10.webp" class="d-block w-100 img-fluid" style="height: 380px" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- new jobs-->
<section class="new-jobs my-3">
    <div class="container text-center">
        <h2 class="text-primary text-center pt-4">Newest Jobs</h2>
        <div class="underline mb-3"></div>
        <div class="card-deck row justify-content-center">
            <div class="card col-lg-3 col-md-5 m-2 p-2">
                <a href="{{route('job')}}"><img class="card-img-top" src="images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title">WASH Technical Coordinator</h5>
                    </a>

                    <p class="card-text">
                        Mercy Corps is a leading international non-governmental
                        humanitarian agency.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card col-lg-3 col-md-5 m-2 p-2">
                <a href="{{route('job')}}"><img class="card-img-top" src="images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title">Program Coordinator - eLearning</h5>
                    </a>

                    <p class="card-text">
                        Mercy Corps is a leading international non-governmental
                        humanitarian agency.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>

            <div class="card col-lg-3 col-md-5 m-2 p-2">
                <a href="{{route('job')}}"><img class="card-img-top" src="images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title">Senior Sales Executive</h5>
                    </a>

                    <p class="card-text">
                        Mercy Corps is a leading international non-governmental
                        humanitarian agency.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- partners -->
<section class="our-partner my-3">
    <div class="container text-center">
        <h2 class="text-primary text-center pt-4">Our Partners</h2>
        <div class="underline mb-3"></div>
        <div class="row mx-auto">
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/Al-Amal-Bank.png" alt="" class="img-fluid shadow-sm" />
            </div>
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/Almushahid.png" alt="" class="img-fluid shadow-sm" />
            </div>

            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/Growth.jpg" alt="" class="img-fluid shadow-sm" />
            </div>

            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/MDM.png" alt="" class="img-fluid shadow-sm" />
            </div>
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/SEDF.jpg" alt="" class="img-fluid shadow-sm" />
            </div>
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/SFD.png" alt="" class="img-fluid shadow-sm" />
            </div>
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/TYF.png" alt="" class="img-fluid shadow-sm" />
            </div>
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/UnitedNations.png" alt="" class="img-fluid shadow-sm" />
            </div>
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/Yemen.png" alt="" class="img-fluid shadow-sm" />
            </div>
            <div class="col-lg-2 col-md-4 m-2 col-sm-6">
                <img src="images/YKB.jpg" alt="" class="img-fluid shadow-sm" />
            </div>
        </div>
        <form action="" class="shadow col-md-9 mx-auto my-5">
            <div class="mb-3 container py-5 px-5">
                <label for="exampleFormControlInput1" class="form-label text-start h5 mb-4">Subscribe to our
                    newsletter</label>

                <div class="input-group">
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter your email" />

                    <button type="button" class="bg-primary text-white input-group-text">
                        Subscribe
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- ads -->
    <div class="ads my-3">
        <img src="images/advertising.jpg" alt="" />
        <img src="images/advertising.jpg" alt="" />
    </div>
</section>


@extends('_footer')