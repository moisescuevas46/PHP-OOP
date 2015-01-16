<!-- EXAMPLE 1  is_integer (is_int)-->
<?php
	$values = array("1", "99", 101.1, "3/4", null, true, false);
  foreach ($values as $value) {
   echo "is_int(";
  var_export($value);
    echo ") = ";
       var_dump(is_int($value));
     }
       ?>

-------------------
<!-- EXAMPLE 2    is_object (is_obj) -->
<?php  
function get_guitars($obj_name)  
{  
if(!is_object($obj_name))  
{  
return(false);  
}  
return($obj_name->guitars);  
}  
$obj_name = new stdClass;  
$obj_name->guitars = Array('Ibanez', 'Les Paul', 'Fender');  
var_dump(get_guitars(NULL));  
var_dump(get_guitars($obj_name));  
?>
------------
<!-- EXAMPLE 3 is_bool -->
<?php 
function checkBool($string){
    $string = strtolower($string);
    return (in_array($string, array("true", "false", "1", "0", "yes", "no")));
}

?>