<?php

namespace ProjectTest;

class ViewRenderer
{

    protected $basePath;

    public function __construct($basePath)
    {
        $this->basePath = $basePath;
    }

    public function render($template, $args = []) {
        $filename = $this->basePath . '/' . $template . '.php';
        extract($args);
        ob_start();
        require_once $filename;
        return ob_get_clean();
    }

}
