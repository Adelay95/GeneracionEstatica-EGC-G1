<?php
echo "inicio";
$comando1='mkdir /var/www/html/splc/wp-content/uploads/static-generation';
$comando2='httrack "localhost/splc/" -O "/var/www/html/splc/wp-content/uploads/static-generation" 2>&1';
$out1 = array();
exec($comando1,$out1);
$out2 = array();
exec($comando2,$out2);
print_r($out);
echo "fin";
?>
