<?php /*                               //Task1
Ballers Academy 
*/?>


<?php
//OPERATOR

// Logical Operator 
# <= 
# >= 
# ! , <>
# == 
# ===  
# && 
# || 
# Xor 
# <=>



$Team4 = ["A" => "Amro" , "B" => "Basem" , "C" => "Celina" , "D" => "Dima"];

echo "<h2> Logical Operator  </h4>";

// if ( 10 == "10" ) {
//     echo "True";
// } else {
//     echo "False";
// }

echo "<br>";
echo "<br>";
echo "<br>";


echo "<pre>";
print_r($array1+$array2);
echo "</pre>";

if ($array1 === $array2 ) {
    echo "<pre>";
    print_r($array1+$array2);
    echo "</pre>";
} else {
    echo "NO";
}

##############################
//Concatenate 

// $one = "one";
// $two = "two";

// echo " This is " .$one . " " .$two;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php 

    echo '<meta charset="UTF-8">';    
    echo '<br>';

?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    <?= print "My First PHP Page"; ?>

    </title>
</head>
<body>

    <div>
            <?php 
            // print "We Love";
            ?>

    </div>

    <div>
        <?php 
        // print " Elzero Channel";
        #echo 'Prevent Me From Running Please';         //Task2
        //echo 'Prevent Me From Running Please';
        /*echo 'Prevent Me From Running Please';*/     

        /* My Application                              //Task3
        Version 1.0
        Created By Elzero */


        // First Comment                               //Task4
        # Second Comment
        /* /* /* Third Comment */
        ////// Fourth Comment

        // $myName = "Amro";
        // $myAge = 25;
        // $St= true;
        // echo $myAge." ".$myName;



        ?>

    </div>

</body>
</html>




<?php   
// echo "<br>";
// echo "<br>";
// echo "<br>";


// echo (bool) "Hello PHP";
// echo '<br>';
// echo gettype((int)"Hello PHP");
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// var_dump(100);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

//Data Type

# Bool
# Int , Float , Double 
# String 
# Array
# Other Type ..........

# gettype()   to show type of data



// echo gettype(True);
// echo "<br>";
// echo gettype(False);
// echo "<br>";
// echo gettype(20);
// echo "<br>";
// echo gettype(-43);
// echo "<br>";
// echo gettype(45.6);
// echo "<br>";
// echo gettype(-43.67);
// echo "<br>";
// echo gettype("Amro");
// echo "<br>";
// echo gettype('Salah');
// echo "<br>";
// echo gettype((" Name => 'Amro' , Name => 'Amro' "));   //String 
// echo "<br>";
// echo gettype(array("Name" => "Amro" , "Age" => "25" ));
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

?>



<?php                      //Type Conversion



// echo 1 + "7";      //int + String
// echo "<br>";
// echo gettype(1 + "7");  //int  8
// echo "<br>";
// echo True;  //1
// echo "<br>";
// echo gettype(True); //bool
// echo "<br>";
// echo True + True; //2
// echo "<br>";
// echo gettype(True+True); //int
// echo "<br>";
// echo 4 + "6 Players"; //10 "6 players not numerical value"
// echo "<br>";
// echo gettype(4 + "6 Players"); //"6 players not numerical value"
// echo "<br>";
// echo 20 + 20.6; //Double , Float
// echo "<br>";
// echo gettype(20 + 20.6); //Double , Float
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


?>


<?php                  //TYPE CASTING

// echo 1 + "7 player";      //Warning
// echo "<br>";
// echo gettype(1 + "7 player");
// echo "<br>";
// echo 1 + (int)"7 player";      //8
// echo "<br>";
// echo gettype(1 + (int)"7 player");
// echo "<br>";
// echo 1 + (integer) "7 player";    //8
// echo "<br>";
// echo gettype(1 + (int)"7 player");
// echo "<br>";
// echo 1 + ( integer ) "7 player";    //8
// echo "<br>";
// echo gettype(1 + (int)"7 player");
// echo "<br>";
// echo "<br>";


