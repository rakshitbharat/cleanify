<?php

namespace Rakshitbharat\Cleanify\Tests;

use Orchestra\Testbench\TestCase;
use Rakshitbharat\Cleanify\CleanifyServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CleanifyServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
