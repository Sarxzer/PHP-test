<?php

require_once __DIR__ . '/../../core/Database.php';

class HomeModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getData() {
        $this->db->query('SELECT * FROM posts');
        return $this->db->resultSet();
    }

    public function getAnotherData() {
        // Example method to get another set of data
        $this->db->query('SELECT * FROM posts WHERE id = :id');
        $this->db->bind(':id', 1);
        return $this->db->resultSet();
    }
}