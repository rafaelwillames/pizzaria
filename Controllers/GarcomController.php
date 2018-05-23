<?php

namespace Controllers;

use DAO\GarcomDAO;
use Models\Endereco;
use Models\Garcom;

class GarcomController
{
    private $g;
    private $gdao;
    private $e;

    public function __construct()
    {
        $this->g = new Garcom();
        $this->gdao = new GarcomDAO();
        $this->e = new Endereco();
    }

    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $gojeta, $dtadmissao,
                           $salario, $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia)
    {
        // ID	CPF		RG NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	ESTADO	GOJETA	DATA_ADMISSAO	SALARIO	LOGRADOURO	NUMERO	COMPLEMENTO	BAIRRO	MUNICIPIO	UF	PAIS	REFERENCIA

        $this->g->setCpf($cpf);
        $this->g->setRg($rg);
        $this->g->setNome($nome);
        $this->g->setSexo($sexo);
        $this->g->setDtnasc($datanasc);
        $this->g->setNumfixo($numfixo);
        $this->g->setNumcel($numcel);
        $this->g->setEstado($estado);
        $this->g->setGojeta($gojeta);
        $this->g->setDtadmissao($dtadmissao);
        $this->g->setSalario($salario);
        $this->g->setLogradouro($logradouro);
        $this->g->setNumero($numero);
        $this->g->setComplemento($complemento);
        $this->g->setBairro($bairro);
        $this->g->setMunicipio($municipio);
        $this->g->setUf($uf);
        $this->g->setPais($pais);
        $this->g->setReferencia($referencia);

        if($this->g->getCpf() != null && $this->g->getNome() != null){
            $this->gdao->insert($this->g);
            return header("location: coz_form.php?msg=salvo");
        }else{
            return header("location: coz_form.php?msg=erro");
        }


    }

    public function update($id, $cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $gojeta, $dtadmissao, $salario,
                           $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia)
    {
        $this->g->setId($id);
        $this->g->setCpf($cpf);
        $this->g->setRg($rg);
        $this->g->setNome($nome);
        $this->g->setSexo($sexo);
        $this->g->setDtnasc($datanasc);
        $this->g->setNumfixo($numfixo);
        $this->g->setNumcel($numcel);
        $this->g->setEstado($estado);
        $this->g->setGojeta($gojeta);
        $this->g->setDtadmissao($dtadmissao);
        $this->g->setSalario($salario);
        $this->g->setLogradouro($logradouro);
        $this->g->setNumero($numero);
        $this->g->setComplemento($complemento);
        $this->g->setBairro($bairro);
        $this->g->setMunicipio($municipio);
        $this->g->setUf($uf);
        $this->g->setPais($pais);
        $this->g->setReferencia($referencia);

        $this->gdao->insert($this->g);
    }

    public function findAll()
    {
        return $this->gdao->findAll();
    }

    public function find($id){
        return $this->gdao->find($id);
    }
}