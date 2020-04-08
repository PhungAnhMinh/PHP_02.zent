 <?php 
    $a=0;
    $b=0;
    $c=0;
    $result = "";
    if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])){
      $a = $_POST["a"];
      $b = $_POST["b"];
      $c = $_POST["c"];
      if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        if($a == 0){
          if ($b == 0) {
            if ($c == 0) {
              $result = "Phương trình vô số nghiệm";
            } else $result = "Phương trình vô nghiệm";                                                                                                                                                  
          } else $result = "Phương trình có nghiệm duy nhất: x = " .(-$c/$b);
        } else{
            $delta = ($b * $b) - (4 * $a * $c);
            $x1 = (-$b+sqrt($delta))/(2*$a);
            $x2 = (-$b-sqrt($delta))/(2*$a);
            if($delta == 0) $result = "Phương trình có nghiệm kép: x = ". (-$b / (2 * $a));
            else if($delta < 0) $result = "Phương trình vô nghiệm";
                  else $result = "Phương trình có 2 nghiệm: x1 = ". $x1. " và x2 = ".$x2 ;
        }
      }
    }
   ?>
<html>
<body>
  <form action="#" method="POST" >
    <h1>Giải phương trình bậc 2</h1>
    <input type="text" name="a" value="<?php echo $a ?>" placeholder="Nhập a:"> x<sup>2</sup> + 
    <input type="text" name="b" value="<?php echo $b ?>" placeholder="Nhập b:">x + <input type="text" name="c" value="<?php echo $c ?>" placeholder="Nhập c:"> = 0
    <br> <input type="submit" name="submit" value="Xem kết quả"> 
    <br>
    <?php
    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    ?>
    <br><?php echo $result; ?>
  </form>
</body>
</html>