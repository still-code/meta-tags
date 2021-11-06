<?php

namespace MetaTag\Tests\Unit;

use MetaTag\MetaTag;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    //XDEBUG_MODE=coverage vendor/bin/phpunit --coverage-html reports/
    /** @test */
    public function it_return_title()
    {
        $this->assertEquals(
            '<title>title</title><meta name="title" content="title"><meta property="og:title" content="title"><meta property="twitter:title" content="title">',
            (new MetaTag)->title('title')->__toString());
    }

    /** @test */
    public function it_return_desc()
    {
        $this->assertEquals(
            '<meta name="description" content="desc"><meta property="og:description" content="desc"><meta property="twitter:description" content="desc">',
            (new MetaTag)->desc('desc')->__toString()
        );
    }

    /** @test */
    public function it_return_type()
    {
        $this->assertEquals(
            '<meta name="og:type" content="type">',
            (new MetaTag)->type('type')->__toString()
        );
    }

    /** @test */
    public function it_return_url()
    {
        $this->assertEquals(
            '<meta name="og:url" content="url">',
            (new MetaTag)->url('url')->__toString()
        );
    }

    /** @test */
    public function it_return_image()
    {
        $this->assertEquals(
            '<meta name="og:image" content="image"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content="image">',
            (new MetaTag)->image('image')->__toString()
        );
    }

    /** @test */
    public function it_return_color()
    {
        $this->assertEquals(
            '<meta name="theme-color" content="#ccdd33">',
            (new MetaTag)->color('#ccdd33')->__toString()
        );
    }
}
