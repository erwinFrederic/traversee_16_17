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
            INSERT INTO tuser (uemail, unom, uprenoms, upaysorigine, uvilleorigine, vid)
            VALUES (:uemail, :unom, :uprenoms, :upaysorigine, :uvilleorigine, :vid)
        ');

        $request->bindValue(
            ':uemail', $user->getUemail(), PDO::PARAM_STR
        );

        $request->bindValue(
            ':unom', $user->getUnom(), PDO::PARAM_STR
        );

        $request->bindValue(
            ':uprenoms', $user->getUprenoms(), PDO::PARAM_STR
        );

        $request->bindValue(
            ':upaysorigine', $user->getUpaysorigine(), PDO::PARAM_STR
        );

		$request->bindValue(
			':uvilleorigine', $user->getUvilleorigine(), PDO::PARAM_STR
		);

        $request->bindValue(
            ':vid', intval($user->getVid()), PDO::PARAM_INT
        );

        try {
			$rtn = $request->execute();
		} catch (Exception $e) {
        	print $e->getMessage();
        	die;
		}

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

    public function getByEmail($uemail) {
        $request = $this->_db->prepare('
            SELECT *
            FROM tuser
            WHERE uemail = :uemail
        ');

        $request->bindValue(
            ':uemail', $uemail, PDO::PARAM_INT
        );

        $request->execute();

        while ($donnees = $request->fetch(PDO::FETCH_ASSOC))
        {
            $user[] = $donnees;
        }

        if (!empty ($user))
        	return $user;
    }

}

?>