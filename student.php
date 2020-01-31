<?php
	$details=array(	"su12"=>array("name"=>"kunal singh",
							   "class"=>10,"marks"=>array("hindi"=>40,"english"=>82,"maths"=>59)),
					"su13"=>array("name"=>"jaswin singh",
							   "class"=>10,"marks"=>array("hindi"=>48,"english"=>74,"maths"=>63)),
					"su14"=>array("name"=>"asit prakash",
							   "class"=>10,"marks"=>array("hindi"=>92,"english"=>52,"maths"=>47)),
					"su15"=>array("name"=>"pranav prakash",
							   "class"=>10,"marks"=>array("hindi"=>42,"english"=>56,"maths"=>75)),
					);
	print_r($details);
	echo "<br>";

	$sum1=$sum2=$sum3=$sum4="";
	$sum1=$details['su12']['marks']['hindi'] + 
		  $details['su12']['marks']['english'] +
		  $details['su12']['marks']['maths'];

	$sum2=$details['su13']['marks']['hindi'] + 
		  $details['su13']['marks']['english'] +
		  $details['su13']['marks']['maths'];

	$sum3=$details['su14']['marks']['hindi'] + 
		  $details['su14']['marks']['english'] +
		  $details['su14']['marks']['maths'];

	$sum4=$details['su15']['marks']['hindi'] + 
		  $details['su15']['marks']['english'] +
		  $details['su15']['marks']['maths'];

	$total = array($sum1 ,$sum2,$sum3,$sum4 );
	rsort($total);
	print_r($total);

	echo "<table border='1px solid black'>";
	echo "<tr>";
		echo "<th>Student_ID</th>";
		echo "<th>Total Marks</th>";
		echo "<th>Class</th>";
		echo "<th>Name</th>";
	echo "</tr>";
?>

