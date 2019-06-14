<?php
namespace BT\Models;

use BT\Config\Database;
use BT\Models\CanboModel;
use BT\Models\CanboResourceModel;

class CanboRepository 
{
    private $canboResourceModel;

    public function __construct(CanboModel $model)
    {
        $this->canboResourceModel = new CanboResourceModel($model);
    } 
    public function add()
    {
        // $this->model = $model;
        return  $this->canboResourceModel->save();
    }

    public function get($id)
    {
    	return $this->canboResourceModel->get($id);
    }

    public function getAll()
    {
    	return $this->canboResourceModel ->getAll();
    }

    public function edit($id)
    {
        return $this->canboResourceModel->edit($id);
    }

    public function delete($id)
    {
    	return $this->canboResourceModel->delete($id);
    }

    public function search($id)
    {
        return $this->canboResourceModel->search($id);
    }
}