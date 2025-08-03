<?php
$angka = [3, 4, 5, 10, 23, 20];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            background-color: salmon;
            padding: 20px;
            width: 20px;
            height: 20px;
            text-align: center;
            float: left;
            margin: 5px;
        }

        .clear {
            clear: both
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div>
            <?= $angka[$i]; ?>
        </div>
    <?php } ?>


    <p>asdasdasdasd</p>

    <?php foreach ($angka as $a) : ?>
        <div><?= $a ?></div>
    <?php endforeach ?>
</body>

</html>