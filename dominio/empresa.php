<?php
    class Empresa{
        private $nome;
        private $geolocalizacao;
        private $cidadelbge;
        private $telefone;
        private $id;
    
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
	public function getGeolocalizacao() {
		return $this->geolocalizacao;
	}
	
	/**
	 * @param mixed $geolocalizacao 
	 * @return self
	 */
	public function setGeolocalizacao($geolocalizacao): self {
		$this->geolocalizacao = $geolocalizacao;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCidadelbge() {
		return $this->cidadelbge;
	}
	
	/**
	 * @param mixed $cidadelbge 
	 * @return self
	 */
	public function setCidadelbge($cidadelbge): self {
		$this->cidadelbge = $cidadelbge;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->telefone;
	}
	
	/**
	 * @param mixed $telefone 
	 * @return self
	 */
	public function setTelefone($telefone): self {
		$this->telefone = $telefone;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}
}
