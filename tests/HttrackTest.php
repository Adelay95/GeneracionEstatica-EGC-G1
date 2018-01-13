<?php

namespace EGC\GeneracionEstatica\Tests;

class HttrackTest extends AbstractTest
{
    public function testBaseDeDatos(){
        $url=get_option('url_value');
        $this->assertTrue($url=='http://blog.httrack.com/');
    }
}
