<?php
if (isset($_POST['register'])) {
    include('../db.php');
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $phonenum = $_POST['phonenum'];
    $membership = $_POST['membership'];

    $emmailCheck = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    $phonenumCheck = mysqli_query($con, "SELECT * FROM users WHERE phonenum = '$phonenum'") or die(mysqli_error($con));

    if (mysqli_num_rows($emmailCheck) == 1 and mysqli_num_rows($phonenumCheck) == 1) 
    {
        echo '<script>alert("Email Already Taken!"); alert("Phone Mumber Already Taken!"); window.location = "../page/registerPage.php"</script>';
    } 
    else if (mysqli_num_rows($emmailCheck) == 1) 
    {
        echo '<script>alert("Email Already Taken!"); window.location = "../page/registerPage.php"</script>';
    } 
    else if (mysqli_num_rows($phonenumCheck) == 1) 
    {
        echo '<script>alert("Phone Number Already Taken!"); window.location = "../page/registerPage.php"</script>';
    } 
    else 
    {
        $query = mysqli_query(
            $con,
            "INSERT INTO users
                    (email, password, name, phonenum, membership) 
                    VALUES 
                    ('$email', '$password', '$name', '$phonenum', '$membership')"
        )
            or die(mysqli_error($con));

        if ($query) {
            echo
            '<script>alert("Register Success"); window.location = "../index.php"</script>';
        } else {
            echo
            '<script>alert("Register Failed");</script>';
        }
    }
} else {
    echo
    '<script>window.history.back()</script>';
}