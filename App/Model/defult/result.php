<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/11/2019
 * Time: 06:02 PM
 */

namespace App\Model\defult;


use Core\Model;

class result extends Model
{
    public function slider()
    {
        $sql = $this->pdo->prepare("SELECT * FROM slider_tbl");
        $sql->execute();
        return $sql->fetch();
    }

    public function selectSingleCaat($id, $table)
    {
        $sql = $this->pdo->prepare("SELECT * FROM `$table` WHERE id='$id'");
        $sql->execute();
        return $sql->fetch();
    }

    public function box_tbl()
    {
        $sql = $this->pdo->prepare("SELECT * FROM box_tbl");
        $sql->execute();
        return $sql->fetch();
    }

    public function section()
    {
        $sql = $this->pdo->prepare("SELECT * FROM section_tbl");
        $sql->execute();
        return $sql->fetch();
    }

    public function chapter($in)
    {
        $in = $this->pdo->prepare("SELECT * FROM taber_tbl WHERE id='$in'");
        $in->execute();
        $i = $in->fetch();
        $table = $i['type'];
        $count = $i['count'];
        $sook = $i['sook'];
        $sql = $this->pdo->prepare("SELECT * FROM `$table` WHERE status='1' ORDER BY id $sook LIMIT $count ");
        $sql->execute();
        if ($i['type'] == 'work_tbl') {
            $it = 'worckcat_tbl';
            $link = 'work';
        } else {
            $it = 'cat_tbl';
            $link = 'posts';

        }
        $ali = [
            'value' => $sql->fetchAll(),
            'titr' => $i['titr'],
            'text' => $i['text'],
            'status' => $i['status'],
            'table' => $it,
            'link' => $link
        ];
        return $ali;
    }

    public function pubv($page)
    {
        $sql = $this->pdo->prepare("SELECT * FROM textv_tbl WHERE page='$page'");
        $sql->execute();
        return $sql->fetch();
    }

    public function select($tbl)
    {
        $sql = $this->pdo->prepare("SELECT * FROM `{$tbl}`");
        $sql->execute();
        return $sql->fetchAll();
    }
public function postC($id){
        $sql=$this->pdo->prepare("SELECT * FROM post_tbl WHERE url='$id'");
        $sql->execute();
        return $sql->fetch();
}
    public function tab()
    {
        $sql1 = $this->pdo->prepare("SELECT * FROM `setting tab`");
        $sql1->execute();
        $res = $sql1->fetch();
        $type1 = $res['type'];
        $count1 = $res['count'];
        $title1 = $res['title1'];
        $p1=Null;
        $p1=Null;
        $sql2 =$this->pdo->prepare("SELECT * FROM  `{$type1}` WHERE status='1' LIMIT $count1");
        $sql2->execute();
        $res2 = $sql2->fetchAll();
        $type2 = $res['type2'];
        $count2 = $res['count2'];
        $title2 = $res['title2'];
        $sql3 = $this->pdo->prepare("SELECT * FROM `{$type2}`  WHERE status='1' LIMIT $count2");
        $sql3->execute();
        $res3 = $sql3->fetchAll();

        return [
            'title1' => $title1,
            'title2' => $title2,
            'type1' => $type1,
            'type2' => $type2,
            'result1' => $res2,
            'result2' => $res3,



        ];
    }
}