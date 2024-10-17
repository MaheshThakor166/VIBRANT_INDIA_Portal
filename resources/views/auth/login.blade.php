<!DOCTYPE html>
<html lang="en">
<head>
    <x-head/>
</head>
<body>
    <div class="container mt-5">
        <div class="main-box">
          <div class="row g-0 m-0">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="register-box1">
                <div class="register-header">Login</div>
                <form class="mt-3" onsubmit="return validateForm()">
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
                    <span><i class="fa-solid fa-lock input-field-icon"></i></span>
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
                    <input
                      type="submit"
                      name="submit"
                      value="Submit"
                      class="secondary-btn"
                    />
                  </div>
                  <div class="mt-3">
                    <span class="account-text"> Don't have an account? </span>
                    <a class="login-link" href="SignUp.html"> Sign Up </a>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
              <div class="register-box2">
                <div class="register-site-image">
                  <img
                    class="register-image"
                    src="https://st2.depositphotos.com/2931363/9744/i/450/depositphotos_97445546-stock-photo-handsome-working-with-laptop-in.jpg"
                    alt="Registration"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div>
        <x-script/>
    </div>
</body>
</html>