// echo 10 + (int)10.5;  //convert to int 
// echo "<br>";
// echo 10 + 10.5; //20.5
// echo "<br>";
// echo gettype(10 + (int) 10.5);
// echo "<br>";


// echo 5.5 + 5.5;   //11
// echo "<br>";
// echo gettype(5.5 + 5.5);
// echo "<br>";
// echo (int) 5.5 + 5.5;   //10.5
// echo "<br>";
// echo gettype((int) 5.5 + 5.5);
// echo "<br>";
// echo (int) 5.5 + (int) 5.5;   //10
// echo "<br>";
// echo gettype((int) 5.5 + (int) 5.5);
// echo "<br>";
// echo (int) (5.5 + 5.5); //11
// echo "<br>";
// echo gettype((int) (5.5 + 5.5));
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


?>


<?php     //BOOLEAN and converting to boolean

// var_dump((bool) "");
// echo "<br>";
// var_dump((bool) array());
// echo "<br>";
// var_dump((bool) []);
// echo "<br>";
// var_dump((bool) 0);
// echo "<br>";
// var_dump((bool) "0");
// echo "<br>";
// var_dump((bool) "Amro");
// echo "<br>";
// var_dump((bool) array( 10 , 32 , 55 ));
// echo "<br>";
// var_dump((bool) [ 10 , 32 , 55 ]);
// echo "<br>";
// var_dump((bool) 77);
// echo "<br>";
// var_dump((bool) -77);
// echo "<br>";
// var_dump((bool) 77.5);
// echo "<br>";
// var_dump((bool) -77.5);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


?>


<?php              //SRTING AND ESCAPING

// echo " Moh Abdin";  #Double "
// echo "<br>";
// echo ' Moh Abdin '; #Single '
// echo "<br>";
// echo " Moh 'Abdin' "; #single inside double
// echo "<br>";
// echo ' Moh "Abdin" '; #double inside single
// echo "<br>";
// echo ' Moh \'Abdin\' '; # Use  \ to make single inside single
// echo "<br>";
// echo " Moh \"Abdin\" "; # Use  \ to make double inside double
// echo "<br>";
// echo " Moh Abdin\"";  # to print \ (Escaping) xxxxxx
// echo "<br>";
// echo " Moh Abdin\\";  # to print \ (Escaping) 
// echo "<br>";
// echo ' Mohamed    
// Majed 
// Abdin ';              #print as a One line 
// echo "<br>";
// echo nl2br(' Mohamed 
// Majed 
// Abdin ');             # Use nl2br to print as a Multi line 
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

?>


<?php                    //Herdoc & Nowdoc

// $Name = "Amro";

// echo <<<"Here"
// Hello $Name  """ '''
// Thank you for apply application  \\\\\
// Kind Regards $$$$
// Here;

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo <<<'Now'
// Hello $Name  """ '''
// Thank you for apply application  \\\\\
// Kind Regards $$$$
// Now;

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


// echo "<ul>";
//  echo "<li> $Name </li>";
//  echo "<li> $Name </li>";
//  echo "<li> $Name </li>";
//  echo "<li> $Name </li>";
// echo "</ul>";

// echo "<ul>";
//  echo "<li>" . $Name . "</li>";
//  echo "<li>" . $Name . "</li>";
//  echo "<li>" . $Name . "</li>";
//  echo "<li>" . $Name . "</li>";
// echo "</ul>";

// //Here
// echo <<<"orderList"
// <ul>
//     <li> $Name </li>
//     <li> $Name </li>
//     <li> $Name </li>
//     <li> $Name </li>
// </ul>
// orderList;

// //Now
// echo <<<'orderList'
// <ul>
//     <li> $Name </li>
//     <li> $Name </li>
//     <li> $Name </li>
//     <li> $Name </li>
// </ul>
// orderList;

