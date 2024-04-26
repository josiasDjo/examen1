<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="dist/output.css" rel="stylesheet">
</head>
<body>  
    <?php 
        // require_once('examen/config/conbd.php');
        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'examen' . DIRECTORY_SEPARATOR . 'config' .DIRECTORY_SEPARATOR . 'conbd.php';
        // $loginCheck = "dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' .DIRECTORY_SEPARATOR . 'conbd.php'";
        require_once dirname (__DIR__) . DIRECTORY_SEPARATOR . 'examen' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'login.php';
        // require ("config/login.php");
        // require_once('/admin/checklog.php');
    ?>
    <div class="container">
        <h1>Connexion</h1>
        <form action="" method="post">
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required> 
            <input type="submit" value="Login" name="login" class="btnSend">
        </form>
    </div>

</body>
</html>