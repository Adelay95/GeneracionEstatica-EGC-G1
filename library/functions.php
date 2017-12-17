
<?php

function run_httrack() {
	$comando1='rm uploads/static-html.zip';
   	$comando2='mkdir uploads/static-generation';
	$comando3='httrack "localhost/splc/" -O "uploads/static-generation" > uploads/static-generation/res.txt';
	exec($comando1);
	exec($comando2);
	exec($comando3);	
}
function zip_generate(){
	$comando1='cd uploads/static-generation/localhost && zip -r ../../static-html.zip ./* && cd -';
	$comando2='rm -R uploads/static-generation';
        exec($comando1);
	exec($comando2);
}

?>
