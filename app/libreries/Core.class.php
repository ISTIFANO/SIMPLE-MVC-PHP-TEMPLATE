<?php 

// url = controller/methode/param


class Core{

    private $Controller = 'pages';
    private $methode = 'index';
    private $param=[];


    function __construct()
    {
        $this->getUrl();   
    
    
    }


    public function getUrl(){


        if(isset($_GET['url'])){
            $url = $_GET["url"];
            $url =filter_var($url,FILTER_SANITIZE_URL);
            $url =rtrim($url,'/');
            $url = explode("/",$url);
            

        }
    }




}


















?>