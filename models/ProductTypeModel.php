<?php

require_once("models/Database.php");

class ProductTypeModel
{
    public function getAllTypes()
    {
        // Crie uma instância da classe Database
        $db = new Database();
        $conn = $db->getConnection();
        // Agora você pode realizar operações no banco de dados usando $conn
        try {

            $stmt = $conn->query('SELECT * FROM products_type');
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $row) {
                // Manipular cada linha (registro) da tabela
                $data[] = $row;
            }
            return $data;

        } catch (PDOException $e) {
            die("Error in table products_type connection: " . $e->getMessage());
        }
    }

    public function getTypesById($userId)
    {
        // Your code to retrieve a user by ID from the database
    }

    // Add other model methods as needed
}
