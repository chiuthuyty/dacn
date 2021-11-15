<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sumSoTrongChuoi(){
    $chuoi = "Chiu123Thuy456Ty";
    $tongSo=0;
    preg_match_all('!\d+!',$chuoi,$matches);
    for($i=0;$i<(count($matches,1)-1);$i++){
            $tongSo+=(int)$matches[0][$i];
    }
    echo $tongSo;
    }
    echo" tong so trong chuoi :"; sumSoTrongChuoi();
   ?>

</body>
</html>