<?php

class Product extends Controller {

    public function index() {
        $product = $this->model('ProductModel');
        $products = $product->getAll();
        $this->view('product/index', ['products' => $products]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = $this->model('ProductModel');
            $product->create($_POST['name'], $_POST['price']);
            redirect('product');
        } else {
            $this->view('product/create');
        }
    }

    public function edit($id) {
        $product = $this->model('ProductModel');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product->update($id, $_POST['name'], $_POST['price']);
            redirect('product');
        } else {
            $data = $product->getById($id);
            $this->view('product/edit', ['product' => $data]);
        }
    }

    public function delete($id) {
        $product = $this->model('ProductModel');
        $product->delete($id);
        redirect('product');
    }
}
