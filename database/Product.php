<?php

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    public function getData($table = 'pet_info'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($pets = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $pets;
        }

        return $resultArray;
    }

    // get product using pet id
    public function getProduct($pet_id = null, $table= 'pet_info'){
        if (isset($pet_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE pet_id={$pet_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

}

