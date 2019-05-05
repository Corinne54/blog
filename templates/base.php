<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Cantarell" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
<?php
require '../templates/header.php';
?>
<div id="content">
    <?= $content ?>
</div>
<?php
require '../templates/footer.php';
?>
</body>
</html>