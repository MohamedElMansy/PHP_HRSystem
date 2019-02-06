<?php

/**
 * Created by PhpStorm.
 * User: El Mansy
 * Date: 2/1/2019
 * Time: 4:39 PM
 */
class Register
{

    private $username;
    private $password;
    private $name;
    private $job;
    private $img;
    private $cv;
    private $file_name_img;
    private $file_name_cv;
    private $file_tmp_img;
    private $file_tmp_cv ;
   private $errors = array();

    public function __construct($name,$username,$password,$job,$img,$cv)
    {
        $this->password=$password;
        $this->name=$name;
        $this->username=$username;
        $this->job=$job;
        $this->img=$img;
        $this->cv=$cv;

        $this->registration();


    }

    public function registration ()
    {

//        $errors= array();
        $this->file_name_img = $this->img['name'];
        $file_size =$this->img['size'];
        $this->file_tmp_img =$this->img['tmp_name'];
        $file_type=$this->img['type'];
        $x=explode('.',$this->img['name']);
        $file_ext=strtolower(end($x));
        $expensions= array("jpg");
        if(in_array($file_ext,$expensions)=== false)
        {
            $this->errors[]="extension not allowed, please choose a JPG ";
        }
        if($file_size > 1097152)
        {
            $this->errors[]='File size must be excately 1 MB';
        }

        $this->file_name_cv = $this->cv['name'];
        $file_size2 =$this->cv['size'];
        $this->file_tmp_cv =$this->cv['tmp_name'];
        $file_type2=$this->cv['type'];
        $x2=explode('.',$this->cv['name']);
        $file_ext2=strtolower(end($x2));
        $expensions2= array("pdf");
        if(in_array($file_ext2,$expensions2)=== false)
        {
            $this->errors[]="extension not allowed, please choose a pdf file.";
        }

        if($file_size2 > 2097152)
        {
            $this->errors[]='File size must be excately 2 MB';
        }


//        if(empty($errors)==true)
//        {
////            echo "aa2";
//            move_uploaded_file($this->file_tmp_img,"images/".$this->file_name_img);
//            move_uploaded_file($this->file_tmp_cv,"images/cvs/".$this->file_name_cv);
//
//            $dbhandler=new MYSQLHandler("users");
//            $db_result=$dbhandler->insert_data($this->username,$this->password,$this->name,$this->job,$this->file_name_img,$this->file_name_cv);
//            if ($db_result)
//            {
//                session_start();
//                $_SESSION['username']=$this->username;
//                $_SESSION["is_admin"] = false;
//                header('location:../../index.php');
//            }
//        }
//        else
//        {
//            print_r($this->errors);
//        }
    }

    public function insert_form_data()
    {
        if(empty($this->errors)==true)
        {
    //        echo "aa2";
            move_uploaded_file($this->file_tmp_img,"images/".$this->file_name_img);
            move_uploaded_file($this->file_tmp_cv,"images/cvs/".$this->file_name_cv);

            $dbhandler=new MYSQLHandler("users");
            $db_result=$dbhandler->insert_data($this->username,$this->password,$this->name,$this->job,$this->file_name_img,$this->file_name_cv);
            if ($db_result)
            {
                session_start();
                $_SESSION['username']=$this->username;
                $_SESSION["is_admin"] = false;
                header('location:../../index.php');
            }
        }
        else
        {
            print_r($this->errors);
        }
    }


    public function update_form_data($id)
    {
        if(empty($this->errors)==true)
        {
//           echo "aa2";
            move_uploaded_file($this->file_tmp_img,"views/public/images/".$this->file_name_img);
            move_uploaded_file($this->file_tmp_cv,"views/public/images/cvs/".$this->file_name_cv);

            $dbhandler=new MYSQLHandler("users");
            $db_result=$dbhandler->update_data($id,$this->name,$this->username,$this->password,$this->job,$this->file_name_img,$this->file_name_cv);
            if ($db_result)
            {
                $_SESSION['username']=$this->username;

                header('location:index.php');
            }
        }
        else
        {
            print_r($this->errors);
        }
    }
}