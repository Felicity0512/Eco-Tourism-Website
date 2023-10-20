<?php
session_start(); //starts the session

if($_SESSION['user']??false){ //checks if user is logged in
    $user = $_SESSION['user']; //Cache user variables and other stuff
    $uEmail=$_SESSION['userEmail'];
    $uAccess =$_SESSION['userAccessPermissions'];
    $loggedin = true;
}
else{
    $loggedin = false;
//  header("location:login.php"); // redirects if user is not logged in
}

?>
                                    <!-- THIS IS ONLY TEMPORARILY TO TEST IF SESSION LOGIN AND REGISTRATION IS WORKING PROPERLY -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($loggedin)
        {                                   //PERMISSION LEVEL 0 = REGULAR USER, LEVEL 1 = STAFF, LEVEL 2 = ADMIN
            echo '<a href="logout.php">'.$user.' - '.$uEmail.'&emsp;PermissionLevel:'.$uAccess.'<br/>'.'Logout</a>';
            
        // echo $user.'<br/>'.$uEmail;
        }
        else
        {
            echo 'WELCOME TO THE INDEX PAGE!!!';
            echo '<br/>';
            echo '<a href="login.php">LOG-IN RIGHT THE FUCK NOW!</a>';
        }
        
    ?>
</body>
</html>