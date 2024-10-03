<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna{
            background-color: silver;
        }
    </style>
</head>
<body>

<table cellpaddig="10" cellspacing="0" border="1">
     <?php 
    //for ($i=1; $i<=3; $i++){
        //echo "<tr>";
        //for($j=1; $j<=5; $j++){
        //echo "<td>$i,$j</td>";
        //}
        //echo "</tr>";
    //} //jika nilai i 1 dan < tidak menggunakan = maka pengulangan hanya 4x
    ?>
    <!-- ATAU -->
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if($i % 2 == 1) : ?>
        <tr class="warna">
        <?php else : ?>
        <tr>
        <?php endif; ?>
            <?php for($j=1; $j <= 5; $j++) : ?>
                <td><?= "$i , $j" ?></td> 
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    <!-- <tr>
    <td>1,1</td>
    <td>1,2</td>
    <td>1,3</td>
    <td>1,4</td>
    <td>1,5</td>
</tr> -->
</table>
    
</body>
</html>