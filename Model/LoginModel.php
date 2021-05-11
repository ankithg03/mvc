<?php
namespace Model;

use Model\TemplateLoader;
/**
 * LoginModel for All Pages
 * 
 * @class LoginModel
 * @author Ankith G <ankith@codilar.com>
 *
 */
class LoginModel extends TemplateLoader
{
    public function init()
    {
        $userInfo = $this->fetchFromPost();
        if($userInfo['email'] && $userInfo['password']){
            $isUser = $this->verifyUser($userInfo['email'],  $userInfo['password']);
            if($isUser) {
                #session_set=>true=>message
                header("Location:  ".$this->getUrl()."/dashboard");
            }
        } 
        #session_set false=>message
        header("Location: ".$this->getUrl()."/");
       
    }

    public function getConnection()
    {
        return new \PDO('mysql:host=localhost; dbname=freshers_training;', 'root', '1212');
    }

    public function verifyUser($userId, $password)
    {
        $pdo = $this->getConnection();
        $stmt = $pdo->prepare('SELECT * FROM user_table where email=\''.$userId.'\' and password=\''.$password.'\'');
        $stmt->execute();
	#check if the execution is working var_dump($stmt->execute());die;
        return count($stmt->fetchAll())>0;
        # code...
    }

    public function fetchFromPost()
    {
        return [
            'email'=>isset($_POST) && isset($_POST['email'])?$_POST['email']:false,
            'password'=>isset($_POST) && isset($_POST['password'])?$_POST['password']:false
        ];
    }
}
