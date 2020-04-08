<?php 
	$n = "";
	$ts = 0;
	$ms = 1;
	$ps = 0;
	$sum = 0;
	$result = "";
		if(isset($_GET["n"])){
			$n = $_GET["n"];
			if($n > 0){
				for($i = 0; $i < $n; $i++){
					$ts = $i + 1;
					$ms = $ms*($i + 1);
					$ps = $ts/$ms;
					$sum = $sum + $ps;
				}$result = "S = " .$sum;
			}else $result = "Bạn hãy nhập n là số tự nhiên lớn hơn 0.";
		}
 ?>
 
 <html>
 <body>
 	<form action="#" method="get">
 		<h1>Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!</h1><br>
 		Nhập n: <input type="number" name="n" value="" placeholder="<?php echo $n ?>">
 		<br><br>
 		<input type="submit" name="" value="Xem kết quả">
 		<br>
 		<br>
 		<?php echo $result ?>
 		
 	</form>

 </body>
 </html>