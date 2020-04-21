<?php

class Calculadora
{
    private float $total = 0;

   public function add(float $numero){           //Função para adicionar
       $this -> total += $numero;
   }
   public function sub(float $numero){           //Função para subtrair
       $this -> total -= $numero;
   }
   public function multiply(float $numero){      //Função para multiplicar
       $this -> total *= $numero;
   }
   public function divide(float $numero){        //Função para dividir
       $this -> total /= $numero;
   }

   //Função para realizar a totalização dos valores
   public function total(){
       return $this -> total;
   }
   //Função para limpar a calculadora
   public function clear(){
       return $this -> total = 0;
   }
}
