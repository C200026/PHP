<?php
$language = mt_rand(1,4);

switch($language){
    case 1:
        echo "Hello";
        break;
    case 2:
        echo "Ni-hao";
        break;
    case 3:
        echo "Bonjour";
        break;
    default:
        echo "the number input is wrong";
    
}