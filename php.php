<?PHP
    echo "¡hola mundo!";
?>
</br>
</br>
<?php
    echo "A";
    echo "B";
    echo "C";
?>
</br>
</br>
<?php
    echo "<strong> con strong se coloca el texto en negrita<strong>";// este es un comentario
    /* comentario de dos lineas
    dos lineas 
    dos lineas
    dos lineas*/
?>
</br>
</br>
<?php
$name= 'pepe';
$edad= 25;
echo $name; //muestra pepe
?>
</br>
</br>
<?php
define ('msd', 'hola a todos los clientes de Falabella');
echo msd; //muestra hola a todos, ademas define (nombre, valor, no distingue entre mayúsculas y minúsculas)
?>

<?php
 $string1 = "¡Hola Clientes!"; // comillas dobles
 $string2 = '¡Hola Clientes!'; // comillas simples

?>

<?php //ejemplo numero entero

   $int1 = 42; // número positivo
   $int2 = -42; // número negativo
 ?>

<?php // ejemplo float
  $x = 42.168;
?>
</br>

<?php //ejemplo booleano

   $x = 'verdadero'; 
   $y = 'falso';
   
?>
</br>
</br>
<?php // ejemplo
    $cadena = '10';
    $entero = '20';
    $suma = $cadena + $entero;
    echo($suma); // la solucion de la suma seria 30
?>
</br>
</br>
<?php
    /*$name= 'juanito';
    function getname (){
        echo $name;
    }
    getname (); //esto provoca un error debido a que la variable es local al encontrasre dentro de la funcion, entonces solo se puede acceder dentro de la funcion*/

?>
<?php
    $name= 'Falabella';
    function getname (){ global $name; 
        echo $name;
    }
getname (); //muestra Falabella
?>
</br>
</br>
<?php
    $p='mundo';
    $mundo='world';
    echo $$p; //me mostrara la variable dentro de la variable pero si se usa un solo $ me mostrara la variable 1

?>
</br>
</br>
<?php 
    $num1='8';
    $num2='6';
    //addition
    echo $num1 + $num2; //14

    //resta
    echo $num1 - $num2; //2

    //Multiplicacion
    echo $num1 * $num2; //48
    
    //Division
    echo $num1 / $num2; //1.333333

?>
</br>
<?php
    $x='14';
    $y='3';
    echo $x % $y; //2
?>
</br>
<?php
    $x ++; // equivalente a $ x = $ x + 1;
    $x--; // equivalente a $ x = $ x-1;
?>
</br>
<?php
    $x ++; // incremento posterior 
    $x--; // post-decremento 
    ++ $x; // incremento previo 
    - $x; // pre-decremento
?>
<?php
    $a = 2; $b = $a ++; // $ a = 3, $ b = 2
    $a = 2; $b = ++ $a; // $ a = 3, $ b = 3
?>
</br>
<?php
//operadores de asignacion
    $x= 50;
    $x+=100;
    echo $x; //salidas:150
?>
</br>
<?php 
    $a = 7; 
    $b = 3; 
    $a += $b;
    echo $a; //va a arrojar 10
?>
</br>
</br>
<?php 
    $nombres = array ("Esteban", "Frank", "Juan");
    echo $nombres[1]; // produce Frank
?>
</br>
</br>
<?php
    $myArray[0]='Esteban';
    $myArray[1]='<strong>PHP :D</strong>';
    $myArray[2]=18;

    echo "$myArray[0] tiene $myArray[2] años y conoce $myArray[1]"; //muestra 'Esteban tiene 18 años y conoce PHP'

?>
</br>
</br>
<?php
    $personas = array ("Esteban" => "18", "Frank" => "17", "Juan" => "42");
    // o 
    //Cualquier de las dos funcionan para hacer matrices asociativas
 
    $personas ['Esteban'] = "18";
    $personas ['Frank'] = "17";
    $personas ['Juan'] = "42";

    echo $personas ['Frank']; //la salida es 18
?>
</br>
</br>
<?php
    $Proyectos = array(
    'Falabella'=>array('Esteban ', 'Frank'),
    'Avianca'=>array('Cristian', 'Kevin', ' Juan'),
    'Transmilenio'=>array('Alvaro', 'William')
    );
    echo $Proyectos['Falabella'] [0]; //la salida seria esteban 
    echo $Proyectos['Avianca'] [2]; //la salida seria Juan 

?>
</br>
</br>
<?php
    /* example if
    if (condición) {
 
        código a ejecutar si la condición es verdadera ;
     } else {
      
        código a ejecutar si la condición es falsa ;
     }*/
?>

<?php
    $x=10;
    $y=20;
    if ($x >= $y) {
        echo $x;
    } else {
        echo $y;
    }
    //arrojara la variable y segun las condicionales
?>
<?php
    /*example elsief
    if (condición) {
 
  código a ejecutar si la condición es verdadera ;
} elseif (condición) {
 
  código que se ejecutará si la condición es verdadera ;
} else {
 
   código a ejecutar si la condición es falsa ;
}
    */
