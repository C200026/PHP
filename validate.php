<?php
$movie = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $movie = $_POST["movie"];

    if(mb_strlen($movie) === 0){
        $err = "please input the name of the movie.";
    }elseif(mb_strlen($movie) > 20) {
        $err = "Please input within 20 characters.";
    }
}
?>

<html>
    <head>
        <style type="text/css">
            .center{text-align: center;}
            input{margin:5px;}
        </style>
    </head>
    <body>
        <div class ="center">
            <h1>Let's validate the input form!</h1>
            <p>
                <?php
                if(isset($err)){
                    echo $err;
                }else{
                    echo "Your favorite movie is ".$movie;
                }
                ?>
            </p>
            <form action="" method="POST">
                <label>your favorite movie</label>
                <input type="text" name="movie"><br>
                <input type="submit">
                
            </form>
        </div>
        
    </body>
</html>