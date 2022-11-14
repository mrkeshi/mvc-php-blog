<?php namespace App\Model\Admin;

use Core\Model;

class adminPanel extends Model
{
    public function loginPanel($data)
    {
        $user = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);
        $sql = $this->pdo->prepare("SELECT * FROM admin_tbl WHERE `username`='$user'");
        $sql->execute();

        if ($result = $sql->fetch()) {

            if ($result['password'] == $password) {
                return [true, true];
            } else {
                return [false, 'پسورد شما درست نیست'];
            }
        } else {
            return [false, 'یوزر وارد شده ی شما درست نیست و شما برای مدت زمان ۱ سال از ورود محروم شده اید'];
        }
    }
public function selectInformation(){
        $op=base64_decode($_SESSION['username']);
        $sql=$this->pdo->prepare("SELECT * FROM admin_tbl WHERE username='$op'");
        $sql->execute();
        return $sql->fetch();
}

}