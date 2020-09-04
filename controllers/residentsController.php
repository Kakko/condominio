<?php
class residentsController extends Controller {
    
    public function __construct(){
        parent:: __construct();

        $users = new Users();
        if($users->isLogged() == false){
            header("Location: ".BASE_URL."login");
        }
    }

    public function index(){
        $data = array();
        $users = new Users();
        $residents = new Residents();
        $users->setLoggedUser();
        $residential = new Residential($users->getResidential());
        $res_id = $users->getResidential();

        if(!empty($_POST['acao_resident'])){
            
            if($_POST['acao_resident'] == 'cadastrar'){

                $name = addslashes($_POST['name']);
                $email = addslashes($_POST['email']);
                $phone1 = addslashes($_POST['phone1']);
                $phone2 = addslashes($_POST['phone2']);
                $owner_locator = addslashes($_POST['owner_locator']);
                $apt_number = addslashes($_POST['apt_number']);
                $residential_id = addslashes($res_id);
                $register_data = date("Y-m-d H:i:s");

                $residents->addResidents($name, $email, $phone1, $phone2, $owner_locator, $apt_number, $residential_id, $register_data);
                header("Location: ".BASE_URL."residents");

            }
        }
        $data['locatorQtd'] = $residents->locatorQtd();
        $data['ownerQtd'] = $residents->ownersQtd();
        $data['user_name'] = $users->getName();
        $data['residential_name'] = $residential->get_residential_name();
        $this->loadTemplate('residents', $data);
    }
}