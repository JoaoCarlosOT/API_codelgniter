<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ProdutoController extends ResourceController
{
    protected $modelName = 'App\Models\Produtos'; // Corrigido para o nome correto do model
    protected $format    = 'json';

    public function index()
    {
        // $produtos = $this->model->findAll();
        // return $this->respond($produtos);
        return view('welcome_message');
    }

    public function show($id = null)
    {
        $produto = $this->model->find($id);
        if (!$produto) {
            return $this->failNotFound('Produto não encontrado');
        }
        return $this->respond($produto);
    }

    public function create()
    {
        $data = $this->request->getPost();
        if (!$this->model->insert($data)) {
            return $this->fail($this->model->errors());
        }
        $data['id'] = $this->model->insertID();
        return $this->respondCreated($data);
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if (!$this->model->update($id, $data)) {
            return $this->fail($this->model->errors());
        }
        return $this->respond($data);
    }

    public function delete($id = null)
    {
        if (!$this->model->delete($id)) {
            return $this->failNotFound('Produto não encontrado');
        }
        return $this->respondDeleted(['id' => $id]);
    }
}
