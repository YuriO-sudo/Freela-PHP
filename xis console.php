<?php

class X {

  private $tamanho;

  public function __construct($tamanho) {
    $this->tamanho = $tamanho;
  }

  public function imprimir() {
    for ($i = 0; $i < $this->tamanho; $i++) {
      echo '<hr>';
      echo '<b>';

      for ($j = 0; $j < $this->tamanho; $j++) {
        if ($i == $j || $i + $j == $this->tamanho - 1) {
          echo ' * ';
        } else {
          echo ' - ';
        }
      }
    }
  }

}

$x = new X(15);
$x->imprimir();

?>