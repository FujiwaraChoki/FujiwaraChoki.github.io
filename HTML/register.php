<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/register.css">
    <title>Register</title>
</head>
<body>
    <p>
        <form id="loginForm" action="../registerMind.php" method="post">
            <label for="username" id="usernameLabelRegister"><span class="textFor">Username:</span></label><br>
            <input type="text" id="usernameRegister" name="usernameInput"><br>
            <label for="pwd" id="passwordLabelRegister"><span class="textFor">Password:</span></label><br>
            <input type="password" id="passwordRegister" name="passwordInput">

            <input type="submit" value="Register" id="registerButton">
        </form>
        </p>

</body>

</html>