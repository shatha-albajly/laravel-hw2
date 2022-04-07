@extends("layout/master")

@section('content')


<div class="col-12 col-md-8 bg-light rounded mx-auto shadow ">
    <div class="row">
        <div class="col-md-3 border-right mx-auto ">

        </div>
        <div class=" border-right">
            <div class="p-3 pb-5">
                <div class="d-flex justify-content-between align-items-center my-3 ">
                    <h4 class="text-right text-primary">Personal Data</h4>
                    <i class="bi bi-plus h2 text-primary  " style="cursor: pointer;"></i>

                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control"
                            value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text"
                            class="form-control" placeholder="enter phone number" value=""></div>

                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control"
                            placeholder="enter email id" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control"
                            placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                            class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-4 text-start"><button class="btn btn-primary profile-button" type="button">Save
                        Profile</button></div>
            </div>
        </div>

    </div>

</div>
@endsection