<?php

 $doc = new DOMDocument();

  $doc->load("item.xml");

  

  $name = $doc->getElementsByTagName("items");

  

  echo "Names of the Items are:<br>";

  foreach($name as $value)

   {

     echo "$value->textContent <br>";
        

   }

	 

?>
