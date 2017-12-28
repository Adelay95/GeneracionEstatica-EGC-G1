
<?php

function run_httrack() {
	$comando1='cd ../wp-content/plugins/generacion-estatica && rm uploads/static-html.zip  && cd -';
   	$comando2='cd ../wp-content/plugins/generacion-estatica && mkdir uploads/static-generation  && cd -';
	$comando3='cd ../wp-content/plugins/generacion-estatica && httrack "localhost/splc/" -O "uploads/static-generation" > uploads/static-generation/res.txt  && cd -';
	exec($comando1);
	exec($comando2);
	exec($comando3);	
}
function zip_generate(){
	$comando1='cd ../wp-content/plugins/generacion-estatica/uploads/static-generation/localhost && zip -r ../../static-html.zip ./* && cd -';
	$comando2='cd ../wp-content/plugins/generacion-estatica && rm -R uploads/static-generation  && cd -';
        exec($comando1);
	exec($comando2);
}
function generate_archive_zip(){
	run_httrack();
	zip_generate();
	echo '<br><a href="../wp-content/plugins/generacion-estatica/uploads/static-html.zip">Descargar</a>';
}

?>
