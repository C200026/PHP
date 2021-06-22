<?php

$time = date("G");

if($time < 12){
    echo "in the morning!";
}elseif(time > 12){
    echo "in the afternoon!";
}else{
    echo "at the Noon!";
}

$num = 5;
var_dump($time);

$bool = true;
if($bool === true){
    echo "Hello <br>";
}
var_dump($bool);

echo $bool === true ? "Good Bye" : "What's up?"

?>