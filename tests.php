<?php
	namespace dBug\tests;

ini_set('display_errors', 1);
	error_reporting(E_ALL ^E_NOTICE);
	header('Content-Type: text/html;charset=utf-8;');
	include_once(__DIR__.'/dBug.php');
	use dBug\dBug;

	$a="The quick brown fox jumps over the lazy dog";
	
	//trying to modify
	class myDBug extends dBug{
		public static $embeddedStringMaxLength=10;
	}
	new dBug($a);
	new myDBug($a);
	new myDBug("test", "", true);
	new dBug(
		$a
	);
	
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
		null,
	);
	new dBug($variable);
	class Vegetable {

		public $edible;
		public $color;
		public function __construct($edible, $color="green") {
			$this->edible = $edible;
			$this->color = $color;
		}

		public function is_edible() {
			return $this->edible;
		}

		public function what_color() {
			return $this->color;
		}
	}
	new dBug(new Vegetable("spinach"));
	$a=curl_init("https://github.com/");
	new dBug($a);
	//curl_exec($a);
	//new dBug($a);
	
	class myExc extends \Exception{
		private $priv="PREVED";
		protected $ololo="trololol";
		public $num=0;
		public function __construct($msg) {
			parent::__construct($msg);
			$this->code=rand(0, 100);
		}
	};
	try{
		throw new myExc("MedVed");
	}catch(\Exception $e){
		new dBug($e);
	}
	try{
		throw new \Exception("hahahahaha");
	}catch(\Exception $e){
		new dBug($e);
	}
	
	
	//drawing Sierpinsky triangle
	//http://php.net/manual/en/function.imagesetpixel.php
	{
		$x = 200;
		$y = 200;
		$img = imagecreatetruecolor($x, $y);
		 
		$corners[0] = array('x' => 100, 'y' =>  10);
		$corners[1] = array('x' =>   0, 'y' => 190);
		$corners[2] = array('x' => 200, 'y' => 190);

		for ($i = 0; $i < 10000; $i++) {
			$a = rand(0, 2);
			imagesetpixel($img, round($x), round($y), imagecolorallocate($img, 255*$x/190, 255*(1-$y/190), 255*$a/2));
			$x = ($x + $corners[$a]['x']) / 2;
			$y = ($y + $corners[$a]['y']) / 2;
		}
		new dBug($img);
	}
