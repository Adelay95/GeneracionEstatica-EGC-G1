<?php
function run_httrack($url,$structureoption,$fileoption,$erroroption,$diroption,$test) {
	if ($url=="") {
  	$url="localhost";
	}
	if ($structureoption=="") {
	$structure=$structureoption;
	}else{
	$structure=" -".$structureoption;
	}
	if($erroroption==""){
	$error=$erroroption;
	}else{
	$error=" -".$erroroption;
	}
	if($fileoption==""){
	$file=$fileoption;
	}else{
	$file=" -".$fileoption;
	$error=" -o0";
	}
	if ($diroption=="") {
	$dir=$diroption;
	}else{
	$dir=" -".$diroption;
	}
	if($test=="true"){
	$comando1='cd uploads && rm -r * && cd -';
   	$comando2='mkdir uploads/static-generation  && cd -';
	$comando3='httrack '.$url.$error.$structure.$file.$dir.' -O "uploads/static-generation" > uploads/static-generation/res.txt  && cd -';	
	}else{
	$comando1='cd ../wp-content/plugins/generacion-estatica/uploads && rm -r * && cd -';
   	$comando2='cd ../wp-content/plugins/generacion-estatica && mkdir uploads/static-generation  && cd -';
	$comando3='cd ../wp-content/plugins/generacion-estatica && httrack '.$url.$error.$structure.$file.$dir.' -O "uploads/static-generation" > uploads/static-generation/res.txt  && cd -';
	}
	exec($comando1);
	exec($comando2);
	exec($comando3);	
}
function zip_generate($url,$structure,$test){
	if($structure==""){
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
	}else{
		$dir="web";
	}
	if($test=="true"){
	$comando1='cd uploads/static-generation && zip -r ../static-html.zip '.$dir.' && cd -';
	$comando2='rm -R uploads/static-generation  && cd -';
	}else{
	$comando1='cd ../wp-content/plugins/generacion-estatica/uploads/static-generation && zip -r ../static-html.zip '.$dir.' && cd -';
	$comando2='cd ../wp-content/plugins/generacion-estatica && rm -R uploads/static-generation  && cd -';
	}
	
    exec($comando1);
	exec($comando2);
}
function generate_archive_zip(){
	$url=get_option('url_value');
	$structureoption=get_option('structure_value');
	$fileoption=get_option('file_value');
	$erroroption=get_option('error_value');
	$diroption=get_option('dir_value');
	run_httrack($url,$structureoption,$fileoption,$erroroption,$diroption,"false");
	zip_generate($url,$structureoption,"false");
}

?>
