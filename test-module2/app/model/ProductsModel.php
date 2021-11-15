<?php

class ProductsModel
{
    private $DBConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->DBConnect = $conn->connect();
    }

    public function addProduct($product)
    {
        $sql = 'insert into products(name,category,price,quantity,description) value (?,?,?,?,?)';

        $stmt = $this->DBConnect->prepare($sql);

        $stmt->bindParam(1, $product['name']);
        $stmt->bindParam(2, $product['category']);
        $stmt->bindParam(3, $product['price']);
        $stmt->bindParam(4, $product['quantity']);
        $stmt->bindParam(5, $product['description']);

        $stmt->execute();
    }

    public function search($key)
    {
        $sql = "select * from products where name like N'%$key%' or name like N'$key'";
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function editProduct($product)
    {
        $sql = 'update products set name=?, description=?, quantity=?, price=?, category=? where id=?';
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(1, $product['name']);
        $stmt->bindParam(2, $product['description']);
        $stmt->bindParam(3, $product['quantity']);
        $stmt->bindParam(4, $product['price']);
        $stmt->bindParam(5, $product['category']);
        $stmt->bindParam(6, $product['id']);
        $stmt->execute();
    }

    public function selectAllProducts()
    {
        $sql = 'select * from products';
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function deleteProduct($id)
    {
        $sql = 'delete from products where id=:id';
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = 'select * from products where id=?';
        $stmt = $this->DBConnect->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return $stmt->fetch();
    }

}
