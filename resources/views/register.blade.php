@extends('layouts.auth')

@section('title', 'Register Page')

@section('content')
    <div class="card my-5">
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="card-body">
                <div class="d-flex justify-content-between align-items-end mb-4">
                    <h3 class="mb-0"><b>Sign up</b></h3>
                    <a href="/login" class="link-primary">Already have an account?</a>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">

                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach

                    </div>

                @endif
                <div class="form-group mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Email Address*</label>
                    <input type="email" class="form-control" name="email" placeholder="Email Address"
                        autocomplete="off">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation"
                        placeholder="Password Confirmation">
                </div>
                <p class="mt-4 text-sm text-muted">By Signing up, you agree to our <a href="#" class="text-primary">
                        Terms
                        of Service </a> and <a href="#" class="text-primary"> Privacy Policy</a></p>
                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </div>
                <div class="saprator mt-3">
                    <span>Sign up with</span>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="d-grid">
                            <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                <img src="../assets/images/authentication/google.svg" alt="img"> <span
                                    class="d-none d-sm-inline-block"> Google</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid">
                            <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                <img src="../assets/images/authentication/twitter.svg" alt="img"> <span
                                    class="d-none d-sm-inline-block"> Twitter</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-grid">
                            <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                                <img src="../assets/images/authentication/facebook.svg" alt="img">
                                <span class="d-none d-sm-inline-block"> Facebook</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>
@endsection
