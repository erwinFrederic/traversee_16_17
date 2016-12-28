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
            INSERT INTO verset (vreference, content)
            VALUES (:vreference, :content)
        ');

        $request->bindValue(
            ':vreference', $verset->getVreference(), PDO::PARAM_STR
        );

        $request->bindValue(
            ':content', $verset->getContent(), PDO::PARAM_STR
        );
        $request->execute();
    }

    public function delete(VersetEntity $verset) {

    }

    public function update(VersetEntity $verset) {

    }

    // getters
    public function get() {

    }

    public function getList() {

    }
}

?>