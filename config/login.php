<?php
// require_once ("../admin/index.php");
// require_once ("../admin/checklog.php");
// session_start();

// $rootPath = $_SERVER['DOCUMENT_ROOT'];
// require_once($_SERVER["DOCUMENT_ROOT"] ."/config/conbd.php");
// require ("../config/conbd.php");

if (isset($_POST['login'])) {
    $error = '';
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = 'Email & Password';
        echo $error;
    } else {
        $email = ($_POST['email']);
        $password = ($_POST['password']);
        $sql = $bdd->prepare("SELECT * FROM tuser WHERE email=?");
        $sql->execute(array($email));
        $total = $sql->rowCount();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        $password_bd = "";
        foreach ($result as $data) {
            $password_bd = $data['password'];
            // echo "$password_bd";
        }

        if ($total == 0) {
            $error = 'Valeurs de connexion incorrectes<br/>';
            // echo $error;
        } else {
            if (password_verify($password, $password_bd)) {
            // if ($password == $password_bd) {  
                // echo "psw Utilisateur : " . $password . "<br/>" . "Pwd_bd : " . $password_bd . "<br/>";
                $_SESSION['tuser'] = $data;
                header('location: examen/admin/index.php');
                echo "PAGE ADMINISTRATOR, MODIFER";
                // exit();
            } else {
                $error = 'Mot de passe incorrect<br/>';
                // echo "psw Utilisateur : " . $password . "<br/>" . "Pwd_bd : " . $password_bd . "<br/>";
                echo "$error";
            }
        }
    }
}
exit();
?>
