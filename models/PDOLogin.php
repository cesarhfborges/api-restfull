<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 18/04/2019
 * Time: 23:46
 */

class PDOLogin extends Model
{
    private function hashSenha($senha) {
        if ($senha != '') {
            return hash('sha256', $senha);
        }
        return "Error.";
    }

    private function setToken($id = null, $email = null){
        if ($id != null && $email != null){
            $validade = date('Y-m-d H:i:s', strtotime('+8 hours'));
            $sql = $this->db->prepare("UPDATE `usuarios` SET `TOKEN` = :TOKEN, `TOKENVALIDADE` = :TOKENVALIDADE WHERE `ID` = :ID;");
            $sql->bindValue(':TOKEN', $this->hashSenha($email.$id.$validade));
            $sql->bindValue(':TOKENVALIDADE', $validade);
            $sql->bindValue(':ID', $id);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $sql2 = $this->db->prepare("SELECT `TOKEN` FROM `usuarios` where `ID` = :ID LIMIT 1");
                $sql2->bindValue(":ID", $id);
                $sql2->execute();
                $row = $sql2->fetch();
                return $row['TOKEN'];
            }
        }
        return false;
    }

    public function doLogin($email, $password) {
        $sql = $this->db->prepare("SELECT `ID`, `EMAIL` FROM `usuarios` where (`EMAIL` =:EMAIL) and (`SENHA` = :SENHA) AND `ATIVO` = 1 AND `EXCLUIDO` = 0 LIMIT 1");
        $sql->bindValue(":EMAIL", $email);
        $sql->bindValue(":SENHA", $this->hashSenha($password));
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $token = $this->setToken($row['ID'], $row['EMAIL']);
            if ($token != false){
                return $token;
            }
        } else {
            return false;
        }
    }

    public function validaToken($token){
        $sql = $this->db->prepare("SELECT `ID`, `EMAIL`, `TOKEN`, `TOKENVALIDADE` FROM `usuarios` where `TOKEN` = :TOKEN AND `TOKENVALIDADE` > NOW() AND `ATIVO` = 1 AND `EXCLUIDO` = 0 LIMIT 1");
        $sql->bindValue(":TOKEN", $token);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        }
        return false;
    }
}
