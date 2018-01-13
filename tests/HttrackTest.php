<?php

namespace EGC\GeneracionEstatica\Tests;

use EGC\GeneracionEstatica\functions;


class HttrackTest extends AbstractTest
{
    public function testBaseDeDatos(){
	run_httrack();
        $this->assertTrue($url=='http://blog.httrack.com/');
    }
}
