<?php

class view
{
    // name (part of the path) of the .php file that actually contains the HTML code
    // contact/form ... /system/project/views/contact/form.php
    protected $template_name = null;

    /**
     * 
     */
    public function __construct($template_name)
    {
        $this->template_name = $template_name;
    }

    /**
     * print the contents of the template
     */
    public function render($print = true)
    {
        if($print)
        {
            // echo the contents of the file
            include VIEWS_DIR . '/' . $this->template_name . '.php';
        }
        else
        {
            // return the contents of the file
        }
    }
}