<?php

class ViewController {

  public function  __construct()  {
        
        global $app;
        $this->ctrl = $app;
    
  }
  
  public function renderTemplate(string $template = null, array $page_data = null) {

        $this->ctrl->response()->status(200)->header('content-type', 'text/html; charset=utf-8')->send();
        $this->ctrl->render($template, $page_data);

  }
  
  public function home() {

         $this->renderTemplate('home');
        
  }

  public function about() {

         $this->renderTemplate('about');
    
  }

  public function 404() {

          $this->ctrl->response()->status(404)->send();
          $this->renderTemplate('404');
        
  }
  
}
