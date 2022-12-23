<?php
class connect
{
    //thuộc tính
    var $db = null;

    //hàm tạo
    // thực hiện công việt connect với database vằng PDB
    // PDB(dsn,user,pass,array)
    /**
     * It connects to the database
     */
    /**
     * It connects to the database
     */
    public function __construct()
    {

      /* Connecting to the database. */
        $dsn = 'mysql:host=localhost;dbname=shopit';
        $user = 'root';
        $password = '';
        $this->db = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    }
    /**
     * It takes a SQL query as a parameter and returns the result of the query.
     *
     * @param select the query to be executed
     * 
     * @return A result object.
     */
    public function getlist($select)
    {

        return $this->db->query($select);
    }
    public function getonce($select)
    {
        $result = $this->db->query($select);
        $result = $result->fetch();
        return $result;
    }
    public function send($select)
    {
        $this->db->query($select);
    }
    //phương thức
    
}
