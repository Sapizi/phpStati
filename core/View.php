<?php
class View
{
    public function __construct($template, $data = [])
    {
        ob_start();

        if ($data)
            foreach ($data as $key => $value)
                $$key = $value;
        include_once 'templates/' . $template . '.php';

        $content = ob_get_clean();

        echo $content;
    }
}