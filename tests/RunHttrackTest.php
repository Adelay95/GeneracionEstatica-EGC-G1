<?php
namespace EGC\GeneracionEstatica\Tests;

class RunHttrackTest extends AbstractTest
{
    public function testRunHttrack(){
    $url='http://blog.httrack.com/';
	$structureoption="N1";
	$fileoption="p3";
	$erroroption="";
	run_httrack($url,$structureoption,$fileoption,$erroroption,"true");
	$comando1='cd uploads/static-generation && ls && cd -';
	$out1 = array();
	exec($comando1,$out1);
    $this->assertTrue(in_array("web", $out1));
	$comando2='cd uploads/static-generation/web && ls';
	$out2 = array();
	exec($comando2,$out2);
    $this->assertTrue(in_array("images", $out2));
	$this->assertTrue(in_array("index.html", $out2));
    }
}