?>



<?php                          //ARRAY


//Without Sorting

// echo "<pre>";
// print_r([
//     "A" => "Amro",
//     "L" => "Leen",
//     0 => "Nancy",
//     1 => "Hani",
//     "N" => "Nour",
//     2 => "Abood",
//     "K" => "Kareem",
//     4 => "Nataly",
//     "Lama",
//     true => "HHAANNII",
//     "1" => "Ezzzii",
//     false => "Law Ezeiii",
//     9 => "Ruba",
//     3 => "Hala",

//     "Dream Team" => [ "Zaitoun" => ["Cheers"], 
//     "Nuqati" => ["Eng-Salameh"], 
//     "Abd" => ["UI" , "UX"], 
//     "Talab" => ["UI" , "UX"], 
//     "Asem", 
//     "Obaida" ]
// ]);
// echo "</pre>";

?>




<?php 

//                                            //TASK 6-12
// echo "<br>";
// echo "<br>";
// echo "<br>";

//     echo (int)15.2 + (int)14.7 + (10.5 + 10.5); 
//     echo "<br>";
//     echo (int) (15.2 + 14.7 + (10.5 + 10.5));
//     echo "<br>";


//     echo "<br>";
// echo 100;
// echo "<br>";
// echo "100";
// echo "<br>";
// echo "<br>";
// echo "<br>";


?>



<?php 
                                  // Variable

// $Name = "Amro";
// $name = "Dareen";

// echo $Name;
// echo "<br>";
// echo $name;
// echo "<br>";
// echo 'Hello $Name ';
// echo "<br>";
// echo " Hello $name ";

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

?>


<!-- <?php $userName = "Amro"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Page | <?php echo $userName ?> </title>
  </head>
  <body>
    <div>Welcome <?php echo $userName ?> </div>
    <div> <?php echo $userName ?> You Scored 1000 Points </div>
    <div> <?php   include("score.php")  ?> </div>
  </body>
</html> -->




<?php                      //Variable of Variable

// echo "<br>";
// echo "<br>";
// echo "<br>";

// $d = "Amro";
// $$d = "Salah";
// $$$d = "Othman";
// $$$$d = "Al-Wageei";


// echo $d;
// echo "<br>";
// echo $$d;
// echo "<br>";
// echo $$$d;
// echo "<br>";
// echo $$$$d;
// echo "<br>";
// echo "Hello ${$$d}";
// echo "<br>";
// echo "Hello {$d}{$$d}{$$$d}{$$$$d}";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


?>


<?php                     //Assign by value or referances

// $a = "Sarah";
// $b = $a;
// $b = "Ahmad";

// echo $a;
// echo "<br>";
// echo $b;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


?>

<?php 

// $a = "Sarah";
// $b = &$a;
// $b = "Ahmad";
// $b = "Amro";
// $a = "Reem";

// echo $a;
// echo "<br>";
// echo $b;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";


?>



<?php                       //Predefind Variable

// echo "<pre>";
// print_r($_SERVER);
// echo $_SERVER["HTTP_CONNECTION"];
// echo "</pre>";


// echo $_POST["username"];
// echo $_GET["username"];

?>

<!-- <form action="" method="POST">
<input type="text" name="username">
<input type="submit" value="Send">
</form> -->





<?php
                                                //Constant
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";



// define("DA_NAME", "Al-wageei", false);
// define("MAIN_NUM", "100", false);
// // define("MAIN_NUM", 30); XXXXXXXXXXXXXXXXXXXXXXXXX


// echo DA_NAME;
// echo "<br>";
// echo MAIN_NUM * 34;


// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

?>



<?php 
                                       //Predefined


