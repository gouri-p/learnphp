<?php
$a=array("hi","hello");
echo $a[0], "\n";

$b = array('name' => "gouri","age"=>"22" );
echo $b["name"];

echo ("<pre>\n");
print_r($b);
echo("\n</pre>\n");

var_dump($b);

foreach ($b as $key => $value) {
  echo $key.$value;
}

if(array_key_exists('name',$b))
{
  echo "exists";
}
else{
  echo "not exists\n";
}
echo count($b);
$stuff = array('course ' => 'PHP-Intro', 'topic' => 'Arrays');
echo $stuff['course '];
echo isset($stuff['section']);
?>
