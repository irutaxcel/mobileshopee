<?php
    // use to Product data
    class Product{
        public $db = null;


        public function __construct(DBController $db){
            if (!isset($db->con)) return null;
            $this->db = $db;
        }

        // fetching pruduct data using getData Method
        public function getData($table = 'product'){
            $result = $this->db->con->query("SELECT * FROM {$table}");

            $resultArray = array();

            // fetch data one by one
            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
        }

        // get product using item id
        public function getProduct($item_id, $table = "product"){
            if (isset($item_id)) {
                $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id ={$item_id}");

                $resultArray = array();

                // fetch data one by one
                while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $resultArray[] = $item;
                }
                return $resultArray;
                }
        }
    }
?>