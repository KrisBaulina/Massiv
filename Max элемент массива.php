<?php
$max=0;
$prices=[120,130,150,180,100];
$prices[20]=100;
	foreach ($prices as $price ){
		if ($max<$price){
		$max=$price;
		};  	 
	};	
echo "Максимальный элемент массива: $max";	
?> 