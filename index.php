<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-6 - Tingimuslaused</title>
</head>

<body>
	<h2>Tingimuslaused</h2>
		<?php
			$a =4;
			$b =5;
		?>
		
		<?php
			if ($a < $b) {
				echo "{$a} on väiksem kui {$b}";
			} elseif ($a = $b) {
			
				echo "{$a} on {$b}";
			} elseif ($a > $b) {
				echo "{$a} on suurem kui {$b}";       
			}
		?>
		
	<h2>Süntaks</h2>
		<?php
			$age = 14;
			$age_limit = 18;
		?>
		<?php
			$n = $age_limit - $age
		?>
		<?php
			if ($age < $age_limit ) {
			echo "Kahjuks olete liiga noor. Te peate olema vähemalt {$age_limit} aastat vana. Tulge {$n} aasta pärast tagasi." ;
			} elseif ($age == $age_limit) {
			echo "Olete piisavalt vana. Tulge edasi!";
			} elseif ($age > $age_limit ) {
			echo "Olete piisavalt vana. Tulge edasi!"; 
			} 
		?>
	<h2>Mitme loogilise tehte võrdlemine</h2>	
		<?php
			$a = 3;
			$b = 3;
			$c = 4;
			$d = 5;
		?>
		
		<?php
			if (($a == $b) && ($d > $c)) {
			echo " JA ";
			} elseif (($a == $b) || ($d > $c)){
			echo "VÕI";
			}
		?>
</body>
</html>