// echo php_uname();
// echo "<br>";
// echo PHP_VERSION;
// echo "<br>";
// echo PHP_OS_FAMILY;
// echo "<br>";
// echo PHP_INT_MAX;
// echo "<br>";
// echo PHP_INT_MIN;
// echo "<br>";
// echo DEFAULT_INCLUDE_PATH;
// echo "<br>";
// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";
// echo __CLASS__;
// echo "<br>";
// echo __FUNCTION__;
// echo "<br>";
// echo __METHOD__;
// echo "<br>";
// echo __NAMESPACE__;
// echo "<br>";
// echo __TRAIT__;
// echo "<br>";
// echo ClassName::class;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";





// define("CLONES", "AAAAA");  //Not Reservred Word
// echo CLONES;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// define("CLONE", "AAAAA");     //Reserved Word
// echo CLONE;


#Syntax Right => Reserved word
// function Hello() {
//     return "Hello";
// }
// echo Hello();

#Syntax Error => Reserved word
// function clone() {
//     return "clone";
// }
// echo clone();
echo "<br>";
echo "<br>";
echo "<br>";


####################################################################################################################################################################################################################################################################################
########################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################
?>



<?php
                                                             // OPERATOR


// echo 10 + 20;
// echo "<br>";                         // + - *
// echo gettype(10 + 20);
// echo "<br>";



// echo 20 / 10;    // / division
// echo "<br>";                        
// echo gettype(20 / 10);
// echo "<br>";

// echo 20 / 3;
// echo "<br>";                        
// echo gettype(20 / 3);
// echo "<br>";


// echo 24 % 10;   // %
// echo "<br>";
// echo 26 % 10;
// echo "<br>";
// echo 29 % 10;
// echo "<br>";
// echo 40 % 10;
// echo "<br>";



// echo 2 ** 8;         // ** exponant
// echo "<br>";
// echo 3 ** 5;
// echo "<br>";


// echo "100";          //
// echo "<br>";
// echo gettype("100");     // String
// echo "<br>";
// echo +"100";
// echo "<br>";
// echo gettype(+"100");   //Integer
// echo "<br>";


// echo "-100";          //
// echo "<br>";
// echo gettype("-100");     // String
// echo "<br>";
// echo -"100";
// echo "<br>";
// echo gettype(-"100");   //Integer
// echo "<br>";


// echo -"100";          //
// echo "<br>";
// echo gettype(-"100");     // String
// echo "<br>";
// echo -"-100";
// echo "<br>";
// echo gettype(-"-100");   //Integer

// echo "<br>";
// echo "<br>";
// echo "<br>";


?>






<?php
//String Operatore


// $s = "Amro";
// $b = "Salah";
// $f = "Othman";

// echo " $s $b $f ";
// echo "<br>";
// echo " {$s} {$b} {$f} ";
// echo "<br>";
// echo $s . " " . $b . " " . $f;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>


<?php


// echo 10 || false || 0 || "" || [];  //True =>1
// echo "<br>";
// echo true; //True =>1
// echo "<br>";
// var_dump(10 || false || 0 || "" || []); //True
// echo "<br>";
// var_dump(false || false || 0 || "" || []); //False
// echo "<br>";


// $fa = 10 || false;  //True =>1
// echo $fa;
// echo "<br>";
// $fb = 10 or  false;  // 10
// echo $fb;
// echo "<br>";


// echo "<br>";
// echo "<br>";

?>

<?php
                                                //Error control operator

// $aa = 30;
// $bb = @$aa or die(" Not Found ");
// echo $bb;


//FILE 

// $f = file("score.php");

// echo "<pre>";
// print_r($f);
// echo "</pre>";
// echo "<br>";

//INCLUDE 

// (@include("scoree.php")) or die ("Not Here");


####################################################################################################################################################################################################################################################################################
########################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################################
?>





<?php 


                                                                //IF STATEMENT




echo "<br>";
echo "<br>";
echo "<br>";


// $lang = "Span";

// if ($lang == "Arabic") {

//     echo 'Mr7ba';
// } elseif ($lang == "English") {

