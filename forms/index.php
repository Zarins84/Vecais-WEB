<head>
<style>
.posit {
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: -1;
}
.posit2 {
  position: absolute;
  top: 0px;
  left: 250px;
  z-index: -1;
}
.options {
 position: relative;
 top: 20px;
 left: 10px;
}
.textbox {
 position: relative;
 top: -150px;
 left: 290px;
}
.submit {
 position: relative;
 top: -50px;
 left: 200px;
}

.button {
  position: relative;
  top: -50px;
  left: 200px;
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
</head>

<body>

<?
require_once 'funkcijas.php';
if(!isset($_GET['tekstaLauks'])) {
$_GET['tekstaLauks'] = '';
}

?>

<form>
<br/>

<div class="posit">
<img src="frame.png" width="250">
</div>
<div class="posit2">
<img src="frame2.png" width="450">
</div>

<div class="options">
Izv&#275laties darb&#299bu:<br/>
<input type="radio" name="opcija" value="saskaita" /> Saskait&#299t v&#257rdus<br/>
<input type="radio" name="opcija" value="apgriez"/> Apgriezt v&#257rdu<br/>
<input type="radio" name="opcija" value="Atkartojas" required/> V&#257rdu daudzumu noteik&#353ana<br/>
</div>

<br/>


<br/>
<br/>
<br/>
<br/>

<div class="textbox">
Ierakstiet ko v&#275laties p&#257rveidot:<br/>
<input maxlength="500" size="50" type="text" value="<?=$_GET['tekstaLauks']?>" name="tekstaLauks"/><br/>
</div>

<br/>

<button class="button">
Iesniegt<br/>
</button>
</form>


<?
$retval = getTextByOption($_GET['tekstaLauks'], $_GET['opcija']);
?>
<h1 style="color: blue">
<?
echo $retval
?>
</h1>
</body>



