<?php

/* $name="gopikrishnan";
 $age=22;
 $place="panruti";

 $data="chennai";
 $get_data= print $data;
 echo "<br>";
 echo $name,$age,$place;
 echo "<br>";
 print $name;
 echo "<br>"; 

//arrays
 $arr=["green","red","yellow","white"];
 echo $arr[0];
 print_r ($arr); 


  // variables

 $name="sarangopi";
 $name=1;
 $name=1.1;
 echo var_dump($name); */


/* $text = "example for variables";
echo $text;
echo "<br>";
//integer
$data_int=1;
echo $data_int;
echo "<br>";
//string
$data_str="sarangopi";
echo $data_str;
echo "<br>";
//float
$data_flt=1.5;
echo $data_flt;
echo "<br>";
//array
$data_arr=["red","blue"];
print_r ($data_arr);
echo "<br>";
echo $data_arr[0];
echo "<br>";
//object
class vehicle{
    function get_vehicle(){
        return "bike"; 
    }
}
$data_obj=new vehicle();
echo $data_obj->get_vehicle();
echo "<br>";  */

//number

/* $age=1;
//echo $age;
$wt=71.5;
echo $wt;

echo var_dump(is_float($wt)); */

//string

/* $name="gopikrishnan panruti";
 $age=22;
//strlen
echo strlen($name);
echo"<br>";
//str_word_count
echo str_word_count($name);
echo "<br>";
//strreverse
echo strrev($name);
echo "<br>";
//strposition ,stripos-capital letter ,strrpos and strripos
echo strpos($name,"n");
echo "<br>";
echo stripos($name,"KRISHNAN");
echo "<br>";
echo strrpos($name,"i");
echo "<br>";
echo strripos($name,"N");
echo "<br>"; 
//strstr and stristr
echo strstr($name,"g");
echo "<br>";
echo stristr($name,"N");
//trim
echo "<br>";
echo trim($name);
echo "<br>";
//str_replace
echo str_replace("panruti","chennai",$name);
echo "<br>"; */  


//explode string--->array
/* $name="text.png";
$arr=explode(".",$name)[0];
print_r($arr); */

//implode array---->string
 /* $colours=["red","green","yellow"];
$arr=implode(",",$colours);
print_r($arr); */

//str_repeat
/* $name="sarangopi";
echo str_repeat($name,2);
echo "<br>"; 
//strtolower and strtoupper
$name="GOPI";
echo strtolower($name);
echo "<br>";
echo strtoupper($name);
echo ucfirst($name);
echo lcfirst($name);
echo str_shuffle($name);*/


//constants

//define("REGNO","191009021");
//echo REGNO;


// magic constants is five types

// line
/*echo __LINE__;
echo "<br>";

//file
echo __FILE__;
echo "<br>"; 

// function,class,method

class colours{
    function print_f(){
        echo __FUNCTION__;
    }

    function print_c(){
        echo __CLASS__;
    }
     
    function print_m(){
        echo __METHOD__;
    }
}
$obj= new colours();
    echo $obj->print_m(); */

   
  //condition
  
/* $x=30;
$y=50;

if($x>$y){
    echo "x is greater than y";
}else if($x<$y){
    echo "y is  greater than x";
}else{
    echo "x and y is equal";
} 

 //switch
  $data="green";
  
  switch($data){
    case "red": echo "red";
    break;
    case "green": echo "green";
    break;
    default: echo "no color selected";
    break;    
  }  */


  //math

  // pi
 
 /* echo pi();
  echo "<br>";

  //min and max

  echo min(10,20,30,40);
  echo "<br>";
  echo max(10,30.65,89,98);
  echo "<br>";

  //abs negative value convert to postive value
  
  echo abs(-5);
  echo "<br>";

  // seqare root

  echo sqrt(64);
  echo "<br>";

  // round

  echo round(142.6);
  echo "<br>";

  //rand

  echo rand(24,43);
  echo "<br>";
  echo (rand(). "<br>");  

  // ceil,floor and round()

  echo (ceil(0.60) . "-floor-".floor(0.60). "-round-".round(0.60)) . "<br>";  
  echo (ceil(0.40) . "-floor-".floor(0.40) . "-round-".round(0.40)) . "<br>";
  echo (ceil(10) . "-floor-".floor(10) . "-round-".round(10)) . "<br>";
  echo (ceil(10.1) . "-floor-".floor(10.1) . "-round-".round(10.1)) . "<br>";
  echo (ceil(-10.1) . "-floor-".floor(-10.1) . "-round-".round(-10.1)) . "<br>";  */


 /* //loops

//for loop

for($i=0;$i<100;$i++){
    echo $i;
}
echo "<br>";
// while loop

$i=1;
while($i<10){
    echo $i;

   // if($i==4) break;
    $i++;
}
echo "<br>";
//while loop continue
$i=1;
while($i<10){

   if($i==4){
        $i++;
        continue;
   };
   echo $i;
    $i++;
}
echo "<br>";

// do while loop

$i=10;
do{
    echo $i;
    $i++;
}while($i<10);
echo "<br>";
// foreach

$data_arr=["red","blue","yellow"];
foreach($data_arr as  $data=>$val){
    echo $data. " - ".$val. "<br>";
}   */

// php operators

// arthmetic
/* $x=10;
$y=4;
echo $x+$y . "<br>";
echo $x-$y . "<br>";
echo $x*$y . "<br>";
echo $x/$y . "<br>";
echo $x%$y . "<br>";

//comparison
//  not equal symbol (<>,!=,!==,) 
// equal symbol (==,===)
$X=10;
$y=11;
var_dump($x>=$y);
echo "<br>";

//logical (or relational)
// (and,&&) (or,||) (xor)
$x=10;
$y=10;
if($x==10 && $y==10)
echo "welcome";
echo "<br>";  */

//Assignment
/* $x=5;
$y=10;
$a=3;
//$a+$x+$y   
$a %=$x+$y;
echo $a;

//$x =$x+$x
$x=10;
$x +=$x;  // $x =$x+$x
echo $x; 

// Increment and Decrement

$x=10;
echo --$x;
echo "<br>";
echo $x;  

//string

$x= "welcome";
$y= "home";
//echo $x. " to " . $y;
$x .=$y;
echo $x;  

// conditional

$name="";
echo $username=(empty($name)?"anonymous":"welcome $name") 


//php superglobals
//global

$x=10;

function print_data(){
    global $x;
    echo $x;
    
}
print_data();  

//local

//$x=20; // global

function print_data(){
     $x=10; //local
     echo $x;
    
}
print_data();
//echo $x;  */

// GLOBALS

$_SESSION["USERNAME"]="ARRAY";

 echo "<pre>";

print_r ($GLOBALS);

echo "</pre>";  

function print_data(){
    echo $_SESSION["USERNAME"];
}
print_data();

?>