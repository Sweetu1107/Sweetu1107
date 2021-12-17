<?php
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    $m = isset($_POST['month'])?$_POST['month']:0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contener">
        <div class="row">
            <form action="result.php" method="post">
                <select name="month">
                    <option <?=($m==1)? "selected":"";?>>January</option>
                    <option <?=($m==2)?"selected":"";?>>Fabruary</option>
                    <option <?=($m==3)?"selected":"";?>>March</option>
                    <option <?=($m==4)?"selected":"";?>>April</option>
                    <option <?=($m==5)?"selected":"";?>>May</option>
                    <option <?=($m==6)?"selected":"";?>>June</option>
                    <option <?=($m==7)?"selected":"";?>>Julay</option>
                    <option <?=($m==8)?"selected":"";?>>August</option>
                    <option <?=($m==9)?"selected":"";?>>Sptamber</option>
                    <option <?=($m==10)?"selected":"";?>>Octomber</option>
                    <option <?=($m==11)?"selected":"";?>>Navember</option>
                    <option <?=($m==12)?"selected":"";?>>Disember</option>
                    
                </select>
            </form>
        </div>
    </div>
</body>
</html>                       