<?php
$host="host=127.0.0.1";
$port="port=5432";
$dbname="dbname=bcs";
$credentials="user=bcs password=bcs123";
$db=pg_connect("$host $port $dbname $credentials");
if(!db){
echo "Error:Unable to open database\n";
}
else
{
echo "Opened database successfully\n";
}
$sql="SELECT * from teacher";
echo "<table border='4'>";
echo "<th>tno</th><th>tname</th><th>qualification</th><th>salary</th>";
$ret=pg_query($db,$sql);
if(!ret){
echo pg_last_error($db);
exit;
}
while($row=pg_fetch_row($ret))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "</tr>";
}
echo "</table>";
echo "Operation done successfully\n";
pg_close($db);
?>
