<?php
//programa para definir mensaje de Bienvenida
//creado por Carlos Damian Reyes
// 09/09/2025
//appweb1.php
class texto
{
public $texto1="bienvendos a programacion de app web";
public function imrpimirtexto()
{
    echo $this ->texto1;
    print $this->texto1;
}

}
$obj1=new texto;
$obj1->imrpimirtexto();
?>