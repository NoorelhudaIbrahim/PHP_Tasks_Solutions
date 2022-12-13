<?php
$month_temp = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);
$sum = 0;
$temp_array_length = count($month_temp);
foreach($month_temp as $temp)
{
 $sum += $temp;
}
 $avg_high_temp = $sum/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 






