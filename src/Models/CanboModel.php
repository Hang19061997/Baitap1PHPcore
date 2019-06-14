<?php
namespace BT\Models;

use BT\Core\Model;

class CanboModel extends Model
{
	protected $hoten;
	protected $gioitinh;
	protected $ngaysinh;
	protected $diachi;

	public function __construct()
	{
		$this->hoten="";
		$this->gioitinh="";
		$this->ngaysinh="";
		$this->diachi="";
	}

	public function setHoten($hoten)
	{
		$this->hoten=$hoten;
	}

	public function getHoten()
	{
		return $this->hoten;
	}

	public function setGioitinh($gioitinh)
	{
		$this->gioitinh=$gioitinh;
	}

	public function getGioitinh()
	{
		return $this->gioitinh;
	}

	public function setNgaysinh($ngaysinh)
	{
		$this->ngaysinh=$ngaysinh;
	}

	public function getNgaysinh()
	{
		return $this->ngaysinh;
	}

	public function setDiachi($diachi)
	{
		$this->diachi=$diachi;
	}

	public function getDiachi()
	{
		return $this->diachi;
	}
}