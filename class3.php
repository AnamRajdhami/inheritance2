<?php
class User{
    public $username;
    protected $email;
    public $password;

    public function__construct($username, $email, $password)
    {
        $this -> username = $username;
        $this -> email = $email;
        $this -> password = $password;
    }

    public function login(){
        echo $this->username . ' has logged in';
    } 
    public function getEmail(){
        return $this->email;
    }  
    public function setEmail($email){
        $this->email = $email;
    } 
}
$user = new User('Anam', 'anam@gmail.com', 'anam123');
// $user->username = 'Aman';
$user->login();
echo "<br>";
echo $user->getEmail();
$user->getEmail();

class Admin extends User
{
    public $role;

    public function__construct($username, $email, $password, $role)
    {
        parent::__construct($username, $email, $password);
        $this->role = $role;
    }

    public function getEmail(){
        echo 'logged in' . $this->email;
    }
}
$admin = new Admin('Admin','admin@g.com','abc');
$admin->login();
$admin->getEmail();
?>