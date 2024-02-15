<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GharJagga</title>
    <link rel="stylesheet" href="./public/assests/css/register_login.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
            <form action="./controller/login.php" method="post" autocomplete="on">
                <h2>Login</h2>

                <div class="input_box">
                    <input type="email" placeholder="Enter your email" name="email" />
                    <i class="uil uil-envelope-alt email"></i>
                </div>
                <div class="input_box">
                    <input type="password" placeholder="Enter your password" name="password" />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>

                <div class="option_field">
                    <span class="checkbox">
                        <input type="checkbox" id="check" />
                        <label for="check">Remember me</label>
                    </span>
                    <a href="#" class="forgot_pw">Forgot password?</a>
                </div>

                <button class="button">Login</button>

                <div class="login_signup">
                    Not a member?
                    <a href="" id="signup">Register</a>
                </div>
            </form>
        </div>
        <div class="form signup_form">
            <form action="./controller/register.php" method="post" autocomplete="on">
                <h2>Register</h2>
                <div class="input_box">
                    <input type="name" placeholder="Enter your fullname" name="full_name" />
                    <i class="fa fa-user icon" aria-hidden="true"></i>
                </div>

                <div class="input_box">
                    <input type="email" placeholder="Enter your email" name="email" />
                    <i class="uil uil-envelope-alt email"></i>
                </div>
                <div class="input_box">
                    <input type="tel" placeholder="Enter your phone number" pattern="[0-9]{10}" name="phone_no">
                    <i class="fa fa-phone icon" aria-hidden="true"></i>
                </div>
                <div class="input_box">
                    <input type="password" placeholder="Create password" name="password" />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box">
                    <input type="password" placeholder="Confirm password" name="re-password" />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box">
                    <input type="name" placeholder="Enter your address" name="address" />
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
                <div class="input_box selection">
                    <label id="acc_type">Account Type</label> &nbsp; &nbsp;
                    <select name="acc_type" id="acc_type">
                        <option value="none" selected disabled hidden>Select an Option</option>
                        <option value="Owner" name="acc_type">Owner</option>
                        <option value="Tenant" name="acc_type">Tenant</option>
                    </select>

                </div>


                <button class="button">Register</button>

                <div class="login_signup">
                    Already a member?
                    <a href="" id="login">Login</a>
                </div>
            </form>
        </div>
    </div>
    <script src="./public/assests/js/script.js"></script>
</body>

</html>