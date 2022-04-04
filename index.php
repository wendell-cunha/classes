<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php


class Login {
  private $email;
  private $senha;

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

$logar = new Login();
$logar ->setEmail('wendell@wendell.com');
$logar ->setSenha(12345);
$logar->Logar();
  












  




































?> 
  </body>
</html>