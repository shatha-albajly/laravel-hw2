@extends("layout/master")

@section('content')

<div class="col-12 col-md-5  bg-light rounded mx-auto shadow ">

    <div class="row">

        <div class=" border-right">
            <div class="p-3 pb-5">
                <div class="d-flex justify-content-between align-items-center mb-3 ">
                    <h4 class="text-right text-primary">Skills</h4>
                    <!-- <i class="bi bi-plus h2 text-primary " style="cursor: pointer;"></i> -->
                    <a role="button" data-bs-toggle="modal" data-bs-target="#addSkill"><i class="bi bi-plus h2 text-primary"></i></a>


                    <!-- <button type="button" class="btn btn-primary btn-sm bg-white plus" data-toggle="modal" data-target="#changeCity"><i class="bi bi-plus h2 text-primary " style="cursor: pointer;"></i></button> -->

                </div>
                <div class="skills">
                    <span class="p-2 py-1 mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        javascript
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1 mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        php
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        python
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1  mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        html
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2  py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        css
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        jquery
                        <i class="bi bi-x" style="cursor: pointer;
                            " data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1  mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        larvel
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        c++
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-block  rounded-pill bg-primary text-white">
                        java
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        figma
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        web design
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-block  rounded-pill bg-primary text-white">
                        database
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        mysql
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>
                    <span class="p-2 py-1  mx-1 mb-2 d-inline-flex  rounded-pill bg-primary text-white">
                        nosql
                        <i class="bi bi-x" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    </span>




                </div>


            </div>
        </div>

    </div>

</div>
<div class="col-12 col-md-3"></div>

</div>
</div>
<div class="modal fade" id="addSkill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">Add Skill</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="text " class="form-control">
                </form>
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>



@endsection