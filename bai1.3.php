<html>
<div style="width: 1200px; height: 900px">
	<div style="text-align: center">
		<h1>BẢNG CỬU CHƯƠNG BẰNG FOR</h1>
		<h2>BẢNG CỬU CHƯƠNG</h2>
		<?php 
			function bangcuuchuong($n){
				for ($i=1; $i <11 ; $i++) { 
					echo "&emsp;&emsp;".$n. " x ".$i." = ".($n * $i)."&emsp;&emsp;";
					echo "<br>";
				}	
			}
	 	?>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(2); ?></div>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(3); ?></div>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(4); ?></div>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(5); ?></div>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(6); ?></div>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(7); ?></div>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(8); ?></div>
	 <div style="float: left; width: 150px"><?php bangcuuchuong(9); ?></div>
	</div>
</div>
</body>
</html>