?>
</br>
</br>
<?php
    $age= 21;

    if ($age <=13) {
        echo 'niño';
    }elseif ($age > 13 && $age <19) {
        echo 'adolecente';
    }else {
        echo 'adulto';
    }
?>
<?php
    /*example while
    while (la condición es verdadera ) {
 
        código a ejecutar;
     }
     */
?>
</br>
</br>
<?php
    $v = 1;
    while ($v < 7){
        echo "las ganancias por hora de Falabella gracias a su nueva pagina web son $v <br/>";
        $v++;
    }
?>
</br>
</br>
<?php
    /* example do while
    do {
 
  código a ejecutar;
} while (la condición es verdadera );
    */
?>
<?php
    $i=5;
    do {
        echo "el numero es " . $i . "<br/>";
        $i++;
    } while ($i <= 7);
    // mostrara resultados hasta llegar al numero 7

?>

<?php
    /*example bucle for
    for (init; test; increment) {
 
   código a ejecutar;
}
    */
?>
</br>
</br>
<?php
    for ($a = 0; $a < 6; $a++) {
        echo "el valor de 'a' es: ". $a . "<br/>";
    }
?>
</br>
</br>
<?php
    /*Example bucle foreach
    foreach (matriz como $valor) {
 
  código a ejecutar;
}
 
// o
 
foreach (matriz como $clave => $valor) {
 
   código a ejecutar;
}
    */
?>

<?php
    $names = array ('Esteban', 'Frank', 'Juan');
    foreach ($names as $name) {
        echo $name. '<br/>';
    }
    //Esteban
    //Frank
    //Juan
?>
</br>
</br>
<?php
    /* example swith
    case value1:
    //code to be executed if n=value1
    break;
  case value2:
     //code to be executed if n=value2
     break;
  ...
  default:
    // code to be executed if n is different from all labels
}
    */
?>
<?php
    $today = 'mon';

    switch ($today) {
        case 'mon':
            echo 'el dia de hoy es lunes';
            break;
        case 'tue':
            echo 'el dia de hoy es martes';
            break;
        case 'wed':
            echo 'el dia de hoy es miercoles';
            break;
        case 'thu':
            echo 'el dia de hoy es jueves';
            break;
        case 'fri':
            echo 'el dia de hoy es viernes';
            break;
        case 'sat':
            echo 'el dia de hoy es sabado';
            break;  
        case 'sun':
            echo 'el dia de hoy es domingo';
            break;
        default:
            echo 'dia invalido';                                     
    }
?>
</br>
</br>
<?php
    $x=5;
    switch ($x) {
        case 1:
            echo "one";
            break;
        case 2:
            echo 'two';
            break;
        default: echo "no match";
    }
?>
</br>
</br>
<?php
   $day  = 'wed';

   switch ($day) {
       case 'mon':
            echo 'primer dia de la semana';
            break;
       case 'tue': 
       case 'wed':
       case 'thu':
            echo 'dia de trabajo';
            break;
       case 'fri':
            echo 'viernes';
            break;
        default;
            echo 'miercoles';    
   }
?>
</br>
</br>
<?php
    $x = 1;
    switch ($x) {
        case 1:
            echo 'one ';
        case 2:
            echo 'two ';
        case 3:
            echo 'three ';
        default:
            echo 'no';            
    }
?>
</br>
</br>
<?php
    for ($i=0; $i<10; $i++){
        if ($i%2==0) {
            continue;
        }
        echo $i . ' ';
    }
    // 1 3 5 7 9
?>
<?php
    /* example de inclucion
    <? php
 
  echo '<h1> Bienvenido </h1>';
?>
<html>
 
  <body>
 <? php include 'header.php'; ?>   <p> Algo de texto. </p>
   <p> Algo de texto. </p>
   </body>
 </html>
    */

    /* exmple requerir
    <html>
 
  <body>
 <? php include 'header.php'; ?>   <p> Este es un párrafo </p>
   </body>
 </html>
 */

 /*funcion example
 function functionName () {    
 
   // código a ejecutar
 
}
 */
?>
</br>
</br>
<?php
    function sayHello () {
        echo 'Hola';
    } sayHello (); // llamar a la funcion salida hola
?>
</br>
</br>
<?php
    function multiplybytwo ($num1, $num2){
        $respuesta = $num1 * $num2;
        echo $respuesta;
    }
    multiplybytwo(3, 6);
?>
</br>
</br>
<?php
    function setcounter ($num = 10){
        echo " el contador es ". $num;
    }
    setcounter ( 42); //el contador es 42
    setcounter (); //el contador es 10
?>
</br>
</br>
<?php
    function mult($num1, $num2) {
        $res = $num1 * $num2;
        return $res;
    }
    echo mult(8, 3);
?>
</br>
</br>
<?php
    echo $_SERVER['SCRIPT_NAME'];
    //muestra "/somefile.php"
