<?php
class Usuarios extends Model {

    public function isLogged() {
        if(isset($_SESSION['lgUser']) && !empty($_SESSION['lgUser'])) {
            return true;
        } else {
            return false;
        }
    }

    public function setLoggedUser() {
        if(isset($_SESSION['lgUser']) && !empty($_SESSION['lgUser'])) {
            $array = array();
            $id = $_SESSION['lgUser'];

            $sql = $this->db->prepare("SELECT * FROM hortadigital_usuarios WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
            return $array;
        }
    }

    public function doLogin($email, $senha) {

        $sql = $this->db->prepare("SELECT * FROM hortadigital_usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $row = $sql->fetch();
            $_SESSION['lgUser'] = $row['id'];
            return true;
        } else {
            return false;
        }
    }

    public function logout() {
        session_unset();
    }
}