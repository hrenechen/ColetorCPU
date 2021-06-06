<?php
function MAPE($mme_original, $mme_aplicado, $valor_periodo){
# Faz a soma do array com a função array reduce para retornar um unico valor   
    $valor_total_original = array_reduce($mme_original, function ($total, $mme_original) {
        $total += $mme_original;
        return $total;
    }, $valor_periodo);
    $valor_total_aplicado = array_reduce($mme_aplicado, function ($total, $mme_aplicado) {
        $total += $mme_aplicado;
        return $total;
    }, 0);
$true_array = abs(($valor_total_original - $valor_total_aplicado) / $valor_total_original);
return round($true_array, 2);
    }
?>