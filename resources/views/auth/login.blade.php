@extends('auth.layouts.app')

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
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>

                  <form class="row g-3 needs-validation" action="{{ route('login') }}" method="POST" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="ri-mail-fill"></i></span>
                        <input type="email" name="email" class="form-control" id="email" required>
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
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" onclick="lsRememberMe()">{{ trans('global.login') }}</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  </main><!-- End #main -->
@endsection

@section('scripts')
<script>
const rmCheck = document.getElementById("rememberMe"),
    emailInput = document.getElementById("email"),
    passwordInput = document.getElementById('password');

if (localStorage.checkbox && localStorage.checkbox !== "") {
  rmCheck.setAttribute("checked", "checked");
  emailInput.value = localStorage.email;
  passwordInput.value = localStorage.password;
} else {
  rmCheck.removeAttribute("checked");
  emailInput.value = "";
  passwordInput.value = "";
}

function lsRememberMe() {
  if (rmCheck.checked && emailInput.value !== "") {
    localStorage.email = emailInput.value;
    localStorage.checkbox = rmCheck.value;
    localStorage.password = passwordInput.value;
  } else {
    localStorage.email = "";
    localStorage.password = "";
    localStorage.checkbox = "";
  }
}
</script>
@endsection
