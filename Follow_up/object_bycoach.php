<?php
echo "Oday is 23 years old and has 22 JOD in his hand";
echo "<br>";
class userInfo {
    public $name;
    public $age;
    public $money;
//using construct
    function __construct($name,$age,$money){
        $this->name=$name;
        $this->age=$age;
        $this->money=$money;
    }

}
$user=new userInfo("Oday","24","20 JOD");
echo "<br>";
print_r($user);
echo "<br>";
echo "$user->name is $user->age and has $user->money";
?>

---------------------------------------------------------------
