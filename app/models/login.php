<?php

class loginModel extends Zestify\Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function auth($email, $password)
    {
        $query = $this->_db->prepare("SELECT u_id FROM users WHERE u_email = :email
                                                    AND u_password = :password");
        $query->execute(array(
                ':email'    => $email,
                ':password' => $password
            ));

        var_dump($query->fetchAll());
    }

}
