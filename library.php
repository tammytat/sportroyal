<?php

session_start();
require_once 'db/db.config';

class Util {

    static function validate($var) {
        return !empty($var) && isset($var);
    }

    static function redirect($url) {
        header("location:" . $url);
    }

}

class SportRoyal {

    private static $con;

    static function connect() {
        SportRoyal::$con = new mysqli('localhost', USERNAME, PASSWORD, DB);
        return SportRoyal::$con;
    }

    static function disconnect() {
        if (SportRoyal::$con != null) {
            SportRoyal::$con->close();
        }
    }

}

class User {

    var $username;
    var $password;
    var $role;

    function add() {
        SportRoyal::connect()->query("call sp_addUser('$this->username','$this->password','$this->role')");
        SportRoyal::disconnect();
    }

    static function authenticate($userName, $password) {
        $con = SportRoyal::connect();
        $con->query("call sp_authUser('$userName','$password')");
        $rows = $con->affected_rows;
        SportRoyal::disconnect();
        return $rows >= 1;
    }

}

class Player {

    var $username, $surname, $firstname, $othername, $facebookname;
    var $sport, $sex, $age, $dob, $placeofbirth, $nationality, $region, $address;
    var $phone, $email, $previousclub, $clubname, $clubaddr, $clubphone, $crrclub;
    var $isstudent, $schoolname, $schooladdr, $schoolphone, $yearofplay, $position, $parentsurname;
    var $parentfirstname, $parentothername, $parentphone, $parentaddr, $displaypicture;

    function add() {
        SportRoyal::connect()->query("call sp_addPlayer('$this->username','$this->surname','$this->firstname','$this->othername','$this->facebookname','$this->sport','$this->sex','$this->age','$this->dob','$this->placeofbirth',
            '$this->nationality','$this->region','$this->address','$this->phone','$this->email','$this->previousclub','$this->clubname','$this->clubaddr','$this->clubphone',
'$this->crrclub','$this->isstudent','$this->schoolname','$this->schooladdr','$this->schoolphone',$this->yearofplay,$this->position,
'$this->parentsurname','$this->parentfirstname','$this->parentothername','$this->parentphone','$this->parentaddr',
'$this->displaypicture')");
        SportRoyal::disconnect();
    }

}

class Scout {

    var $username, $surname, $firstname, $othername, $facebookname, $sport, $sex, $nationality;
    var $address, $phone, $email, $yearofexp, $position, $displaypicture;

    function add() {
        SportRoyal::connect()->query("call sp_addScout('$this->username','$this->surname','$this->firstname','$this->othername','$this->facebookname',
'$this->sport','$this->sex','$this->nationality','$this->address','$this->phone','$this->email','$this->yearofexp','$this->position',
'$this->displaypicture')");
    }

}