//     echo 'Hallo';
// } elseif ($lang == "Spanish") {

//     echo 'Holla';
// } else {

//     echo 'UnKown Lang';
// }


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php

// echo $_POST['username'];   //Undefind Without If Statement
// echo "<br>";
// echo $_POST['lang'];
// echo "<br>";

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

//     if ($_POST['lang'] == "ar-lang") {

//         echo $_POST['username'];
//         echo "<br>";
//         echo $_POST['lang'];
//         echo "<br>";

//     }  elseif ($_POST['lang'] == "en-lang") {

//          echo $_POST['username'];
//          echo "<br>";
//          echo $_POST['lang'];
//          echo "<br>";
//     }  
//     elseif ($_POST['lang'] == "sp-lang") {

//         echo $_POST['username'];
//         echo "<br>";
//         echo $_POST['lang'];
//         echo "<br>";
//    }  
//    elseif ($_POST['lang'] == "sw-lang") {

//     echo $_POST['username'];
//     echo "<br>";
//     echo $_POST['lang'];
//     echo "<br>";
// }  else {
//         echo "Not Found";
// }
// }
?>
<!-- <!DOCTYPE html>
<html>
<head>
<title> Test</title>
</head>
<body>

<form action="" method="Post">
<input type="text" name="username">
<select name="lang" id="">
    <option value="ar-lang"> Arabic </option>
    <option value="en-lang"> English </option>
    <option value="sp-lang"> Spanish </option>
    <option value="sw-lang"> Swedien </option>
</select>
<input type="submit" value="Done">
</form>

</body>
</html> -->


<?php


// echo "<br>";
// echo "<br>";

// if (32 > 67)
//     echo "GO";
//  else 
//    echo "Back";  

// echo "<br>";

// if (20>34) echo "GO"; 
// else echo "Back";

// echo "<br>";

// if (21 > 43) echo "GO"; else echo "Back";

// echo "<br>";

  
?>







<?php  if ( 5 < 10) { ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Page</title>
</head>
<body> -->
<!-- 
Home Page
Home Page
Home Page
Home Page -->

</body>
</html>

<?php } ?>


<?php 
// echo "<br>";
// echo "<br>";


// if ("Amro" > "amro") : 
//     echo "A";
    
//     elseif ("Amro" > "amro") :
//         echo "a";
// else:
//        echo "b";

// endif;

// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

?>


<?php
                                        //Nested If

// $name = "Amro";
// $county = "jordan";
// $student = true;
// $orphan = true;
// $price = 200;
// $country_dis = 50;
// $student_dis = 15;
// $orphan_dis = 15;



// if ($county == "jordan") {

//     if ($student == true) {


//         if ( $orphan == true) {

//             echo " Hello $name";
//             echo "<br>";
//             echo " Country Discount is $country_dis";
//             echo "<br>";
//             echo " Student Discount is $student_dis";
//             echo "<br>";
//             echo " Orphan Discount is $orphan_dis";
//             echo "<br>";
//             echo " The Final Price is " . $price - $country_dis - $student_dis - $orphan_dis;
//         } else {

//             echo " Hello $name";
//             echo "<br>";
//             echo " Country Discount is $country_dis";
//             echo "<br>";
//             echo " Student Discount is $student_dis";
//             echo "<br>";
//             echo " The Final Price is " . $price - $country_dis - $student_dis;

//         }
//     } else {
//      echo " Hello $name";
//     echo "<br>";
//     echo " Country Discount is $country_dis";
//     echo "<br>";
//     echo " The Final Price is " . $price - $country_dis;
//     }
// } else {

//     echo " Hello $name";
//     echo "<br>";
//     echo "NO Discount";
//     echo "<br>";
//     echo " The Final Price is $price ";

// }

echo "<br>";
echo "<br>";

?>



<?php


// $q = 10;

