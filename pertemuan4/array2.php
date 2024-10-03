<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            line-height: 30px;
            background-color: salmon;
            float: left;
            text-align: center;
            margin: 3px;
        }
    </style>
</head>
<body>
    <?php 
    $array =[
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
    ];
    ?>
    <?php foreach($array as $arr): ?>
        <?php foreach($arr as $a): ?>
            <div class="kotak"><?= $a ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>