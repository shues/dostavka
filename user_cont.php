<!DOCTYPE html>
<html>
	<head>
		<title>Dostavka</title>
		<meta charset="utf-8">
        <link href="style/main.css" rel="stylesheet" >
	</head>
	<body>
		<div id="user_cont_box">
            <?php
                session_start();
                echo $_SESSION['user_role'];
                echo ' <b>';
                echo $_SESSION['user_name'];
                echo '</b>';
            ?>
            <a class="exit" href="exit.php" >  Выход</a>
        </div>
        <?php
            include($_SESSION['user_role'].'.php')
        ?>
        
	</body>
</html>