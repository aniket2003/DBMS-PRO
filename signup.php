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
    border: solid violet;
    width: 600px;
    color: floralwhite;
    top: 382px;
}

.message{
    position: relative;
}


.form-outline{
    position: relative;
}

.congrats{ 
    top: 48px;
}
    </style>
    <head>
<body>
    <header class="head">
        <a href="check.html" class="logo">MQuiz</a>
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

$fname = $_POST["fname"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$email = $_POST["email"];
$user_type = $_POST["usertype"];
$userid;
//$int = 100;

if($user_type[0] == 's' || $user_type[0] == 'S'){

    $finds = "SELECT MAX(studentincid) FROM studentincr";
   

   
  //  echo $ints;
   // $userid = 101;
  //  $userid = 's'.($ints++);
  //  $insrtid = $ints++;
    $insert = "INSERT INTO student( password, email_id, u_id)VALUES('$password','$email','$userid')";
    $inserts = "INSERT INTO studentincr( studentincid )VALUES('$userid')";
$results = mysqli_query($conn , $insert) or die(mysqli_error($conn));
$res = mysqli_query($conn , $inserts) or die(mysqli_error($conn));
    
    echo '<div class="signupdetails">
    <h2>Your UserID: '.$userid.' </h2>
<h2>You can now  <a href="login.html">Login</a> to your account </h2>
</div>';

}else if($user_type[0] == 'p' || $user_type[0] == 'P'){
    $userid = 'p'.($int++);

    $insert = "INSERT INTO paper_setter( password, email_id, u_id)VALUES('$password','$email','$userid')";

$results = mysqli_query($conn , $insert) or die(mysqli_error($conn));

    echo '<div class="signupdetails">
<h2>Your UserID: '.$userid.' </h2>
<h2>You can now  <a href="login.html">Login</a> to your account </h2>
</div>';

}



$insert = "INSERT INTO user(F_N, M_N, L_N, password, email_id, user_type, u_id)VALUES('$fname','$mname','$lname','$password','$email','$user_type','$userid')";

$results = mysqli_query($conn , $insert) or die(mysqli_error($conn));



echo '<div class="congrats">
<h2>Congrats '.$fname.' '.$mname.' '.$lname.' '.'you have Successfully Registered At MQuiz as a '.$user_type.'</h2></div>';




// echo '<div class="message">
// <h2>You can now  <a href="login.html">Login</a> to your account </h2>
// </div>';



// echo '<tr><td>'. $name .'</td><td>'. $add .'</td><td>'. $city .'</td></tr>';



    ?>
    




</body>



</html>