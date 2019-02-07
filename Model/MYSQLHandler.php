<?php

/**
 * Created by PhpStorm.
 * User: El Mansy
 * Date: 1/19/2019
 * Time: 1:10 PM
 */
class MYSQLHandler implements DbHandler
{
    private $table;
    private $handler;

    public function __construct($table)
    {
        $this->table=$table;
        $this->connect();

    }

    public function connect()
    {
        // TODO: Implement connect() method.
       $handler= mysqli_connect(__HOST__,__USER__,__PASS__,__DB__);
        if($handler)
        {
            $this->handler=$handler;
//            echo "success";
            return true;
        }
        else
        {

            echo "connection falied";
            return false;
        }

    }

    public function disconnect()
    {
        // TODO: Implement disconnect() method.
        if ($this->connect())
        {
            mysqli_close($this->handler);
        }
    }

    public function get_data($fields = array(),  $start = 0)
    {
        $sql ="select ";
        foreach ($fields as $field)
        {
            $sql.=$field." ,";
        }
        $sql.="from $this->table";
        $sql=str_replace(",from","from",$sql);
        $sql.=" limit ".$start.",".__RECORDS_PER_PAGE__;


       return $this->get_result($sql);
//        return $sql;
    }

    public function get_result($sql)
    {
        $_arr_result =array();
//        if (__Debug__Mode__===1)
//        {
//            echo $sql;
//        }
        $res_handler=mysqli_query($this->handler,$sql);
        while ($row=mysqli_fetch_array($res_handler,MYSQLI_ASSOC))
        {
            $_arr_result[]=array_change_key_case($row);
        }

        return $_arr_result;

    }
    public function get_record_by_id($index,$primary_key)
    {
        $sql="select * from $this->table WHERE $primary_key ='$index'";
        return $this->get_result($sql);
    }

    public function get_record_by_username($index,$username)
    {
        $sql="select * from $this->table WHERE $username ='$index'";
//        print_r($sql);
        return $this->get_result($sql);
    }

    public function get_record_by_login_user($username, $password)
    {
        $sql = "select * from $this->table where username = '$username' AND password = '$password';";
//        echo "bb";

        return $this->get_result($sql);
    }

    public function get_record_by_login_admin($username, $password)
    {
        $sql = "select * from $this->table where username = '$username' AND password = '$password' AND `is_admin`= 'true';";

        return $this->get_result($sql);
    }

    public function insert_data($username,$password,$name,$job,$image_name,$cv_name)
    {
//        echo "aa3";
        $sql= "INSERT INTO `users`( `username`, `password`, `Name`, `Job`, `image`, `cv`) 
                VALUES ('$username','$password','$name','$job','$image_name','$cv_name')";
//        var_dump($sql);
        $res_handler=mysqli_query($this->handler,$sql);
//        var_dump($res_handler);
        return $res_handler;
    }

    public function update_data($id,$name,$username,$password,$job,$image_name,$cv_name)
    {
//        echo "aa1";
        $sql= "UPDATE $this->table SET `username`='$username',`password`='$password',
        `Name`='$name',`Job`='$job',`image`='$image_name',`cv`='$cv_name' WHERE `id`= '$id'";
//        echo $sql;
        $res_handler=mysqli_query($this->handler,$sql);
//        print_r($res_handler);
        return $res_handler;
    }
}