<?php

//$score = 82;
$score = mt_rand(0, 100);
echo "the score is " .$score."<br>";

if($score >= 0 && $score < 60){
    echo "below Average";
}elseif($score >= 60 && $score < 80){
    echo "above Average";
}elseif($score >= 80 && $score < 100){
    echo "great score!";
}elseif($score === 100){
    echo "Perfect!";
}else{
    echo "invalid number input";
}