// if ($q >7) {
//     echo "GOOD";
// } else {
//     echo "BAD";
// }
// echo "<br>";
// echo "<br>";


// echo "I Love NBA Becuse it's a ";
// if ($q >7) {
//     echo "GOOD";
// } else {
//     echo "BAD";
// }
// echo "basketball tournment ";


// echo "<br>";

// echo "I Love NBA Because it's a " . ( $q >8 ? "Good" : "Bad") . " ". "basketball tournment";
// echo "<br>";

// $result = ( $q >8 ? "Good" : "Bad");
// echo "I Love NBA Because it's a " . ($result) . " ". "basketball tournment";

?>




<?php 
echo "<hr>";
echo "<br>";
echo "<br>";

//SWITCH


// $Sport = "Boxing";

// switch ($Sport) {

//     case "Basketball":
//         echo "Are you NBA Fans";
//         break;

//     case "Football":
//     echo " Are you Barcelona Fans";
//         break;
        
//         case "Badminton":
//         case "Vollyball":
//     echo " Are you AYLA Fans";
//         break;

//         case "Gaming":
//     echo " Are you Puge Fans";
//         break;

//         default :
//         echo "FANS";

//     }
?>




<?php

echo "<h2> Loop Operator  </h2>";

// Loop Operator   $a=10;   //  $a=$a+10;
# ++$a  --- $a++
# --$a  --- $a--
# $a+=10;               ( + , - , * , ** , % , / )
# == 
# ===  
# && 
# || 
# Xor 
# <=>

echo "<br>";
echo "<br>";
echo "<h4> While </h4>";

//LOOP

$i = 5;

// while ( $i < 9) {

//     echo "$i <br>";
//     ++$i;
// }

echo "<h4> Do - While </h4>";
echo "<br>";

// while ($i <=20) {
//     echo "$i <br>";
//     $i += 10;
// }

do {

    echo "$i <br>";
    $i *= 3;
} while (false);

echo "###########";
echo "<br>";

// $a = 0;

// while ($a <=33) :
// echo "$a <br>";
// $a += 3;
// endwhile;



echo "<h4> For Loop </h4>";
echo "<br>";

for ($i = 1; $i <=10 ; $i+=2) {                   //FOR Loop

    echo "$i<br>";
}

// $d = 10;           

// for (;; $d+=10) {

//     if ($d == 50 ) {
//         break;
//     }
//     echo "$d<br>";
// }

// echo "############";
// echo "<br";
// echo "<br";
// echo "<br";

// echo "############";
// echo "############";
// echo "############";
// echo "############";

// $d = 0;

// for (;$d<=100; ) {

//     if ($d == 50 && $d==90 ) {
//         continue;
//     }
//     echo "$d<br>";
//     $d += 10; 
// }
?>



<?php
// echo "<br>";                           //FOR Each
// echo "<br>";
// echo "<br>";

echo "<h4> For Each </h4>";
$countries = ["JOR", "EGY", "SUD", "USA", "SW"];

echo "<pre>";
print_r($countries);
echo "</pre>";

echo "<hr>";

//Array Name  as Key => Value .......... FOREACH
foreach ($countries as $country) {
    echo $country . " ";
}

echo "<br>";
echo "<br>";
echo "<br>";

//Array Name  as Key => Value .......... FOREACH
$con_with_dis = ["JOR" => 90, "EGY" => 10, "SUD" => 80, "USA" => 40, "SW" => 40];

foreach ($con_with_dis as $country => $discount) {
    echo "Country names is $country and your discount is $discount" . " <br>";
}

// foreach ($countries_with_dis as $country => $discount) :
//     echo "Country names is $country and your discount is $discount" . " <br>";
// endforeach;
// echo "<pre>";
// print_r($countries_with_dis);
// echo "</pre>";
?>

<?php    //TASK1

// $a1 = 100;
// $b1 = 200;
// $c1 = 100;


// if ($a1 < $b1 ) {
    
