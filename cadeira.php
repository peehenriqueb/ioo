<?php

    //Nome da Classe
    class Cadeira
    {
        //Lista de Atributos
        public $cor;
        public $peso;
        public $material;
        public $durabilidade;
        public $custo;
        public $tamanho;
        public $encosto;
        public $regulagem_minima;//0.4
        public $regulagem_maxima;//0.85

        //metodo construtor
        public function __construct(
                                    $cor,
                                    $peso,
                                    $material,
                                    $durabilidade,
                                    $custo,
                                    $encosto,
                                    $regulagem_minima,
                                    $regulagem_maxima
        )
        {
            $this->cor = $cor;
            $this->peso = $peso;
            $this->material = $material;
            $this->durabilidade = $durabilidade;
            $this->custo = $custo;
            $this->tamanho = $regulagem_minima;
            $this->encosto = $encosto;
            $this->regulagem_minima = $regulagem_minima;
            $this->regulagem_maxima = $regulagem_maxima;
        }
       
        //Lista de Métodos

        public function aumentar($medida)
        {
            $this->tamanho = $this->tamanho + $medida;
            
            if($this->tamanho>$this->regulagem_maxima)
            {
                $this->tamanho = $this->regulagem_maxima;
            }
        }

        public function abaixar($medida)
        {
            $this->tamanho = $this->tamanho - $medida;

            if($this->tamanho < $this->regulagem_minima)
            {
                $this->tamanho = $this->regulagem_minima;                
            }

        }
    
    
    
    
    
    
    
    
    }

?>