<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMRS Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('../smrs/pics/bg_undip.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
        }
        .login-form {
            padding: 20px;
        }
        .logo-container {
            background-color: #F8AAAA;
            padding: 30px;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #F8AAAA;
            border: none;
            color: black;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>LOGIN</h2>
            <form action="dashboardmahasiswa.php" method="post">
                <input type="text" name="username" placeholder="Email/Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="LOGIN">
            </form>
        </div>
        <div class="logo-container">
            <img src="../smrs/pics/book.png" width="50" height="50"/>
            <h2>SMRS</h2>
        </div>
    </div>
</body>
</html>