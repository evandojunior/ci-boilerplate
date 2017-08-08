<?php
class MY_Loader extends CI_Loader
{
    public function template($template_name, $vars = array(), $return = false)
    {
        if ($return) {
            $content  = $this->view('templates/header', $vars, $return);
            if($template_name) $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        } else {
            $this->view('templates/header', $vars);
            if($template_name) $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        }
    }
}
