<?php

preg_match("/^cow", "Dave was a cowhand"); //returns false
preg_match("/^cow", "cowabunga!"); //returns true

preg_match("/^cow$/", "Dave was a cowhand"); //returns false
preg_match("/^cow$/", "cowabunga!"); //returns true

preg_match("/c.t/", "cat"); //returns true
preg_match("/c.t/", "cut"); //returns true
preg_match("/c.t/", "c t"); //returns true
preg_match("/c.t/", "bat"); //returns false
preg_match("/c.t/", "ct"); //returns false


preg_match("/\$5.00/", "Your bill is $5.00 exactly"); //returns true
preg_match("/$5.00/", "Your bill is $5.00 exactly");  //returns false

preg_match("/c[aeiou]t/", "I cut my hand"); //returns true
preg_match("/c[aeiou]t/", "This crusty cat"); //returns true
preg_match("/c[aeiou]t/", "What cart?"); //returns false
preg_match("/c[aeiou]t/", "14ct gold"); //returns false

preg_match("/c[^aeiou]t/", "I cut my hand"); //returns false
preg_match("/c[^aeiou]t/", "Reboot chthon"); //returns true
preg_match("/c[^aeiou]t/", "14ct gold"); //returns false

preg_match("/[0-9]%/", "we are 25% complete"); //returns true
preg_match("/[0123456789]%/", "we are 25% complete"); //returns true
preg_match("/[a-z]t/", "11th"); //returns false
preg_match("/[a-z]t/", "cat"); //returns true
preg_match("/[a-z]t/", "PIT"); //returns false
preg_match("/[a-zA-Z]!/", "11!"); //returns false
preg_match("/[a-zA-Z]!/", "stop!"); //returns true

preg_match("/cat|dog/", "the cat rubbed my legs"); //returns true
preg_match("/cat|dog/", "the dog rubbed my legs"); //returns true
preg_match("/cat|dog/", "the rabbit rubbed my legs"); //returns false

preg_match("/^([a-z]|[0-9])/", "the quick brown fox"); //returns false
preg_match("/^([a-z]|[0-9])/", "jumped over"); //returns true
preg_match("/^([a-z]|[0-9])/", "10 lazy dogs"); //returns true

preg_match("/ca+t/", "caaaaaaat"); //returns true
preg_match("/ca+t/", "ct"); //returns false
preg_match("/ca?t/", "caaaaaaat"); //returns false
preg_match("/ca*t/", "ct"); //returns true

preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "303-555-1212"); //returns true
preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "64-9-555-1234"); //returns false

preg_match("/a (very )+big dog/", "it was a very very big dog"); //returns true
preg_match("/^(cat|dog)$/", "cat"); //returns true
preg_match("/^(cat|dog)$/", "dog"); //returns true

preg_match("/([0-9]+)/", "You have 42 magic beans", $captured); 
//returns true and populates $captured

preg_match("/\usr\/local\//", "/usr/local/bin/perl"); //returns true
preg_match("#/usr/local/#", "/usr/local/bin/perl"); //returns true

preg_match("{/usr/local/}", "/usr/local/bin/perl"); //returns true







?>