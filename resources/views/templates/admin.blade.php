@extends('_header')
<!--  sign up-->
<section class="signup p-5 bg-white" id="sign-up">
    <div class="container">
        <div class="col-md-6 mx-auto bg-light p-4 rounded-3 mt-5 shadow">
            <h3 class="text-center text-dark">Post a job</h3>

            <form class="p-1">
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">Title</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Title" />
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">City</label>

                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="City" />
                </div>
                <div class="form-group mb-3">
                    <label class="form-check-label" for="exampleCheck1">Country</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Country" />
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="exampleInputPassword1"
                        placeholder="Description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary rounded-pill w-100">
                    Post job
                </button>
            </form>
        </div>
    </div>
</section>
@extends('_footer')