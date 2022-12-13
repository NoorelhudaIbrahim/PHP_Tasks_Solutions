<?php 
// array_chunk.(array,length,preserve)

$array1 = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
print_r (array_chunk($array1,2));
echo '</pre>';

// array_chunk.

echo "<hr>";
echo '<pre>';
print_r (array_chunk($array1,2,true));
echo '</pre>';

//array_change_key_case.(array,case)

echo "<hr>";
echo '<pre>';
print_r (array_change_key_case($array1));
echo '</pre>';

//array_change_key_case.

echo "<hr>";
echo '<pre>';
print_r (array_change_key_case($array1,CASE_UPPER));
echo '</pre>';



// ______________Ahmad_______________________
echo 'ahmad'."<br>";
// array_combine.(array of key,array of value)

$key = ["one","two","three","four","five","sex"];
$value = ["group1","group2","group3","group4","group5","group6",];
echo "<hr>";
echo '<pre>';
print_r (array_combine($key,$value));
echo '</pre>';

?>

<?php 

// array_reverse.(array,preverse)

$array_reverse = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
print_r (array_reverse($array_reverse));
echo '</pre>';

// array_flip.(array,preverse)

$array_flip = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
print_r (array_flip($array_flip));
echo '</pre>';

// count.(array,mode)

$array_count= ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","group6"=>[1,2,3]];
echo "<hr>";
echo '<pre>';
echo (count($array_count));
echo '</pre>';
echo '<pre>';
echo (count($array_count,1));
echo '</pre>';
// ____________bayan__________________
// in_array.(search,array,type)

$in_array= ["one","two","three","four","five","sex","7"];
echo "<hr>";
echo '<pre>';
var_dump (in_array("one",$in_array));
echo '</pre>';
echo '<pre>';
var_dump (in_array(7,$in_array));
echo '</pre>';
echo '<pre>';
var_dump (in_array(7,$in_array,true));
echo '</pre>';

// array_key_exists.(key,array)

$array_key_exists = ["one"=>"group1","two"=>"group2","three"=>"group3","four"=>"group4","five"=>"group5","sex"=>"group6",];
echo "<hr>";
echo '<pre>';
var_dump (array_key_exists("one",$array_key_exists));
echo '</pre>';
echo "<hr>";
// ____________________________
$array =
[
    "A"=>"ahmed",
    "mohammad",
    "alaa",
    "group1"=>["asem","maslamani","ruba","tabarak"],
    true=>"mona",
    8 => "abed",
    "asad"

];
echo '<pre>';
print_r($array);
echo '</pre>';
echo "<hr>";

?>