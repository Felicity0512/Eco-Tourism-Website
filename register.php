
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>                                             <!--///////// CHANGE THIS /////////-->
</head> 
<body>
    <header>

    </header>    
    <section>

        <div>
            <form action="process_registration.php" method="POST">
                
                <label for="fname">First Name:</label><input type="text" name="fname" required />
                <label for="lname">Last Name:</label><input type="text" name="lname" required />
                <br/>
                <label for="email">Email:</label><input type="text" name="email" required />
                <br/>
                <label for="contactNumber">Phone Number: +639</label><input type="text" name="contactNumber" minlength="9" maxlength="9" size="8" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                <br/>
                <label for="Password">Password:</label><input type="password" name="Password" required />
                <br/>
                <label for="ConfirmPassword">Confirm Password:</label><input type="password" name="ConfirmPassword" required />
                <br/>
                <br/>
                <input type="submit" value="Register" />
                <br/>
                <a href="login.php">Already have an account? Log-In here!</a>
            </form>
        </div>

    </section>
    <footer>

    </footer>
</body>
</html>