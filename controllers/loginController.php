<?php
class loginController extends Controller {

    public function index() {
        $data = array();
        $u = new Users();

        if(isset($_POST['email']) && !empty($_POST['password'])) {

            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);

            if($u->doLogin($email, $password)) {
                header("Location: ".BASE_URL);
                exit;
            } else {
                $data['error'] = "Login e/ou Senha Inválidos";
            }
        }

        $this->loadView('login', $data);
    }

    public function logout(){
        $data = array();
        $u = new Users();

        $u->logout();
        header("Location: ".BASE_URL);
    }
}