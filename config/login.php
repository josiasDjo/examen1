
<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'checklog.php';

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
        }

        if ($total == 0) {
            $error = 'Valeurs de connexion incorrectes<br/>';
            // echo $error;
        } else {
            if (password_verify($password, $password_bd)) {
                $_SESSION['tuser'] = $data;
                header('Location: admin/admin.php');
                // echo '<script>window.location.href = "admin/admin.php";</script>';
                exit();
            } else {
                $error = 'Mot de passe incorrect<br/>';
                echo "$error";
            }
        }
    }
}
?>
