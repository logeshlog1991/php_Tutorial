<?php
$xml=simplexml_load_file("demo.xml") or die("Error: Cannot create object");
echo "your name is:".$xml->producer[0]->name;
echo "<br>";
echo "your name is:".$xml->producer[0]->age;
?>