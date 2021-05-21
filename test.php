<?php

function randomPassword($lenght, $count, $characters){

    //definirea variabililor
    $symbols = array();
    $passwords = array();
    $used_symbols = '';
    $pass = '';

    //
    $symbols["lower_case"] = "a1c";
    //$symbols["lower_case"] = "abcdefghijklmnoprstuvwyz";
    $symbols["upper_case"] = "ABCDEFGHIJKLMNOPRSTUVWYZ";
    $symbols["numbers"] = "0123456789";
    $symbols["special_symbols"] = "!?~@#-_+<>{}[]";

    $characters = explode(",", $characters);
    foreach ($characters as $key=>$value){
        $used_symbols .= $symbols[$value];

    }
    $symbols_length = strlen($used_symbols) - 1;
    for ($p = 0; $p < $count; $p++){
        $pass = '';
        for($i = 0; $i < $lenght; $i++){
            $n = rand(0, $symbols_length);
            $pass .= $used_symbols[$n];
        }
        $passwords[] = $pass;


    }
    echo json_encode($passwords);

}
// $my_passwords = randomPassword(10,1,"lower_case,upper_case,numbers,special_symbols");
// $my_passwords = randomPassword(3,1,"lower_case,upper_case");
$my_passwords = randomPassword(3,3,"lower_case");

print_r($my_passwords);

?>