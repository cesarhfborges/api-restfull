<?php
class Usuario
{
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $telefone1;
    private $telefone2;
    private $ativo;
    private $ultimoLogin;
    private $ultimoIp;
    private $userCri;
    private $userMod;
    private $dataCri;
    private $dataMod;
    private $foto;
    private $token;
    private $tokenValidade;

    /**
     * Usuario constructor.
     * @param $id
     * @param $nome
     * @param $sobrenome
     * @param $email
     * @param $senha
     * @param $telefone1
     * @param $telefone2
     * @param $ativo
     * @param $ultimoLogin
     * @param $ultimoIp
     * @param $userCri
     * @param $userMod
     * @param $dataCri
     * @param $dataMod
     * @param $foto
     * @param $token
     * @param $tokenValidade
     */

    public function hashSenha($key = null){
        return hash('sha256', $key);
    }
    public function __construct($id = null, $nome, $sobrenome, $email, $senha, $telefone1 = null, $telefone2 = null, $ativo = true, $ultimoLogin = null, $ultimoIp = null, $userCri = null, $userMod = null, $dataCri = null, $dataMod = null, $foto = null, $token = null, $tokenValidade = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone1 = $telefone1;
        $this->telefone2 = $telefone2;
        $this->ativo = $ativo;
        $this->ultimoLogin = $ultimoLogin;
        $this->ultimoIp = $ultimoIp;
        $this->userCri = $userCri;
        $this->userMod = $userMod;
        $this->dataCri = $dataCri;
        $this->dataMod = $dataMod;
        $this->foto = $foto;
        $this->token = $token;
        $this->tokenValidade = $tokenValidade;
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
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return null
     */
    public function getTelefone1()
    {
        return $this->telefone1;
    }

    /**
     * @param null $telefone1
     */
    public function setTelefone1($telefone1)
    {
        $this->telefone1 = $telefone1;
    }

    /**
     * @return null
     */
    public function getTelefone2()
    {
        return $this->telefone2;
    }

    /**
     * @param null $telefone2
     */
    public function setTelefone2($telefone2)
    {
        $this->telefone2 = $telefone2;
    }

    /**
     * @return bool
     */
    public function isAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param bool $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return null
     */
    public function getUltimoLogin()
    {
        return $this->ultimoLogin;
    }

    /**
     * @param null $ultimoLogin
     */
    public function setUltimoLogin($ultimoLogin)
    {
        $this->ultimoLogin = $ultimoLogin;
    }

    /**
     * @return null
     */
    public function getUltimoIp()
    {
        return $this->ultimoIp;
    }

    /**
     * @param null $ultimoIp
     */
    public function setUltimoIp($ultimoIp)
    {
        $this->ultimoIp = $ultimoIp;
    }

    /**
     * @return null
     */
    public function getUserCri()
    {
        return $this->userCri;
    }

    /**
     * @param null $userCri
     */
    public function setUserCri($userCri)
    {
        $this->userCri = $userCri;
    }

    /**
     * @return null
     */
    public function getUserMod()
    {
        return $this->userMod;
    }

    /**
     * @param null $userMod
     */
    public function setUserMod($userMod)
    {
        $this->userMod = $userMod;
    }

    /**
     * @return null
     */
    public function getDataCri()
    {
        return $this->dataCri;
    }

    /**
     * @param null $dataCri
     */
    public function setDataCri($dataCri)
    {
        $this->dataCri = $dataCri;
    }

    /**
     * @return null
     */
    public function getDataMod()
    {
        return $this->dataMod;
    }

    /**
     * @param null $dataMod
     */
    public function setDataMod($dataMod)
    {
        $this->dataMod = $dataMod;
    }

    /**
     * @return null
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param null $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return null
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param null $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @return null
     */
    public function getTokenValidade()
    {
        return $this->tokenValidade;
    }

    /**
     * @param null $tokenValidade
     */
    public function setTokenValidade($tokenValidade)
    {
        $this->tokenValidade = $tokenValidade;
    }

}
