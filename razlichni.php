<?php 
		echo "////////////////////////////////////////////////////////" ;
	echo "<br>";

	echo "Exercise 1";
	echo "<br>";
	$color = array('white','green','red','blue','black');
	echo "The memory of that scene for me is like a frame of film forever frozen at the moment: the " . $color['2'] . " carpet , the " . $color['1'] . " lawn,the ". $color['0'] . " house,the leaden sky.The new president and the first lady.-Richard M.Nixon";
	echo "<br>";

	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 2";
	echo "<br>";
	$color1 = array('white', 'green', 'red');
	echo $color1[0]. "," .$color1[1]. "," .$color1[2]  . " , " ;
	echo "<ul>";
		echo "<li>" . $color1[1] ."</li>";
		echo "<li>" . $color1[2] ."</li>";
		echo "<li>" . $color1[0] ."</li>";
	echo "</ul>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 3";
	echo "<br>";
	 $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
		asort($ceu);
		foreach ($ceu as $country => $capital) {
			echo "The capital of $country is $capital"."\n"."<br>" ;
		}
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 4";
	echo "<br>";
	$x=array(1,2,3,4,5);
	unset($x[3]);
	print_r($x);
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 5";
	echo "<br>";
	$color2 = array(4 => 'white', 6 => 'green', 11=> 'red');
	echo array_shift($color2);
	echo "<br>";
	print_r ($color2);
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 6";
	echo "<br>";
function jsonArray($value,$key)
{
echo "$key : $value"."\n";
}
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"jsonArray");
echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 7";
	echo "<br>";
$numbers=array(1,2,3,4,5);
$char=array("$",3);
array_splice($numbers,2,1,$char);
print_r($numbers);
echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 8";
	echo "<br>";
$lelki=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "THIS IS a)";
echo "<br>";
	asort($lelki);
	foreach ($lelki as $x => $x_value) {
		echo "Key=".$x . ", Value=" . $x_value;
		echo "<br>";
	}
	echo "THIS IS b)";
echo "<br>";
	ksort($lelki);
	foreach ($lelki as $x => $x_value) {
		echo "Key=".$x . ", Value=" . $x_value;
		echo "<br>";
	}
	echo "THIS IS c)";
echo "<br>";
	arsort($lelki);
	foreach ($lelki as $x => $x_value) {
		echo "Key=".$x . ", Value=" . $x_value;
		echo "<br>";
	}
	echo "THIS IS d)";
echo "<br>";
	krsort($lelki);
	foreach ($lelki as $x => $x_value) {
		echo "Key=".$x . ", Value=" . $x_value;
		echo "<br>";
	}
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 9 ";
	echo "<br>";
	$temp=array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
	$a = array_filter($temp);
	$average = array_sum($a)/count($a);
	echo "average sum is :" . $average ;
	echo "<br>";
	echo "7 smallest values:";
	asort($temp, SORT_NUMERIC);
   print_r(array_slice($temp, 0, 7, true));
   echo "<br>";
	echo "7 highest values:";
	rsort($temp, SORT_NUMERIC);
   print_r(array_slice($temp, 0, 7, true));
   echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 10 ";
	echo "<br>";
	function columns($arr) {
    if (count($arr) == 0)
        return array();
    else if (count($arr) == 1)
        return array_chunk($arr[0], 1);
 
    array_unshift($arr, NULL);
    // array_map(NULL, $arr[0], $arr[1], ...)
    $transpose = call_user_func_array('array_map', $arr);
    return array_map('array_filter', $transpose);
}
 
function beadsort($arr) {
    foreach ($arr as $e)
        $poles []= array_fill(0, $e, 1);
    return array_map('count', columns(columns($poles)));
}
 
print_r(beadsort(array(5,3,1,3,8,7,4,1,1,3)));
echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 11 ";
	echo "<br>";
	$array1 = array(array(77, 87), array(23, 45));
	$array2 = array("w3resource", "com"); 
	$out = array();
foreach ($array1 as $key => $value){
    $out[] = (object)array_merge((array)$array2[$key], (array)$value);
}
print_r($out);
 	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 12 ";
	echo "<br>";
	$Colorsa = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
	echo "The array with Upper Cases : ";
	echo "<br>";
	$Colorsa = array_map('strtoupper', $Colorsa);
	print_r($Colorsa);
	echo "<br>";
	echo "The array with Lower cases :";
	$Colorsa = array_map('strtolower', $Colorsa);
	print_r($Colorsa);
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 13 ";
	echo "<br>";
	echo implode(",",range(200,250,4))."\n";
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 14 ";
	echo "<br>";
	$simvoli=array("abcd","abc","de","hjjj","g","wer");
	$maxlen = max(array_map('strlen', $simvoli));
	echo "The longest string is:";
	print_r($maxlen);
	echo "<br>";
	$minlen=min(array_map('strlen',$simvoli));
	echo "The shortest string is:";
	print_r($minlen);
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 15 ";
	echo "<br>";
	function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}
