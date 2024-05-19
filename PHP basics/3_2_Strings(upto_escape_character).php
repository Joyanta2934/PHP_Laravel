<?php
$x="My name is:";
$y="Joyanta_Sarker_Joy";
$z= $x.$y;

#_____ Concatenate Strings _____________
echo "\n$x.$y";
echo "\n",$x,$y;
echo "\n",$x . "+" .$y;
echo "\n$x$y\n";
#_______________________________________


#_____ String Slicing _________
//substr(variable, starting position, number of strings)
echo "\nFull String( =". $z.")\n";

echo "Substring from 11 ".substr($z, 11)."\n";
echo "Substring from 11 to 18 ".substr($z, 11,7)."\n";
echo "Substring from end ".substr($z, -11)."\n";
echo "Substring from end to 4 ".substr($z, -11,4)."\n";

//negative always starts from the end and it has no 0 index
echo "Substring from end to -4 ".substr($z, -11,-5)."\n";
#_____________________________________________________________


#_______________-Escape Characters-__________________
#   \<backslash is basically used as a escape character
# it basically used to print those characters or words which we're using 
# backslash is used to do something else using any letter or word like "\n"

echo "We are \t \\\ the so-called \"Vikings\" from the north.";


?>
