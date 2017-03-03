<?php
/**
 * Created by PhpStorm.
 * User: Arch
 * Date: 3.3.2017 г.
 * Time: 15:58 ч.
 */

namespace Actions;


class SessionAction
{
    private $sessions;

    public function __construct(array &$sessions)
    {
        $this->sessions=&$sessions;
    }

    public function getAttribute($key)
    {
        return isset($this->sessions[$key])?$this->sessions[$key]:"";
    }
    public function setAttribute($key,$value)
    {
        $this->sessions[$key]=$value;
    }

    public function logoutUser($key)
    {
        unset($this->sessions[$key]);
    }


}