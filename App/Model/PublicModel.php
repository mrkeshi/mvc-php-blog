<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 08/01/2019
 * Time: 09:59 PM
 */

namespace App\Model;

use Core\Model;

class PublicModel extends Model
{
public static function date($timestapm,$qu){
    include_once 'jdf.php';
return jdate($timestapm,$qu);

}
public static function uploaderImage($dir,$data){
    if(isset($_SESSION['user'])){
        $nameuser=base64_decode($_SESSION['user']);
    }else{
        $nameuser=base64_decode($_SESSION['username']);
    }
    $folder="uploader/".$dir.'/'.$nameuser;
    if(!file_exists($folder)){
        mkdir($folder);
    }
    $file=$_FILES[$data];
    $from=$file['tmp_name'];
    $format=explode('.',$file['name']);
    $name='POST-'.rand(1,10000).'.';
    $nameold=$name.end($format);
    if(file_exists($folder.'/'.$nameold)){
        $to=$folder.'/'.$name.rand(1,10000).end($format);
    }else{
      $to=$folder.'/'.$nameold;
    }
    move_uploaded_file($from,$to);
    return $to;
}
    public function selectWrite($ser)
    {
        $sql = $this->pdo->prepare("SELECT * FROM admin_tbl WHERE username='$ser'");
        if ($sql->execute()) {
        } else {
            $sql = $this->pdo->prepare("SELECT * FROM user_tbl WHERE user='$ser'");
            $sql->execute();
        }
        return $sql->fetch()['name'];
    }
}
