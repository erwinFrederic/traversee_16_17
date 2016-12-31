<?php

class UserManager {
    private $_db;

    public function __construct($db) {
        $this->setDB($db);
    }

    // setters
    public function setDB($db) {
        $this->_db = $db;
    }

    // CRUD
    public function create(UserEntity $user) {
        $request = $this->_db->prepare('
            INSERT INTO tuser (uemail, unomprenoms, upaysorigine, vid)
            VALUES (:uemail, :unomprenoms, :upaysorigine, :vid)
        ');

        $request->bindValue(
            ':uemail', $user->getUemail(), PDO::PARAM_STR
        );

        $request->bindValue(
            ':unomprenoms', $user->getUnomprenoms(), PDO::PARAM_STR
        );

        $request->bindValue(
            ':upaysorigine', $user->getUpaysorigine(), PDO::PARAM_STR
        );

        $request->bindValue(
            ':vid', $user->getVid(), PDO::PARAM_INT
        );

        $rtn = $request->execute();

        if( !empty($rtn) ) {
            return $rtn;
        }
    }

    public function delete(VersetEntity $verset) {

    }

    public function update(VersetEntity $verset) {

    }

    // getters
    public function get() {
        $request = $this->_db->query('
            SELECT *
            FROM tuser
        ');

        while ($donnees = $request->fetch(PDO::FETCH_ASSOC))
        {
            $versets[] = $donnees;
        }

        return $versets;
    }

    public function getById($uid) {
        $request = $this->_db->prepare('
            SELECT *
            FROM tuser
            WHERE uid = :uid
        ');

        $request->bindValue(
            ':vid', $uid, PDO::PARAM_INT
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