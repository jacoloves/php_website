<?php
class Menu {
  public $name;
  
  // コンストラクタの引数に$nameを入れてください
  public function __construct($name) {
    // nameプロパティに引数の$nameを代入してください
    $this -> name = $name;
    
  }
  //1komenntoß
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

// new Menu()の引数に'CURRY'を入れてください
$curry = new Menu('CURRY');
// new Menu()の引数に'PASTA'を入れてください
$pasta = new Menu('PASTA');

$curry->hello();
echo '<br>';
$pasta->hello();

?>