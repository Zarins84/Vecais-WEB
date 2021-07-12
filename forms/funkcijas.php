<?


function getTextByOption($text, $option) {

if($option == 'saskaita' ) {

$wordsCount = str_word_count($text);
return 'Tekst&#257 ir ' .$wordsCount .' v&#257rdi';

} else if($option == 'apgriez' ) {
$otradi = strrev($text);
return 'Teksts otr&#257di izkat&#257s &#353&#257di : '.$otradi;

} else if($option == 'Atkartojas') {
$skaits = str_word_count($text, 1);
$skaits_f = array_count_values($skaits);
return '^v&#257rdu daudzums tekst&#257 ir &#353&#257ds' .print_r($skaits_f) .'^';


} else {
return 'Ievadiet tekstu un izv&#275laties darb&#299bu';
}
}
?>