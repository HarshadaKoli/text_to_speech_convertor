<!DOCTYPE html>
<html>
<head>
	<title>Text to Speech Convertor</title>
</head>
<body>
<?php
if(isset($_POST['txt'])){
	echo "<br><br>";
	$txt=$_POST['txt'];
	$txt=htmlspecialchars($txt);
	$txt=rawurlencode($txt);
	$html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
	echo "<br>";
	$player="<center><audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio></center>";
	echo "<br>".$player;
}
?>
</body>
</html>
