<?php

class ProductController
{
    public function __construct()
    {
        $this->productsConnect = new ProductsModel();
    }

    public function addForm()
    {
        include 'app/view/addProduct.php';
    }

    public function editForm($id)
    {
        $product=$this->productsConnect->getById($id);
        include 'app/view/edit.php';
    }

    public function update()
    {
        $product['name']=$_REQUEST['name'];
        $product['category']=$_REQUEST['category'];
        $product['price']=$_REQUEST['price'];
        $product['quantity']=$_REQUEST['quantity'];
        $product['information']=$_REQUEST['information'];
        $product['id']=$_REQUEST['id'];

        $this->productsConnect->editProduct($product);
    }

    public function addProducts()
    {
        $product['name']=$_REQUEST['name'];
        $product['category']=$_REQUEST['category'];
        $product['price']=$_REQUEST['price'];
        $product['quantity']=$_REQUEST['quantity'];
        $product['information']=$_REQUEST['information'];

        $this->productsConnect->addProduct($product);
    }

    public function productsList()
    {
        $products=$this->productsConnect->selectAllProducts();
        include 'app/view/productsList.php';
    }

    public function search($key)
    {
        $products=$this->productsConnect->search($key);
        include 'app/view/searchList.php';
    }

    public function delete($id)
    {
        $this->productsConnect->deleteProduct($id);
    }
}