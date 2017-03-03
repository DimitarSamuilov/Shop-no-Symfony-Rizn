<?php
/**
 * Created by PhpStorm.
 * User: Arch
 * Date: 3.3.2017 г.
 * Time: 15:36 ч.
 */

namespace Actions;


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
        $query="select id,name,price,description, image from merchandise limit 8";
        $statement=$this->db->prepare($query);
        $statement->execute();
        while($single=$statement->fetchObject(Merchandise::class)){
            yield $single;
        };
    }

    public function getSingleMerchandise($id)
    {
        $query="SELECT name, price ,description FROM merchandise where id=?";
        $statement=$this->db->prepare($query);
        $statement->execute([$id]);
        return $statement->fetchObject(Merchandise::class);
    }
    public function getAllMerchandise()
    {
        $query="select id,name,price,description, image from merchandise";
        $statement=$this->db->prepare($query);
        $statement->execute();
        while ($data=$statement->fetchObject(Merchandise::class)){
            yield $data;
        }
    }

    /**
     * @param $id
     * @param $merchandise Merchandise
     */
    public function editMerchandise($id,$merchandise)
    {
        $query="UPDATE merchandise set name=?,price=? ,description=? where id=? ";
        $statement=$this->db->prepare($query);
        $statement->execute([$merchandise->getName(),$merchandise->getPrice(),$merchandise->getDescription(),$id]);

    }

    /**
     * @param $merchandise Merchandise
     * @return int
     */
    public function addMerchandise($merchandise)
    {
        $query="insert into merchandise (name,user_id ,price,description) VALUES (?,?,?,?)";
        $statement=$this->db->prepare($query);
        $statement->execute([$merchandise->getName(),$merchandise->getUserId(),$merchandise->getPrice(),$merchandise->getDescription()]);
        return $statement->rowCount();
    }

    public function deleteMerchandise($id)
    {
        $query="delete from merchandise where id=?";
        $statement=$this->db->prepare($query);
        $statement->execute([$id]);
        return $statement->rowCount();
    }
}