<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $file = $_FILES['img'];

    // Decleration for file upload 
    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    // File name croping and formating 
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = 'upload/' . $filename;
        move_uploaded_file($filetmp, $destinationfile);

        $q = "insert into `students`(`photo`) 
        VALUES ('$destinationfile')";
        $query = mysqli_query($con, $q);
    }
} 
else 
{
    echo "Button not clicked";
}
?>