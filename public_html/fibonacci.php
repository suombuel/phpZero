0,1,1,2,3,5,8,13,21,34
<hr/>
<?php
$fibo=array();
$max=35;
echo "0,";
$fibo[0]=0;
$n1=1;
$n2=0;
$n=$n1+$n2;
while($n<$max)
{	
	echo $n.",";
	$fibo[]=$n;
	$n=$n1+$n2;
	
	$n2=$n1;
	$n1=$n;	
}
?>
TENGO HTML DE OTRA CLASE
<?php 
echo "<pre>";
print_r($fibo);
echo "</pre>";

$text=implode(',', $fibo);
echo $text;

