<?php
session_start();
//chdir(dirname(_DIR_));
require_once("libraries/smarty/libs/Smarty.class.php");
define('path','http://localhost:80/book');
class C_smarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->setCacheDir('/src/views/cache');
        $this->setConfigDir('/src/views/configs');
        $this->setTemplateDir('src/views/templates');
        $this->setCompileDir('src/views/templates_c');
        $this->assign('path',path);

    }
}
