<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel=stylesheet>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
</head>
<body>
    <?php 
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conbd.php';
        require_once ("../config/addUser.php"); 
        // require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'edit.php';
        require_once ("../admin/checklog.php");
    ?>


    <div class="container-admin">
        <?php
            require_once ("headerAdmin.php");  
        ?>

        <div class="sub_container_admin">
            <div class="espace_admin">
                <h3>Ajout Utilisateurs </h3>
                <div class="search_opt">
                    <form action="" method="post">
                        <input type="search" name="rechercher_q" class="recherche_pers">
                        <input type="submit" value="Rechercher" name="submit" class="evoyer_req">
                    </form>
                </div>
                <div class="addUser">
                    <form action="" method="post">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="" placeholder="Entrer votre email">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" placeholder="Entrer votre mot de passe">
                        <label for="image">Avatar</label>
                        <input type="file" name="image" id="image">
                        <input type="submit" value="Ajouter" name="ajouter" class="btn_envoyer_admin">
                    </form>
                </div>
                <?php
                    if (isset($_POST['rechercher_q'])) {
                        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'search.php'; 
                        // require_once dirname (__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'afficher.php' ;
                    } else {
                        require_once dirname (__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'afficher.php' ;
                        // require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'search.php'; 
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>