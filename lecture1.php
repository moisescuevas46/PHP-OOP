
<!-- Lecture 1 -->
<!-- Example 1 -->
<?php 
class Dog {
$firstName = “Coko”;
$lastName = “Cuevas”;
$gender = “male”;
$price = Priceless;

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
}

}
$dog1 = new Dog();
$dog1­>firstName = “Boba”;
$dog1­>lastName = “Drink”;

print “The dog’s name is {$dog1­>getName()}.”;
?>
<!-- Example 2 -->
<?php 
class = music {
$band = “Muse”;
$people = “c,m,d”;
$gender = “male”;
$price = alot;

function getName() {
return “{$this­>band}” .
“{$this­>people}”;
}

}
$music1 = new Band();
$music1­>band = “Muse”;
$music1­>people = “C,M,D”;

print “The band’s name is {$music1­>getName()}.”;
?>
<!-- Example 3 -->
<?php 
class = guitar {
$firstName = “Electric”;
$lastName = “Guitar”;
$gender = “inatimate”;
$price = depends;

function getName() {
return “{$this­>firstName}” .
“{$this­>lastName}”;
}

}
$guitar1 = new guitar();
$guitar1­>firstName = “Electric”;
$guitar1­>lastName = “Guitarz”;

print “The guitars’s name is {$guitar1­>getName()}.”;
?>
<!--------------------------------------------------------------->
<!-- LECTURE 2 -->
<!-- Example 1 -->
<?php 

	class Instrument 
	{
	public $firstName;
	public $lastName;
	public $type;

	function __construct($title, $firstName, $lastName, $type) 
	{
	$this­>firstName = $firstName;
	$this­>lastName = $lastName;
	$this­>type = $type;
	}
	function getName() 
	{
		return $this­>firstName. $this­>lastName;
    }
}
$dog1 = new Instrument(“Electric”, “Guitarra”, “Les paul”);
echo $dog1->getName();
//print “instrument 1: {$instrument1­>getName()}.;

?>

<!-- Example 2 -->

<?php 
	class Game {
$name;
$genre;
$price;
function __construct($title, $name, $genre, $price) {
$this­>name = $name;
$this­>genre = $genre;
$this­>price = $price;
}
function getName() {
return “{$this­>name}” .
“{$this­>genre}”;
}
}
$Game1 = new Game(“Rocksmith2014”, “Music”, “seventy dollars”);
print “ Game1: {$Game1­>getName()}.;

?>

<!-- Example 3 -->

<?php 
	class Code {
$type;
$difficulty;
$for;
function __construct($title, $type, $difficulty, $for) {
$this­>type = $type;
$this­>difficulty = $difficulty;
$this­>for = $for;
}
function getName() {
return “{$this­>type}” .
“{$this­>difficulty}”;
}
}
$Code1 = new Code(“java”, “medium”, “Games”);
print “Code 1: {$Code1­>getName()}.;

?>