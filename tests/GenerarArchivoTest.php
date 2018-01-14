<?php

namespace EGC\GeneracionEstatica\Tests;
include(dirname(__FILE__)."/../library/functions.php");
class GenerarArchivoTest extends AbstractTest
{
    public function testGenerarArchivo(){
    $url='http://blog.httrack.com/';
	$structureoption="";
	$fileoption="p3";
	$erroroption="";
	run_httrack($url,$structureoption,$fileoption,$erroroption);
	zip_generate($url,$structureoption);	
    $this->assertTrue($url=='http://blog.httrack.com/');
    }
}
