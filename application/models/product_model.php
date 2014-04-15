<?php class Product_model extends CI_Model {

    private $idproduct = '';
    private $name = '';
    private $description = '';
    private $img_url ='';
    private $category_id = '';
    private $quantity = '';
    private $price = '';
    private $status = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");

    }
    function show_entry($offset=0){
        $sql = "SELECT * FROM products WHERE status='avaiable' LIMIT $offset";
        $products = $this->db->query($sql);
        if($products->num_rows() > 0){

            return $products;
        }
        return false;
       //$products= $this->db->get('products', 12, $offset);
        //return $products;
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