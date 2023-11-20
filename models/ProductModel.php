<?php

require_once("Database.php");

class ProductModel
{
    public function getAllProducts()
    {
        // Start a instance for the class DB
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

    public function registerProduct()
    {
        // Start a instance for the class DB
        $db = new Database();
        $conn = $db->getConnection();
        
        try {
        
            $stmt = $conn->prepare('INSERT INTO products (name, price, type_id) VALUES (:name, :price, :typeId)');
            
            $stmt->bindParam(':name', $_POST['name']);
            $stmt->bindParam(':price', $_POST['price']);
            $stmt->bindParam(':typeId', $_POST['typeId']);
        
            $stmt->execute();
        
            return "Novo produto inserido com sucesso!";
        
        } catch (PDOException $e) {
            return "Erro ao inserir na tabela products: " . $e->getMessage();
        }
        
    }

    // Add other model methods as needed
}
