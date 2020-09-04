<?php
class Residents extends Model {

    public function addResidents($name, $email, $phone1, $phone2, $owner_locator, $apt_number, $residential_id, $register_data) {

        $sql = $this->db->prepare("INSERT INTO residents SET name = :name, email = :email, phone1 = :phone1, phone2 = :phone2, owner_locator = :owner_locator, apt_number = :apt_number, residential_id = :residential_id, register_data = :register_data");
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":phone1", $phone1);
        $sql->bindValue(":phone2", $phone2);
        $sql->bindValue(":owner_locator", $owner_locator);
        $sql->bindValue(":apt_number", $apt_number);
        $sql->bindValue(":residential_id", $residential_id);
        $sql->bindValue(":register_data", $register_data);
        $sql->execute();
    }

    public function ownersQtd(){
        $sql = $this->db->prepare("SELECT * FROM residents WHERE owner_locator = 'owner'");
        $sql->execute();

        $ownerQtd = $sql->rowCount();

        return $ownerQtd;
    }

    public function locatorQtd(){
        $sql = $this->db->prepare("SELECT * FROM residents WHERE owner_locator = 'locator'");
        $sql->execute();

        $locatorQtd = $sql->rowCount();

        return $locatorQtd;
    }
}