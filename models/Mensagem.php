<?php

class Mensagem 
{

    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function setMensagem ($msg, $tipo, $redirect = "index.php") {
        $_SESSION["msg"] = $msg;
        $_SESSION["tipo"] = $tipo;

        if ($redirect == "back") {
            //Última página que o usuário entrou
            header("Location: " . $_SERVER["HTTP_REFERER"]); 
        } else {
            // Vai pra onde estou mandando
            header("Location: $this->url" . $redirect);
        }
    }

    public function getMensagem(){
        // Verifico se veio alguma mensagem, se veio retorno a mensagem e o tipo e se não veio retorno false
        if (empty($_SESSION["msg"])){
            return false;
        } else {
            return [
                'msg' => $_SESSION['msg'],
                'tipo' => $_SESSION['tipo']
            ];
        }
    }

    public function limparMensagem(){
        // Limpo a mensagem da tela
        $_SESSION['msg'] = "";
        $_SESSION['tipo'] = "";
    }

}