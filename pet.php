<?php header("Content-Type:text/html; charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/hrml;charset=utf-8/>
<?php
class Pet {
    public $name;
 public function _construct($name) {
     $this->name = $name;
     }
 public function speak() {
     return 'ничего';
 }
}


