<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/12/2019
 * Time: 12:44 AM
 */

namespace App\Model\Admin;


use Core\Model;

class dashbord extends Model
{
    public function countPost()
    {
        $sq1 = $this->pdo->prepare("SELECT * FROM post_tbl WHERE status='1'");
        $sq1->execute();
        $row['show'] = count($sq1->fetchAll());
        $sq2 = $this->pdo->prepare("SELECT * FROM post_tbl");
        $sq2->execute();
        $row['all'] = count($sq2->fetchAll());
        return $row;
    }

    public function countComment()
    {
        $d = time() - (86400 * 7);
        $d2 = time() - (86400 * 30);

        $sq1 = $this->pdo->prepare("SELECT * FROM comment_tbl WHERE status='1'");
        $sq1->execute();
        $lastweek = count($sq1->fetchAll());
        $sq2 = $this->pdo->prepare("SELECT * FROM comment_tbl");
        $sq2->execute();
        return [
            'show' => $lastweek,
            'all' => count($sq2->fetchAll())
        ];
    }

    public function email()
    {
        $sql = $this->pdo->prepare("SELECT * FROM contact_tbl WHERE ty='0' ORDER BY id ASC LIMIT 5");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function post()
    {
        $sql = $this->pdo->prepare("SELECT * FROM post_tbl ORDER BY id DESC LIMIT 5");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function admin()
    {
        $sql = $this->pdo->prepare("SELECT * FROM admin_tbl ORDER BY id ASC LIMIT 2");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function selectV()
    {
        date_default_timezone_set('asia/tehran');
        $hourse = date('H', time());
        $min = date('i', time());
        $sec = date('s', time());
        settype($hourse, 'integer');
        settype($min, 'integer');
        settype($sec, 'integer');
        $nej = ($hourse * 60 * 60) + (($min * 60) + $sec);
        $nej = time() - $nej;
        $nej2 =(($hourse)* 60 * 60) + (($min * 60) + $sec);
        $nej2 = time() - $nej2-86400;
        $sql = $this->pdo->prepare("SELECT * FROM visit WHERE `time`='$nej'");
        $sql->execute();
        $sql2 = $this->pdo->prepare("SELECT * FROM visit WHERE `time`='$nej2' ");
        $sql2->execute();
       $all=$sql2->fetch()['count'];
        return [
            'today' => $sql->fetch()['count'],
            'lastday' => $all
        ];
    }
    public function Vis(){

        date_default_timezone_set('asia/tehran');
        $hourse = date('H', time());
        $min = date('i', time());
        $sec = date('s', time());
        settype($hourse, 'integer');
        settype($min, 'integer');
        settype($sec, 'integer');
        $nej = ($hourse * 60 * 60) + (($min * 60) + $sec);
        $nej = time() - $nej;
        $nej2 =(($hourse)* 60 * 60) + (($min * 60) + $sec);
        $nej2 = time() - $nej2-86400;
        $sql = $this->pdo->prepare("SELECT * FROM visitor WHERE `time`='$nej'");
        $sql->execute();
        $sql2 = $this->pdo->prepare("SELECT * FROM visitor WHERE `time`='$nej2' ");
        $sql2->execute();
        $all=$sql2->fetch()['count'];
        return [
            'today' => $sql->fetch()['count'],
            'lastday' => $all
        ];

    }
}