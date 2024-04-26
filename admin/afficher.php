<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Action</th>
                <th>Avatar</th>
                <th>E-mail</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                $x = 0;
                $sql = $bdd->prepare("SELECT * FROM tuser");
                $sql->execute();
                $total = $sql->rowCount();
                if ($total > 0) {
                    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $data) {
                        $x++;
                        echo '<tr>
                                            <td>
                                                <a href="config/edit.php'  . $data['idUser'] . '">
                                                    <button class="btn btn-success btn-sm rounded-0 bg-green-700" type="button" data-toggle="tooltip" data-placement="top" 
                                                    title="" data-original-title="Edit"><i class="fa fa-edit"></i></button>
                                                </a> 
                                                <a href="index.php?cible=delete&id=' . $data['idUser'] . '"  onclick="return confirm(\'Are you sure you want to delete this item\')">
                                                    <button class="btn btn-danger btn-sm rounded-0 bg-red-700" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></button>
                                                </a>
                                            </td>
                                            <td>
                                                <img src="src/images/' . $data['photo'] . '" style="width:40px;height:40px;border-radius: 10px 5%;">
                                            </td>
                                            <td>' . $data['email'] . '</td>
                                            <td>' . $data['password'] . '</td>
                                        
                                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="4" style="color:red;">Aucun element!</td></tr>';
                }


                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>