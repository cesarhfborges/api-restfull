<?php 
class Usuario {
	private $id;
	private $nome;
	private $sobrenome;
	private $email;
	private $usuario;
    private $senha;
	private $telefone;
	private $celular;
	private $ativo;
	private $ultimoLogin;
	private $ultimoIp;
	private $idEmpresa;
	private $idGrupo;
	private $idEquipe;
	private $assinatura;
	private $foto;
	private $ativacaoEmail;
	private $tipoUsuario;
	private $primeiroLogin;

    /**
     * Usuario constructor.
     * @param $id
     * @param $nome
     * @param $sobrenome
     * @param $email
     * @param $usuario
     * @param $senha
     * @param $telefone
     * @param $celular
     * @param $ativo
     * @param $ultimoLogin
     * @param $ultimoIp
     * @param $idEmpresa
     * @param $idGrupo
     * @param $idEquipe
     * @param $assinatura
     * @param $foto
     * @param $ativacaoEmail
     * @param $tipoUsuario
     * @param $primeiroLogin
     */
    public function __construct($id, $nome, $sobrenome, $email, $usuario, $senha, $idEmpresa, $idGrupo, $idEquipe, $telefone = null, $celular = null, $ativo = true, $ultimoLogin = '00-00-0000 00:00:00', $ultimoIp = '0.0.0.0', $assinatura = null, $foto = null, $ativacaoEmail = false, $tipoUsuario = true, $primeiroLogin = true)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->ativo = $ativo;
        $this->ultimoLogin = $ultimoLogin;
        $this->ultimoIp = $ultimoIp;
        $this->idEmpresa = $idEmpresa;
        $this->idGrupo = $idGrupo;
        $this->idEquipe = $idEquipe;
        $this->assinatura = $assinatura;
        $this->foto = $foto;
        $this->ativacaoEmail = $ativacaoEmail;
        $this->tipoUsuario = $tipoUsuario;
        $this->primeiroLogin = $primeiroLogin;
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
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
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
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
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
     * @return string
     */
    public function getUltimoLogin()
    {
        return $this->ultimoLogin;
    }

    /**
     * @param string $ultimoLogin
     */
    public function setUltimoLogin($ultimoLogin)
    {
        $this->ultimoLogin = $ultimoLogin;
    }

    /**
     * @return string
     */
    public function getUltimoIp()
    {
        return $this->ultimoIp;
    }

    /**
     * @param string $ultimoIp
     */
    public function setUltimoIp($ultimoIp)
    {
        $this->ultimoIp = $ultimoIp;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * @param mixed $idEmpresa
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
    }

    /**
     * @return mixed
     */
    public function getIdGrupo()
    {
        return $this->idGrupo;
    }

    /**
     * @param mixed $idGrupo
     */
    public function setIdGrupo($idGrupo)
    {
        $this->idGrupo = $idGrupo;
    }

    /**
     * @return mixed
     */
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }

    /**
     * @param mixed $idEquipe
     */
    public function setIdEquipe($idEquipe)
    {
        $this->idEquipe = $idEquipe;
    }

    /**
     * @return null
     */
    public function getAssinatura()
    {
        return $this->assinatura;
    }

    /**
     * @param null $assinatura
     */
    public function setAssinatura($assinatura)
    {
        $this->assinatura = $assinatura;
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
     * @return bool
     */
    public function isAtivacaoEmail()
    {
        return $this->ativacaoEmail;
    }

    /**
     * @param bool $ativacaoEmail
     */
    public function setAtivacaoEmail($ativacaoEmail)
    {
        $this->ativacaoEmail = $ativacaoEmail;
    }

    /**
     * @return bool
     */
    public function isTipoUsuario()
    {
        return $this->tipoUsuario;
    }

    /**
     * @param bool $tipoUsuario
     */
    public function setTipoUsuario($tipoUsuario)
    {
        $this->tipoUsuario = $tipoUsuario;
    }

    /**
     * @return bool
     */
    public function isPrimeiroLogin()
    {
        return $this->primeiroLogin;
    }

    /**
     * @param bool $primeiroLogin
     */
    public function setPrimeiroLogin($primeiroLogin)
    {
        $this->primeiroLogin = $primeiroLogin;
    }
}