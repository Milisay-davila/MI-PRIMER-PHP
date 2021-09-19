<html>
    <head>
        <title> Mi primera pagina en PHP</title>
</head>
<body>
    <?php
    echo "<p> Servicio nacional de aprendizaje Sena </p>";
    echo "<p>Mantenimiento preventivo y correctivo en servidores </p>";
    echo "<p> Con la empresa compensar EPS</p>";
    ?>
    </body>
    <body>
        <?php
        echo "<strong> <h1> Realizar propuesta de diseño para el centro de datos de compensar </h1> </strong>";
        ?>
        </body>
        <body>
        <?php
        echo "<p> Servicio nacional de aprendizaje Sena </p>";
        //Milisay davila.
        echo "<p> Manual de normatividad para el centro de datos </p>";
        echo "<p> Este es mi primer programa de php para el proyecto! </p>";?>
        </body>
        <body>
        $variable_name = value;
        <?php
        $nombre='Milisay';
        $años=18;
        echo $nombre;
        //Salidas 'Milisat' ?>
        </body>
        <body>
            <?php
        define("MSG", "Servidores en windows server");
        echo MSG;
        // Salidas "Servidores en windows server" ?>
       </body>
       <body>
           <?php
           define("MSG", "Servidores en windows serve",true);
           echo msg; ?>
        </body>
         <body>
             <?php
             $string1 = "Computadores"; //doble comillas
             $string2= 'Tecnologia'; // comillas simples ?>
         </body>
         <body>
             <?php
             $int1=42; //numero positivo
             $int2=-42; // numero negativo
             ?>
        </body>
        <body>
            <?php
            $x= 42.168; // esto es un float?>
        </body>
        <body>
            <?php
            $x= true; $y = false; // esto es un boolean
            ?>
            </body>
            <body>
                <?php
                $str="10";
                $int =20;
                $sum= $str+int;
                echo ($sum);

                // salida 30 ?>
        <body>
            <?php
            $name ='Milisay';
            function getName(){
                echo $name;
            }
            getName();
            // Error : variable indefinida: name ?>

        </body>
        <body> 
            <?php
            $name ='Milisay';
            function getName(){
                global $name;
                echo $name;
            }
            getName();
            
            //Salida 'David'?>
        </body>
        <body>
            <?php
            $a='servidores';
            $servidores= "en linux";
            echo $$a;

            //Salida 'en linux' ?>
        </body>
        <body>
            <?php
            $num=8;
            $num2=6;
            //suma
            echo $num+$num2; //14
            
            //resta
            echo $num1-$num2; //2

            //multiplicacion

            echo $num1*$num2; // 48

            //division

            echo $num2/$num2; //1.33333333333 ?>

        </body>
        <body>
            <?php
            $x=14;
            $y=3;
            echo $x % $y; //2 ?>
        </body>
        <body>
            <?php
            $num=18
            $num++; // equivalente a $x = $x+1;
            $num--; // equivalente a $x = $x-1; 
            $num++; // post-incremento
            $num--; // post-decremento
            ++$x; // pre-incremento
            --$x; // pre-decremento
            $a  = 2; $b = $a++; // $a=3,  $b=2
            $a  = 2; $b = ++$a; // $a=3,  $b=3
            echo $num;
            ?>
        </body>
        <body>
            <?php
            $x=50;
            $x=100;
            echo $x;
            //salida:150?>
        </body>
        <body>
            <?php
            $x=2;
            $y=2;
            echo $x==$y;?>
        </body>
        <body>
            <?php
            $x=1;
            $y=4;
            echo $x !=$y?>
        </body>
        <body>
         <?php
         $names 0= "Milisay";
         $names 1="Jonier";
         $names= array("Milisay","Jonier");
         $names [0]= "Nilisay";
         $names [1]="Jonier";
         echo $names[0]; //salida  "Milisay" ?>
        </body>
        <body>
            <?php
            $myArray[0]="Milisay";
            $myArray[1]= "<strong>configurar el active directory para la empresa</strogn>";
            $myArray[2]="aprendiz del sena";

            echo "myArray[0] es $myArray[2] y sabe $myArray[1]";
            // Salida "Milisay es aprendiz del sena y sabe configurar el active directory para la empresa "?>
        </body>
        <body>
            <?php
            $people=array("David"=>"27", "Maria"=> "21", "John"=>"42");
            echo $people['Maria']; //salida 21"?>
            </body>
            
        <body>
            <?php
            $servidoreslogicos=array(
                'online'=>array('ISS','DA'),
                'offline'=>array('SSH','HTTPS','LAMP')
            );
            echo $servidoreslogicos['online'][0];
            echo $servidoreslogicos['offline'][1]; ?> 
        </body>
        <body>
            <?php
            $user="Admin"
            if($user>Admin){
                echo $Admin;
            }else{
                echo "puede administrar todo los usarios del servidor";
            }
            ?>
        </body>
        <body>
            <?php
            if($user==admin){
                echo "Puede ingresar al servidor";
            }
            else{
                echo "No es admin, no puede ingresar al servidor";
            }
            ?>
        </body>
        <body>
            <?php
            $cargo=contador;
            if($cargo=contador){
                echo "ingresar a la carpeta de ventas.";
            }elseif($cargo=contador && $cargo=diferente){
                echo "No dejarlo ingresar";
            }else{
                echo "Es un intruso"
            }
            ?>
        </body>   
        <body>
         <?php
         $i=1;
         while($1<7){
             echo "El valor es $1 <br />";
             $i++;
         }
         ?>
        </body>
        <body>
            <?php
            $i=1;
            do{
                echo "Si el usuario es 1 , es tecnologo".$i."<br/>";
                $i++;
            }while($i>=3)
            ?>
        </body>
        <body>
            <?php
            for($a=0; $a <6; $a++){
                echo "value of a: ".$a. "<br />";
            }
            ?>
        </body>
        <body>
            <?php
            $names=array("Milisay","Jonier");
            foreach($names as $name){
                echo $name. 'br />';
            }
            ?>
        </body>
        <body>
            <?php
            $Usuariosdelaempresa=true;
            switch ($Usuariosdelaempresa){
                case "Admin":
                    echo "Bienvenido administrador";
                    break;
                case "Tecnologo":
                    echo "Bienvenido tecnologo";
                    break;
                case "Tecnico en infraestructura"
                echo "Bienvenido tecnico" 
                default:
                echo "Ingreso invalido";
            }
            ?>
        </body>
        <body>
            <?php
            function sayHello(){
                echo "Bienvenidos a UniteServer";
            }
            sayHello();
            ?>
        </body>       
        <body>
            <?php
            function multiplyByTwo($numero){
                $answer=$numero*2;
                echo $answer;
            }
            multiplyByTwo(3);
            ?>
        </body>
        <body>
            <?php
            function setCounter($num=10){
                echo "Counter is".$num;
            }
            ?>
        </body>
        <body>
            <?php
            function mult($num,$num2){
                $res= $num1*$num2
                return $res;
            }
            ?>
        </body> 
        <body>
            <?php
            echo $_SERVER['SCRIPT_NAME'];
            // salida "/somefile.php"
            ?>
        </body>
        <body>
            <?php
            echo $_SERVER['HTTP_HOST'];
            //salida "localhost"
            ?>
        </body>
        <body>
        <?php
        require 'config.php';
        echo '<img src="'.$image_path.'1.png" />';
        ?>  
        </body>
        <body>
            <form action="first.php" method="post">
                <p>Nombre: <input type="text" name="nombre"/>
        </p>
        <p>Edad: <input type="text" name="age"  /></p>
        <p><input type="Submit" name="enviar" value="enviar" /></p>
        <form>
        </body>
        <body>
            Bienvenido <?php echo $_POST["name"]; ?><br />
            Tu edad:<?php echo $_POST["age"];?>
        </body>
        <body>
        <form action="actionGet.php" method="get">
         Nombre: <input type="text" name="Nombre" /><br /><br />
         Edad: <input type="text" name="Edad" /><br /><br />
        <input type="submit" name="Enviar" value="Enviar" />
        </form>
        <?php
        echo "Hola".$_GET['Nombre'].". ";
        echo "Tu eres ".$_GET['Edad']."años.";?>
        </body>
        <?php
        //Iniciar la sesión
        session_start();
        $_SESSION['Usuario de UniteServer'] = "Tecnologo";
        $_SESSION['Nombre'] = "Milisay";?>
        <?php
        session_start();
        ?>
        <!DOCTYPE html>
        <html>
        <body>
        <?php
        echo "Tu nombre es: " . $_SESSION['Nombre'];
        ?>
        </body>
        <body> 
        <?php
        setcookie(name,value,expire,path,domain,secure,httponly);?>
        </body> 
        <body>
        <?php
        $value = "Milisay";
        setcookie("user", $value, time() + (86400 * 30), '/'); 

        if(isset($_COOKIE['user'])) {
        echo "Value is: ". $_COOKIE['user'];
}
?>
        </body>
        <body>
            <?php
            $myfile=fopen("UniteServer.txt","w");?>
        </body>
        <body>
        <?php
        $myfile = fopen("names.txt", "w");

        $txt = "Milisay\n";
        fwrite($myfile, $txt);
        $txt = "Jonier\n";
        fwrite($myfile, $txt);
        fclose($myfile);?>
        </body>
        <body>
            <?php
            $myFile= "UniteServer.txt";
            $fh= fopen($myFile, 'a');
            fwrite($fh,"Some text");
            fclose($fh);?>
        </body>
        <body>
            <?php
            if(isset($_POST['text'])){
                $nombre=$_POST['text'];
                $handle=fopen('nombres.txt','a');
                fwrite($handle,$nombre."\n")
                fclose($handle); 
            }
            ?>
            <form method="post">
            Nombre: <input type="text" name="text" /> 
             <input type="submit" name="Enviar" /></form>
        </body>
        <body>
            <?php
            $read= file('UniteServer.txt');
            foreach($read as $line){
                echo $line .","; 
            }
            ?>
        </body>
        <body>
            <?php
            $read =file('UniteServer.txt');
            $count =count($read);
            $i=1;
            foreach ($read as $line){
                echo $line;
                if($i<$count){
                    echo ',';
                }
                $i++;
            }
            ?>
        </body>
        <body>
            <?php
            class Person{
                public $edad;
                public function speak() {
                    echo "Bienvenido a UniteServer!"
                }
            }
            ?>
        </body>
        <body>
            <?php
            class Person{
                public $edad;
                function speak(){
                    echo "Bienvenidos a UniteServer"
                }
            }
            $p1= new Person();
            $p1->edad=18;
            echo $p1->edad;
            $p1->speak();
            ?>
        </body>
        <body>
            <?php
            class Person{
                public $empleados=4;
                public function display(){
                    echo $this->empleados;
                }
            }
            $d1= new Person();
            $d1->display();

            $d2= new Person();
            $d2->empleados=2;
            $d2->display();?>
        </body>
        <body>
            <?php
            class Person{
                public $nombre;
                public $edad;
                public function __construct($nombre,$age){
                $this-> name=$nombre;
                $this ->age=$edad;
                echo "Objeto creado";
                }
            }
            $p= new Person("Milisay",18);?>
        </body>
        <body>
            <?php
            class Person{
                public function __destruct(){
                    echo "Objeto destruido"
                }
            }
            $p= new Person();?>
        </body>
        <body>
            <?php
            class DataCenter{
                public $DataCenter;
                public function Tipo(){
                    echo "Tipo del data center";

                }
            }
            class TIER extends DataCenter{

            } 
            $d= new Tier();
            $d->Tipo();?>
        </body>
        <body>
            <?php
            interface UniteServer{
                public fuction makeSound()
            }
            class empresa implements UniteServer{
                public fuction makeSound(){
                    echo "Los mejores en tecnologia! <br />";
                }
            }
            $myObj1= new empresa();
            $myObj1->makeSound();?>
        </body>
        <body>
            <?php
            abstract class Frutas{
                private $color;
                abstract public function eat();
            public function setColor($c){
                $this->color=$c;
            }
            }
            class Manzana extends Frutas{
                public function eat(){
                    echo "omnomnom"
                }
            }
            $obj= new Manzana();
            $obj->eat();?>
        </body>
        <body>
            <?php
            class myClass{
                static $myProperty=42;
                static function myMethod(){
                    echo self::$myProperty;
                }
            }

            myClass::MyMethod();?>
        </body>
        <body>
            <?php
            class MiClase{
                final function myFunction(){
                    echo "Padres";
                }
            }
            // error porque un método final no se puede anular en las clases secundarias.
            class MiClase2 extends MiClase{
                function myFunction(){
                    echo "Niños";
                }
            }
            ?>
        </body>
        <body>
            <?php
            final class MiClaseFinal{
            }
            //error porque no se puede heredar una clase final.
            class MiClase extends MiClaseFinal{
            }?>
        </body>
    </html>

