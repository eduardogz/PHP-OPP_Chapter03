<?php

	require("ShopProduct.php");
	
	class ShopProductWriter {
		public function write(ShopProduct $shopProduct) {
			$str = "{$shopProduct->title}: ".
			"{$shopProduct->getProducer()}".
			" (\${$shopProduct->price})";
			print $str;
		}
	}

	$product1 = new ShopProduct("Ay caramba!", "Bart", "Simpson", 1000);
	$writer = new ShopProductWriter();
	
	$writer->write($product1);
?>