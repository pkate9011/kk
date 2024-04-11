
<?php
$xml=simplexml_load_file("student.xml");
foreach($xml->Student as $stud)
{
echo "Student No = $stud->studentno "."<br>";
echo " Student Name = $stud->studentname "."<br>";
echo " Student City = $stud->studentcity "."<br>";
echo "Student Phone No = $stud->studentphno "."<br><br>";

}
?>



