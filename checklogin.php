<?php
include './config/connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve the user's data from the database
    $stmt = $con->prepare("SELECT username, level_access, email, Password FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        // Verify the entered password with the hashed password in the database
        if (md5($password) == $row['Password']) {                     /**************SOMEONE FIX THIS I HAVE NO IDEA WHAT IM DOING**************/
            session_start();
            $username = $row['username'];
            $useremail = $row['email'];
            $uAccess = $row['level_access'];

            $_SESSION['user'] = $username;
            $_SESSION['userEmail']= $useremail;
            $_SESSION['userAccessPermissions'] = $uAccess;
            header('Location: index.php'); // Redirect to a dashboard or a protected page
        } else {
            echo "Incorrect password. Please try again.<br/>";
            $hashedPassword = md5($password);
            echo $password.'<br/>'.$hashedPassword.'<br/>'.$row['Password'];
        }
    } else {
        echo "User not found. Please register or check your username.";
    }
} else {
    echo "Invalid request.";
}
?>
