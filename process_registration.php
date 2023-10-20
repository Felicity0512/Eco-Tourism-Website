<?php
    include './config/connection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname']; 
        $email = $_POST['email']; 
        $contactNumber = $_POST['contactNumber']; 
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];

        if (($Password === $ConfirmPassword) && (strlen($contactNumber)==9)) {
            echo "Password and confirm password match! <br/>";
            echo "Contact Number is the correct length!";
            
            // You can proceed with further actions here, such as saving the password to a database.
            $username = $fname.' '.$lname;
            $hashedPassword = md5($Password); // Hash the password                          /**************SOMEONE FIX THIS I HAVE NO IDEA WHAT IM DOING**************/

            // Perform the database query to add the user
            $stmt = $con->prepare("INSERT INTO users (username, level_access, fname, lname, email, contactNumber, Password) 
                                            VALUES (:username, 0, :fname, :lname, :email, :contactNumber, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':fname', $fname);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':contactNumber', $contactNumber);
            $stmt->bindParam(':password', $hashedPassword);

            if ($stmt->execute()) {
                echo "User added successfully!";
                // You may want to redirect or perform other actions here.

                header("location:login.php");
            } else {
                echo "Error adding user to the database.";
            }

        } else {
            echo "Password and confirm password do not match or Contact Number is invalid. Please try again.";
            // You may want to display an error message or take appropriate action.

            header("location:register.php");

        }

    }
    else
    {
        echo 'Invalid Request';
    }

?>