
<?php

function run_httrack() {
	$url=get_option('url_value');
	if ($url=="") {
  	$url="localhost";
	}
	$comando1='cd ../wp-content/plugins/generacion-estatica && rm -r * && cd -';
   	$comando2='cd ../wp-content/plugins/generacion-estatica && mkdir uploads/static-generation  && cd -';
	$comando3='cd ../wp-content/plugins/generacion-estatica && httrack '.$url.' -O "uploads/static-generation" > uploads/static-generation/res.txt  && cd -';
	exec($comando1);
	exec($comando2);
	exec($comando3);	
}
function zip_generate(){
	$url=get_option('url_value');
	$url2=explode("/",$url);
	$pos = strpos($url, "://");
	if($url==""){
	$dir="localhost";
	}else
	if ($pos === false) {
  	$dir=$url2[0];
	}else{
	$dir=$url2[2];
	}
	$comando1='cd ../wp-content/plugins/generacion-estatica/uploads/static-generation/'.$dir.' && zip -r ../../static-html.zip ./* && cd -';
	$comando2='cd ../wp-content/plugins/generacion-estatica && rm -R uploads/static-generation  && cd -';
        exec($comando1);
	exec($comando2);
}
function generate_archive_zip(){
	run_httrack();
	zip_generate();
}

?>