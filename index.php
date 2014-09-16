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
		
</body>
</html>