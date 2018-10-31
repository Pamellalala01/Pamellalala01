<?php
 function GeraTabela($resultado) {
                $Linhas = count($resultado);
                $Colunas = count($resultado[0]);
                echo "<table border=1>
                   <table border=1>";
                for ($i = 0; $i < $Linhas; $i++) {
                    echo "</tr>";
                    echo "<tr>";
                    for ($j = 0; $j < $Colunas; $j++) {
                        echo "<td> " . $resultado[$i][$j] . "</td>";
                    }
                }

                echo "<br>";
            }
            
$matriz1 = array
    (
                array(5, 2, 5),
                array(9, 8, 1),
                array(6, 9, 7)
            );

$matriz2 = array
   (
                array(3, 2, 9),
                array(7, 5, 9),
                array(0, 0, 1)
            );

function SomaMatriz($matriz1, $matriz2) {
               $copia = $matriz1;
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                       $copia[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];    
                        }
                    }
                
                return $copia;
                
        }
            
            $result = SomaMatriz($matriz1, $matriz2);
             GeraTabela($result);