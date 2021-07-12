<div class="mhm">
<html>
<head>
<style>

.sidenav {
  height: 150%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1F001C;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #041D88;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #02F7FC;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 25px;
  margin-left: 50px;
}

.first {
  position: absolute;
  top: 20px;
  left: 800px;
  font-size: 18px;
}
.second {
  position: absolute;
  top: -14px;
  left: 900px;
}
.muca {
  position: absolute;
  top: 135px;
  left: 1150px;
}
.krunker {
 position: absolute;
 top: 275px;
 left: 1170px;
}
.posit {
  position: absolute;
  top: 4px;
  left: 800px;
  z-index: -1;
}
.posit2 {
  position: absolute;
  top: 180px;
  left: 1150px;
  z-index: -1;
}
.posit3 {
  position: absolute;
  top: 4px;
  left: 1150px;
  z-index: -1;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
</head>
   <title>cube</title>
   <link rel="shortcut icon" type="image/png" href="icon.png">
   <body style="color: orange" background="yes.png">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1>
  ____________
  The Basics
  </h1>
  <a href="index.php">Home</a>
  <a href="exchange">Money converter</a>
  <a href="forms">Text games</a>
  <a href="todo">ToDo List</a>
  <br>
  <h1 style="color: green">
  ____________
  Games
  </h1>
  <a href="https://krunker.io/">Krunker</a>
  <h2 style="color: red">
  ________________
  Miscellaneous
  </h2>
  <a href="muca.html">Muca net</a>
  <a href="testing">Playground</a>
</div>
         <strong class="first" style="color: orange">hello!!!!!</strong>
         <h1 class="second" style="color: red">world</h1>
         <div class="posit">
         <img src="giff.png" width="300">
         </div>       
               <div id="main">
		 <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
           <p><a style="color: blue;font-size:50px">&#352&#299 br&#299&#382a laiks ir= <?=date("G:i:s");?></a></p>
               <p style="color: #00FFFD"><?php include 'weather.php';
               echo "&#353odien C&#275s&#299s ir $raksturojums2 un $raksturojums,";
           ?></p>
               <p style="color: #00FFFD"><?php include 'weather.php';
               echo "datums ir " .date('j.M.Y ', $myTime) .",laiks ir " .date("G:i") ." ,&#257r&#257 ir " .$myValue ." &#8451 un v&#275ja &#257trums ir $myValue2 m/s"
           ?></p>
           </div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginLeft = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

   </body>
</html>
</div>