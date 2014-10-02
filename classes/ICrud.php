<?php

interface ICrud 
{
	/**
 	* Fica a cargo de quem instanciar a classe crud implementar este método
 	*/
	public function insert();
	/**
 	* Fica a cargo de quem instanciar a classe crud implementar este método
 	*/
	public function update($id);
	public function find($id);
	public function findAll();
	public function delete($id);
}