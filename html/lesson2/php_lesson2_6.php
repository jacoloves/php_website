<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$max = 0;
foreach ($prices as $value) {

	$sum += $value;
	if($max < $value){
		$max = $value;
	}
}

echo "合計金額は{$sum}円です";
echo '<br>';
echo "最高価格は{$max}円です";

?>
