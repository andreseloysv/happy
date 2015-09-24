<?php

include_once"/home/andreslaley/public_html/happy/controller/dao/dao.php";
include_once"../../model/follow/follow.php";
include_once"../../model/user/user.php";
include_once '../../model/post/post.php';

class userController {

    function __construct() {
        
    }

    private function addData($returnObject) {
        $user = new user();
        $user->id = $returnObject[0]["id"];
        $user->nick = $returnObject[0]["nick"];
        $user->name = $returnObject[0]["name"];
        $user->second_name = $returnObject[0]["second_name"];
        $user->locationx = $returnObject[0]["locationx"];
        $user->locationy = $returnObject[0]["locationy"];
        $user->email = $returnObject[0]["email"];
        $user->phone = $returnObject[0]["phone"];
        $user->country = $returnObject[0]["country"];
        $user->date_ini = $returnObject[0]["date_ini"];
        $user->date_end = $returnObject[0]["date_end"];
        $user->gender = $returnObject[0]["gender"];
        $user->status = $returnObject[0]["status"];
        $user->score = $returnObject[0]["score"];
        $user->password = $returnObject[0]["password"];
        $user->first_time = $returnObject[0]["first_time"];
        if ($returnObject[0]["photo"] === "") {
            $user->photo = "default-profile-pic.png";
        } else {
            $user->photo = $returnObject[0]["photo"];
        }
        return $user;
    }

    private function addMultiData($returnObject) {
        $users = array();
        for ($index = 0; $index < count($returnObject); $index++) {
            $user = new user();
            $user->id = $returnObject[$index]["id"];
            $user->nick = $returnObject[$index]["nick"];
            $user->name = $returnObject[$index]["name"];
            $user->second_name = $returnObject[$index]["second_name"];
            $user->locationx = $returnObject[$index]["locationx"];
            $user->locationy = $returnObject[$index]["locationy"];
            $user->email = $returnObject[$index]["email"];
            $user->phone = $returnObject[$index]["phone"];
            $user->country = $returnObject[$index]["country"];
            $user->date_ini = $returnObject[$index]["date_ini"];
            $user->date_end = $returnObject[$index]["date_end"];
            $user->gender = $returnObject[$index]["gender"];
            $user->status = $returnObject[$index]["status"];
            $user->score = $returnObject[$index]["score"];
            $user->password = $returnObject[$index]["password"];
            $user->first_time = $returnObject[$index]["first_time"];
            if ($returnObject[$index]["photo"] === "") {
                $user->photo = "default-profile-pic.png";
            } else {
                $user->photo = $returnObject[$index]["photo"];
            }
            array_push($users, $user);
        }
        return $users;
    }

    private function addPostData($returnObject) {
        $posts = array();
        for ($index = 0; $index < count($returnObject); $index++) {
            $post = new post();
            $post->id_post = $returnObject[$index]["id_post"];
            $post->coment = $returnObject[$index]["coment"];
            $post->media = $returnObject[$index]["media"];
            $post->date = $returnObject[$index]["date"];
            array_push($posts, $post);
        }
        return $posts;
    }

    public function findMe($key, $value) {
        $dao = new dao();
        $returnObject = $dao->queryFindObject($key, $value, "user");
        if (count($returnObject) > 1) {
            return $this->addMultiData($returnObject);
        } else {
            return $this->addData($returnObject);
        }
    }

    public function login($nick, $password) {
        $dao = new dao();
        $returnObject = $dao->queryLogin($nick, $password);
        return $this->addData($returnObject);
    }

    public function addMe($nick, $password, $email, $name) {
        $dao = new dao();
        $user = array(
            "nick" => $nick,
            "password" => $password,
            "email" => $email,
            "name" => $name,
        );

        try {
            $returnObject = $dao->inster($user, "user");
        } catch (Exception $e) {
            throw new Exception("Failed user addMe: " . $e->getMessage());
        }
        return $this->addData($returnObject);
    }

    public function follow($user_id, $wantToFollow_id) {
        $dao = new dao();
        $follow = array(
            "id_user" => $user_id,
            "id_follower" => $wantToFollow_id
        );

        try {
            $returnObject = $dao->inster($follow, "follow");
            return $this->addData($returnObject);
        } catch (Exception $e) {
            throw new Exception("Failed follow user: " . $wantToFollow_id . " Message: " . $e->getMessage());
        }
    }

