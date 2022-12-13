<?php
$colors = array("RED","BLUE", "WHITE","YELLOW");
echo('<pre>');
print"Array before string conversion:\n";
print_r($colors);
  
// Step 1: flip array key => value
$colors = array_flip($colors);
  
// Step 2: change case of new keys to lower
$colors = array_change_key_case($colors, CASE_LOWER);
  
// Step 3: reverse the flip process to 
// regain strings as value
$colors = array_flip($colors);
  
// print array after conversion of string
print"\nArray after string conversion:\n";
print_r($colors);
echo('</pre>');
  