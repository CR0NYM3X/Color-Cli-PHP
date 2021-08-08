<?php

	class Color_texto
	{
		private $color=array("negro"=>30,
							 "rojo"=>31,
 							 "verde"=>32,
							 "naranja"=>33,
							 "azul"=>34,
							 "morado"=>35,
							 "azul_light"=>36,
							 "blanco"=>37,
							 "normal"=>38,
							 "negro1"=>90,
							 "rojo1"=>91,
 							 "verde1"=>92,
							 "naranja1"=>93,
							 "azul1"=>94,
							 "morado1"=>95,
							 "azul_light1"=>96,
							 "blanco1"=>97,
							 "normal1"=>98);

		private $fondo=array("negro"=>40,
							 "rojo"=>41,
 							 "verde"=>42,
							 "naranja"=>43,
							 "azul"=>44,
							 "morado"=>45,
							 "azul2"=>46,
							 "blanco"=>47,
							 "normal"=>48,
							 "negro1"=>100,
							 "rojo1"=>101,
 							 "verde1"=>102,
							 "naranja1"=>103,
							 "azul1"=>104,
							 "morado1"=>105,
							 "azul_light1"=>106,
							 "blanco1"=>107,
							 "normal1"=>108);


		public function txtcolor($string,$estilo=null,$txtcolor=null,$fondocolor=null)
		{
			if ($string)			
			{

			
			if($estilo>=0 && $estilo<=9)
			{
				$color_string ="\033[".$estilo.";";
			}else{
				die("  El numero  $estilo no existe por favor Consulte \$texto->Estilos()\n  Para ver los numeros para estilos\n");
			}
			
	
			if (isset($this->color[$txtcolor])) 
			{
				$color_string.=$this->color[$txtcolor].";";
			}else{
				die("  El color  $txtcolor no existe por favor Consulte \$texto->Colores()\n  Para ver los colores\n");
			}
			


			if (isset($this->fondo[$fondocolor]))  
			{
				//$color_string.=$this->fondo[$fondocolor]."m";
				$color_string.=$this->fondo[$fondocolor]."m";
			}else{
				die("  El fondo  $fondocolor no existe por favor Consulte \$texto->Fondos()\n  Para ver los Fondos\n");
			}
			


			return $color_string .=  $string ."\033[0m";

			}else
			{
				echo " Porfavor ingrese el texto";
			}

		}


		// Caracteristicas de los colores, Fondos, Estilos
		public function Colores()
		{
		
			echo "Tipos de colores para Texto:\n\n";
			foreach ($this->color as $key => $value) {
			echo " [#] ".$key."\n";	
			}
			echo "---> Los colores que terminen en 1 es porque son mas fuertes\n";

		}



		public function Fondos()
		{
			echo "Tipos de Fondos:\n\n";
			foreach ($this->fondo as $key => $value) {
			echo " [#] ".$key."\n";	
			}
			echo "---> Los colores que terminen en 1 es porque son mas fuertes\n";

		}



		public function Estilos()
		{
			echo "Tipos de Estilos para el texto:\n\n";
			echo  " [#]  0  texto por defaul de la terminal\n";
			echo  " [#]  1  \033[1mHace el texto grueso\033[0m\n";
			echo  " [#]  2  \033[2mAclara  el color del texto\033[0m\n";
			echo  " [#]  4  \033[4mSubralla el texto\033[0m\n";
			echo  " [#]  8  Hace invicible todo el texto -->\"\033[8m Texto invicible\033[0m\"\n";
			echo  " [#]  9  \033[9mAtrabieza una linea en todo el texto\033[0m\n";


		}
		public function ayuda()
		{

			echo " Metodos para utilizar y ejemplos\n\n";
			echo "   \$texto->txtcolor(\"Texto\",Numero estilo,\"color de texto\",\"color de fondo\");\n\n";
			echo "                          Ejemplo\n";
			echo "   \$texto->txtcolor(\"Hola Mundo\",1,\"negro1\",\"verde1\")\n\n";


			echo "   \$texto->colores(); para ver los nombres de los colores Existentes\n"; 
			echo "   \$texto->estilos(); para ver los numeros de los estilos Existentes\n";   
			echo "   \$texto->fondos();  para ver los nombres de los fondos Existentes\n"; 
		}

 
	}
// $texto= new Color_texto();


