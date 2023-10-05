<?php

class App{

    protected $controller = 'Home';
    protected $method ='index';
    protected $params =[];


    public function __construct()
    {
        $url = $this->parseURL();
        
        //controller
        if (isset($url[0])){

            if( file_exists('../app/controllers/' . $url[0] . '.php') ){
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        //method
        if(isset($url[1])){
            if( method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        if(!empty($url[1])){
            array_values($url);
            $this->params = array_values($url);
            

        }


        //jalankan controler dan method sarta kirimkan params jika ad
        call_user_func_array([$this->controller, $this->method],$this->params );

    }

    public function parseURL()
    {
        if( isset($_GET['url']) ){
            rtrim($url = $_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}

?>