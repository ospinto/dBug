<?
	include_once(__DIR__.'/dBug.php');
	$a="The quick brown fox jumps over the lazy dog\nThe five boxing wizards jump quickly.\r\nСъешь же ещё этих мягких французских булок, да выпей чаю\n";
	new dBug($a);
	$a='vodka';
	new dBug($a);
	$a=3;
	new dBug($a);
	$a=3.5;
	new dBug($a);
	$a=null;
	new dBug($a);
	$a=true;
	new dBug($a);
	$a=false;
	new dBug($a);
	$variable = array(
		"first"=>"1",
		"second",
		"third"=>array(
			"inner third 1",
			"inner third 2"=>25),
		"fourth"=>49.36,
		'fifth'=>true,
		6=>false,
		NULL,
	);
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

	class myExc extends Exception{
		private $priv="PREVED";
		protected $ololo="trololol";
		public $num=0;
		function __construct($msg){
			parent::__construct($msg);
			$this->code=rand(0,100);
		}
	};
	try{
		throw new myExc("MedVed");
	}catch(Exception $e){
		new dBug($e);
	}
	try{
		throw new Exception("hahahahaha");
	}catch(Exception $e){
		new dBug($e);
	}
	
?>