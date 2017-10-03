<?php
$values=[120,130,-150,130,-100];
	foreach ($values as $index=>$val ){
		if ($val<0){
			echo "Индекс первого отрицательного элемента: $index";
			break;
		}		
	};	
	
?> 