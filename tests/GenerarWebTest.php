<?php

namespace EGC\GeneracionEstatica\Tests;
include(dirname(__FILE__)."/../library/functions.php");
class GenerarWebTest extends AbstractTest
{
    public function testGenerarWeb(){
    $url='http://blog.httrack.com/';
	$structureoption="";
	$fileoption="p3";
	$erroroption="";
	$diroption="";
	run_httrack($url,$structureoption,$fileoption,$erroroption,$diroption,"true");
	zip_generate($url,$structureoption,"true");
	$comando1='cd uploads && ls';
	$out1 = array();
	exec($comando1,$out1);
    $this->assertTrue($out1[0]=="static-html.zip");
    }
}


