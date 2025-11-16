<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 2px black solid;
            padding: 5px;
        }
    </style>

</head>

<body>
    <?php
    include("config_pdo.php");
    echo $_POST['user_name'];
    if (!isset($_POST['user_name'])) {
        echo "You can't register right now! please contact support";
        header("location:register.php?erorr=1");
    } else {
        $user = $_POST['user_name'];
        $pass = $_POST['password'];
        $phone = $_POST['phone'];

        $stmt = $pdo->prepare("INSERT INTO `users` (`id`, `user_name`, `password`, `phone`) VALUES (NULL, :U, :P, :PH)");
        $stmt->execute([
            'U' => $user,
            'P' => $password
        ]);

        if ($conn->query($sql)) {
            echo "Registered successfuly";
        } else {
            echo "You can't register right now! please contact support";
            header("location:2.php?erorr=1");
        }
    }


    include("config_pdo.php");

    echo $_POST['user_name'];

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `user_name` = :U");
    $stmt->execute(["U" => $user, "P" => $password]);
    if ($r1 = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "username : {$r1['user_name']}<br>";
        echo "password : {$r1['password']}<br>";
    } else {
        echo "Nothing Found";
        header("location:2.php?error=1", true, 303);
    }



    ?>
</body>

</html>