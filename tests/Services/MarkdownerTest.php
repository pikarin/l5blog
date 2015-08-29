<?php

use App\Services\Markdowner;

class MarkdownerTest extends TestCase
{
    protected $markdown;

    public function setup()
    {
        $this->markdown =  new Markdowner();
    }

/**
 * Test paragraf untuk konversi markdown
 */
    public function testSimpleParagraph()
    {
        $this->assertEquals(
            "<p>test</p>\n",
            $this->markdown->toHtml('test')
        );
    }
}