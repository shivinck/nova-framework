<?php

use MVC\Model;

class ModelsHome extends Model {

    public function getAllUser() {
        // can you connect to database
        // $this->db->query( write your sql syntax: "SELECT * FROM " . DB_PREFIX . "user");

        return [ 
            'name'      => 'Shivin',
            'family'    => 'Narayanan',
            'age'       => 21,
            'country'   => 'India',
            'city'      => 'Kozhikode'
        ];
    }
}
