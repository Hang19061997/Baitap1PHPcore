<?php
namespace BT\Core;

use BT\Config\Database;
use BT\Core\ResourceModelInterface;

class ResourceModel implements ResourceModelInterface
{
	protected $table;
	protected $id;
	protected $model;

	public function _init($table, $id, $model)
	{
		$this->table = $table;
		$this->id = $id;
		$this->model = $model;
	}

	public function save()
	{
		$key1 = "";
		$value1 = "";
		$arr = $this->model->getProperties();
		foreach ($arr as $key => $value) {
			$key1 .= $key . ",";
			$value1 .= "'" . $value . "',";
		}
		$sql = "INSERT INTO " . $this->table . "( " . substr($key1, 0, -1) . " )" . " VALUES (" . substr($value1, 0, -1) .");";
		// echo $sql;
		// die();

		$req = Database::getBdd()->prepare($sql);

		return $req->execute();

	}

	public function edit($id)
	{
		$result = "";
		$arr = $this->model->getProperties();
		foreach ($arr as $key => $value) {
			if(isset($value)){
				$result .= " " . $key . " = '" . $value . "',";
			}
		}
		$sql = "UPDATE " . $this->table . " SET " . substr($result, 0, -1) . " WHERE " .  $this->id . " = " . $id . ";";
		// echo $sql;
		// die();

        $req = Database::getBdd()->prepare($sql);

        return $req->execute();
	}

	public function get($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->id . " = " . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

	public function getAll(){
		$sql = "SELECT * FROM " . $this->table; 
		$req = Database::getBdd()->prepare($sql);
		$req ->execute();
		return $req->fetchAll();
	}


	public function delete($id)
	{
		$sql = "DELETE FROM " . $this->table . " WHERE ". $this->id . " = " . $id . ";";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute();
    }

    public function search($id)
    {
		$arr = $this->model->getProperties();
    	foreach ($arr as $key => $value) {
    		if(isset($value)) {
    			$this->id = 'hoten';
    		}
    	}

    	$sql = "SELECT * FROM " .$this->table . " where ".$this->id." like '%" .$id ."%';";
    	// echo $sql;
    	// die();
    	$req = Database::getBdd()->prepare($sql);

        $req->execute();
        return $req->fetchAll();
    }
}
?>