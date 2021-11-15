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
    function ktChuoiDoiXung($x){
    $i=0;
    $j=strlen($x)-1;
    while($i<=strlen($x)/2)
    {
        if($x[$i]!=$x[$j])
        return 0;
        $i++;
        $j--;
    }
    return 1;
}
    if(ktChuoiDoiXung('thht')==1)
        echo"doi xung</br>";
    else
        echo"bat doi xung</br>";

    ?>
</body>
</html>