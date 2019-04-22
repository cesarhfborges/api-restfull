<?php
Class PDOUsuarios extends Model {

    public function __construct($token = null)
    {

    }

    public function listarUsuarios(){
        $array = array();
        $sql = "SELECT * FROM usuarios where (EXCLUIDO = 0) LIMIT 2 ";
        $sql = $this->db->prepare($sql);
        //$sql->bindValue(":IDEMPRESA", $idEmpresa);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $row = $sql->fetchAll();
            foreach ($row as $item){
                $u = new Usuario($item['ID'],$item['NOME'], $item['SOBRENOME'], $item['EMAIL'], $item['USUARIO'], $item['SENHA'], $item['IDEMPRESA'], $item['IDGRUPO'], $item['IDEQUIPE'], $item['TELEFONE'], $item['CELULAR'], $item['ATIVO'], $item['ULTLOGIN'], $item['ULTIP'], $item['ASSINATURA'], $item['FOTO'], $item['']);
                array_push($array, $u);
            }
        }
        return false;
    }
    
}
