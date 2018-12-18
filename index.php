<?php
$file_db = new PDO( 'sqlite:db.sqlite3');
$file_db->exec("create table if not exists test(
    id INTEGER PRIMARY KEY,
    title TEXT)");

$var = $file_db->exec("insert into test (title) values ('hello')");
echo $var;

$res = $file_db->query("select * from test");
/*print_r ($res->fetchAll());*/

echo "<table>";

foreach($res as $key => $value)
{
    echo "<tr>";
    echo "<td>" . $value['id'] . "</td>";
    echo "<td>" . $value['title'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>