print_r( UniqueRandomNumbersWithinRange(11,20,10) );
echo "<br>";
echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 16 ";
	echo "<br>";
	 $arr = array( 1 => "A", 10 => "B", 5 => "C" );
	$arrrr=max(array_keys($arr));
	 print_r($arrrr);
	 echo "<br>";
	 echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 17 ";
	echo "<br>";
	function min_values_not_zero(Array $values) 
	{
	return min(array_diff(array_map('intval', $values), array(0)));
	}
	print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 18 ";
	echo "<br>";
	echo (round(1.155, 2) .  "." . "<br>");
	echo (round(100.25781, 4) .  "." . "<br>");
	echo (round(-2.9636, 3) .  "." . "<br>");
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 19 ";
	echo "<br>";
	$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
	"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
	"holes" => array ( "First", 5 => "Second", "Third"));
	echo $color["holes"][5]."\n"; 
	echo $color["color"]["a"]."\n";
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 20 ";
	echo "<br>"; 
	$customer['address'] = '123 fake st';
	$customer['name'] = 'Tim';
	$customer['dob'] = '12/08/1986';
	$customer['dontSortMe'] = 'this value doesnt need to be sorted';

	$customerSorted = array_replace(array_flip(array('name', 'dob', 'address')), $customer);
	foreach ($customer as $info => $name) {
				echo "$info is $name"."\n"."<br>" ;
			} ;
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 21 ";
	echo "<br>"; 
	function sort_subnets ($x, $y) {
    $x_arr = explode('.', $x);
    $y_arr = explode('.', $y);
    foreach (range(0,3) as $i) {
        if ( $x_arr[$i] < $y_arr[$i] ) {
            return -1;
        }
        elseif ( $x_arr[$i] > $y_arr[$i] ) {
            return 1;
        }
	    }
	    return -1;
	}

	$subnet_list = 
	array('192.169.12',
	'192.167.11',
	'192.169.14',
	'192.168.13',
	'192.167.12',
	'122.169.15',
	'192.167.16'
	);
	usort($subnet_list, 'sort_subnets');
	print_r($subnet_list);
	echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 22 ";
	echo "<br>"; 
	$arra[0]["transaction_id"] = "2025731470"; 
$arra[1]["transaction_id"] = "2025731450"; 
$arra[2]["transaction_id"] = "1025731456"; 
$arra[3]["transaction_id"] = "1025731460"; 
$arra[0]["user_name"] = "Sana"; 
$arra[1]["user_name"] = "Illiya"; 
$arra[2]["user_name"] = "Robin"; 
$arra[3]["user_name"] = "Samantha"; 

//convert timestamp to date 
function convert_timestamp($timestamp){ 
    $limit=date("U"); 
    $limiting=$timestamp-$limit; 
    return date ("Ymd", mktime (0,0,$limiting)); 
} 
//comparison function 
function cmp ($a, $b) { 
    $l=convert_timestamp($a["transaction_id"]); 
    $k=convert_timestamp($b["transaction_id"]); 
    if($k==$l){ 
        return strcmp($a["user_name"], $b["user_name"]); 
    }else{ 
        return strcmp($k, $l); 
    } 
} 
//sort array 
usort($arra, "cmp"); 

//print sorted info 
while (list ($key, $value) = each ($arra)) { 
    echo "\$arra[$key]: "; 
    echo $value["transaction_id"]; 
    echo " user_name: "; 
    echo $value["user_name"]; 
    echo "\n"; 
} ;
echo "<br>";
	echo "////////////////////////////////////////////////////////" ;
	echo "<br>";
	echo "Exercise 23 ";
	echo "<br>";

	function rand_Pass($upper=3,$lower=5,$numeric=1,$other=2){
		$pass_order=Array();
		$passWord= '';
		for ($i=0; $i <$upper; $i++) { 
			$pass_order[]= chr(rand(65,90));
		}
		for ($i=0; $i <$lower; $i++) { 
			$pass_order[]= chr(rand(97,122));
		}
		for ($i=0; $i <$numeric; $i++) { 
			$pass_order[]= chr(rand(48,57));
		}
		for ($i=0; $i <$other; $i++) { 
			$pass_order[]= chr(rand(33,47));
		}

		shuffle($pass_order);

		foreach ($pass_order as $char) {
			$passWord .= $char;
		}

		return $passWord ;



	}

	echo "\n"."Generated Password : ".rand_Pass()."\n";

	
















 ?>