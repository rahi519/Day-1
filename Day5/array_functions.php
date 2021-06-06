<?php

//count array function

	$arr = array('php','c', 'c++','java','Android');
	echo count($arr);

//array_count_values

	$arr = array("c","php","c","android","php","java");
	$newarr = array_count_values($arr);
	
	foreach ($new as $key => $values)
	{
		echo "<br/>$key - <strong>$value</strong>";
	}
	
//array_sum

	$myarray = array(1,2,3,4,5);
	echo array_sum($myarray);
	
//array_product
	
	$myarray = array(1,2,3,4,5);
	echo array_product($myarray);
	
//array_reverse
	$arr = array('c','c++','java','android','php');
	$reverse = array_reverse($arr);
	print_r($reverse);
	
//in_array

	$arr = array('c','c++','java','android','php');
	$temp = in_array('php', $arr);
	echo $temp;

//array_rand
	
	$arr = array('c','c++','java','android','php');
	$indexofarray =  array_rand($arr);//Return array indexofarray
	echo $arr[$indexofarray];

//array_unique

	$arr = array('c', 'c++','android', 'java', 'android', 'php');
	print_r(array_unique($arr));

//range

	$arr = range("11", "20");
	foreach($arr as $key => $value)
	{
		echo "<br /> $key --$value";
	}

//sort

	$arr = array(80,60,50,40,8,74);
	sort($arr);
	print_r($arr);

//rsort
	
	$arr =  array(80,60,50,40,8,74);
	rsort($arr);
	print_r($arr);

//asort

	$arr = array(80,60,50,40,8,74);
	asort($arr);
	print_r($arr);
	
//key sort

	$arr = array("Banana" => "Yellow", "Apple" =>
	"Red", "Mango" => "Green");
	ksort($arr);
	foreach($arr as $key => $value)
	{
		echo "<br/>$key - $value";
		
	}
	
//key reverse sort

	$arr = array("Banana" => "Yellow", "Apple" =>
	"Red", "Mango" => "Green");
	krsort($arr);
	foreach($arr as $key => $value)
	{
		echo "<br/>$key - $value";
		
	}
	
//shuffle

	$myarray = array("Football", "Baseball", "Hockey",
	"Tennis");
	shuffle($myarray);
	foreach ($myarray as $key => $value)
	{
		echo "<br/> $value";
	}
	
//array_combine

	$arr1 = array("Banana", "Apple", "Mango");
	$arr2 = array("Yellow", "Red", "Green");
	$NewVar = array_combine($arr1, $arr2);
	print_r($NewVar);
	
//end

	$arr = array('c', 'c++', 'android', 'java','php');
	echo end($arr);
	
//compact

	$name ="rahi";
	$subject = "php";
	$arr = compact("name", "subject");
	print_r($arr);
	
//array flip

	$arr = array("a" => "rahi", "b" => "banana", "c" => "computer");
	$fliparray = array_flip($arr);
	print_r($fliparray);
	
//array_diff

	$a = array("rahi", "c", "c++", "java", "php", "android");
	$b = array("rahi", "c", "java", "php");
	$diff = array_diff($a, $b);
	print_r($diff);	
	
//array_intersect

	$arr1 =  array(0=>"Sunday", 1=>"Monday", 2=>"tuesday");
	$arr2 = array(3=>"Tuesday", 4=>"Sunday", 5=>"Thursday");
	print_r(array_intersect($arr1,$arr2));

//array push

	$a = array("c", "c++");
	array_push($a,"java", "php");
	print_r($a);
	
//array pop
	
	$a =  array("c", "c++", "java", "PHP", "ASP");
	array_pop($a);
	print_r($a);
	array_pop($a);
	print_r($a);
	
//explode

	$mystring = "I Love PHP Language";
	$arr = explode(" ",$mystring);
	print_r($arr);
	
//implode

	$arr = array("i", "love", "php", "language");
	$mystring = implode (" ", $arr);
	echo $mystring;
	
	





	
	
?>

