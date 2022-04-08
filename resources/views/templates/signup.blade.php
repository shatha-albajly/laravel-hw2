@extends('_header')
<!--  sign up-->
<section class="signup p-5 bg-white" id="sign-up">
    <div class="container">
        <div class="col-md-6 mx-auto bg-light p-4 rounded-3 mt-5 shadow">
            <h3 class="text-center text-dark">Create a Free Account</h3>
            <p class="text-center">
                Already have an account?
                <span class="text-primary"><a href="{{route('login')}}"> Log In</a> </span>
            </p>
            @if ($errors->any())
            @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>

            @endforeach
            @endif

            <form class="p-1" action="/save_user" method="POST">
                @csrf

                <div class=" form-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">First Name</label>

                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                        placeholder="First Name" value="{{ old('name') }}" />
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">Last Name</label>

                    <input type="text" class="form-control" name="last-name" aria-describedby="emailHelp"
                        placeholder="Last Name" value="{{ old('last_name') }}" />
                </div>
                <div class="form-group mb-3">
                    <label class="form-check-label" for="exampleCheck1">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        placeholder="you@example.com" value="{{ old('email') }}" />
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Conform Password</label>
                    <input type="password" class="form-control" name="confirm_pass" placeholder="Conform Password" />
                </div>

                <button type="submit" class="btn btn-primary rounded-pill w-100">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
</section>
@extends('_footer')