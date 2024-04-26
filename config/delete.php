<?php
    require_once dirname (__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'conbd.php';
    if(isset($_GET['idUser'])) {
        $id=$_GET['idUser'];
        $sql = $bdd->prepare("DELETE FROM tuser WHERE idUser=?");
        $sql->execute(array($id));
        header("location: admin/index.php?cible=adduser");
        exit();
    }else{
	    header("location: admin/logout.php");
        exit();
	}
?>
