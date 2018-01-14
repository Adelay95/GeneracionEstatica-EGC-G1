<?php
namespace EGC\GeneracionEstatica\Tests;
class GenerateZipTest extends AbstractTest
{
    public function testGenerateZip(){
    $url='Prueba';
	$structureoption="";
	$comando1='cd uploads && mkdir static-generation && cd -';
	$comando2='cd uploads/static-generation && mkdir Prueba && cd -';
	$comando3='cd uploads/static-generation/Prueba && echo "Texto de prueba" > prueba.txt && cd -';
	exec($comando1);
	exec($comando2);
	exec($comando3);
	zip_generate($url,$structureoption,"true");
	$comando4='cd uploads && ls';
	$out1 = array();
	exec($comando4,$out1);
    $this->assertTrue($out1[0]=="static-html.zip");
    }
}
