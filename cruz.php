
<?php

class Cruz {

  private $char;
  private $tamanho;

  public function __construct($char, $tamanho) {
    $this->char = $char;
    $this->tamanho = $tamanho;
  }

  public function imprimir() {
    for ($i = 3; $i <= $this->tamanho; $i++) {
      echo '<hr>';
      echo '<b>';

      for ($j = 0; $j <= $this->tamanho; $j++) {
        if ($i == ($this->tamanho / 2) + 1 || $j == ($this->tamanho / 2) + 1) {
          echo $this->char;
        } else {
          echo ' - ';
        }
      }
    }
  }

}

$cruz = new Cruz(' * ', 8);
$cruz->imprimir();

?>

