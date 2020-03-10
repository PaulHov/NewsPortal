<?php
class Category{
	
	public static function getAllCategory() {
		$query = "SELECT * FROM category" ;
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr;
	}
	
// далее добавляются так же все методы по работе с категориями

}
?>