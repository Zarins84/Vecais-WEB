<html>
 <?php
$num = 0;
$sum = 0;
 
 
for($i = 0; $i <=8; $i++) {
 $r = rand(10, 100);
 $num++;
$sum= $sum + $r;
 $sk[$i] = $r;
}
 $max = max($sk);
 $min = min($sk);
 $average = array_sum($sk)/count($sk);
 ?>
</html>