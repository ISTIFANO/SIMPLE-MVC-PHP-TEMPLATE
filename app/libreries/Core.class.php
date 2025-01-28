<?php 

// url = controller/methode/param


class Core{

    private $Controller = 'pages';
    private $methode = 'index';
    private $param=[];


    function __construct()
    {
        $uri = $this->getUrl();    
        if(isset($uri[0])){
            if(file_exists('../app/controllers/'.ucwords($uri[0]).'.class.php')){


                $this->Controller =ucwords($uri[0]);
                
                unset($url[0]);

            }



        }
    
  //require the controller
  require_once '../app/controllers/' . $this->Controller . '.class.php';

  //instantiation of controller
  $this->Controller = new $this->Controller;

  if (isset($uri[1])) {
      if (method_exists($this->Controller, $uri[1])) {
          $this->methode = $uri[1];
          unset($uri[1]);
      }
  }

  $this->param = $uri ? array_values($uri) : []; //ternary operator 

  //call the function
  call_user_func_array([$this->Controller, $this->methode], $this->param);
}



    public function getUrl()
    {
 
        // var_dump($_REQUEST);


        if (empty($_SERVER['REQUEST_URI'])) {
            $uri = '';
        } else {
            $uri = $_SERVER['REQUEST_URI'];
        }

    if (empty($_SERVER['REQUEST_URI'])) {
        $uri = '';
    } else {
        $uri = $_SERVER['REQUEST_URI'];
    }

    $uri = explode('/', trim($uri, '/'));
    // var_dump( $uri);    
        // }

        return $uri;
    }



}


















?>