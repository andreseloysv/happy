<?php

include_once"/home/andreslaley/public_html/happy/controller/dao/dao.php";
include_once"../../model/event/event.php";
include_once"../../model/product/product.php";
include_once '../../model/user/user.php';

class eventController {

    function __construct() {
        
    }

    private function addData($returnObject) {
        $event = new event();
        $event->id = $returnObject[0]["id"];
        $event->name = $returnObject[0]["name"];
        $event->date_ini = $returnObject[0]["location"];
        $event->date = $returnObject[0]["date"];
        $event->time = $returnObject[0]["time"];
        $event->detail = $returnObject[0]["detail"];
        $event->id_autor = $returnObject[0]["id_autor"];
        if ($returnObject[0]["photo"] === "") {
            $event->photo = "defaul-evet.jpg";
        } else {
            $event->photo = $event->id."/".$returnObject[0]["photo"];
        }
        return $event;
    }

    private function addMultiData($returnObject) {
        $events = array();
        for ($index = 0; $index < count($returnObject); $index++) {
            $event = new event();
            $event->id = $returnObject[$index]["id"];
            $event->name = $returnObject[$index]["name"];
            $event->location = $returnObject[$index]["locationx"];
            $event->date = $returnObject[$index]["date"];
            $event->date_ini = $returnObject[$index]["date_ini"];
            $event->time = $returnObject[$index]["time"];
            $event->detail = $returnObject[$index]["detail"];
            $event->id_autor = $returnObject[$index]["id_autor"];
            if ($returnObject[$index]["photo"] === "") {
                $event->photo = "defaul-evet.jpg";
            } else {
                $event->photo = $event->id."/".$returnObject[$index]["photo"];
            }
            array_push($events, $event);
        }
        return $events;
    }

    public function addMe($name, $details, $location, $date, $time, $autor) {
        $dao = new dao();
        $timestamp = new DateTime();
        $id_event = hash('md5', $timestamp->getTimestamp() . $autor);
        $event = array(
            "id" => $id_event,
            "name" => $name,
            "detail" => $details,
            "location" => $location,
            "date" => $date,
            "time" => $time,
            "id_autor" => $autor
        );
        try {
            $dao->inster($event, "event");
            return $event;
        } catch (Exception $e) {
            throw new Exception("Failed event addMe: " . $e->getMessage());
        }
    }

    public function addPhoto($photo, $event_id) {
        $dao = new dao();
        try {
            $dao->edit("event", "photo", $photo, "id", $event_id);
        } catch (Exception $e) {
            throw new Exception("Failed addging url picture message: " . $e->getMessage());
        }
    }

    public function findMe($key, $value) {
        $dao = new dao();
        try {
            $returnObject = $dao->queryFindObject($key, $value, "event");
            if (count($returnObject) > 1) {
                return $this->addMultiData($returnObject);
            } else {
                return $this->addData($returnObject);
            }
        } catch (Exception $e) {
            echo $e->getTraceAsString();
        }
    }

    public function inviteFriend($user_id,$event_id) {
        $dao = new dao();
        $event_user = array(
            "id_event" => $event_id,
            "id_user" => $user_id
        );
        try {
            $dao->inster($event_user, "event_user");
            return $event_user;
        } catch (Exception $e) {
            throw new Exception("Failed event_user addMe: " . $e->getMessage());
        }
    }
    public function getLastEvent($user_id) {
        $dao = new dao();
        try {
            $query = "SELECT e.id,e.name,e.detail,e.location,e.photo,e.time,e.date FROM event as e, user as u, event_user as eu WHERE (eu.id_user='".$user_id."' and e.id=eu.id_event and u.id=eu.id_user ) or e.id_autor='".$user_id."'  order by e.date DESC limit 7 ";
            $returnObject = $dao->genericQuery($query);
            return $returnObject;
//            return $this->addPostData($returnObject);
        } catch (Exception $e) {
            throw new Exception("Failed geting the Posts, message: " . $e->getMessage());
        }
    }
        public function getEvent($user_id) {
        $dao = new dao();
        try {
            $query = "SELECT DISTINCT e.id,e.name,e.detail,e.location,e.photo,e.time,e.date FROM event as e, user as u, event_user as eu WHERE (eu.id_user='".$user_id."' and e.id=eu.id_event and u.id=eu.id_user ) or e.id_autor='".$user_id."'  order by e.date DESC limit 7 ";
            $returnObject = $dao->genericQuery($query);
            $returnObject=$this->addMultiData($returnObject);
            return $returnObject;
//            return $this->addPostData($returnObject);
        } catch (Exception $e) {
            throw new Exception("Failed geting the Posts, message: " . $e->getMessage());
        }
    }

}

?>