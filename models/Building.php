<?php
class Building extends Model {

    private $buildingInfo;

    public function __construct($id){
        parent::__construct();

        $sql = $this->db->prepare("SELECT * FROM building WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $this->buildingInfo = $sql->fetch();
        }
    }

    public function get_building_name(){ // Busca o nome do prédio do usuário.
        if(isset($this->buildingInfo['name'])){
            return $this->buildingInfo['name'];
        } else {
            return 'não tem';
        }
    }
}