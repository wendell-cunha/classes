<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php


class Login {
  private $email;
  private $senha;
  private $nome;


  public function __construct($email, $senha, $nome){
   $this->nome = $nome;
   $this->getEmail($email);
   $this->getSenha($senha); 
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($x){
    $this->email = $x;
  }

  public function getSenha($y){
    return $this->senha;
  }

  public function setSenha($y){
    $this->senha = $y;
  }

  public function Logar(){
    if($this->email == 'wendell@wendell.com' and $this->senha == 12345):
      echo "Logado com sucesso";
    else:
    echo "Deu ruim";
    endif;
  }
  }

$logar = new Login('senha@senha.br', 1234, 'Wendell');
$logar->Logar();
  












  




































?> 
  </body>
</html>