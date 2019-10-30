<?php
class homeController extends Controller {

    public function index() {
    $u = new Users();
    if($u->isLogged() == false){
        header("Location: ".BASE_URL."login/");
    }
    $data = array();
       
    $this->loadTemplate('home', $data);
    }


}