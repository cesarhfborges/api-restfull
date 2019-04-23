<?php
class PDOUsuarios extends Model {

    public function listaUsuarios($filtro = null){
        $sql = $this->db->prepare("SELECT `ID`, `NOME`, `SOBRENOME`, `EMAIL`, `TELEFONE1`, `TELEFONE2`, `SENHA`, `ATIVO`, `ULTLOGIN`, `ULTIP`, `USERCRI`, `USERMOD`, `DATACRI`, `DATAMOD`, `FOTO`, `EXCLUIDO`, `TOKEN`, `TOKENVALIDADE` FROM `usuarios` ");
//        $sql->bindValue(':TOKEN', $this->hashSenha($email.$id));
//        $sql->bindValue(':TOKENVALIDADE', date('Y-m-d H:i:s', strtotime('+8 hours')));
//        $sql->bindValue(':ID', $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $row = $sql->fetchAll();
            $array = array();
            foreach ($row as $item){
                $u = new Usuario($item['ID'], $item['NOME'], $item['SOBRENOME'], $item['EMAIL'], $item['SENHA'], $item['TELEFONE1'], $item['TELEFONE2'], $item['ATIVO'], $item['ULTLOGIN'], $item['ULTIP'], $item['ULTIP'], $item['USERCRI'], $item['USERMOD'], $item['DATACRI'], $item['DATAMOD']);
                array_push($array, $u);
            }
            return $array;
        } else {
            return false;
        }
    }

    public function addusuario(Usuario $u, Usuario $usuarioLogado){
        $sql = $this->db->prepare("INSERT INTO `faxino`.`usuarios` (`NOME`, `SOBRENOME`, `EMAIL`, `TELEFONE1`, `TELEFONE2`, `SENHA`, `ATIVO`, `ULTLOGIN`, `ULTIP`, `USERCRI`, `USERMOD`, `FOTO`) 
        VALUES (<{NOME:}>, <{SOBRENOME:}>, <{EMAIL:}>, <{TELEFONE1:}>, <{TELEFONE2:}>, <{SENHA:}>, <{ATIVO:}>, <{USERCRI:}>, <{USERMOD:}>, <{FOTO:}>; ");
        $sql->bindValue('<{NOME:}>', $u->getNome());
        $sql->bindValue('<{SOBRENOME:}>', $u->getSobrenome());
        $sql->bindValue('<{EMAIL:}>', $u->getEmail());
        $sql->bindValue('<{SENHA:}>', $u->hashSenha(($u->getSenha() != null) ? $u->getSenha() : date('d-m-Y H:i:s', now())));
        $sql->bindValue('<{TELEFONE1:}>', $u->getTelefone1());
        $sql->bindValue('<{TELEFONE2:}>', $u->getTelefone2());
        $sql->bindValue('<{ATIVO: 1}>', $u->isAtivo());
        $sql->bindValue('<{USERCRI:}>', $usuarioLogado->getId());
        $sql->bindValue('<{USERMOD:}>', $usuarioLogado->getId());
        $sql->bindValue('<{FOTO:}>', $u->getFoto());
        $sql->bindValue('<{EXCLUIDO:}>', false);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        }
        return false;
    }

//    private function hashSenha($senha) {
//        if ($senha != '') {
//            return hash('sha256', $senha);
//        } else {
//            return "Error.";
//        }
//    }
//
//    private function setToken($id, $email){
//        $sql = $this->db->prepare("UPDATE `usuarios` SET `TOKEN` = :TOKEN, `TOKENVALIDADE` = :TOKENVALIDADE WHERE `ID` = :ID;");
//        $sql->bindValue(':TOKEN', $this->hashSenha($email.$id));
//        $sql->bindValue(':TOKENVALIDADE', date('Y-m-d H:i:s', strtotime('+8 hours')));
//        $sql->bindValue(':ID', $id);
//        $sql->execute();
//        if ($sql->rowCount() > 0) {
//            $row = $sql->fetch();
//            return $row['TOKEN'];
//        } else {
//            return false;
//        }
//    }
//
//    public function doLogin($email, $password) {
//        $sql = $this->db->prepare("SELECT `ID` FROM `usuarios` where `EMAIL` =:EMAIL and `SENHA` = :SENHA AND ATIVO = 1");
//        $sql->bindValue(":EMAIL", $email);
//        $sql->bindValue(":SENHA", $this->hashSenha($password));
//        $sql->execute();
//
//        if ($sql->rowCount() > 0) {
//            $row = $sql->fetch();
//            $token = $this->setToken($row['ID']) != false;
//            if ($token != false){
//                return $token;
//            }
//        } else {
//            return false;
//        }
//    }
}
