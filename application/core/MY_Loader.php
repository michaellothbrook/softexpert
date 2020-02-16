<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function template($page,$dados = array())
    {
        $this->view("header.php",$dados);
        $this->view($page,$dados);
        $this->view("footer.php",$dados);
    }
}
