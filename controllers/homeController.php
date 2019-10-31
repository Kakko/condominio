<?php
class homeController extends Controller {

    public function __construct(){
        parent:: __construct();

        $users = new Users();
        if($users->isLogged() == false){
            header("Location: ".BASE_URL."login");
        }
    }

    public function index() {
    $data = array();
    $users = new Users();
    $users->setLoggedUser();
    $residential = new Residential($users->getResidential());



    $data['user_name'] = $users->getName();
    $data['residential_name'] = $residential->get_residential_name();
    $this->loadTemplate('home', $data);
    }


}