?>
</br>
</br>
<?php
    echo $_SERVER['HTTP_HOST'];
    //muestra "localhost"
?>
</br>
</br>
<?php
/*Este método puede ser útil cuando tiene muchas imágenes en su servidor y necesita transferir el sitio web a otro host. En lugar de cambiar la ruta de cada imagen, puede hacer lo siguiente:
Cree un archivo config.php , que contenga la ruta a sus imágenes:*/
    $host = $_SERVER['HTTP_HOST'];
    $image_path = $host.'/images/';
?> 
</br>
</br>
<?php
/*require 'config.php';
echo '<img src="'.$image_path.'header.png" />';*/
?>
<?php/*
<form action="first.php" method="post">
<p>Name: <input type="text" name="name" /></p>
<p>Age: <input type="text" name="age" /></p>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>*/
?>
</br>
</br>
<html>
 
<body>
 Bienvenido <? php echo $ _POST ["nombre"] ; ?> <br />
 Tu edad: <? php echo $ _POST ["age"] ; ?>
 </body>
 </html>
 </br>
</br>
<html>
    <body>
    <form action="actionGet.php" method="get">
  Name: <input type="text" name="name" /><br /><br />
  Age: <input type="text" name="age" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>  
</body>   
</html> 
</br>
</br>   
<?php
   /*
    echo "Hi ".$_GET['name'].". ";
    echo "You are ".$_GET['age']." years old.";
*/
?>
</br>
</br>  
<?php
 
 // Inicie la sesión
  
 session_start (); $_SESSION ['color'] = "rojo";
 $_SESSION ['nombre'] = "Juan";
 ?>
</br>
</br>
<?php
 // Inicie la sesión
 //session_start ();
?>
 <!DOCTYPE html>
 <html>
 <body>
 <?Php
 echo "Tu nombre es". $_SESSION ['nombre'] ;
// ¿Muestra "Tu nombre es John"
 ?>
 </body>
 </html>
</br>
</br>
<?php
//setcookie(name, value, expire, path, domain, secure, httponly);
?>
</br>
</br>
<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>
</br>
<?php
$myfile = fopen("file.txt", "w");

?>
<?php
$myfile = fopen("names.txt", "w");

$txt = "John\n";
fwrite($myfile, $txt);
$txt = "David\n";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
John
David
*/
?>
</br>
</br>
<?php
$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);
?>
<?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, $name."\n");
  fclose($handle); 
}
?>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>
</br>
</br>
<?php
/*$read = file ('name.txt');
foreach ($read as $lime){
    echo $line ." , ";
}*/
?>
</br>
</br>
<?php
    /*$read = file('names.txt');
    $count = count ($read);
    $i = 1;
    foreach ($read as $line) {
        echo $line
        if ($i < $count) {
            echo ', ';
        }
        $i++;
    }*/
?>
<?php
    class Person {
        public $age; //property
        public function speak() { //method
          echo "Hi!";
        }
      }
?>
<?php
$bob = new Person();
?>
<?php
echo $bob->age;
?>
<?php
/*class person {
    public $age;
    function speak() {
        echo "Hi!";
    }
}
$p1 = new person();
$p1->age=23;
echo $p1->age;
$p1->speak();*/
?>
</br>
</br>
<?php
    class dog{
        public $legs=4;
        public function display() {
            echo $this->legs;
        }
    }
    $d1 = new Dog();
    $d1->display();

    $d2 = new dog ();
    $d2->legs = 2;
    $d2->display();
?>
</br>
</br>
<?php
   /* class person {
        public function __construct(){
            echo "object created";
        }
    }
    $p = new person ();*/
    /*class person {
        public $name;
        public $age;
        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
    }
    $p = new person ('david', 42) */   
?>
</br>
</br>
<?php
/*class person {
    public function __destruct() {
        echo "object destroyed"
    }
}
$p = new person();*/
?>
<?php
    /*interface AnimalInterface { public function makeSound();
    class Dog implements AnimalInterface { public function makeSound() { echo "Woof! <br />"; }
    }
    class Cat implements AnimalInterface {
    public function makeSound() { echo "Meow! <br />";
    }
    $myObj1 = new Dog(); $myObj1->makeSound();
    $myObj2 = new Cat();
    $myObj2->makeSound();*/
?>
    <?php
    
    abstract class Fruit { private $color;
    abstract public function eat();
    public function setColor($c) { $this->color = $c;
    }
    }
    class Apple extends Fruit { public function eat() { echo "Omnomnom";
    }
    }
    $obj = new Apple(); $obj->eat();
?>
<?php
/*class myClass {

static $myProperty = 42; static function myMethod() { echo self::$myProperty;
}
myClass::myMethod();
?>         
<?php

class myClass { final function myFunction() { echo "Parent";
}
}
// ERROR because a final method cannot be overridden
in child classes.
class myclass2 extends myClass { function myFunction() {
echo "Child";
}
}*/
?>