<?php
$j="Joyanta Sarker Joy";
echo "My name is $j";

echo "\nString lenght:",strlen($j);

echo "\nTotal words: ",str_word_count($j);

//String position
echo"\nPosition of Sarker in",strpos($j,"Sarker");

$JJ= strtoupper($j);
$jjj=strtolower($j);
echo "\nLower= $jjj, Upper=$JJ";

$replacee= str_replace("joy", "hkh",$jjj);
$reversee = strrev($JJ);
echo "\n", $reversee, "\n", $replacee;
//echo "\n$replacee\n reverse: $reversee";

//Trim removes any whitespace from the sentence beginning or end.
$JJTrim= trim($JJ);
echo "\n$JJTrim";

?>