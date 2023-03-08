@extends('layouts.app')

@section('content')
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  </div>

                  <form class="row g-3 needs-validation" action="{{ route('register.user') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend"><i class="ri-mail-fill"></i></span>
                          <input type="text" name="email" class="form-control" id="email" required>
                          <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="password" name="password" class="form-control" id="password" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                          <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                      </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
@endsection
