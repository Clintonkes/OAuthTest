<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="/OAuthTest/assets/css/style.css">
    </head>
    <body>
        <div class="form">
            <form action="/OAuthTest/Auth/index.php" class="activate" method="GET">
                <div>
                    <label for="email">email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="password">password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <input type="submit" name="login" value="login">
                </div>
            </form>
        </div>
    </body>
</html>O