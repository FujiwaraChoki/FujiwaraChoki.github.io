<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/login.css">
    <title>Login Form</title>
</head>
<body>
    <p>
    <form id="loginForm" action="/PHP/login.php" method="post">
        <label for="username" id="usernameLabel"><span class="textFor">Username:</span></label><br>
        <input type="text" id="username" name="usernameInput"><br>
        <label for="pwd" id="passwordLabel"><span class="textFor">Password:</span></label><br>
        <input type="password" id="password" name="passwordInput">
    </form>
    </p>
 
    <input type="button" onclick="myFunction()" value="Login" id="submitButton">

    <script src="/JavaScript/main.js" async></script>

</body>

</html>