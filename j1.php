<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color:#c5c5c5">
    <?php
    $name=12.2;
    echo gettype($name);
    echo "is : ",is_integer($name);
    if (!is_integer($name)) {
        $name = (integer)$name;
        echo '<br>',gettype($name),'<hr>';
    }
    $num = rand(1,1000000000000);
    echo $num,'<br>';
    if(($num % 2 )== 0)
    {
        echo '<span style= color:red;> EVEN PHP</span>';
    }else{
        echo '<span style= "color:green;"> ODD PHP</span>';

    }
    // $user{
    //     "name"=>"joe",
    //     "family"=>"Doe",
    //     "age"=>12
    // }
    // echo $user[1];
?>
<br>
<span style= color:<?=!($num% 2 )?"red":"green"?>;>is <?=!($num% 2 )?"EVEN":"ODD"?> PHP</span>
</body>
</html>

