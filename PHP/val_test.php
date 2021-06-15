<?php
$movie = '';
$cnt = 0;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$movie = $_POST['movie'];
	$cnt++;
	if(mb_strlen($movie) === 0){
		$err = '文字を入力してください。';
	}elseif(mb_strlen($movie) >= 8){
		$err = '7文字以内で入力してください。';
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<style type="text/css">
.center{text-align:center;}
input{margin:5px;}
</style>
</head>
<boby>
<div class="center">
<h2>入力フォームでバリデーション</h2>
<p>
<?php
if ($cnt === 0){
    
}else if(isset($err)){
	echo $err;
}else{
	echo 'あなたの好きな映画は'.$movie.'です。';
}
?>
</p>
<form action="" method="POST">
<label>好きな映画</label>
<input type="text" name="movie"><br>
<input type="submit">
</form>
</div>
</boby>
</html>

