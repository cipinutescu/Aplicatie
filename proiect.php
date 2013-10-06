<?php
function aduna($x)
{
$x=$x+2;
return $x;
}
function inmulteste($x)
{
$x=$x*2;
return $x;
}
function scade($x)
{
$x=$x-2;
return $x;
}
function imparte($x)
{
$x=$x/2;
return $x;
}
//in variabila $funcie se afla numele functiilor.acesta si variabila $x se modifica din cod din cauza ca este un script php. voi prezenta la interviu daca este nevoie o varianta cu un formular html in care vor fi introduse variabila si colectia
$functie=array("aduna","inmulteste","scade","imparte");
$x=5;
$nr=count($functie);
$i=0;
$raspuns=array();
while($nr!=0){
$raspuns[$i]=$functie[$i]($x);
$i++;
$nr--;
}
for($j=0;$j<$i;$j++)
	echo $raspuns[$j]."<br>";
//outputul este sub forma de colectie arbitrar de lunga asa cum s-a cerut.am folosit tot array pentru output
//am folosit array pentru colectie arbitrar de lunga in care pastrez numele functilor
//am folosit $x pentru numarul dat 
?>
