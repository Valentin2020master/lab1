<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>RandomPassword</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="style.css">
</head>
<body>
<?php
if (isset($_POST['lenght']) && isset($_POST['count'])) {
    $lenght = $_POST['lenght'];
    $count = $_POST['count'];

}
?>
<div class="container">
    <p>
        Lungimea parolei: <?php if (isset($_POST['lenght'])) echo $_POST['lenght']; else  echo 'Nu este introdusa lungimea parolei' ?>
    </p>
    <p>
        Numarul de parole generate: <?php if (isset($_POST['count'])) echo $_POST['count']; else echo 'Nu este introdus numarul de parole pentru generare' ?>
    </p>
    <p>Parolele generate</p>
    <textarea name="text" rows="20" cols="200" autofocus>
        <?php

        function randomPassword($lenght, $count, $characters)
        {
            //definirea variabililor
            $symbols = array();
            $passwords = array();
            $used_symbols = '';
            $pass = '';

            //$symbols["lower_case"] = "abcdefg";
           $symbols["lower_case"] = "abcdefghijklmnoprstuvwyz";
           $symbols["upper_case"] = "ABCDEFGHIJKLMNOPRSTUVWYZ";
           $symbols["numbers"] = "0123456789";
           $symbols["special_symbols"] = "!?~@#-_+<>{}";
            $characters = explode(",", $characters);
            foreach ($characters as $key => $value) {
                $used_symbols .= $symbols[$value];
            }
            $symbols_length = strlen($used_symbols) - 1;
            for ($p = 0; $p < $count; $p++) {
                $pass = '';
                for ($i = 0; $i < $lenght; $i++) {
                    $n = rand(0, $symbols_length);
                    $pass .= $used_symbols[$n];
                }
                $passwords[] = $pass;
            }
            echo json_encode($passwords);
        }
        $my_passwords = randomPassword($lenght, $count, "lower_case,upper_case,numbers,special_symbols");
        //$my_passwords = randomPassword($lenght, $count, "lower_case");
       //$my_passwords = randomPassword($lenght, $count, "lower_case,upper_case");
        //$my_passwords = randomPassword($lenght, $count, "lower_case,upper_case,numbers");
        print_r($my_passwords);
        ?>
    </textarea>
    <p>
        <a href="index.php">Back</a>
    </p>
</div>
</body>
</html>



