<?
	$a="The quick brown fox jumps over the lazy dog\nThe five boxing wizards jump quickly.\r\nСъешь же ещё этих мягких французских булок, да выпей чаю\n";
	new dBug($a);
	$a=3;
	new dBug($a);
	$a=3.5;
	new dBug($a);
	$a=null;
	new dBug($a);
	$variable = array(
		"first"=>"1",
		"second",
		"third"=>array(
			"inner third 1",
			"inner third 2"=>"yeah"),
		"fourth");
	new dBug($variable);
	class Vegetable {

	   var $edible;
	   var $color;

	   function Vegetable($edible, $color="green") {
		   $this->edible = $edible;
		   $this->color = $color;
	   }

	   function is_edible() {
		   return $this->edible;
	   }

	   function what_color() {
		   return $this->color;
	   }
	}
	new dBug(new Vegetable("spinach"));
	$a=curl_init("http://github.com/");
	new dBug($a);
?>