//     if ($a1 === $c1) {
//         if ($a1+$c1 == $b1) {
//             echo "Yes";
//         }
//     }
// } 
?>

<?php               //TASK2
// Test Case 1
// $a2 = 100;
// $b2 = 200;
// $c2 = 300;

// if ($a2 > $b2) {
//     echo "A Larger than B";
// } elseif ($a2 > $c2) {
//     echo "A Larger than C";
// } elseif ($a2 >! $c2 || $b2) {
//     echo "A is not Larger than B Or C";
// }

// echo "<br>";
// echo "<br>";
// echo "<br>";

?>


<!-- <form action="" method="POST">   
  <input type="text" name="user">
  <input type="submit" value="Send">
</form> -->

<?php 

                                   //TASK3


// $admins = ["Osama", "Amro", "Lana"];

// if($_SERVER['REQUEST_METHOD'] == 'POST') {  
    
//         if ($_POST['user'] == "Amro") {
       
//             echo "The Request Method Is Post And Username Is" . " " .  $_POST['user'];

//             echo "<br>";

//             echo "This Username " . " " . $_POST['user'] . " " . " Is Admin";

//         } elseif ($_POST ['user'] == "Osama") {
        
//             echo "The Request Method Is Post And Username Is" . " " .  $_POST['user'];

//             echo "<br>";


//         echo "This Username " . " " . $_POST['user'] . " " . " Is Admin";
//         } elseif ($_POST ['user'] == "Lana") {
            
//             echo "The Request Method Is Post And Username Is" . " " .  $_POST['user'];

//             echo "<br>";

//             echo "This Username " . " " . $_POST['user'] . " " . " Is Admin";

//             }
//     }
?>


<?php

// echo "<br>";
// echo "<br>";

//                                                 //TASK4
// $a3 = 30;
// $b3 = 20;
// $c3 = 10;

// echo $a3 + $b3 === $c3 ? "A + B = C"  
// : ($a3 + $c3 === $b3 ? "A + C = B" )
// : ($b3 + $c3 === $a3 ? "B + C = A" ) : "The End";

// // Output
// "B + C = A"


// echo "<br>";
// echo "<br>";
// echo "<br>";

?>


<?php

                                            //TASK6

// $genre = "Hack And Slash";


// switch($genre) {

//     case "RPG" :
//     echo "I Recommend Ys Games";
//     break;

//     case "Hack And Slash" :
//     echo "I Recommend Castlevania Games";
//     break;

//     case "FPS" :
//     echo "I Recommend Uncharted Games";
//     break;

//     case "Platform" :
//     case "Puzzle" :
//     echo "I Recommend Megaman Games";
//     break;

//     default : echo "I Recommend Shadow Of Mordor And Shadow Of War";
// }


// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "hhhhhhhhh";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
?>



<?php 
//TASK7
// $num_one = 23;
// $num_two = 5;
// $op = "/";

// if ( $op == "+") {

//     echo $num_one + $num_two;

// } elseif ( $op == "-") {

//     echo $num_one - $num_two;

// } elseif ( $op == "*") {

//     echo $num_one * $num_two;

// } elseif ( $op == "/") {

//     echo (int)($num_one / $num_two) ." <--div , module -->"  .  ($num_one % $num_two);
//     echo "<br";
    
// } else {
//     echo "Error";
// }
// echo "<br";
// echo "<br";
// echo "<br";
?>



<?php 
//                                 //TASK8
// $day99 = "Sat";

// if ($day99 == "Sat") {
//     echo "We Are Open All The Day";
// } else {
//     echo "We Are Busy";
// }
?>

<?php
########################################################################################################################################################################################################################################
//FUNCTION
// function hallo($name) {
//     echo " Welcome $name for join us ";
// }
// hallo("Amro");
// hallo("Amro");


// setcookie("Player", "Amro" , strtotime("+1 month"));

?>