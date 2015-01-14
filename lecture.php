<?php 
	class Guitar{
		public $type = "Electric";
		public $maker = "Ibanez";
		public $color = "blue";
		public $pick = "0.75 mm";
		public $strum;
		public $cat;
		
		function __construct($type, $maker,$color,$pick, $play,$cat){
			$this->type = $type;
			$this->maker = $maker;
			$this->color = $color;
			$this->pick = $pick;
			$this->play = $play;
			$this->cat = $cat
		}

		function getGuit(){
			return "My guitar that is an " . $this->type . $this->maker . "is " . $this->color . " and I use the " . $this->pick . "Pick" . "http://www.phono.com/audio/troporocks.mp3";
		}

		}

		class Instrument extends Guitar
		
		{
			function play{
				return $this->play;
			}
		}

		class strum extends Guitar{
function string(){
	return $this->bark;
	}
}

$cat = new Cat(electric,ibanez,blue,zeropoint75,play,cat)
	
?>


<?php 
	class car{
		public $type = "Electric";
		public $maker = "Tesla";
		public $color = "black";
		public $model = "sport";
		public $vroom;
		public $kitty;
		
		function __construct($type, $maker,$color,$model, $vroom,$kitty){
			$this->type = $type;
			$this->maker = $maker;
			$this->color = $color;
			$this->model = $model;
			$this->vroom = $vroom;
			$this->kitty = $kitty;
		}

		function getCar(){
			return "My Car that is an " . $this->type . $this->maker . "is " . $this->color . " and I use the " . $this->model . "model";
		}

		}

		class zoom extends Car
		
		{
			function go{
				return $this->zoom;
			}
		}

		class zam extends Car{
function string(){
	return $this->roar;
	}
}

$kitty = new kitty(electric,tesla,black,sport,vroom,kitty)
	
?>


<?php 
	class person{
		public $type = "male";
		public $maker = "God?";
		public $color = "tan";
		public $pt = "nice";
		public $walk;
		public $run;
		
		function __construct($type, $maker,$color,$pt, $walk,$run){
			$this->type = $type;
			$this->maker = $maker;
			$this->color = $color;
			$this->pt = $pt;
			$this->walk = $walk;
			$this->run = $run
		}

		function getGone(){
			return "I am a " . $this->type . " made by " . $this->maker . " and im" " . $this->color . " "I am very" ." $this->pt  " ."and";
		}

		}

		class fast extends person
		
		{
			function asd{
				return $this->Gone;
			}
		}

		class jog extends person{
function string(){
	return $this->run;
	}
}

$cat = new Cat(Male,God,tan,Happy,walking,running)
	
?>