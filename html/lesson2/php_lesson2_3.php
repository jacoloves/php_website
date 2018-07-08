<?php
	$price = 1000;
	$taxRate = 0.08;
	echo '変数$priceの値：'.$price;
	echo '<br>';
	echo '変数$taxRateの値：'.$taxRate;
	echo '<br>';
	echo '----';
	echo '<br>';

	// この下にコードを書いてください

	$sum = $price + $price * $taxRate;
	echo "税込価格は{$sum}円です";
?>
