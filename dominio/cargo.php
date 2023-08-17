<?php
class Cargo {
    private $salario;
    private $nome;
    private $int;

	/**
	 * @return mixed
	 */
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getInt() {
		return $this->int;
	}
	
	/**
	 * @param mixed $int 
	 * @return self
	 */
	public function setInt($int): self {
		$this->int = $int;
		return $this;
	}
}