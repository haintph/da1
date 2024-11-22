<?php
class AuthModel extends BaseModel
{
    public function all()
    {
        $sql = "SELECT * FROM users";
        //Chuẩn bị thực thi
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Trả về dữ liệu lấy được
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

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

    public function edit($data)
    {
        $sql = "UPDATE users SET username = :username, role = :role, image = :image WHERE email = :email";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':role', $data['role']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':email', $data['email']);

        return $stmt->execute();
    }

    public function findUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
