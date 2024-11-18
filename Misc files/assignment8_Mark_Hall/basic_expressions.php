<?php

preg_match("/^bat", "baseball bat"); //returns false
preg_match("/^bat", "batman"); //returns true

preg_match("/^bat$/", "batman"); //returns false
preg_match("/^bat$/", "baseball bat"); //returns true

preg_match("/b.t/", "bat"); //returns true
preg_match("/b.t/", "but"); //returns true
preg_match("/b.t/", "b t"); //returns true
preg_match("/b.t/", "cat"); //returns false
preg_match("/b.t/", "bt"); //returns false


preg_match("/problem\?/", "what is the problem?"); //returns true
preg_match("/problem?/", "what is the problem");  //returns false

preg_match("/f[acor]t/", "Give me the facts"); //returns true
preg_match("/f[acor]t/", "Lets build a fort"); //returns true
preg_match("/f[acor]t/", "This is a farce"); //returns false
preg_match("/f[acor]t/", "time for a fight"); //returns false

preg_match("/f[^acor]t/", "Give me the facts"); //returns false
preg_match("/f[^acor]t/", "Define a function"); //returns true
preg_match("/f[^acor]t/", "Who farted?"); //returns false

preg_match("/[0-9]%/", "we are 25% complete"); //returns true
preg_match("/[0123456789]%/", "we are 25% complete"); //returns true
preg_match("/[a-z]t/", "11th"); //returns false
preg_match("/[a-z]t/", "cat"); //returns true
preg_match("/[a-z]t/", "PIT"); //returns false
preg_match("/[a-zA-Z]!/", "11!"); //returns false
preg_match("/[a-zA-Z]!/", "stop!"); //returns true

preg_match("/work|school/", "work sucks"); //returns true
preg_match("/work|school/", "school sucks"); //returns true
preg_match("/work|school/", "actually both are just fine"); //returns false

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