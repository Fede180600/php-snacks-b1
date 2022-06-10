<?php 
    $numbers_array = [];
    while(count($numbers_array) < 15) {
        $ran_num = rand(1, 100);
        if (!in_array($ran_num, $numbers_array)) {
            $numbers_array[] = $ran_num;
        }
    }
    var_dump($numbers_array)
?>