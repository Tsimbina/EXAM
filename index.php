<?php
ini_set("display_errors","1");
require('inc/function.php');
$liste = afficher_Departement();
$manager = get_manager();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

            <?php if(!empty($manager)){ ?>
                    <?php foreach($manager as $man){ ?>
                <h2><?= $man['dept_name'];?></h2><p>...</p><h4><?= $man['first_name'];?>    <?= $man['last_name'];?></h4>
        <?php } }?>

    </main>
</body>
</html>