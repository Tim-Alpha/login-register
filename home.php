<?php 

include 'login.php';
include 'register.php';

include 'connect.php';

// // Connecting to session and fetch data with the help of...
// $email_verify = $_SESSION['email'];

// $sql = "Select * from `students` where email='$email_verify'";
// $result = mysqli_query($con, $sql);
// $row = mysqli_fetch_assoc($result);
// $fname = $row['fname'];
// $lname = $row['lname'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="icon" href="images/favicon-icon.png">
    <link rel="stylesheet" href="style.css">
    <title>MTH.COM</title>
</head>

<body>
    <header class="flex">
        <img class=" mth-img" src="images/MTHlogo.png"></img>
        <a class="mth-h1" href="home.php"><strong>Mock Test Hunter</strong></a>
        <div class="login">
            <button class="btn-login" onclick="onLogin()">login <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
        </div>

    </header>
    <section>
        <div class="heading">
            <h1>MOCK TEST SERIES FOR ALL EXAMS</h1>
        </div>
    </section>

        
        <!-- Login pop-up window start -->
        <div class="login-box">
            <div class="signup-header">
                <h2>sign-up here</h2><span class="lcancel" onclick="hideWithoutLogin()"><strong>&#10005;</strong></span>
            </div>
            <div class="form-div">
                <form class="form" method="POST">
                    <div class="field">
                        <label class=" form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"
                            autocomplete="off">
                    </div>
                    <div class="field">
                        <label class=" form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter your password" autocomplete="off">
                    </div>
                    <button type="submit"  onclick="hideAfterLogin()" name="loginsubmit" class="btn-login-pop">LOGIN<i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                    <p class="reg-login">Create a new account.
                    <a id="register" onclick="onSignup()">Register</a></p>
                </form>
            </div>
        </div>

        <!-- Login pop-up window close -->

        <!-- signup pop-up window start -->

        <div class="signup-box">
            <div class="signup-header">
                <h2>sign-up here</h2><span class="lcancel" onclick="hideWithoutSignup()"><strong>&#10005;</strong></span>
            </div>
            <div class="container">
                <form class="form" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">First name</label>
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter your first name"
                            autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last name</label>
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter your last name"
                            autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"
                            autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter your number"
                            autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address"
                            autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter your password" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Profile photo</label>
                        <input type="file" name="img" class="form-control" id="photo" autocomplete="off">
                    </div>
                    <div>
                        <span class="reg-signup">Already have an account<a onclick="onLogin()" class="register">Login</a></span>
                        <button onclick="hideAfterSignup()" type="submit" name="registersubmit" class="sign-up-btn">CREATE ACCOUNT</button>
                    </div>
                </form>
            </div>
        </div>
    
        <!-- signup pop-up window close -->

      <!-- First section start -->
    <section class="display-1">
        <div class="card-1">
            <div class="box-1">
                <p class="ctitle">SSC</p>
                <div class="card-body">
                    <span class="course">CGL</span>
                    <span class="course">CHSL</span>
                    <span class="course">MTS</span>
                </div>
                <div class="card-btn">
                    <button class="card-click-1 btn-click">Click <i
                            class="fa-sharp fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="box-2">
                <p class="ctitle">HSSC</p>
                <div class="card-body">
                    <span class="course">CET-C-group</span>
                    <span class="course">CET-D-group</span>
                    <span class="course">HR Police</span>
                </div>
                <div class="card-btn">
                    <button class="card-click-2 btn-click">Click <i
                            class="fa-sharp fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Second section start -->
    <h3 class="topicwise">Subject wise mock test</h3>
    <section display-2>
        <div class="card-2">
            <div class="box">
                <p class="ctitle font">math</p>
                <div class="card-body">
                    <span class="course">15-Mock Test</span>
                </div>
                <div class="card-btn">
                    <button class="card-click-3 btn-click">Click <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="box">
                <p class="ctitle font">reasoning</p>
                <div class="card-body">
                    <span class="course">15-Mock Test</span>
                </div>
                <div class="card-btn">
                    <button class="card-click-3 btn-click">Click <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="box">
                <p class="ctitle font">english</p>
                <div class="card-body">
                    <span class="course">15-Mock Test</span>
                </div>
                <div class="card-btn">
                    <button class="card-click-3 btn-click">Click <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="box">
                <p class="ctitle font">GK</p>
                <div class="card-body">
                    <span class="course">15-Mock Test</span>
                </div>
                <div class="card-btn">
                    <button class="card-click-3 btn-click">Click <i class="fa-sharp fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="social-link">
            <div><p class="a-link"><a class="s-link" href="https://www.instagram.com/ruhi_chauchan_123/" target="_blank"><i class="fa-brands fa-square-instagram"></i>instagram</a></p></div>
            <div><p class="a-link"><a class="s-link" href="https://www.instagram.com/ruhi_chauchan_123/" target="_blank"><i class="fa-brands fa-facebook"></i>facebook</a></p></div>
            <div><p class="a-link"><a class="s-link" href="https://www.instagram.com/ruhi_chauchan_123/" target="_blank"><i class="fa-brands fa-youtube"></i>youtube</a></p></div>
            <div><p class="a-link"><a class="s-link" href="https://www.instagram.com/ruhi_chauchan_123/" target="_blank"><i class="fa-brands fa-square-whatsapp"></i>whatsapp</a></p></div>
        </div>
        <p class="copyright">&copy; copyright 2022 all right reserved || Designed by <a class="owner" href="https://github.com/KinhaNisha/" target="_blank">Nisha Kinha</a></p>
    </footer><script src="script.js"></script>

</body>

</html>