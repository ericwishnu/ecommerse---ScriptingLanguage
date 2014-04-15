<?php class User_model extends CI_Model {

    private $iduser   = '';
    private $username = '';
    private $password = '';
    private $name = '';
    private $dob= '';
    private $address= '';
    private $phone= '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }


    function insert_entry($username,  $password, $name, $email){

        $username = $this->db->escape($username);
        $password = $this->db->escape($password);
        $name = $this->db->escape($name);
        $email = $this->db->escape($email);

        $sql = "INSERT INTO user (username, password, name, email) VALUES($username, $password, $name, $email)";
        $query = $this->db->query($sql);
        return $query;
    }

    function check_entry($username, $password){
        $username = $this->db->escape($username);
        $password = $this->db->escape($password);
        $sql = "SELECT * FROM user WHERE username=$username AND password=$password";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query;
        }
        return false;

    }



}