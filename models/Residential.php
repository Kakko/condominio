<?php
class Residential extends Model {

    private $residentialInfo;

    public function __construct($id){
        parent::__construct();

        $sql = $this->db->prepare("SELECT * FROM residential WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $this->residentialInfo = $sql->fetch();
        }
    }

    public function get_residential_name(){ // Busca o nome do prédio do usuário.
        if(isset($this->residentialInfo['name'])){
            return $this->residentialInfo['name'];
        } else {
            return 'não tem';
        }
    }
}