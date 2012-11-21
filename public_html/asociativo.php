<?php
$alumno=array(5,
			  'nombre'=>'agustin',
			  'email'=>'agustincl',
			  'lenguaje'=>'php',
			  FALSE=>'ja',				
			  99,
			  TRUE=>'jo',
			  8.9=>'jejejejeje'
		);

echo $alumno[1];
echo "<pre>";
print_r($alumno);
echo "</pre>";

foreach($alumno as $key => $value)
{
	echo "esto es la llave:".$key;
	echo "<br/>";
	echo "esto es el value:".$value;
	echo "<hr/>";
}