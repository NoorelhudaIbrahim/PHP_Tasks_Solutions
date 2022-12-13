<?php
$a1=array("red","green");
$a2=array("blue","yellow");

print_r(array_merge($a1,$a2)) ;
echo "<hr>";
?>





<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"blue","d"=>"yellow");

print_r(array_merge($a1,$a2));
echo "<hr>";
?>





<?php
$a1=array("red","green");
$a2=array("blue","yellow");

print_r(array_replace($a1,$a2));
echo "<hr>";
?>






<?php
$a1=array("10"=>"red","20"=>"green");
$a2=array("10"=>"blue","30"=>"yellow");
print_r(array_replace($a1,$a2));
echo "<hr>";
?>