<?php
/**
 * Created by PhpStorm.
 * User: cesar.borges
 * Date: 22/04/2019
 * Time: 10:04
 */

class PDOLogin extends Model
{
    private function hashSenha($param) {
        if ($param != '') {
            return hash('sha256', $param);
        } else {
            return "Error.";
        }
    }

    private function setToken($id, $login){
        $hash = $this->hashSenha($id.$login.date('d-m-Y H-i-s', strtotime('+8 hours')));
        $sql = $this->db->prepare("UPDATE `usuarios` SET `TOKENLOGIN` = :TOKENLOGIN, `VALIDADETOKENLOGIN` = :VALIDADETOKENLOGIN where `ID` = :ID");
        $sql->bindValue(":TOKENLOGIN", $hash);
        $sql->bindValue(":VALIDADETOKENLOGIN", date('Y-m-d H:i:s', strtotime('+8 hours')));
        $sql->bindValue(":ID", $id);
        $sql->execute();
        if ($sql->rowCount() > 0){
            return $hash;
        }
        return false;
    }

    public function doLogin($login, $senha) {
        $row = array();
        $sql = $this->db->prepare("SELECT `ID`, `EMAIL`, `TOKENLOGIN`, `VALIDADETOKENLOGIN` FROM `usuarios` where (`EMAIL` = :LOGIN OR `USUARIO` = :LOGIN) and `SENHA` = :SENHA and `ATIVO` = 1 AND `EXCLUIDO` = 0");
        $sql->bindValue(":LOGIN", $login);
        $sql->bindValue(":SENHA", $this->hashSenha($senha));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $token = $this->setToken($row['ID'], $row['EMAIL']);
            if ($token != false) {
                return $token;
            }
        }
        return false;
    }

    public function isLogged($token){
        $row = array();
        $sql = $this->db->prepare("SELECT `ID`, `EMAIL` FROM `usuarios` where `TOKENLOGIN` = :TOKEN and `VALIDADETOKENLOGIN` > now() and `ATIVO` = 1 AND `EXCLUIDO` = 0 LIMIT 1");
        $sql->bindValue(":TOKEN", $token);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        }
        return false;
    }
}