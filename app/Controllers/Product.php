<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;

class Product extends ResourceController
{
    protected $modelName = 'App\Models\ProductModel';
    protected $format    = 'json';

    public function index()
    {
        $data['products'] = $this->model->findAll();
        return view('products/index', $data);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
    {
        $this->model->insert([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'date' => $this->request->getPost('date'),
            'price' => $this->request->getPost('price'),
        ]);
        return redirect()->to('/product');
    }

    public function edit($id = null)
    {
        $data['product'] = $this->model->find($id);
        return view('products/edit', $data);
    }

    public function update($id = null)
    {
        $this->model->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'date' => $this->request->getPost('date'),
            'price' => $this->request->getPost('price'),
        ]);
        return redirect()->to('/product');
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/product');
    }
}

