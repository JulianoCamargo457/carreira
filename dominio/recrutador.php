<?php
    class Recrutador {
        private $nome;
        private $email;
        private $telefone;
        private $id;
    
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
}