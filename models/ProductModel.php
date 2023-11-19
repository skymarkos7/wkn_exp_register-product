<?php

require_once("Database.php");

class ProductModel
{
    public function getAllProducts()
    {
        // Crie uma instância da classe Database
        $db = new Database();
        $conn = $db->getConnection();
        // Agora você pode realizar operações no banco de dados usando $conn
        try {

            $stmt = $conn->query('SELECT * FROM products');
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                // Manipular cada linha (registro) da tabela
                $data[] = $row;
            }
            return $data;

        } catch (PDOException $e) {
            die("Error in table products connection: " . $e->getMessage());
        }
        
    }

    public function getProductById($userId)
    {
        // Your code to retrieve a user by ID from the database
    }

    // Add other model methods as needed
}
