<?php
$max=0;
$maxIndex=-1;
$prices=[120,130,150,110,100];
$prices[20]=100;
	foreach ($prices as $index=>$price){
		if ($max<$price){
		$max=$price;
		$maxIndex=$index;
		};  	 
	};	
echo "Максимальный элемент массива: $max";
echo "<br>";
echo "Его индекс: $maxIndex";
?> 