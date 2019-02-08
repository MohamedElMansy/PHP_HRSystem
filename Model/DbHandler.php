<?php
if(__ALLOW_ACCESS__ !=1) {
    header("location:../index.php");

}
interface DbHandler {
    public function connect();
    public function get_data($fields = array(),  $start = 0);
    public function disconnect();   
//    public function get_record($index);
    
    
}