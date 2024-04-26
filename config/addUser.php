
<?php

if (isset($_POST['ajouter'])) {
    $error = '';
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = 'Entrez Email & Password svp';
    } else {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $photo_name = 'avatar.png'; // Valeur par défaut
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $photo = $_FILES['image']['name'];
            $photo_tmp = $_FILES['image']['tmp_name'];
            $target_directory = "src/images/";
            $ext = pathinfo($photo, PATHINFO_EXTENSION);

            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'JPG') {
                $error = 'Uploadez le fichier jpg, png, gif uniquement';
            } else {
                $photo_name = 'avatar-' . rand() . '.' . $ext;
                move_uploaded_file($photo_tmp, $target_directory . $photo_name);
            }
        }

        try {
            $sql = $bdd->prepare("INSERT INTO tuser (email, password, photo) VALUES (?, ?, ?)");
            $sql->execute(array($email, $password, $photo_name));
        } catch (Exception $e) {
            $error = $e->getMessage();
            echo 'Une erreur est survenue : ' . $error;
        }
        header("location: index.php?cible=addUser");
        exit();
    }
}

?>
```