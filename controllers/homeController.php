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
    $building = new Building($users->getBuild());



    $data['user_name'] = $users->getName();
    $data['build_name'] = $building->get_building_name();
    $this->loadTemplate('home', $data);
    }


}