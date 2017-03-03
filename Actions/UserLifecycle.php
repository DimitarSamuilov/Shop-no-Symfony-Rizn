<?php
namespace Actions;

use DTO\User;

class UserLifecycle
{
    /**
     * @var \PDO
     */
    private $db;

    /**
     * UserLifecycle constructor.
     * @param /PDO $db
     */
    public function __construct($dbc)
    {
        $this->db = $dbc;
    }


    /**
     * @param string $username
     * @return mixed
     */
    public function getPassword($username)
    {
        $statement = $this->db->prepare("
            SELECT * FROM 
            users
            WHERE 
            username=?
        ");
        $statement->execute([$username]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['password'];

    }

    public function getUserId($username)
    {
        $statement = $this->db->prepare("
            SELECT * FROM 
            users
            WHERE 
            username=?
        ");
        $statement->execute([$username]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result['id'];
    }


    public function getUser($data)
    {
        $userExistStatement = $this->db->prepare("
            SELECT  
            * 
            FROM 
            user
            WHERE 
            username =?");
        $userExistStatement->execute([$data]);
        return $userExistStatement->fetchObject(User::class);
    }

    /**
     * @param $id
     * @return bool
     */
    public function isAdmin($id)
    {
        $statement = $this->db->prepare("
       Select name from role 
join user_roles on role.id=user_roles.role_id
join user on user.id=user_roles.user_id 
where user.id=?
        ");
        $statement->execute([$id]);
        $result = $statement->fetchAll(\PDO::FETCH_COLUMN);
        return in_array('ROLE_ADMIN' ,$result)? true: false;
    }

    /**
     * @param $user
     * @return array
     */
    public function registerUser($user)
    {
        $query="INSERT INTO user (username,password) VALUES (?,?)";
        $statement=$this->db->prepare($query);
        $statement->execute([$user->getUsername(),$user->getPassword()]);

        return [$statement->rowCount(),$this->db->lastInsertId()];

    }
}
