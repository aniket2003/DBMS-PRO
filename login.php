<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <link href="css/signup.css" rel="stylesheet">
    <link rel="stylesheet" href="check.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <style>
        .form-control{
    width: 43%;
}

.signupdetails{
  position: relative;
    left: auto;
    padding-left: 25px;
    left: 459px;
    top: 196px;
    border: solid violet;
    width: 600px;
    color: floralwhite;

}

.message{
    position: relative;
}


.form-outline{
    position: relative;
}
    </style>
    <head>
<body>
    <header class="head">
        <a href="#" class="logo">MQuiz</a>
        <nav>
            <ul>
                <li><a href="check.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    

    <!-- <div class="congrats">
        <h2>Congrat's You have Successfully Registered At MQuiz.</h2>
    </div> -->

<?php
include('conn.php');

$userid = $_POST["userid"];
$email = $_POST["email"];
$pass = $_POST["password"];


$sql = "select * from user where email_id= '$email' and password='$pass' ";


$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['userid']=$result['userid'];

if($userid[0]=='s' || $userid[0]=='S'){


    header("Location: studentlog.html");

     

}else if($userid[0]=='p' || $userid[0]=='P'){

    header("Location: papersetterlog.html");

}

}
else
{
header('location:login.html');
}






// echo '<div class="message">
// <h2>You can now  <a href="login.html">Login</a> to your account </h2>
// </div>';



// echo '<tr><td>'. $name .'</td><td>'. $add .'</td><td>'. $city .'</td></tr>';



    ?>
    




</body>



</html>