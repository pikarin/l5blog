<?php

namespace App\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

class Markdowner
{
    public function toHtml($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        $text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }

    private function preTransformText($text)
    {
        return $text;
    }

    private function postTransformText($text)
    {
        return $text;
    }
}