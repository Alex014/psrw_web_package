<?php
namespace app;

use \League\Plates\Engine;

class main extends \psrw\BaseController {
    public function index()
    {
        $templates = new Engine('../templates');
        $content = $templates->render('main_page');
        $this->getStream()->write($templates->render('layout', ['content' => $content])); //Write output
        $this->out(); //Emit stream
    }
    
    public function none()
    {
        $templates = new Engine('../templates');
        $content = $templates->render('404');
        $this->getStream()->write($templates->render('layout', ['content' => $content])); //Write output
        $this->out(404); //Emit stream
    }
}