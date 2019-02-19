<?php
    include("cadeira.php");
    $resultado = 
    $c1 = new Cadeira("Azul","5.3","Ferro","10","120","true","0.4","0.85");


    $c1->aumentar(0.5);

    echo "<br /><br />";

    $c2 = new Cadeira("Preto", "2.3", "Plástico", "5", "40","False", "0.4", "0.85");


    echo "<table border = '1'>";

    echo "<tr>
            <th>Cor</th>
            <th>Peso</th>
            <th>Material</th>
            <th>Durabilidade</th>
            <th>Custo</th>
            <th>Encosto</th>
            <th>Regulagem Minima</th>
            <th>Regulagem Maxima</th>
            <th>Tamanho</th>
        </tr>";

    echo "<tr>
            <td>$c1->cor</td>
            <td>$c1->peso</td>
            <td>$c1->material</td>
            <td>$c1->durabilidade</td>
            <td>$c1->custo</td>
            <td>$c1->encosto</td>
            <td>$c1->regulagem_minima</td>
            <td>$c1->regulagem_maxima</td>
            <td>$c1->tamanho</td>
           </tr>";

    echo "<tr>
              <td>$c2->cor</td>
              <td>$c2->peso</td>
              <td>$c2->material</td>
              <td>$c2->durabilidade</td>
              <td>$c2->custo</td>
              <td>$c2->encosto</td>
              <td>$c2->regulagem_minima</td>
              <td>$c2->regulagem_maxima</td>
              <td>$c2->tamanho</td>
          </tr>";
          


    echo "<br /><br />";

   // print_r($c1);

  

    /*$c2 = new Cadeira();

    print_r($c2);

    $c2->cor = "Preto";
    $c2->peso = "2.3";
    $c2->material = "Plástico";
    $c2->durabilidade = "5";
    $c2->custo = "40";
    $c2->tamanho = "0.4";
    $c2->encosto = "false";
    $c2->regulagem_minima = "0.4";
    $c2->regulagem_maxima = "0.85";

    print_r($c2);*/

?>