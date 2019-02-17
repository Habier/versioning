<?php

namespace Habier\Versioning\Tests;

use Illuminate\Support\Facades\Config;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Config::set('version.global', 1);
    }
}
