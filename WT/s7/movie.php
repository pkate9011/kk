
<?php
$xml=new DOMDocument();
$xml->load('movie.xml');

$movies=$xml->getElementsByTagName('movieinfo');

foreach($movies as $movie)
{
echo"Movie Title : ".$movie->getElementsByTagName('movietitle')[0]->textContent."<br>";

echo"Actor Name : ".$movie->getElementsByTagName('actorname')[0]->textContent."<br>";

echo"Release Year : ".$movie->getElementsByTagName('releaseyear')[0]->textContent."<br><br>";
}



?>


