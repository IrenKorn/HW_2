<?php
 
///написать объект DateTime, в объекте объявите как минимум одну константу формата данных (const SIMPLE_FORMAT = 'Y-m-d H:i:s', функция date в помощь), при создании объекта зафиксируйте время создания объекта в приватную переменную. напишите функцию которая выводит время из переменной в любом формате, если не указан берет из константы SIMPLE_FORMAT. Если класс привести к строке вырнет время в формате из пункта выше. Если обратиться как к функии то необходимо указать формат, и вернет время в указанном формате. можно указывать или получать свойства класса year month day и т.д. которые возвращают данные соответсвтенно.




$DateTimes = new class(){

	const SIMPLE_FORMAT = 'Y-m-d H:i:s';
        private $timeNow;
        public function __construct(){
		$this->$timeNow = date(self::SIMPLE_FORMAT, mktime(01, 42, 30, 2, 7, 2022));
	}
        public function ViewDate($format = self::SIMPLE_FORMAT){
        	return date($format, strtotime($this->$timeNow));
        }

};


print_r($DateTimes);
echo "<br/>";
echo $DateTimes->ViewDate();
echo "<br/>";
echo $DateTimes->ViewDate("Y");














