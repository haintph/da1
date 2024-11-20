<?php
class Product extends BaseModel
{
    /**
     * Trong bảng products có thuộc tinh status
     * giá trị 0 : Ngừng kinh doanh
     * Giá trị 1 : Đang kinh doanh
     */

    //Lấy ra tất cả các bản ghi
    public function all()
    {
        $sql = "SELECT p.*, c.category_name FROM products p JOIN categories c ON p.category_id = c.id";
        //Chuẩn bị thực thi
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //Trả về dữ liệu lấy được
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listProductInCategory($id)
    {
        $sql = "SELECT p.*, c.category_name FROM products p JOIN categories c ON p.category_id=c.id WHERE c.id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Thêm mới sản phẩm 
    public function create($data)
    {
<<<<<<< HEAD
        $sql = "  INSERT INTO products (category_id, product_name, img_product, description, status, brand, created_at) 
        VALUES (:category_id, :product_name, :img_product, :description, :status, :brand, NOW())";
        //Chuẩn bị thực thi
=======
        // Giả sử câu lệnh SQL của bạn có dạng như sau:
        $sql = "INSERT INTO products (product_name, category_id, price, quantity, status, description, img_product) 
                VALUES (:product_name, :category_id, :price, :quantity, :status, :description, :img_product)";

        // Chuẩn bị câu lệnh SQL
>>>>>>> 552f2c61625c2b9bf2b0160468e0831f7c15e49a
        $stmt = $this->conn->prepare($sql);

        // Liên kết các tham số với giá trị trong mảng $data
        $stmt->bindParam(':product_name', $data['product_name']);
        $stmt->bindParam(':category_id', $data['category_id']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':quantity', $data['quantity']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':description', $data['description']);
        $stmt->bindParam(':img_product', $data['img_product']);

        // Thực thi câu lệnh SQL
        $stmt->execute();
    }
    public function update($id, $data)
    {
        $sql = "UPDATE products 
            SET 
                product_name = :product_name,
                img_product = :img_product,
                description = :description,
                status = :status,
                brand= :brand,  
                category_id = :category_id 
                
            WHERE id = :id
            ";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }
    /**
     * function delete: xóa bản ghi
     * @id: mã sản phẩm cần xóa
     */
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM products WHERE id=:id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    /**
     * function find: lấy ra 1 bản ghi theo id
     * @id: mã sản phẩm cần tìm
     */
    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
