<?php

class UserController
{
    public function getAllUsers()
    {
        echo"todos usuario";
    }

    public function getUserById($userId)
    {
        echo"usuario pelo id";
    }

    public function getGreeting()
    {
        echo json_encode(['message' => 'Hello, welcome to the API!']);
    }

    // Add other controller methods as needed
}
