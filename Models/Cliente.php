<?php

namespace Models;

class Cliente extends Pessoa
{
    protected $id;
    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $altura;
    protected $peso;
    protected $email;
    protected $sexo;
    protected $nascionalidade;
    protected $datanasc;
    protected $numcelular;
    protected $numfixo;
    protected $numrecado;
    protected $status;
    protected $criadoem;
    protected $endereco;
    protected $mesa;

    /**
     * @return $idade
     */
    public function getIdade()
    {
        return parent::getIdade();
    }

    /**
     * @return Mesa
     */
    public function getMesa()
    {
        return $this->mesa;
    }

    /**
     * @param Mesa $mesa
     */
    public function setMesa(Mesa $mesa)
    {
        $this->mesa = $mesa;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getNascionalidade()
    {
        return $this->nascionalidade;
    }

    /**
     * @param mixed $nascionalidade
     */
    public function setNascionalidade($nascionalidade)
    {
        $this->nascionalidade = $nascionalidade;
    }

    /**
     * @return mixed
     */
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * @param mixed $datanasc
     */
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
    }

    /**
     * @return mixed
     */
    public function getNumcelular()
    {
        return $this->numcelular;
    }

    /**
     * @param mixed $numcelular
     */
    public function setNumcelular($numcelular)
    {
        $this->numcelular = $numcelular;
    }

    /**
     * @return mixed
     */
    public function getNumfixo()
    {
        return $this->numfixo;
    }

    /**
     * @param mixed $numfixo
     */
    public function setNumfixo($numfixo)
    {
        $this->numfixo = $numfixo;
    }

    /**
     * @return mixed
     */
    public function getNumrecado()
    {
        return $this->numrecado;
    }

    /**
     * @param mixed $numrecado
     */
    public function setNumrecado($numrecado)
    {
        $this->numrecado = $numrecado;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCriadoem()
    {
        return $this->criadoem;
    }

    /**
     * @param mixed $criadoem
     */
    public function setCriadoem($criadoem)
    {
        $this->criadoem = $criadoem;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param Endereco $endereco
     */
    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

}