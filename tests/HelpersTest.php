<?php

namespace Habier\Versioning\Tests;


class HelpersTest extends TestCase
{
    /** @test */
    public function url_equals()
    {
        $this->assertEquals('http://localhost/example?v=1', url_version('/example'));
    }

    /** @test */
    public function asset_equals()
    {
        $this->assertEquals('http://localhost/example?v=1', asset_version('example'));
    }
}