//             $texto->txtcolor(texto,estilo,color_texto,color_fondo);
//$texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"blanco","negro1");
//$texto->colores();  // para ver los colores Existentes
//$texto->estilos();  // para ver los estilos Existentes
//$texto->fondos();  // para ver los fondos Existentes
//$texto->ayuda(); // ayudaditass



















/*


// \033[0;33;40m   Hola este es el texto   \033[0m;
// \033[Estilo;Color_texto;Color_fondo m   Texto que quieres poner   \033[0m;

// #################   Estilo de la letra

// 0 ----> texto por defaul de la terminal
// 1 ----> Hace el texto grueso
// 2 ----> Aclara  el color del texto
// 4 ----> Subralla el texto
// 7 ----> Ejemplo 7;32m Es para que los numeros de color de texto funcionen como fondo
// 8 ----> Hace invicible todo el texto
// 9 ----> Atrabieza una linea en todo el texto


// ################# Color del texto- Entre mas grande el numero mas fuerte el color

// 30,90 ----> Pone el Texto de color Negro
// 31,91 ----> Pone el Texto de color Rojo
// 32,92 ----> Pone el Texto de color Verde
// 33,93 ----> Pone el Texto de color Naranja
// 34,94 ----> Pone el Texto de color Azul
// 35,95  ----> Pone el Texto de color Morado
// 36,96 ----> Pone el Texto de color Azul_fuerte
// 37,97 ----> Pone el Texto de color Blanco 
// 38 ----> Pone el Texto de color Default


// #################  Color del fondo- Entre mas grande el numero mas fuerte el color

// 40,100 ----> Pone el fondo de texto de color Negro
// 41,101 ----> Pone el fondo de texto de color Rojo
// 42,102 ----> Pone el fondo de texto de color Verde
// 43,103 ----> Pone el fondo de texto de color Naranja
// 44,104 ----> Pone el fondo de texto de color Azul
// 45,105 ----> Pone el fondo de texto de color Morado
// 46,106 ----> Pone el fondo de texto de color Azul_fuerte
// 47,107 ----> Pone el fondo de texto de color Blanco 


//saber colores
//for ($i=600; $i <=1000 ; $i++) { 
//	echo "echo \"\x5c033[$i\x6d Este es el color $i  \x5c033[0\x6d\x5cn\";\n";
//}



// \033[0;40;33m   Texto que quieres poner   \033[0m;
//estilo
echo "\033[0;33m Este estilo es el default 0;33  \033[0m\n";
echo "\033[1;33m Este pone gruesa la letra 1;33  \033[0m\n";
echo "\033[2;33m Este aclara el color 2;33  \033[0m\n";
echo "\033[4;33m Este subralla el texto 4;33  \033[0m\n";
echo "\033[7;33m ---> El 7 es para que el 31m funcione como color de fondo pero el texto sera negro 7;31  \033[0m\n";
echo "\033[8;33m Este pone invisible el texto 8;33  \033[0m invisible\n";
echo "\033[9;33m Este atrabuesa una linea en todo el texto 9;33  \033[0m\n";

//---colores de texto
echo "\033[30m Este es el color de texto negro  30\033[0m\n";
echo "\033[31m Este es el color de texto rojo 31\033[0m\n";
echo "\033[32m Este es el color de texto verde 32\033[0m\n";
echo "\033[33m Este es el color de texto naranja 33\033[0m\n";
echo "\033[34m Este es el color de texto azul 34\033[0m\n";
echo "\033[35m Este es el color de texto morado 35\033[0m\n";
echo "\033[36m Este es el color de texto azurl_fuerte 36\033[0m\n";
echo "\033[37m Este es el color de texto blanco 37\033[0m\n";
echo "\033[38m Este es el color de texto Default 38\033[0m\n";

//---colores de fondos
echo "\033[40m el 40 es el color de fondo negro  \033[0m\n";
echo "\033[41m el 41 es el color de fondo rojo \033[0m\n";
echo "\033[42m el 42 es el color de fondo verde \033[0m\n";
echo "\033[43m el 43 es el color de fondo naranja \033[0m\n";
echo "\033[44m el 44 es el color de fondo azul \033[0m\n";
echo "\033[45m el 45 es el color de fondo morado \033[0m\n";
echo "\033[46m el 46 es el color de fondo azul  \033[0m\n";
echo "\033[47m el 47 es el color de fondo blanco \033[0m\n";




*/








?>