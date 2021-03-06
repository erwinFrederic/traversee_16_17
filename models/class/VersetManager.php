<?php

class VersetManager {
    private $_db;

    public function __construct($db) {
        $this->setDB($db);
    }

    // setters
    public function setDB($db) {
        $this->_db = $db;
    }

    // CRUD
    public function create(VersetEntity $verset) {
        $request = $this->_db->prepare('
            INSERT INTO verset (base64)
            VALUES (:base64)
        ');

        $request->bindValue(
            ':base64', $verset->getBase64(), PDO::PARAM_STR
        );

        $request->execute();
    }

    public function delete(VersetEntity $verset) {

    }

    public function update(VersetEntity $verset) {

    }

    // getters
    public function get() {
        $request = $this->_db->query('
            SELECT *
            FROM verset
        ');

        while ($donnees = $request->fetch(PDO::FETCH_ASSOC))
        {
            $versets[] = $donnees;
        }

        return $versets;
    }

    public function getById($vid) {
        $request = $this->_db->prepare('
            SELECT *
            FROM verset
            WHERE vid = :vid
        ');

        $request->bindValue(
            ':vid', $vid, PDO::PARAM_INT
        );

        $request->execute();

        while ($donnees = $request->fetch(PDO::FETCH_ASSOC))
        {
            $verset[] = $donnees;
        }

        return $verset;
    }

    public function getList() {

    }
}

?>