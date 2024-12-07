<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - QuickCart</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>

  <body>
    <div class="login-container">
      <div class="login-box">
        <h1>Login To <span>QuickCart</span></h1>
        <!-- <p class="login-description">LOGIN TO YOUR ACCOUNT</p> -->

        <form
          action="#"
          method="POST"
          class="login-form"
          aria-label="Login Form"
        >
          <div class="input-group">
            <label for="email">Email Address</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
              aria-required="true"
            />
          </div>

          <div class="input-group">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
              aria-required="true"
            />
          </div>

          <button type="submit" class="login-btn">Log In</button>

          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>
        </form>

        <div class="signup-link">
          <p>
            Don't have an account?
            <a href="singup.html">Create one</a>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
