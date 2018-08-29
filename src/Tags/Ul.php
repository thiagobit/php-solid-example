<?php

namespace ThiagoBit\Solid\Tags;

class Ul
{
    public function render($content)
    {
        return '<ul>' . $content . '</ul>';
    }
}