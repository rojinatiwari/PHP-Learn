
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <label >quantity:</label><br>
    <input type="text" name="quantity"><br>
    
   
    <input type="submit" value="total">
    </form>
     


      <form action="index.php" method ="post">
        <label >x:</label>
        <input type="text" name="x">;
        <input type="submit" value="total">

     </form> 

      <form action="index.php" method="Post">
        <label for="">radius :</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
     </form>
     <br>

     <form action="demo_request.php" method="post">
      Name : <input type="text" name="fname">
      <input type="text">
     </form>

</body>
</html>

<?php 
//variables in php
$item ="pizza";
$price = 88;
$quantity =$_GET["quantity"];
$total = null;

$total = $quantity * $price;
echo"you have ordered {$quantity} x {$item}/s <br>";
echo"your total is :\${$total}";

$x = $_POST["x"];
$y = $_POST["y"];


$total = null;


// math function in php
$total = abs($x);
$total = round($x);
$total = floor($x);
echo $total;
 $total =rand(1,6);

$radius =$_POST["radius"];
$circumference = null;
$area = null;
$volume = null;


$circumference = 2* pi() * $radius;
$circumference =round($circumference,2);

$area = pi()* pow($radius,2);
$area = round($area,2);

$volume = 4/3 *pi()* pow($radius,3);
$volume = round($volume,2);


echo"circumference = {$circumference}cm <br>";
echo"area = {$area}cm^2 <br>";
echo("Volume ={$volume}cm^3<br> ");



//global variables
$x = 5;
$y = 10;
function Test() {  
global $x, $y;
$y = $x + $y; }
myTest();
echo$y;

//static variables
function myTest() { 
   static $x = 0;  
  echo $x;
  $x++;}
  myTest();
  myTest();
  myTest();

//   //php echo statement
echo "<h2>PHP is Fun!</h2>";  
echo "Hello world!<br>";
echo "I am about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with  multiple parameters.";

//php print statement

$txt1 = "Learn PHP";
$txt2 = "ycce.com";
$x = 5;
$y = 4;
print "<h2>$txt1</h2>";
print "Study PHP at $txt2<br>";  
print $x + $y;

//variable usage

$foo = 25;		// Numerical variable$bar = “Hello”;	// String variable

$foo = ($foo * 7);	// Multiplies foo by 7$bar = ($bar * 7);	// Invalid expression 


//if statement = if some condition is true,do something
//               if condition is false , dont do it

$age = 0;
if($age>= 18){
   echo"you can vote";
}
elseif($age == 0){
   echo"you were just born";

}
else{
   echo"you must be 18+ to vote";
}

$adult = true;
if($adult == true){
   echo"you may enter this site";
}else{
   echo"you must be an adult to enter";
}



$hours = 40;
$rate = 23;
$weekly_pay=null;

if($hours<= 40){
   $weekly_pay = $hours *$rate;
}
echo "you made  \${$weekly_pay} this week";




//arrays in php
$places = array("pokhara","kathmandu","lalitpur");
array_push($places,"chitwan","jhapa");
array_pop($places);
array_shift($places);
array_reverse($places);
$places = array_reverse($places);
echo count($places);
foreach($places as $place ){
   echo $place . "<br>";

}

//associative array in php = An array made of key=> value pairs
// countries => capitals
// id => username
// item => price

$capitals = array("kathmandu" =>"nepal",
"delhi"=>"india",
"nyc"=>"usa",
"seoul"=>"south korea");
array_pop($capitals);

foreach($capitals as $key=>$value){
   
   echo"{$key}={$value} <br>";
}


//strings in php
echo strlen("i am learing ");
echo str_word_count("Rojina Tiwari ");
echo strpos("I am topper","toppr");

$x = "Hello WORLD!";
$z = "I am learning php";
$r =$x . $z;
echo $r;
$y = explode(" ",$x);
print_r($y);
echo strtoupper($x );
echo strtolower($x);
echo str_replace("hello","world",$x);
echo strrev($x);
echo trim($x);
echo substr($x,6,5);
echo substr($x,6);
echo substr($x,-5,3);
$s = "I am so sleepy ";




// functions in php
function myMessage()
{
   echo"Hello World!";
}
myMessage();

function myFunction($fname)
{
   echo "$fname Refsnes.<br>";
}

myFunction ("Rojina");
myFunction ("Rojan");
myFunction("Roshan");
myFunction("siblings");



function familyName($fname , $year){
   echo "$fname Refsnes. Born in $year <br>";
}

familyName("Rojina","223");
familyName ("Roshan","11111");
familyName("Rozan","7899");


function setHeight($height = 50){
   echo "The height is : $height <br>";
}
setHeight(350);
setHeight();
setHeight(135);


function sum ($x, $y){
   $z = $x +$y;
   return $z;
}
echo"5+10 = ".sum(5,10)."<br>";
echo"4+6 = ".sum(4,5)."<br>";

function add_five(&$value){
   $value+=5;
}
$num = 2;
add_five($num);
echo$num;


function sumMyNumbres(...$x){
   $n = 0;
   $len = count($x);
   for ($i = 0;$i<$len;$i++)
   {
      $n +=$x[$i];

   }
   return $n;
}
$a = sumMyNumbres(4,4,45,5,8);
echo$a;


//variadic argument

function variadicFunction($lastname,...$firstname)
{
   $txt = "";
   $len = count ($firstname);
   for($i=0;$i<$len;$i++)
   {
      $txt =$txt."Hi,$firstname[$i]$lastname.<br>";

   }
   return $txt;
}
$a =variadicFunction("ROJINA","ROJAN","ROSHAN");
echo$a;

//...operator in the fist of two arguments , willraise an error
function Family(...$firstname, $lastname)
 {
   $txt = "";
   $len = count($firstname);
   for($i = 0; $i < $len; $i++) {
     $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
   }
   return $txt;
 }
 
 $a = family("Doe", "Jane", "John", "Joey");
 echo $a;




//PHP is a loosely typed language
function addNumbers(int$a,int$b){
   return $a+$b;
}
echo addNumbers(5,"5 days");
//since strict is not anables "5 days " is change to int(5),it will return 10;


//The strict declaration forces things to be used in the intended way.
declare(strict_type = 1);//strict declaration

function addNumbers(int $a, int $b){
   return $a+$b;
}

echo addNumbers(5,"5 days");
//since strict is enbled and "5 days" is not an intger , an eror will be thrown 


//php return type declaration

declare(strict_types=1); // strict requirement
function numbers(float $a, float $b) : float {
  return $a + $b;
}
echo numbers(1.2, 5.2);


//superglobals in php--> some predefined variables in php are "superglobals"
//global
$x = 75;
  
function minefunction() {
  echo $GLOBALS['x'];
}
myfunction()

$w= 200;
echo $GLOBALS["s"];
echo $x;


//server in php-> holds information about headers,paths,and script location

echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SEREVER['HTTP_REFERER'];
echo $_SERVER['HTPP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];

//REQUEST IN PHP -> contains submitted form data and all cookie data

$_REQUEST['firstname'];
$name = $_REQUEST['fname'];
echo $name;


//$_POST contains an array of variables received via the HTTP POST method
$name = $_POST['fname'];
echo $name;

?>