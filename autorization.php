<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="style/main.css" rel="stylesheet" >
        <title>welcome</title>
    </head>
    <body>
        <pre>
        <?php
        		//session_start();
            //print_r($_SESSION);
        ?>
        </pre>
        <form action="autorization_model.php" method="get">
            <label for="login_str">
                login
            </label>
            <input type="text" id="login_str" name="login_str">
            <br>
            <label for="password_str">
                password
            </label>
            <input type="password" id="password_str" name="password_str">
            <br>
            <input type="submit" id="submit_button">
        </form>
    </body>
</html>
