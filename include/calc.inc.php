<?php
declare (strict_types=1);

include_once "autoload.inc.php";


$opp=$_POST['oper'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];

$calc=new Calc($opp,(int)$num1,(int)$num2);

try {
  echo   "<P style='color:green; padding:30px;margin-top:20px;'>"."Answer:".$calc->calculator()."</p>";
	//echo $calc->calculator();
	
} catch (TypeError $e) {
//echo	htmlspecialchars("<P style='color:green; padding:30px;margin-top:20px;'>"."ERROR!: ".$e->getMessage()."</p>");
	echo "<P style='color:green; padding:30px;margin-top:20px;'>"."ERROR!: ".$e->getMessage()."</p>";
}
?>