<?php

// Las sentencias preparadas evitan codigo malicioso SQL

require_once 'conexionBD.php';

abstract class Crud extends ConexionBD {
	private $table;
	private $pdo;

	public function __construct($table) {
		$this->table=$table;
		// Como el metodo esta protected se utiliza parent para usarlo de otra clase
		$this->pdo=parent::conexion();
	}

	public function getAll() {
		try{
			// Se prepara
			$stm=$this->pdo->prepare("SELECT * FROM $this->table");
			// Se ejecuta
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getByID($id) {
		try{
			// Se prepara
			$stm=$this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
			// Se ejecuta
			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (PDOException $e){
			echo $e->getMessage();
		}
	}

	public function delete($id) {
		try{
			// Se prepara
			$stm=$this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
			// Se ejecuta
			$stm->execute(array($id));

		} catch (PDOException $e){
			echo $e->getMessage();
		}
	}

	abstract function create();
	abstract function update();

}

 ?>