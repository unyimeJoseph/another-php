<?php
// $dbhost = 'localhost:3036';
// $dbuser = 'root';
// $dbpass = '';
 $conn = mysqli_connect('localhost', 'root', '', 'tutorials');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'seelct a.tutorial_id, a.tutorial_author, b.tutorial_count
        from tutorials_tbl a, tcount_tbl b
        where a.tutorial_author = b.tutorial_author';

mysql_select_db('tutorials');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
    echo "Author:{$row['tutorial_author']}  <br> ".
         "Count: {$row['tutorial_count']} <br> ".
         "Tutorial ID: {$row['tutorial_id']} <br> ".
         "--------------------------------<br>";
} 
echo "Fetched data successfully\n";
mysql_close($conn);
?>