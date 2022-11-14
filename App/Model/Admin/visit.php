<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/13/2019
 * Time: 05:08 PM
 */

namespace App\Model\Admin;


use Core\Model;
use function PHPSTORM_META\type;

class visit extends Model
{


    public function item()
    {
        date_default_timezone_set('asia/tehran');
        date_default_timezone_get();
        $hourse = date('H', time());
        $min = date('i', time());
        $sec=date('s',time());
        settype($hourse, 'integer');
        settype($min, 'integer');
        settype($sec, 'integer');
        $nej = ($hourse * 60*60) + (($min*60)+$sec);
        $nej = time() - $nej;
$sql3=$this->pdo->prepare("SELECT * FROM visit WHERE `time`='$nej'");
        $sql3->execute();
if($result=$sql3->fetch()){
    $result=$result['count']+1;
$Sql=$this->pdo->prepare("UPDATE visit SET `count`='$result' WHERE `time`='$nej'");
}else{
    $Sql = $this->pdo->prepare("INSERT INTO visit(`time`,`count`)VALUES('$nej','1')");

}
$Sql->execute();

//        $Sql->execute();
    }
public function visitor(){
    date_default_timezone_set('asia/tehran');
    date_default_timezone_get();
    $hourse = date('H', time());



    $min = date('i', time());

    $sec=date('s',time());
    settype($hourse, 'integer');
    settype($min, 'integer');
    settype($sec, 'integer');
    $nej = ($hourse * 60*60) + (($min*60)+$sec);
    $nej = time() - $nej;


    if(!isset($_COOKIE['ip'])){
        $sql3=$this->pdo->prepare("SELECT * FROM visitor WHERE `time`='$nej'");
        $sql3->execute();
        if($op=$sql3->fetch()){
            $count=$op['count']+1;
            settype($count,'integer');

            echo $count;
            $sql2=$this->pdo->prepare("UPDATE visitor SET `count`=$count WHERE `time`='$nej'");
        }else{
            $sql2=$this->pdo->prepare("INSERT INTO visitor (`time`,`count`)VALUES('$nej','1')");
        }
        $ali=($hourse*3600)+($min*60)+$sec;

        setcookie('ip','yes',time()+(86400-$ali));
        $sql2->execute();

    };



    $ali=($hourse*3600)+($min*60)+$sec;

}
}