<div id="player"></div>
<form method="post">
<br><br>
<center><h1>Text to Speech Convertor</h1>
	<input type="textbox" id="txt" name="txt" placeholder="Enter text" /><br><br>
	<input type="button" name="submit" value="Convert to speech" onclick="getAudio()"/></center>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function getAudio(){
	var txt=jQuery('#txt').val()
	jQuery.ajax({
		url:'get.php',
		type:'post',
		data:'txt='+txt,
		success:function(result){
			jQuery('#player').html(result);
		}
	});
}
</script>