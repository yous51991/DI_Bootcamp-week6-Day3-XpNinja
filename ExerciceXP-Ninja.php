<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercice XP Ninja</title>
</head>
<body>
      <?php 
           function totalOvers($value='')
           {
           	$ball = (float)$value / 6 ;
           	if ($value%6!=0) {
           		 
           		echo (int)$ball .' overs and ', ($value-(6*(int)$ball)) , ' balls were bowled by the bowler. ';
           	}else {
           		echo $ball .' overs' ;
           	}
           }

           totalOvers(255);
       ?>
</body>
</html>