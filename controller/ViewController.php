<?php

class ViewController {

  public function  __construct()  {
        
       global $app;
       $this->ctrl = $app;
    
  }
  
  public function renderTemplate(string $template = null, string $file_data = null) {
    
        $file = __DIR__.'/../pages/'.$file_data.'.md';
    
        if(file_exists($file)) {
          
            $page = Yaml::parseFile($file);
          
            $page_data = [
              
                'title' => $page->title,
                'content' => $page->body()
              
            ];
          
            $this->ctrl->response()->status(200)->header('content-type', 'text/html; charset=utf-8')->send();
            $this->ctrl->render($template, $page_data);

        } else { 
          
            echo 'no data or templatefile';
          
        }

  }
  
  public function home() {

       $this->renderTemplate('home','home');
        
  }

  public function about() {

        $this->renderTemplate('about','about');
    
  }

  public function e404() {

        $this->ctrl->response()->status(404)->send();
        $this->renderTemplate('404','404');
        
  }
  
}
