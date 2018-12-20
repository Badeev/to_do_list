<?php
$file_db = new PDO( 'sqlite:db.sqlite3');
$file_db->exec("create table if not exists test(
    id INTEGER PRIMARY KEY,
    title TEXT)");

$timehello = date('Y-m-d'.' '.'G:i:s');
$var = $file_db->exec("insert into test (title) values ('$timehello')");
echo $var. "<br>";

$res = $file_db->query("select * from test");
/*print_r ($res->fetchAll());*/

echo "<table>";

$date = new DateTime();
echo $date->getTimestamp();

foreach($res as $key => $value)
{
    echo "<tr>";
    echo "<td>" . $value['id'] . "</td>";
    echo "<td>" . $value['title'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>