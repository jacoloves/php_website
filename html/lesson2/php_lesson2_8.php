<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$cnt = 0;
$sum = 0;
$maxprice = 0;
$foodi = '';
$num = 0;
$flg = 0;
foreach ($menus as $menu) {
    foreach($menu as $micro){
        $num++;
	if($cnt == 0){
	    echo $micro.'は';
	}elseif($cnt == 1){
	    echo $micro.'円です';
            $sum += $micro;
	    if($maxprice < $micro){
		$maxprice = $micro;
                $flg = $num - 1;
	    }
	}
	$cnt++;
    }
    $cnt = 0;
    echo '<br>';
}

$num = 0;

foreach($menus as $menu){
    foreach($menu as $foods){
	$num++;
	if($num == $flg){
            $food = $foods;
        }
    }
}

echo "合計金額は{$sum}円です";
echo '<br>';
echo "{$food}が最高価格で{$maxprice}円です";

?>
