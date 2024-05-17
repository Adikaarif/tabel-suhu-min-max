<?php

class dbconfig
{
    var $host = '103.144.209.109';
    var $uname = 'root';
    var $pass = '28';
    var $db = 'admin_sija';

    var $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }

    public function check_login($username, $password)
    {
        $sql = "SELECT * FROM logs WHERE username = '$username' AND password ='$password'";
        $query = $this->koneksi->query($sql);

        if ($query->num_rows > 0) {
            $row = $query->fetch_array();
            return $row['id'];
        } else {
            return false;
        }
    }

    public function details($sql)
    {
        $query = $this->koneksi->query($sql);
        $row = $query->fetch_array();
        return $row;
    }

    public function index()
    {
        $studentQuery = "SELECT * FROM students";
        $result = $this->conn->query($studentQuery);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
?>