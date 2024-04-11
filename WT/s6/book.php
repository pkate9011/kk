<?php
$xml=simplexml_load_file("book.xml");
foreach($xml->book as $books)
{
echo "Book name = $books->book_name "."<br>";
echo " Book rate = $books->book_rate "."<br>";
echo "Book Quantity = $books->book_quantity "."<br><br>";

}
?>


