<?php

/**
 * Created by PhpStorm.
 * User: El Mansy
 * Date: 1/31/2019
 * Time: 12:06 PM
 */
class LogIn
{
    private $username;
    private $password;

    public function __construct($username,$password)
    {
        $this->password=$password;
        $this->username=$username;

    }

    public function db_check_user()
    {
        $dbhandler=new MYSQLHandler("users");
        $data_user=$dbhandler->get_record_by_login_user($this->username,$this->password);
        return $data_user;

    }
    public function db_check_admin()
    {
        $dbhandler=new MYSQLHandler("users");
        $data_admin=$dbhandler->get_record_by_login_admin($this->username,$this->password);
        return $data_admin;

    }

}