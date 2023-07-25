<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPs concept</title>
</head>
<body>
    
   <?php 
    /* class fruits{

        //properties
         public $name;
         public $color;

         //method
         function set_name($name){
             
            $this-> name=$name;
         }
         function get_name(){
            return $this->name;
         }
      
          function set_color($color){
             
            $this-> color=$color;
         }
         function get_color(){
            return $this->color;
         }
     }

     $obj= new fruits();
     $obj->set_name("APPLE"); 
     echo "1 FRUIT NAME = " .$obj->get_name();
     echo "<br>";
     $obj->set_color("red");
     echo "FRUIT COLOR = " .$obj->get_color();
     echo "<br>";

     $obj1= new fruits();
     $obj1->set_name("BANANA"); 
     echo "2 FRUIT NAME = " .$obj1->get_name();
     echo "<br>";
     $obj1->set_color("yellow");
     echo "FRUIT COLOR = " .$obj1->get_color();
     echo "<br>";  


    // the $this keyword  

    class car{
         
        public $name;     // properties

        function set_name($name){      //method
           $this->name=$name;
        }
        function get_name(){
           echo $this->name. "<br>";

        }
    }

    $obj=new car();
    $obj->set_name("BMW");
    $obj->get_name();
    $obj1 = new car();
    $obj1->set_name("MARUTISUZUKI");
    $obj1->get_name(); 
    $obj2 =new car();
    $obj2->set_name("INNOVA");
    $obj2->get_name(); 
    echo "<br>";  


    // Instanceof keyword

     class car{

    }
    $marutisuzuki= new car();
    echo var_dump($marutisuzuki instanceof car);    */


    // constructor    and   Destructor

  /* class person{

      public $name;
      public $age;

      function __construct($name,$age){
         $this->name=$name;
         $this->age=$age;
      }
      function get(){
         echo "NAME = ".$this->name.    "  AGE = ".$this->age."<br>" ;  
      }
      function __destruct(){
         echo "<br>{$this->name} {$this->age} IS DESTROYED";      // Destructor
      }
   }
   $obj= new person("GOPI", 22);
   $obj->get();
   $obj1= new person("SARAN", 24);
   $obj1->get();
   $obj2= new person("SATHISH", 23);
   $obj2->get();
   $obj3= new person("SANJAY", 27);
   $obj3->get();
   $obj4= new person("SURESH", 30);
   $obj4->get(); */ 

  
  // inheritance

/* class fruit{

    public $name;
    public $color;
   
   function __construct($name,$color){
      $this->name=$name;
      $this->color=$color;
   }
   function get(){
      echo "THE FRUIT NAME IS {$this->name} AND COLOR NAME IS {$this->color} <br>";
   }
 }
 class fruit1 extends fruit{
      function child(){
         echo " <br> AM I FRUIT APPLE";
      }
 }
 $obj=new fruit1("APPLE","RED");
 $obj->get();
 $obj->child();   */   


   // overriding method

 /* class fruit{
      public  $name;
      public  $color;

     function __construct($name,$color){
       $this->name=$name;
       $this->color=$color;
     }
     function get(){
      echo "THE FRUIT NAME IS = ".$this->name."<br> THE COLOR NAME IS =" .$this->color."<b>"; 
     }
   }
  
   class strawberry extends fruit{
      function __construct($name,$color,$weight){
         parent::__construct($name,$color);
         $this->weight=$weight;
      }
      function get(){
         echo parent::get()."<br>THE FRUIT WEIGHT IS =".$this->weight . "KG";
      }
   }
      
   $obj=new strawberry("STRAWBERRY","YELLOW","5");
   $obj->get();  */

   // final keyword => The Final keyword it can be used to prevent(defualt) class inheritance or to prevent method overriding 

  // OOPs  constant 

   class person{
   const a = "I AM PERSON A";
   function get(){
      echo self:: a;
   }
  }
  $obj=new person();
  $obj->get();
  echo "<br>"; 

  // Abstract class

 /* abstract class person{
     abstract function get($name);
  }
  class childA extends person{
   function get($name){
      echo "$name <br>";
   }
  } 
  class childB extends person{
   function get($name){
      echo "$name <br>";
   }
  }
  class childC extends person{
   function get($name){
      echo "$name <br>";
   }
  }
  $obj= new childA();
  $obj->get("CHILD A");
  $obj1 = new childB();
  $obj1->get("CHILD B");
  $obj2 = new childC();
  $obj2->get("CHILD C");   */


  // Traits

 /* trait message1{
   function msg1(){
      echo "HELLO <br>";
   }
  }
  trait message2{
   function msg2(){
      echo "HI";
   }
  }
  class welcome1{
   use message1;
  }
  class welcome2{
   use message1,message2;
  }
  $obj = new welcome1();
  $obj->msg1();
  $obj1 = new welcome2();
  $obj1->msg1();
  $obj1->msg2();   */


 // static method

 /*  class car{
      static function getname(){
         return "MARUTISUZUKI";
      }
    //  function __construct(){
    //     echo "MY CAR NAME IS ". self::getname();
    //  } 
  }
  class marutisuzuki extends car{
     function __construct(){
       echo "my car name is ". parent::getname();
     }
  }
   $obj = new marutisuzuki();  */


   // static properties

  /* class fruit{
       static $name="APPLE";
    //  function __construct(){
    //     echo "MY FRUIT NAME IS".self::$name;
    //  }
   }
   class strawberry extends fruit{
      function __construct(){
         echo "my fruit name is ".parent::$name;
      }
   }
   $obj= new strawberry();  */


   //Access modifiers

   /* class car{
       public $name;
        function __construct(){
          $this->name="BMW";
       }
       function get(){
         echo $this->name;
       }
    }
    $obj = new car();
    $obj->get();  */










?>

 
</body>
</html> 