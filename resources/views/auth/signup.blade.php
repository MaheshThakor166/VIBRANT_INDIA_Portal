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
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="register-box1">
                <div class="register-header">Registration Form</div>
                <form class="mt-3" method="POST" action="{{route('registersave')}}">
                  @csrf
                  @method('post')
                  <div class="input-field">
                    <span><i class="fa-solid fa-user input-field-icon"></i></span>
                    <input
                      class="input-type-box"
                      type="text"
                      id="username"
                      name="username"
                      placeholder="Enter Your User Name"
                    />
                  </div>
                  <span class="error-message" id="usernameError"></span>

                  <div class="input-field mt-3">
                    <span
                      ><i class="fa-solid fa-envelope input-field-icon"></i
                    ></span>
                    <input
                      class="input-type-box"
                      type="email"
                      id="email"
                      name="email"
                      placeholder="Enter Your Email"
                    />
                  </div>
                  <span class="error-message" id="emailError"></span>

                  <div class="input-field mt-3">
                    <span
                      ><i class="fa-solid fa-phone input-field-icon"></i
                    ></span>
                    <input
                      class="input-type-box"
                      type="text"
                      id="contact"
                      name="contact"
                      placeholder="Enter Your Contact No."
                    />
                  </div>
                  <span class="error-message" id="contactError"></span>

                  <div class="input-field mt-3">
                    <span
                      ><i class="fa-solid fa-unlock input-field-icon"></i
                    ></span>
                    <input
                      class="input-type-box"
                      type="password"
                      id="password"
                      name="password"
                      placeholder="Enter Your Password"
                    />
                  </div>
                  <span class="error-message" id="passwordError"></span>

                  <div class="input-field mt-3">
                    <span><i class="fa-solid fa-lock input-field-icon"></i></span>
                    <input
                      class="input-type-box"
                      type="password"
                      id="confirmPassword"
                      name="confirmPassword"
                      placeholder="Enter Your Confirm Password"
                    />
                  </div>
                  <span class="error-message" id="confirmPasswordError"></span>

                  <div class="input-field mt-3">
                    <input
                      type="submit"
                      name="submit"
                      value="Submit"
                      class="secondary-btn"
                    />
                  </div>
                  {{-- <div class="mt-3">
                    <span class="account-text">Already have an account? </span>
                    <a class="login-link" href="{{route('login')}}"> Login </a>
                  </div> --}}
                </form>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="register-box2">
                <div class="register-site-image">
                  {{-- <img
                    class="register-image"
                    src="https://png.pngtree.com/thumb_back/fw800/background/20220718/pngtree-online-registration-form-for-modish-form-filling-hiring-school-customer-photo-image_47649492.jpg"
                    alt="Registration"
                  /> --}}
                  <h1>Hello, Welcome!</h1>
                  <p class="ac-txt">Already have an account?</p>
                  <a class="login-link" href="{{route('login')}}"> Login </a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div>
    </section>
    </div>
        <x-script/>
    </div>
</body>
</html>
