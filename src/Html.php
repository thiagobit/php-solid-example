<?php

namespace ThiagoBit\Solid;

class Html
{
    public function __call(string $className, array $args)
    {
        $class = '\ThiagoBit\Solid\Tags\\' . ucfirst($className);

        return call_user_func_array([new $class, 'render'], $args);
    }
}