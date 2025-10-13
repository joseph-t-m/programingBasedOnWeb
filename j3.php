<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="color:whitesmoke; background-color:black;">
    <?php
    echo "<h1>Colors</h1> ";

    $colors = array(
        "Red",
        "green",
        "blue",
        "yellow",
        "aqua",
        "magenta"
    );
    shuffle($colors);
    foreach ($colors as $key => $value) {
        echo "<span style='color:" . $value . "'>PHP</span><br>";
    }

    echo "<hr> <h1>ASORT  </h1> ";

    $asrt = array(
        "A" => 10,
        "B" => 13,
        "C" => 9,
    );
    asort($asrt);
    print_r($asrt);

    echo "<hr><h1> SORT</h1>";

    $srt = array(
        "A" => 9,
        "B" => 7,
        "C" => 1,
    );
    sort($srt);
    print_r($srt);
    foreach ($srt as $key => $value) {
        echo "<span>" . $key . " " . $value . "</span><br>";
    }
    echo "<hr><h1> EXC: LOREM IPSUM </h1>";
    $Subject = "lorem, ipsum.";

    $Context = "lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam provident hic magni aut, iure ullam commodi possimus explicabo a. Accusantium, et ducimus? Beatae eos nulla exercitationem laboriosam quasi! Et, perferendis.";

    $Context2 = "nisi consequuntur harum temporibus nulla, nobis atque aspernatur. Tenetur eveniet, ipsa dolorem quasi ratione cum dolor ad vero natus harum quibusdam labore velit amet praesentium. Voluptatibus, laboriosam ea? Laboriosam, architecto.";


    $Subject = ucwords($Subject);
    $Context = ucfirst($Context);
    $Context2 = substr($Context2, 0, 50);

    echo "<h1>" . $Subject . "</h1>";
    echo "<p>" . $Context . "</p>";
    if (strlen($Context2) == 50) {
        $Context2 .= "...";
    }
    echo "<p>" . $Context2 . "</p>";

    ?>
</body>

</html>