    public function getFriends($user_id) {
        $dao = new dao();
        try {
            $query = "SELECT id,nick,name,second_name,email,photo FROM user as u WHERE u.id in (select id_follower from follow where id_user=" . $user_id . ")";
            $returnObject = $dao->genericQuery($query);
            if (count($returnObject) > 1) {
                return $this->addMultiData($returnObject);
            } else {
                return $this->addData($returnObject);
            }
        } catch (Exception $e) {
            throw new Exception("Failed follow user: " . $wantToFollow_id . " Message: " . $e->getMessage());
        }
    }
    
    public function getFriendsForEvent($user_id,$event_id) {
        $dao = new dao();
        try {
            $query = 'SELECT u.id,u.nick,u.name,u.second_name,u.email,u.photo FROM follow as f, user as u WHERE f.id_follower=u.id and f.id_user='. $user_id .' and id_follower not in (SELECT u.id FROM user as u, event_user as eu, event as e WHERE u.id!='. $user_id .' and eu.id_event="'.$event_id.'" and eu.id_event=e.id and eu.id_user=u.id )';
            $returnObject = $dao->genericQuery($query);
            if (count($returnObject) > 1) {
                return $this->addMultiData($returnObject);
            } else {
                return $this->addData($returnObject);
            }
        } catch (Exception $e) {
            throw new Exception("Failed getFriendsForEvent Message: " . $e->getMessage());
        }
    }
    
    public function areWeFriends($user_id, $isMyFriend_id) {
        $dao = new dao();
        try {
            $query = "SELECT id FROM user as u WHERE u.id=" . $isMyFriend_id . " and u.id in (select id_follower from follow where id_user=" . $user_id . ")";
            $returnObject = $dao->genericQuery($query);
            if ((is_null($returnObject)) || (count($returnObject) == 0)) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            throw new Exception("Failed searching if we are friends of : " . $wantToFollow_id . " Message: " . $e->getMessage());
        }
    }

    public function getFriendsAndFollowers($user_id) {
        $dao = new dao();
        try {
            $query = 'select  count(u.id) as followers FROM user u, follow f WHERE u.id=f.id_follower and u.id="' . $user_id . '" union all select  count(u.id) as followers FROM user u, follow f WHERE u.id=f.id_user and u.id="' . $user_id . '"';
            $returnObject = $dao->genericQuery($query);
            return $returnObject;
        } catch (Exception $e) {
            throw new Exception("Failed follow user: " . $wantToFollow_id . " Message: " . $e->getMessage());
        }
    }

    public function post($user_id, $coment, $media) {
        $timestamp = new DateTime();
        $id_post = hash('md5', $timestamp->getTimestamp() . $user_id);
        $dao = new dao();
        $post = array(
            "id_post" => $id_post,
            "coment" => $coment,
            "media" => $media
        );
        $post_user = array(
            "id_user" => $user_id,
            "id_post" => $id_post
        );
        try {
            $returnObject = $dao->inster($post, "post");
            $returnObject = $dao->inster($post_user, "post_user");
            return $returnObject;
        } catch (Exception $e) {
            throw new Exception("Failed conecting posting " . $wantToFollow_id . " Message: " . $e->getMessage());
        }
    }
public function getLastPost($user_id,$date) {
        $dao = new dao();
        try {
            $query = 'SELECT u.nick, u.id,u.photo,p.id_post,p.coment,p.media as media,pu.date FROM post as p, post_user as pu, user u WHERE 
                u.id=pu.id_user and pu.id_post=p.id_post and (pu.id_user=' . $user_id . ' or 
                    pu.id_user in (select id_follower from follow where id_user=' . $user_id . '))  and pu.date > "'.$date.'"
                        ORDER BY pu.date DESC';
            $returnObject = $dao->genericQuery($query);
            return $returnObject;
        } catch (Exception $e) {
            throw new Exception("Failed geting the Posts, message: " . $e->getMessage());
        }
    }
    
    public function getPost($user_id) {
        $dao = new dao();
        try {
            $query = "SELECT u.nick, u.id,u.photo,p.id_post,p.coment,p.media as media,pu.date FROM post as p, post_user as pu, user u WHERE 
                u.id=pu.id_user and pu.id_post=p.id_post and (pu.id_user=" . $user_id . " or 
                    pu.id_user in (select id_follower from follow where id_user=" . $user_id . ")) 
                        ORDER BY pu.date DESC limit 7 ";
            $returnObject = $dao->genericQuery($query);
            return $returnObject;
//            return $this->addPostData($returnObject);
        } catch (Exception $e) {
            throw new Exception("Failed geting the Posts, message: " . $e->getMessage());
        }
    }

    public function addPhoto($photo,$user_id) {
        $dao = new dao();
        try {
            $dao->edit("user","photo",$photo,"id",$user_id);
        } catch (Exception $e) {
            throw new Exception("Failed addging url picture message: " . $e->getMessage());
        }
    }

}

?>