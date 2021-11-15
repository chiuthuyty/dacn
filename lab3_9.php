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
        function hinhChuNhat($r,$d){
            for($i=1;$i<=$r;$i++)
            {
                for($j=1;$j<=$d;$j++)
                {
                    if($i==1 || $j==1 || $i==$r || $j==$d)
                        echo "*";
                    else
                        echo '&nbsp&nbsp';
                }
                echo "<br>";
            }
           
        }
        hinhChuNhat(4,10);
        ?>
</body>
</html>