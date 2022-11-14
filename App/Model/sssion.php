<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 07/30/2019
 * Time: 11:24 PM
 */

namespace App\Model;

use Core\Model;

$ipo = $_SERVER['REMOTE_ADDR'];

class sssion extends Model
{

    private $ip;
    private $kew;
    private $value;


    public function cheeck()
    {
        if (!isset($_SESSION['username'])) {
            header('location:http://127.0.0.10/wp-login');
        } else {
            $r = base64_decode($_SESSION['username']);
            $sql = $this->pdo->prepare("SELECT * FROM admin_tbl WHERE username='$r'");
            $sql->execute();
            $result =$sql->fetch();
            if ($result) {
                return true;
            } else {
                header('location:http://127.0.0.10/wp-login');
            }
        }

    }

    public function setSession($kew, $value)
    {

        echo $this->ip;
        $this->kew = $kew;
        $this->value = base64_encode($value);
        $_SESSION[$this->kew] = $this->value;
    }
}
