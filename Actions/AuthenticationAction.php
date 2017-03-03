<?php
/**
 * Created by PhpStorm.
 * User: Arch
 * Date: 3.3.2017 г.
 * Time: 16:01 ч.
 */

namespace Actions;


class AuthenticationAction extends SessionAction
{

    const KEY_SESSION_USER_ID='auth_id';
    private $db;


    /**
     * AuthenticationAction constructor.
     * @param array $database
     * @param $session
     */
    public function __construct($database,array &$session)
    {
        parent::__construct($session);
        $this->db=$database;
    }

    public function isLogged(){
        return !empty($this->getAttribute(self::KEY_SESSION_USER_ID));
    }
    public function logout(){
        $this->logoutUser(AuthenticationAction::KEY_SESSION_USER_ID);
    }
    public function login($id)
    {
        $this->setAttribute(AuthenticationAction::KEY_SESSION_USER_ID,$id);
    }
    public function encrypt($password)
    {
        return password_hash($password,PASSWORD_BCRYPT);
    }
    public function verify($password, $hash)
    {
        return password_verify($password,$hash);
    }

}