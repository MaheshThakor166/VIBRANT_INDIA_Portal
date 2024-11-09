<!DOCTYPE html>
<html lang="en">
<head>
    <x-head/>
</head>
<body>
    <div class="form-outer">
    <section class="form-container">
    <div class="container mt-5">
        <div class="main-box">
          <div class="row g-0 m-0">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="register-box1">
                <div class="register-header">Login</div>

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form class="mt-3" method="POST" action="{{ route('loginsave') }}">
                  @csrf

                  <div class="input-field mt-3">
                    {{-- <span>
                      <i class="fa-solid fa-envelope input-field-icon"></i>
                    </span> --}}
                    <input
                      class="input-type-box"
                      type="email"
                      id="email"
                      name="email"
                      placeholder="Enter Your Email"
                    />
                    <i class="fa-solid fa-envelope input-field-icon"></i>
                  </div>
                  @error('email')
                  <span class="error-message">{{ $message }}</span>
                  @enderror
                  <span class="error-message" id="emailError"></span>

                  <div class="input-field mt-3">
                    {{-- <span><i class="fa-solid fa-lock input-field-icon"></i></span> --}}
                    <input
                      class="input-type-box"
                      type="password"
                      id="password"
                      name="password"
                      placeholder="Enter Your Password"
                    />
                    <span><i class="fa-solid fa-lock input-field-icon"></i></span>

                  </div>
                  @error('password')
                  <span class="error-message">{{ $message }}</span>
                  @enderror
                  <span class="error-message" id="passwordError"></span>

                  <div class="input-field mt-3">
                    <input
                      type="submit"
                      name="submit"
                      value="Submit"
                      class="secondary-btn"
                    />
                  </div>
                  {{-- <div class="mt-3">
                    <span class="account-text"> Don't have an account? </span>
                    <a class="login-link" href="{{ route('register') }}"> Sign Up </a>
                  </div> --}}
                </form>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-0" style="overflow: hidden;">
              <div class="register-box2">
                <div class="register-site-image">
                         <h2>Hello, Welcome!</h2>
                         <p class="ac-txt">Don't have an account?</p>
                         <a class="login-link" href="{{ route('register') }}"> Sign Up </a>
                        </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <x-script/>
    </div>
    </section>
</div>
</body>
</html>
