<?php

class view
{
    // name (part of the path) of the .php file that actually contains the HTML code
    // contact/form ... /system/project/views/contact/form.php
    protected $template_name = null;

    public $template_variables = array();

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
        $rendered_content = $this->getRenderedContent();

        if($print)
        {
            // echo the contents of the file
            echo $rendered_content;
        }
        else
        {
            // return the contents of the file
            return $rendered_content;
        }
    }

    protected function getRenderedContent()
    {
        // start output buffering (start 'recording' any output)
        ob_start();

        // turn the array into variables (keys become names of variables)
        extract($this->template_variables);

        /*
        $name; // 'jan.polak@data4you.cz'
        $text; // 'Hello!'
        $newsletter; // 1
        */

        // include the actual file (WITHOUT output buffering this would be immediately printed out)
        // but WITH the output buffering it is just stored in the buffer (in the 'recording')
        include VIEWS_DIR . '/' . $this->template_name . '.php';

        // get the contents of the output buffer (the 'recording') and clean the buffer
        return ob_get_clean();
    }
}