<?php 
header("Content-Type:text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/hrml;charset=utf-8/>
<?php
require_once 'Pet.php';
class Cat extends Pet {
  
 
 public function speak() {
     return 'мяу';
     }
     public function plays() {
     return 'ловит мышь';
}
}