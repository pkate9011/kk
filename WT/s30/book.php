
<?php
$xml=new DOMDocument();
$xml->load('book.xml');

$books=$xml->getElementsByTagName('book');

foreach($books as $bk)
{
echo"Book Name : ".$bk->getElementsByTagName('booktitle')[0]->textContent."<br>";

echo"Author Name : ".$bk->getElementsByTagName('book_author')[0]->textContent."<br>";

echo"Book Price : ".$bk->getElementsByTagName('book_price')[0]->textContent."<br><br>";
}



?>


