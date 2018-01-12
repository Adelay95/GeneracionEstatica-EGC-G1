<?php
echo "inicio";
$comando1='mkdir uploads/static-generation';
$comando2='httrack "localhost/splc/" -O "uploads/static-generation" 2>&1';
$comando3='httrack "localhost/splc/" -O "uploads/static-generation" > uploads/static-generation/res.txt';
echo $comando1;
$out1 = array();
exec($comando1,$out1);
$out2 = array();
exec($comando2,$out2);
print_r($out1);
print_r($out2);
echo "fin";
?>

