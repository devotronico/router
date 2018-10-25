<?php
namespace app;

class Controller{

    private $layout = 'layout/index.tpl.php';
    private $conn;
    public $page;


    public function _construct($conn) {

        $this->conn = $conn;
    }

    public function display(){
       /// echo $this->page;
        require $this->layout;  
    }

    public function home($arg1=1) {

     
        $this->page = 'app/view/home.tpl.php';
        // $this->page = 'home';
    }

    public function blog($arg1=2) {

        $this->page = 'blog';
    }

    public function about($arg1=3) {

        $this->page = 'about';
    }
    public function contact($arg1=3) {

        $this->page = 'contact';
    }
}