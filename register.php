<?php
include 'connect.php';

if (isset($_POST['registersubmit'])){
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
	$file =  $_FILES['img'];
    
	// Decleration for file upload 
    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    // File name croping and formating 
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

	if (in_array($filecheck, $fileextstored)) {
        $destinationfile = 'upload/'.$mobile . $filename;
        move_uploaded_file($filetmp, $destinationfile);
		
		    $sql = "insert into `students` (`fname`, `lname`, `email`, `mobile`, `address`, `password`, `photo`)
        values('$fname','$lname','$email','$mobile','$address','$password','$destinationfile')";
   // }

    // $password_secure=password_hash($password,PASSWORD_BCRYPT);
    

   // $sql = "insert into `students` (`fname`, `lname`, `email`, `mobile`, `address`, `password`, `photo`)
    //    values('$fname','$lname','$email','$mobile','$address','$password','$newfilename')";


    $emailquery = " select * from `students` where email='$email'";
    // echo $emailquery;

    $mobilequery = " select * from `students` where mobile='$mobile'";
    // echo $mobilequery;

    $queryemail = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($queryemail);
    $querymobile = mysqli_query($con, $emailquery);
    $mobilecount = mysqli_num_rows($querymobile);
    if ($emailcount > 0) {
        echo '<script>alert("Email already exist !")</script>';
    } elseif ($mobilecount > 0) {
        echo '<script>alert("Mobile number already exist !")</script>';
    } else {
        $result = mysqli_query($con, $sql);
        if ($result) {
            // header('location:home.php');
            echo '<script type="text/javascript">onLogin()</script>';
            echo '<script>alert("Account Created Succesfully👍\nPlease login😍")</script>';
            // exit;
        } else {
            echo '<script>alert(" Sorry failed please try agian!!!")</script>';
            // die(mysqli_error($con));
        }
	  }
    }
}
?>