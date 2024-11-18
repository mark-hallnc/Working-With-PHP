<?php
class Person
{
  var $name = "Fred";	
  var $age = 35;	
}

  $o = new Person;
  $a = (array) $o; 
  
  print_r($a)
  Array ( [name] => Fred [age] => 35);
  
  $a = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
  $o = (object) $a;
  echo $o->name;

  $o += ['sex' => "male", 'title' => "Mr." ];

  
  ?>