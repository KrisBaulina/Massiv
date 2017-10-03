<?php
$sum=0;
$avg=0;
$prices=[120,130,150,130,100];
$prices[150]=200;

	for ($i=0;$i<count($prices);$i++){
		if (isset($prices[$i])){
	    $sum+=$prices[$i];
        };
	};	
$avg=$sum/count($prices);
echo "Cредняя сумма: $avg руб.";	
?> 