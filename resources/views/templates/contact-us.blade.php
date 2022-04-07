@extends('_header')
<!-- contact us -->
<section class="contact-us my-5" id="contact-us">
    <div class="container">
        <h2 class="text-center text-primary pt-4">Contact Us</h2>
        <div class="underline mb-4"></div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="">
                    <div class="col m-3 shadow">
                        <div class="card p-3">
                            <div class="card-body row justify-content-center align-items-center">
                                <div class="circle col-3 d-flex align-items-center pt-1 justify-content-center">
                                    <i class="bi bi-telephone-fill text-primary h5"></i>
                                </div>

                                <div class="col-9">
                                    <h5 class="card-title text-secondary" style="font-size: 0.8rem">
                                        Call us directly at:
                                    </h5>
                                    <p class="card-text text-primary fw-bold" style="font-size: 1rem">
                                        +967-777-333-22
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col m-3 shadow">
                        <div class="card p-3">
                            <div class="card-body row justify-content-center align-items-center">
                                <div class="circle col-3 d-flex align-items-center pt-1 justify-content-center">
                                    <i class="bi bi-chat-fill text-primary h5"></i>
                                </div>

                                <div class="col-9">
                                    <h5 class="card-title text-secondary" style="font-size: 0.8rem">
                                        Chat with our team
                                    </h5>
                                    <p class="card-text text-primary fw-bold pt-2" style="font-size: 1rem">
                                        <button type="submit" class="btn btn-primary" style="font-size: 0.8rem">
                                            Chat with the team
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- contact form -->
            <div class="col-md-6">
                <div class="mx-auto bg-light p-4 rounded-3 shadow">
                    <h3 class="text-center text-primary mb-3">Get in Touch</h3>

                    <form class="p-1">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Name" />
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Email Address " />
                        </div>
                        <div class="form-group mb-3">
                            <textarea style="resize: none" name="" id="" cols="20" rows="5" class="form-control"
                                placeholder="Message "></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill w-100">
                            Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@extends('_footer')