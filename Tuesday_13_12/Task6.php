<?php

echo "
Associative array : Ascending order sort by Key
";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}

echo "
Associative array : Descending order sorting by Key
";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
} 
?>