<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private $nome;
	private $email;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email) VALUES (:nome, :email)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, email = :email WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}