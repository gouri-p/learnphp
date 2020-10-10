<?php
echo "connect to Mysql";

$pdo=new PDO('mysql:host=localhost;port=8000;dbname=mywork','username','password');
$stmt=$pdo->query("select * from artist");
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  echo ($row['Artist_ID']);
  echo ($ros['name']);
}
?>
