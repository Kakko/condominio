<?php
class Users extends Model {

    private $userInfo;

    public function isLogged() {
        if(isset($_SESSION['lgUser']) && !empty($_SESSION['lgUser'])) {
            return true;
        } else {
            return false;
        }
    }

    public function doLogin($email, $password) {

        $sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":password", md5($password));
        $sql->execute();

        if($sql->rowCount() > 0){
            $row = $sql->fetch();
            $_SESSION['lgUser'] = $row['id'];
            return true;
        } else {
            return false;
        }
    }

    public function setLoggedUser() {
        if(isset($_SESSION['lgUser']) && !empty($_SESSION['lgUser'])) {
            $id = $_SESSION['lgUser'];

            $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $this->userInfo = $sql->fetch();
            }
        }
    }

    public function getName(){ //Buscar o e-mail do usuário logado.

        if(isset($this->userInfo['name'])){
            return $this->userInfo['name'];
        } else {
            return 'não tem';
        }
    }

    public function getBuild(){ //Buscar o ID do prédio
        if(isset($this->userInfo['building_id'])){
            return $this->userInfo['building_id'];
        } else {
            return 'não tem';
        }
    }

    public function logout() {
        session_unset();
    }
}