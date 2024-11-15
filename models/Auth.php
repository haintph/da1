<?php
class AuthModel extends BaseModel
{
    public function checkUserExists($email, $username)
    {
        $sql = "SELECT * FROM users WHERE email = :email OR username = :username";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email, 'username' => $username]);
        return $stmt->fetch();
    }

    public function createUser($username, $email, $password)
    {
        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
    }

    // Tìm người dùng theo email
    public function findUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
}
