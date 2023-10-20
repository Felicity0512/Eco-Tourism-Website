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
            <form action="checklogin.php" method="POST">
                <label for="email">Email:</label><input type="text" name="email" required />
                <br/>
                <label for="Password">Password:</label><input type="password" name="password" required />
                <br/>
                <br/>
                <input type="submit" value="Log-In" />
                <br/>
                <a href="register.php">Don't have an account? Create one here!</a>
            </form>
        </div>

    </section>
    <footer>

    </footer>
</body>
</html>