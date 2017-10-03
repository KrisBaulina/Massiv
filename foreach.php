<?php
$sum=0;
$avg=0;
$prices=[120,130,150,130,100];
$prices[20]=100;
	foreach ($prices as $price ){
		$sum+=$price;		
	};	
$avg=$sum/count($prices);
echo "Cредняя сумма: $avg руб.";	
?> 