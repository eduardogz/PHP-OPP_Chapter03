<?php
/**
 * 
 * @author edu
 *
 */
class ShopProduct {
	private $title;
	private $producerFirstName;
	private $producerMainName;
	protected $price;
	private $discount = 0;
	
	/**
	 * 
	 * @param Product Title $title
	 * @param Producer's first name $firstName
	 * @param Producer's last name $mainName
	 * @param Product price $price
	 */
	function __construct($title, $firstName, $mainName, $price){
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}
	
	/**
	 * 
	 */
	public function getProducerFirstName() {
		return $this->producerFirstName;
	}
	
	/**
	 * 
	 */
	public function getProducerMainName() {
		return $this->producerMainName;
	}
	
	public function setDiscount($num) {
		$this->discount = $num;
	}
	
	public function getDiscount() {
		return $this->discount;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	function getProducer() {
		return "{$this->producerFirstName}"." {$this->producerMainName}";
	}
	
	function getSummaryLine() {
		$base = "{$this->title} ({$this->producerMainName}, ";
		$base .= "{$this->producerFirstName}";
		return $base;
	}
}

class CdProduct extends ShopProduct{

	private $playLength = 0;
	
	public function __construct($title, $firstName, $mainName, $price, $playLength) {
		parent::__construct($title, $firstName, $mainName, $price);
		$this->playLength = $playLength;
	}
	
	public function getPlayLength() {
		return $this->playLength;
	}
	
	public function getSummaryLine() {
		$base = parent::getSummaryLine();
		$base .= ": playing time - {$this->playLength})";
		return $base;
	}
}

class BookProduct extends ShopProduct{

	private $numPages = 0;

	public function __construct($title, $firstName, $mainName, $price, $numPages) {
		parent::__construct($title, $firstName, $mainName, $price);
		$this->numPages = $numPages;
	}

	public function getNumberOfPages() {
		return $this->numPages;
	}

	public function getSummaryLine() {
		$base = parent::getSummaryLine();
		$base .= ": page count - {$this->numPages})";
		return $base;
	}
}



//$product1 = new ShopProduct("Ay caramba!", "Bart", "Simpson", 1000);
//print $product1->getProducer();
$book1 = new BookProduct("Ay Caramba!", "Bart", "Simpson", 2000, 864);
print $book1->getSummaryLine();

?>