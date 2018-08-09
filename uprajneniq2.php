<?php 
	// 1ва задача 
	
	$pow=2;
	echo '<form method="post"><input type="int" name="cifra"></input><input type="submit" name="submit"></input></form>' ;
	 $cifra=$_POST['cifra'];
	 if (isset($_POST['submit'])) {
	 	$reshenie = pow($cifra,$pow);
	 	if (($cifra & ($cifra - 1 )) == 0	 ){
	 		echo $cifra ." is power of 2";

	 	} else {
	 		echo $cifra." is not power of 2";
	 	}

	 }
	 echo "<br>";
	 echo "Край на първа задача";
	 echo "<br>";
	 echo "//////////////////////////////////////////////////////////////////";
	 echo "<br>";
	 echo "Втора задача";
	 echo "<br>";
	 function is_Power_of_three($n)
{
      $x = $n;
      while ($x % 3 == 0) {
      $x /= 3;
     }
       
	if($x == 1)
    {
		return "$n is power of 3";
    }
    else
    {
		return "$n is not power of 3";
    }
  
}
print_r(is_Power_of_three(9)."\n"."<br>");
print_r(is_Power_of_three(81)."\n"."<br>");
print_r(is_Power_of_three(21)."\n"."<br>");
  echo "<br>";
	 echo "Край на Втора задача";
	 echo "<br>";
	 echo "//////////////////////////////////////////////////////////////////";
	 echo "<br>";
	 echo "Трета задача";
	 echo "<br>";
	 function is_Power($x, $y)
{
      $a = $x;
      $b = $y;
      while ($x % $y == 0) {
       $x = $x / $y;
     }
       
	if($x == 1)
    {
		return "$a is power of $b";
    }
    else
    {
		return "$a is not power of $b";
    }
  
}
print_r(is_Power(16,2)."\n"."<br>");
print_r(is_Power(12,2)."\n"."<br>");
print_r(is_Power(81,3)."\n"."<br>");
echo "<br>";
	 echo "Край на Трета задача";
	 echo "<br>";
	 echo "//////////////////////////////////////////////////////////////////";
	 echo "<br>";
	 echo "Четвърта задача";
	 echo "<br>";

	 function missing_number ($num_list){
	 	$new_arr=range($num_list[0],max($num_list));

	 	return array_diff($new_arr,$num_list);
	 }
	 print_r(missing_number(array(1,2,3,6,7,8)));
print_r(missing_number(array(10,11,12,14,15,16,17)));
 echo "Край на Четвърта задача";
	 echo "<br>";
	 echo "//////////////////////////////////////////////////////////////////";
	 echo "<br>";
	 echo "Пета задача";
	 echo "<br>";

function collatz_sequence($x)
{
    $num_seq = [$x];
    if ($x < 1)
    {
       return [];
    }
    while ($x > 1)
      {
       if ($x % 2 == 0)
       {
         $x = $x / 2;
       }
       else
       {
         $x = 3 * $x + 1;
       }
    # Added line
     array_push($num_seq, $x);
      }
    return $num_seq;
}
print_r(collatz_sequence(28));
print_r(collatz_sequence(19));




$b = false;
if($b = true)
print("true");
else
print("false");

var_dump( (bool) 3.2 );





function modifyArray (&$array) 
{
foreach ($array as &$value)
{
$value = $value + 2; 
} 
$value = $value + 3; 
} 
$array = array (-1, 0,1); 
modifyArray($array); 
print_r($array);





echo date("M-d-Y", mktime(0, 0, 0, 12, 52, 1980));








$x =15;
while($x<10)
{
$x--;
}
print ($x); 




$x = `ls -l`;
echo $x;




echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1965));
echo "<br>";
echo (int) ((0.1 + 0.06) * 10)."\n";
echo "<br>";


switch(1) {
case 1: print("PHP Exercises"); 
case 2: print("Python Exercises"); 
default: print("C# Sharp Exercises");
}



$a=0;
$i;
for($i=0;$i<5;$i++)
{
$a+=$i;
}
print($a);

$x=10;
$y=++$x;
print($y);
echo (int) "2451PHP";
echo "<br>";
 



$x = 10;
$x = $x- + 1;
echo $x;
 ?>
