// Login up function start

// When user click on login button at start
function onLogin() {
    document.querySelector('.signup-box').classList.remove("login-box-visible");
    document.querySelector('.login-box').classList.add("login-box-visible");
    document.querySelector('.btn-login').style.visibility = 'hidden';
}
// When user click on cross mark
function hideWithoutLogin() {
    document.querySelector('.login-box').classList.remove("login-box-visible");
    document.querySelector('.btn-login').style.visibility = 'visible';
}
// When user click on login button after filling details
function hideAfterLogin() {
    document.querySelector('.login-box').classList.remove("login-box-visible");
    document.querySelector('.btn-login').style.visibility = 'hidden';
}
// Login up function end


// Sign up function start

// When user click on Register button at login page
function onSignup() {
    document.querySelector('.signup-box').classList.add("login-box-visible");
    document.querySelector('.login-box').classList.remove("login-box-visible");
    document.querySelector('.btn-login').style.visibility = 'hidden';
}

// When user click on cross mark at sign up page
function hideWithoutSignup() {
    document.querySelector('.signup-box').classList.remove("login-box-visible");
    document.querySelector('.btn-login').style.visibility = 'visible';
}

// When user click on create account button at signup page
function hideAfterSignup() {
    document.querySelector('.signup-box').classList.remove("login-box-visible");
    document.querySelector('.btn-login').style.visibility = 'hidden';
}
// Sign up function end