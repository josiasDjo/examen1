<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'headerAdmin.php'; ?>
    <div class="sub_container_admin">
        <div class="espace_admin">
            <h3>Ajout Utilisateurs </h3>
            <div class="search_opt">
                <form action="" method="post">
                    <input type="search" name="rechercher_q" class="recherche_pers">
                    <input type="submit" value="Rechercher" name="submit" class="evoyer_req">
                </form>
            </div>

            <?php
            // if (isset($_POST['rechercher_q'])) {
                // require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'search.php';
                // require_once dirname (__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'afficher.php' ;
            // } 
            // else {
            // require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'afficher.php';
                require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'search.php'; 
            // }
            ?>
        </div>
</body>

</html>