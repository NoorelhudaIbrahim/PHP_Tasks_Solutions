<?php

class student {
    // Properties
    public $name;
    // public $age;
    public $gender;
  
    // Methods
  
      function __construct($gender, $name='zzz'){
          $this->name =$name;
          $this->gender =$gender;

      }
  
//     function set_name($name) {
//       $this->name = $name;
//     }
//     function get_name() {
//       return $this->name;
//     }
  
//     function set_age($age) {
//       $this->age = $age;
//     }
//     function get_age() {
//       return $this->age;
//   }


  }
  
$std1 = new student('talab');
// $std2 = new student();
// $std3= new student();

// echo '<pre>';
// print_r($std1);
// echo '</pre>';
  
// $std1->set_name('Obaida');
// $std2->set_name('Talab');
// $std3->set_name('Amro');

// echo '<pre>';
// print_r($std1);
// echo '</pre>';

// $std1->set_age(20);
// $std2->set_age(19);
// $std3->set_age(21);

// echo '<pre>';
// print_r($std1);
// echo '</pre>';
  
// echo $std1->get_name() . '<br>';
// echo $std2->get_name() . '<br>';
// echo $std3->get_name() . '<br>';

// echo $std1->get_age() . '<br>';
// echo $std2->get_age() . '<br>';
// echo $std3->get_age() . '<br>';



// function __construct($name, $gender)


  $std4= new student( 'Asem' , 'Male');
  echo '<pre>';

  print_r($std4);
  echo '</pre>';
  ?>