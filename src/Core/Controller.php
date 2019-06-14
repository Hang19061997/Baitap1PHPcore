<?php
namespace BT\Core;

use BT\Models\CanboRepository;

class Controller
{
    var $vars = [];
    var $layout = "default";

    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

    function render($filename)
    {
        extract($this->vars);
        ob_start();
        $folder = str_replace('Controller', '', (new \ReflectionClass($this))->getShortName());
        require(ROOT . "Views/" . $folder . '/' . $filename . '.php');
        $content_for_layout = ob_get_clean();

        if ($this->layout == false) {
            $content_for_layout;
        }
        else {
            require(ROOT . "Views/Layouts/" . $this->layout . '.php');
        }
    }
}