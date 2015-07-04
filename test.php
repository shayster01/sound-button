<?php
echo "<html>
	<head></head>
	<body>
		<script>
  function play(){
       var audio = document.getElementById('audio');
       audio.play();
                 }
   </script>";

	//echo '<EMBED SRC="'.$myAudioFile.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';
	/* $array1=array();
	$b=array('id'=>5,'name'=>'shawn','pid'=>1);
	$array1[1]['shawn']=$b;
	$c=array('subcat'=>'a','name'=>'Alpha');
	$myAudioFile = 'sound/fart.wav';
	
	echo 'array  '.$array1[1]['shawn']['name']."</br>";
	$array1[0]['devin']=$c;
	echo 'array  '.$array1[0]['devin']['subcat']."</br>"; */
	//var_dump($array1);

	
		echo "<input type='image' src='img/minion.jpg'  onclick='play()'>
<audio id='audio' src='sound/boss.mp3' ></audio>

	</body>
</html>";


?>


