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
    function tongSo()
    {
        $S = "4m6fsdmvv";
        $len=strlen($S);
        $i=0;
        $so=0;
        $tong=0;
        while($i<$len)
        {
            if($S[$i]>='0'&& $S[$i]<='9')
                $so = $so *10 + ($S[$i] - '0');
            else
            {
                $tong = $tong +$so;
                $so = 0;
            }
            $i++;
        }
        echo "tong so trong chuoi : $tong";
    }
    tongSo();
    ?>

</body>
</html>