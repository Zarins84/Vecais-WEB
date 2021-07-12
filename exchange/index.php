<html>
<head>
<style>
.posit {
  position: absolute;
  top: 55px;
  left: 100px;
  z-index: -1;
}
.posit2 {
  position: absolute;
  top: 55px;
  left: 450px;
  z-index: -1; 
}
.posit3 {
  position: absolute;
  top: 260px;
  left: 100px;
}
.posit4 {
  position: absolute;
  top: 260px;
  left: 450px;
}
.posit5 {
  position: absolute;
  top: 100px;
  left: 325px;
}
.eur {
  position: relative; 
  top: -50px;
  left: 100px;
}
.usd {
  position: relative; 
  top: -105px;
  left: 450px;
}
.convert {
  position: relative; 
  top: 100px;
  left: -250px;
}


</style>
</head>
<body background="money.png">
<title>exchange</title>
<p style="font-size: 40px; color: blue">
Pareizs laiks ir :: <?=date("G:i:s")?><br/>
</p>
<div class="posit">
<img src="eiro2.png" width="250">
</div>
<div class="posit2">
<img src="usd.png" width="250"> 
</div>
<div class="posit5">
<img src="convert.png" width="150"> 
</div>



<form >
<p class="eur"><label for="eiro">ievadiet ASV dolarus:</label><br>
<input type="text" name="eiro"/></p>
<p class="usd"><label for="usd">ievadiet eiro:</label><br>
<input type="text" name="usd"/>
<input class="convert"; type="submit"/></p>
</form>



<?php 
	$eu = $_GET['eiro'];
        $eur = $eu * 0.911990;
	
	$usd = $_GET['usd'];
        $usdd = $usd * 1.09650;	
?>

<p class="posit3"; style="font-size: 30px">
        <?=$eu ?>$ ir: <?=$eur ?>&#8364<br/>

	
</p>
<p class="posit4"; style="font-size: 30px">
        <?=$usd ?>&#8364 ir: <?=$usdd ?>$<br/>
	
</p>


 </body>
</html>