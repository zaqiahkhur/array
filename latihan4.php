<?php 
$angka = [23,56,8,90,34,1,43,987];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LATIHAN PENGULANGAN</title>
    <style>
        div{
            width: 50px;
            height: 50px;
            background-color: cyan;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        </style>
</head>
<body>
  <?php for( $i=0; $i< 7; $i++) {  ?>
    <div><?php echo $angka[$i]; ?></div>
 <?php } ?>
  
 
</body>
</html>