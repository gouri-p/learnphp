<?php
class Person{
  public $name=false;
  public $age=false;
  public $class=false;
  public function getInfo()
  {
    if ($this->name!==false) return $this->name;
    if($this->age!==false && $this->class!==false) {return $this->age ." ".$this->class;}
    return false;
  }

}
$obj1=new Person();
$obj1->name="gouri";
print $obj1->getInfo()."\n";

$obj2=new Person();
$obj2->age=23;
$obj2->class=1;

print $obj2->getInfo()."\n";
$x=new DateTime('now');
print $x->format('y-m-d');
?>
