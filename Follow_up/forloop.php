<?php
  
for ( $i =1;$i<=6;$i++ )
{
echo"               ";
 for ($x=1;$x<=20;$x++)
   { 
   echo"*";
   
   }
   
     echo"<br>";
   
 }
 
 for ($j=1;$j<=10;$j++)
   {
   echo"               ";
   echo"***";
   echo"<br>";
   }
 
   $j=3;
for ( $i = 1 ; $i <= 4 ; $i++ )
{
 for ( $x = 1 ; $x <= $j ; $x++ )
   {
    echo"     ";
 }
    $j--;
      for ( $x = 1 ; $x <= 2*$i - 1 ; $x++ )
    {
         echo"***";
        }
      echo"<br>";
 }
   
 
 
 
 
?>


