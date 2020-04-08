<?php 
	$arr = array(1,4,2,6,9,100,4);
	$j = count($arr);
		echo "Mảng đã cho:(";
		foreach ($arr as $key => $value) {
			echo $value."&emsp;";
		}
		echo ")<br>";

	for($i = 0; $i<$j; $i++){

		$result = $arr[$i];
		$arr[$i] = $arr[$j-1];
		$arr[$j-1] = $result;
		$j -= 1;

	}
		echo "Mảng sau khi đã lật ngược: (";
		foreach ($arr as $key => $value) {
			echo $value."&emsp;";
		}
		echo ")";
 ?>