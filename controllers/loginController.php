<?php
class loginController extends Controller {

    public function index() {
        $data = array();
        $u = new Usuarios();

        if(isset($_POST['email']) && !empty($_POST['senha'])) {

            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if($u->doLogin($email, $senha)) {
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
        $u = new Usuarios();

        $u->logout();
        header("Location: ".BASE_URL);
    }
}