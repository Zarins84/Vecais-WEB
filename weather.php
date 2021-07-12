<?php

date_default_timezone_set("Europe/Riga");
//echo "Šobrid ir " .date("H:i:s") . " \n";

//echo "Ieladeju Wetaher Cesis json data... \n\n";
$n = json_decode(file_get_contents('http://lax.lv/data/weather.php'),  true);

//echo "te ir visi weather dati. Redzam, ka masivs ar 3 elementiem \n";
//print_r($n);

//echo "\nIzvadam tikai temperaturas datus:\n";
$temperatureData = $n[0]['data']; //dati par temperaturu atrodas masiva 0-taja indexaa
$windData = $n[2]['data'];
//print_r($temperatureData); //šo nokomente, kad esi iepazinies ar datu strukturu
//print_r($windData);

//izvadam ka piemeru sev 0-ta indexa laiku un temperaturu
// katrs elements satur asociativo masivu, kur x ir timestamp, bet y ir vertiba

$min = 100;
$min2 = 100;
$max = 0;
$max2 = 0;
$avg = 600;
$avg2 = 600;
$num = 0;
$num2 = 0;
$max2 = 0;
$arrayx = 0;
$arrayx2 = 0;
$string = "bija &#353odien";
$strin = "bija &#353odien";
$string2 = "bija &#353odien";
$strin2 = "bija &#353odien";
$myTime = $temperatureData[0]['x'];
$myValue = $temperatureData[0]['y'];
$myTime2 = $windData[0]['x'];
$myValue2 = $windData[0]['y'];


for($i = 0; $i < count($temperatureData); $i++){
//echo date('j.m.Y G:i',$temperatureData[$i]['x']) ." ir " .$temperatureData[$i]['y'] ."°C\n";
 if($temperatureData[$i]['y'] < $min){
    $min = $temperatureData[$i]['y'];
    $minTime = $temperatureData[$i]['x'];
    $minIn = $i;
    }
    if($temperatureData[$i]['y'] > $max){
    $max = $temperatureData[$i]['y'];
    $maxTime = $temperatureData[$i]['x'];
    $maxIn = $i;
    }
}
foreach($temperatureData as $av){
if(date('j', $av['x']) < date('j')){
    $string = "bija vakar";
}
}

foreach($temperatureData as $av){
if(date('j', $av['x']) == date('j')){
    $num++;
$arrayx = $arrayx + $av['y'];

}
}
$avg = $arrayx / $num;

foreach($temperatureData as $dat){
    if(date('j', $dat['x']) == date('j')){
    if($dat['y'] <= 1){
        $raksturojums = "&#257r&#257 ir v&#275ss";
    }
    elseif($dat['y'] <= 15){
        $raksturojums = "&#257r&#257 ir m&#275rens";
    }
    elseif($dat['y'] >= 16){
        $raksturojums = "&#257r&#257 ir silts";
    }
    else{
        $raksturojums = "nezinu";
    }
}
}
if($myValue <= 1){
        $rakst= "&#257r&#257 ir v&#275ss";
    }
    elseif($myValue <= 15){
        $rakst= "&#257r&#257 ir m&#275rens";
    }
    elseif($myValue >= 16){
        $rakst= "&#257r&#257 ir silts";
    }
    else{
        $rakst= "nezinu";
    }

for($i = 0; $i < count($windData); $i++){
//echo date('j.m.Y G:i',$windData[$i]['x']) ." ir " .$windData[$i]['y'] ." m\s\n";
 if($windData[$i]['y'] < $min2){
    $min2 = $windData[$i]['y'];
    $minTime2 = $windData[$i]['x'];
    $minIn2 = $i;
    }
    if($windData[$i]['y'] > $max2){
    $max2 = $windData[$i]['y'];
    $maxTime2 = $windData[$i]['x'];
    $maxIn2 = $i;
    }
}
foreach($windData as $av){
if(date('j', $av['x']) < date('j')){
    $string2 = "bija vakar";
}
}

foreach($windData as $av){
if(date('j', $av['x']) == date('j')){
    $num2++;
$arrayx2 = $arrayx2 + $av['y'];

}
}
$avg2 = $arrayx2 / $num2;

foreach($windData as $dat){
    if(date('j', $dat['x']) == date('j')){
    if($dat['y'] == 0){
        $raksturojums2 = "bezvej&#353";
    }
    elseif($dat['y'] < 1){
        $raksturojums2 = "viegls vej&#353";
    }
    elseif($dat['y'] <= 3){
        $raksturojums2 = "iespejams specigs vej&#353";
    }
    else{
        $raksturojums2 = "specigs vej&#353";
    }
}
}
if($myValue2 == 0){
        $rakst2= "bezv&#275j&#353";
    }
    elseif($myValue2 < 1){
        $rakst2= "viegls v&#275j&#353";
    }
    elseif($myValue2 <= 3){
        $rakst2= "iesp&#275jams sp&#275c&#299gs v&#275j&#353";
    }
    else{
        $rakst2= "sp&#275c&#299gs v&#275j&#353";
    }

//echo "\ntagad ir " .date('j.M.Y G:i', $myTime) ." = " .$myValue .' °C ' ."$rakst\n"; //šo nokomente, kad saprasts un nav tev vairs vajadzigs
//echo "mazakie gradi $string " .date('j.m.Y G:i',$minTime) ." = $min °C\n";
//echo "lielakie gradi $string " .date('j.m.Y G:i',$maxTime) ." = $max °C\n";
//echo "videjais gaisa siltums šodien ir " .round($avg,2), " °C\n";
//echo "\ntagad ir " .date('j.M.Y G:i', $myTime2) ." = " .$myValue2 .' m\s ' ."$rakst2\n";
//echo "mazakais veja atrums $string2 " .date('j.m.Y G:i',$minTime2) ." = $min2 m\s\n";
//echo "lielakais veja atrums $string2 " .date('j.m.Y G:i',$maxTime2) ." = $max2 m\s\n";
//echo "videjais veja atrums šodien ir " .round($avg2,2), " m\s";
//echo "\nŠodien cesis ir $raksturojums2 un $raksturojums";

?>