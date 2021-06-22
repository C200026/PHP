<?php

$attend = mt_rand(0,1);

$place = mt_rand(0,1);

if($attend === 0){
    echo "We are sorry that you cannot make it for the party...<br>";
}elseif($attend === 1){
    echo "Thanks for coming to our party!!<br>";
    if ($place === 0){
        echo "the venue is A hotel.";
    }elseif($place === 1){
        echo "the venue is B hotel.";
    }
}


?>