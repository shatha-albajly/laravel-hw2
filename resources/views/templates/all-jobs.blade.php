@extends('_header')

<!-- all-jobs -->
<section class="all-jobs py-5 bg-light" id="all-jobs">
    <div class="container">
        <h2 class="text-primary text-center pt-4">All Jobs</h2>
        <div class="underline mb-3"></div>
        <div class="row align-items-center">
            <!-- search -->
            <div class="col">
                <div class="input-group rounded mx-auto h-25 mb-2">
                    <input type="search" class="form-control rounded" placeholder="Search about job" aria-label="Search"
                        aria-describedby="search-addon" id="job-search" />

                    <span class="input-group-text border-0" id="search-addon">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </div>
            <!-- filter -->
            <div class="filters row justify-content-start mx-auto">
                <div class="col-md-3">
                    <select class="form-select col-md-3" aria-label="Default select example" id="main-select">
                        <option selected>Show all</option>
                        <option value="cities">Filter the cities</option>
                        <option value="comapnies">Filter the companies</option>
                    </select>
                </div>

                <!-- cities -->
                <div class="col-md-3">
                    <select class="form-select" aria-label="Default select example" id="cities"></select>
                </div>

                <!-- comapnies -->
                <div class="col-md-3">
                    <select class="form-select col-6" aria-label="Default select example" id="companies"></select>
                </div>
                <!-- button filter -->
                <div class="col-md-3">
                    <button type="button" class="btn btn-outline-primary w-100 bg-white" id="filter-btn">
                        Search
                    </button>
                </div>
            </div>
        </div>

        <!-- cards -->
        <div class="card-deck jobs-card row justify-content-center">
            <div class="card col-lg-3 col-md-5 m-2 p-2">
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            WASH Technical Coordinator
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/MDM.png" alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">
                            Program Coordinator - eLearning
                        </h5>
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
                <a href="{{route('job')}}"><img class="card-img-top" src="../images/UnitedNations.png"
                        alt="Card image cap" /></a>

                <div class="card-body">
                    <a href="{{route('job')}}" class="text-decoration-none">
                        <h5 class="card-title text-center">Senior Sales Executive</h5>
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
@extends('_footer')