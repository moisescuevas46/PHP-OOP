<?php  
	class Guitar {
		public $maker = "Ibanzez";
		public $type = "electric";
 
		public function instrument__($maker, $type) {
			$this -> Ibanzez = $maker;
			$this -> electric = $type;
		}
		 public function play(){
		 	return("Ready to jam out? What do you think of this -> http://www.phono.com/audio/troporocks.mp3");
		 }
	}
	$plays = new Guitar('fun','varies','and its great to learn');
	echo $plays->play();
?>