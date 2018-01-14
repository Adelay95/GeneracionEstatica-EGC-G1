<?php

namespace EGC\GeneracionEstatica\Tests;

class HttrackTest extends AbstractTest
{
    public function testEjemploGeneracionEstatica(){
        $url='http://blog.httrack.com/';
	$comando1='cd ../wp-content/plugins/generacion-estatica && rm -r * && cd -';
   	$comando2='cd ../wp-content/plugins/generacion-estatica && mkdir uploads/static-generation  && cd -';
	$comando3='cd ../wp-content/plugins/generacion-estatica && httrack '.$url.' -O "uploads/static-generation" > uploads/static-generation/res.txt  && cd -';
	exec($comando1);
	exec($comando2);
	exec($comando3);	
        $this->assertTrue($url=='http://blog.httrack.com/');
    }
}
