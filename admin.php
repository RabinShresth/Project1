<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_admin.css">
</head>

<body>
    <div class="center">
        <h1>Admin Login</h1>
        <form action="php/admin-login-page.php" method="get">
            <div class="txt_field">
                <input type="text" name="Username" required><br>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="Password" required><br>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>