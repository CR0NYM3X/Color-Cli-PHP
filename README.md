# Color para php en consola


### Ejemplo de uso : 
```sh
// \033[Estilo;Color_texto;Color_fondo m   Texto que quieres poner   \033[0m;
$texto= new Color_texto();
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"griss");
```

### Color en el Texto
![color](https://github.com/CR0NYM3X/Color-Cli-PHP/blob/main/img/color_texto.PNG)
```sh
echo "\nColor texto\n";
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"griss");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"rojo");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"verde");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"naranja");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"azul");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"morado");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"azul_light");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"blanco");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"negro1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"rojo1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"verde1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"naranja1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"azul1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"morado1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"azul_light1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"blanco1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1");
```
### Fondo en el Texto
![fondo](https://github.com/CR0NYM3X/Color-Cli-PHP/blob/main/img/fondos_texto.PNG)
```sh
echo "\FONDOS\n";
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",7,"normal1","mostaza");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","negro");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","rojo");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","verde");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","naranja");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","azul");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","morado");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","azul2");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","blanco");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","normal");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","negro1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","rojo1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","verde1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","naranja1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","azul1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","morado1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","azul_light1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","blanco1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","normal1");
```
### Estilos para el Texto
![estilos](https://github.com/CR0NYM3X/Color-Cli-PHP/blob/main/img/estilos_texto.PNG)
```sh
echo "\ESTILOS\n";
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",1,"normal1","normal1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",2,"normal1","normal1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",4,"normal1","normal1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",0,"normal1","normal1");
echo $texto->txtcolor("Este es el mensaje en el cual modificare\n",7,"normal1","normal1");
```



## Contribuir
Encontraste un error? por favor de publicarlo en [issue tracker](https://github.com/CR0NYM3X/Color-Cli-PHP/issues).
