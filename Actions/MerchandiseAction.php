<?php
/**
 * Created by PhpStorm.
 * User: Arch
 * Date: 3.3.2017 г.
 * Time: 15:36 ч.
 */

namespace Actions;


use Config\FileUploadConfig;
use DTO\Merchandise;

class MerchandiseAction
{
    private $db;

    /**
     * MerchandiseAction constructor.
     * @param $database \PDO
     */
    public function __construct($database)
    {
        $this->db=$database;
    }

    public function getMerchandise(){
        $query="select id,name,price,image from merchandise limit 8";
        $statement=$this->db->prepare($query);
        $statement->execute();
        while($single=$statement->fetchObject(Merchandise::class)){
            yield $single;
        };
    }
    public function doesMerchandiseExists($id){
        $query="select * form merchandise where id=?";
        $statement=$this->db->prepare($query);
        $statement->execute([$id]);
        return $statement->rowCount();
    }
    public function getAllMerchandise()
    {
        $query="select id,name,price, image ,promo_price as promoPrice , date_added as dateAdded from merchandise";
        $statement=$this->db->prepare($query);
        $statement->execute();
        while ($data=$statement->fetchObject(Merchandise::class)){
            yield $data;
        }
    }

    /**
     * @param $id
     * @param $merchandise Merchandise
     * @return int
     */
    public function editMerchandise($id,$merchandise)
    {
        $query="UPDATE merchandise set name=?,price=? ,promo_price=?,image=? where id=? ";
        $statement=$this->db->prepare($query);
        $statement->execute([$merchandise->getName(),$merchandise->getPrice(),$merchandise->getPromoPrice(),$merchandise->getImage(),$id]);
        return $statement->rowCount();
    }

    /**
     * @param $merchandise Merchandise
     * @return int
     */
    public function addMerchandise($merchandise)
    {
        $query="insert into merchandise (name,user_id ,price, image ,promo_price ,date_added) VALUES (?,?,?,?,?,?)";
        $statement=$this->db->prepare($query);
        $statement->execute(
            [
                $merchandise->getName(),
                $merchandise->getUserId(),
                $merchandise->getPrice(),
                $merchandise->getImage(),
                $merchandise->getPrice(),
                (new \DateTime())->format('Y-m-d H:i:s')]);

        return $statement->rowCount();
    }

    public function deleteMerchandise($id)
    {
        $query="delete from merchandise where id=?";
        $statement=$this->db->prepare($query);
        $statement->execute([$id]);
        return $statement->rowCount();
    }
    public function processFile($file){
        $tempName=$file["tmp_name"];
        $mime=explode('/',$file["type"]);
        $fileInfo=getimagesize($tempName);
        $allowed=false;
        if($fileInfo!==false){
            $allowed=in_array($fileInfo[2],FileUploadConfig::IMAGES);
        }
        if($allowed==false){
            return false;
        }
        $fileName=FileUploadConfig::IMAGE_DIR.md5(uniqid(mt_rand(), true)).'.'.$mime[1];
        $newFile=getcwd().DIRECTORY_SEPARATOR.$fileName;
        $result= move_uploaded_file($tempName,$newFile) ? $fileName : false;
        return $result;
    }
    public function  getSingleMerchandise($id)
    {
        $query="select name , price , promo_price as promoPrice, image from merchandise where id=?";
        $statement=$this->db->prepare($query);
        $statement->execute([$id]);
        return $statement->fetchObject(Merchandise::class);
    }
}