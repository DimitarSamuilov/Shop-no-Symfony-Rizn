<?php
/**
 * Created by PhpStorm.
 * User: Arch
 * Date: 3.3.2017 г.
 * Time: 15:31 ч.
 */

namespace DTO;


class Merchandise
{
    private $id;
    private $name;
    private $price;
    private $promoPrice;
    private $dateAdded;
    private $image;
    private $userId;
    private $categoryId;

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getFormattedDate()
    {
        return $this->getDateAdded()->format('Y-m-d H:i:s');
    }

    /**
     * @return mixed
     */
    public function getPromoPrice()
    {
        return $this->promoPrice;
    }

    /**
     * @param mixed $promoPrice
     */
    public function setPromoPrice($promoPrice)
    {
        $this->promoPrice = $promoPrice;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * @param mixed $dateAdded
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }




    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


}