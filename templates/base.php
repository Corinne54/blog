<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link href="../public/css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
<?php
require '../templates/header.php';
?>
<div id="content">
    <?= $content ?>
</div>

</body>
</html>