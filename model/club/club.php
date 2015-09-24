<?php

include_once"../../controller/dao/dao.php";

class club {

    public $id = "";
    public $name = "";
    public $date_ini = "";
    public $date_end = "";
    public $locationx = "";
    public $locationy = "";
    public $email = "";
    public $phone = "";
    public $country = "";
    public $score = "";
    public $style = "";
    public $status = "";
    public $likes = "";
    public $first_time = "";

    function __construct() {
        
    }

    private function addData($returnObject) {
        $club = new club();
        $club->id = $returnObject[0]["id"];
        $club->name = $returnObject[0]["name"];
        $club->date_ini = $returnObject[0]["date_ini"];
        $club->date_end = $returnObject[0]["date_end"];
        $club->locationx = $returnObject[0]["locationx"];
        $club->locationy = $returnObject[0]["locationy"];
        $club->email = $returnObject[0]["email"];
        $club->phone = $returnObject[0]["phone"];
        $club->country = $returnObject[0]["country"];
        $club->score = $returnObject[0]["score"];
        $club->style = $returnObject[0]["style"];
        $club->status = $returnObject[0]["status"];
        $club->likes = $returnObject[0]["likes"];
        $club->first_time = $returnObject[0]["first_time"];
        return $club;
    }

    public function findMe($key, $value) {
        $dao = new dao();
        $returnObject = $dao->queryFindObject($key, $value, "club");
        return $this->addData($returnObject);
    }

    public function login($nick, $password) {
        $dao = new dao();
        $returnObject = $dao->queryLogin($nick, $password);
        return $this->addData($returnObject);
    }

    public function addMe($nick, $password, $email, $name) {
        $dao = new dao();
        $club = array(
            "email" => $email,
            "name" => $name,
        );
        
        try {
            $returnObject = $dao->inster($club, "club");
        } catch(Exception $e) {
            throw new Exception("Failed club addMe: " . $e->getMessage());
        }
        return $this->addData($returnObject);
    }

}

?>