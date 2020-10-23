<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test03</title>
</head>

<body>
<form method="get" action="demo.php">
GET傳送<p>
<select name="select_video" id="video" >
	<option value="0" selected>==選擇影片==</option>
	<option value="1" >影片1</option>
	<option value="2" >影片2</option>
	<option value="3" >影片3</option>
</select>
<input type="submit" value="送出">
</form>
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
	$get_or_post = '';//get 或 post 方式
	$video_sel 	 = '';//影片編號
	$video_1 	 ='h0u8O9nPdOg';//第一部影片網址
	$video_2 	 ='Udvl_VJoM94';//第二部影片網址
	$video_3 	 ='zZJHzOMSDEA';//第三部影片網址
	$video_url 	 ='';//判斷傳輸過來的資料後,取得的影片網址編號
	$err		 ='';//發生錯誤時的記錄內容
	if($_GET){
		$get_or_post = 'get';
		$video_sel 	 = $_GET["select_video"];
		if($video_sel==0){
			$err="沒選擇影片";
		}elseif($video_sel==1){
			$video_url=$video_1;
		}elseif($video_sel==2){
			$video_url=$video_2;
		}elseif($video_sel==3){
			$video_url=$video_3;
		}else{
			echo "錯誤";}
	}
	if($err==''){
		echo'傳遞方式：'.$get_or_post.'<br />';
		echo"選擇了第".$video_sel.'部電影<p>';
		echo '<iframe width="640" height="360" src="https://www.youtube.com/embed/'.$video_url.'" framevordes="0" 	allowfullscreen></iframe>';
		}else{
		echo $err;
	}
	echo '<p><a href="test03.php">返回</a></p>';
?>
</body>
</html>