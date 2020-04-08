<html>
	<h1>Tìm số nguyên lớn nhất trong mảng: <br></h1>
</html>
<br><br>

<?php 
    $max = null;
	$arr = array(1,4,2,6,9,100,45,8,20); 
	echo "<pre>";
    print_r($arr);
    echo "</pre>";
	for($i = 0; $i < count($arr); $i++){
		if($arr[$i] > $max){
			$max = $arr[$i];
			
		}
	}echo "Số lớn nhất trong mảng là: " .$max;
 ?>