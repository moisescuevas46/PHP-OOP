<?php 
 class Animal{
 	public $firstName;
 	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight){
		$this->scientificName = $scientificName;
		$this->firstName=$scientificName ;
		$this->lastName= $lastName;
		$this->gender= $gender;
		$this->weight= $weight;
	}

	function getName(){
		return "This is my " . $this->firstName . "and last " . $this->lastName . " and this is my scientificName " . $this->scientificName .".";
	}
 }	
 class Cat extends Animal{
 	function __construct($scientificName, $firstName,$lastName,$gender,$weight,$meow){
 		parent::__construct($scientificName, $firstName,$lastName,$gender,$weight,$meow);
 		$this->meow = $meow;
 	}
 }

 class Dog extends Animal{
 	function __construct($scientificName, $firstName,$lastName,$gender,$weight,$meow){
 		parent::__construct($scientificName, $firstName,$lastName,$gender,$weight,$meow);
 		$this->bark = $bark;
 	}
 	function hello(){
 		return $this->bark;
 	}
 }
 $cat = new Cat("Cat","Mellow","Yellow","male",15,"true");
 print "Animal 1 is a " . $cat->getName();
 ?>



 ----------



 <?php 
 class school{
 	public $Name;
 	public $Grade;
	public $Public;
	public $Teacher;
	public $Student;

	function __construct($Name, $Grade, $Public, $Teacher, $Student){
		$this->Name = $Name;
		$this->Grade=$Grade ;
		$this->Public= $Public;
		$this->Teacher= $Teacher;
		$this->Student= $Student;
	}

	function getName(){
		return "This is my " . $this->firstName . "and its grades are " . $this->lastName . " and it is a " . $this->public ." school.";
	}
 }	
 class Teach extends school{
 	function __construct($Name,$Grade,$Public,$Teacher,$Student){
 		parent::__construct($Name,$Grade,$Public,$Teacher,$Student);
 		$this->name = $Name;
 	}
 }

 class Student extends school{
 	function __construct($Name,$Grade,$Public,$Teacher,$Student){
 		parent::__construct($Name,$Grade,$Public,$Teacher,$Student);
 		$this->asd = $asd;
 	}
 	function hello(){
 		return $this->asd;
 	}
 }
 $cat = new Cat("Cat","Mellow","Yellow","male",15,"true");
 print "Animal 1 is a " . $cat->getName();
 ?>


 ======================


 <?php 
 class school{
 	public $Name;
 	public $Grade;
	public $Public;
	public $Teacher;
	public $Student;

	function __construct($Name, $Grade, $Public, $Teacher, $Student){
		$this->Name = $Name;
		$this->Grade=$Grade ;
		$this->Public= $Public;
		$this->Teacher= $Teacher;
		$this->Student= $Student;
	}

	function getName(){
		return "This is my " . $this->firstName . "and its grades are " . $this->lastName . " and it is a " . $this->public ." school.";
	}
 }	
 class Teach extends school{
 	function __construct($Name,$Grade,$Public,$Teacher,$Student){
 		parent::__construct($Name,$Grade,$Public,$Teacher,$Student);
 		$this->name = $Name;
 	}
 }

 class Student extends school{
 	function __construct($Name,$Grade,$Public,$Teacher,$Student){
 		parent::__construct($Name,$Grade,$Public,$Teacher,$Student);
 		$this->asd = $asd;
 	}
 	function hello(){
 		return $this->asd;
 	}
 }
 $cat = new Cat("Cat","Mellow","Yellow","male",15,"true");
 print "Animal 1 is a " . $cat->getName();
 ?>