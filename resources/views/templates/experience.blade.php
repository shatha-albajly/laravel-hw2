@extends("layout/master")

@section('content')
<div class="col-12 col-md-8 bg-light rounded mx-auto shadow ">

    <div class="row">
        <div class="col-md-3 border-right mx-auto ">

        </div>
        <div class=" border-right">
            <div class="p-3 pb-5" id="experience-body">
                <div class="d-flex justify-content-between align-items-center my-3 ">
                    <h4 class="text-right text-primary">Experience</h4>
                    <a role="button" data-bs-toggle="modal" data-bs-target="#modifyExperience"><i class="bi bi-plus h2 text-primary"></i></a>

                </div>
                <div class="row my-3 experience-card">

                    <div class=" shadow-sm mx-auto py-3 bg-white col-10 ">
                        <div class="d-flex justify-content-between align-items-center px-md-2">
                            <div class="col-10">
                                <p class="h5 text-primary">Freelencer at Fiverr</p>
                                <p class="text-black country p-0 m-0"> <span class="fw-bold">City : </span>
                                    Sana'a - Yemen</p>
                                <p class="text-black the-role m-0"><span class="fw-bold ">Role : </span>Web
                                    Developer</p>

                                <p class="text-black">Worked as a full time freelencer in fiverr. Worked as a
                                    full time freelencer in fiverr. Worked as a full time freelencer .</p>
                            </div>
                            <div class="col-2 align-self-start">
                                <i class="bi bi-trash text-primary h5 mx-1  trash" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                <i class="bi bi-pencil-square text-primary h5  mx-1 modify" style="cursor: pointer;"></i>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3 experience-card">

                    <div class=" shadow-sm mx-auto py-3 bg-white col-10 ">
                        <div class="d-flex justify-content-between align-items-center px-md-2">
                            <div class="col-10">
                                <p class="h5 text-primary">Freelencer at Fiverr</p>
                                <p class="text-black country p-0 m-0"> <span class="fw-bold">City : </span>
                                    Sana'a - Yemen</p>
                                <p class="text-black the-role m-0"><span class="fw-bold ">Role : </span>Web
                                    Developer</p>

                                <p class="text-black">Worked as a full time freelencer in fiverr. Worked as a
                                    full time freelencer in fiverr. Worked as a full time freelencer .</p>
                            </div>
                            <div class="col-2 align-self-start">
                                <i class="bi bi-trash text-primary h5 mx-1  trash" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                <i class="bi bi-pencil-square text-primary h5  mx-1 modify" style="cursor: pointer;"></i>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3 experience-card">

                    <div class=" shadow-sm mx-auto py-3 bg-white col-10 ">
                        <div class="d-flex justify-content-between align-items-center px-md-2">
                            <div class="col-10">
                                <p class="h5 text-primary">Freelencer at Fiverr</p>
                                <p class="text-black country p-0 m-0"> <span class="fw-bold">City : </span>
                                    Sana'a - Yemen</p>
                                <p class="text-black the-role m-0"><span class="fw-bold ">Role : </span>Web
                                    Developer</p>

                                <p class="text-black">Worked as a full time freelencer in fiverr. Worked as a
                                    full time freelencer in fiverr. Worked as a full time freelencer .</p>
                            </div>
                            <div class="col-2 align-self-start">
                                <i class="bi bi-trash text-primary h5 mx-1  trash" style="cursor: pointer;"></i>
                                <i class="bi bi-pencil-square text-primary h5  mx-1 modify" style="cursor: pointer;"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>
</div>
<div class="modal fade" id="modifyExperience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Experience</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text" class="form-control" placeholder="Add experince title" id="experinceTitle">
                    <input type="text" class="form-control" placeholder="Add the city" id="experinceCity">
                    <input type="text" class="form-control" placeholder="Add the Job" id="experinceJob">
                    <input type="text" class="form-control" placeholder="Add the description" id="experinceDescription">
                </form>
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection