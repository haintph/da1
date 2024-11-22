<?php
class Comment extends BaseModel
{
    public function list()
    {
        $sql = "SELECT * FROM comments";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $comments;
    }
    //Thêm 1 bản ghi
    public function create($data)
    {
        $sql = "INSERT INTO comments(product_id, user_id, content) VALUES (:product_id,:user_id, :content)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE comments SET cate_name=:cate_name, type=:type WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        //Them id vao mang
        $data['id'] = $id;
        $stmt->execute($data);
    }
    //Xoa ban ghi (Xoa mem khong xoa khoi Database)
    public function delete($id)
    {
        //Chuyển trạng thái của soft_delete từ 0->1
        $sql = "UPDATE comments SET soft_delete=1 WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
    //Chi tiết 1 bản ghi 
    public function show($id)
    {
        $sql = "SELECT * FROM comments";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCommentsByProductId($product_id)
    {

        $sql = "SELECT * FROM comments WHERE product_id = :product_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['product_id' => $product_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
