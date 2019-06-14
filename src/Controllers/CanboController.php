<?php
namespace BT\Controllers;

use BT\Core\Controller;
use BT\Models\CanboModel;
use BT\Models\CanboRepository;


class CanboController extends Controller
{
    protected $canboRepository;

    public function __construct()
    {
        $this->canboRepository = new CanboRepository(new CanboModel());
    }

    function index()
    {

        $d['canbo'] = $this->canboRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["hoten"])) {   
            $model= new CanboModel();
            $model->setHoten($_POST["hoten"]);
            $model->setGioitinh($_POST["gioitinh"]);
            $model->setNgaysinh($_POST["ngaysinh"]);
            $model->setDiachi($_POST["diachi"]);
            $canboRepository = new CanboRepository($model);
            if($canboRepository->add()) {
                header("Location: " . WEBROOT . "canbo/index");
            }    
        }

        $this->render("create");
    }

    function edit($id)
    {
        $d["cb"] =  $this->canboRepository->get($id);

        if (isset($_POST["hoten"])) {   
            $model= new CanboModel();
            $model->setHoten($_POST["hoten"]);
            $model->setGioitinh($_POST["gioitinh"]);
            $model->setNgaysinh($_POST["ngaysinh"]);
            $model->setDiachi($_POST["diachi"]);
            
            $canboRepository = new CanboRepository($model);
            if($canboRepository->edit($id)) {
                header("Location: " . WEBROOT . "canbo/index");
            }    
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        if ($this->canboRepository->delete($id))
        {
            header("Location: " . WEBROOT . "canbo/index");
        }
    }

    function get($id)
    {
        $d["cb"] = $this->canboRepository->get($id);
        $this->set($d);
        $this->render("get");
    }

    function search()
    {
        if (isset($_POST["search"])) {
            $d['canbo'] = $this->canboRepository->search($_POST["search"]);
            $this->set($d);
        }

        $this->render("search");
    }
}
?>