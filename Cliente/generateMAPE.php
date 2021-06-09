<?php
function MAPE($mme_original, $mme_aplicado){
# Faz a soma do array com a função array reduce para retornar um unico valor   
    $valor_total_original = array_reduce($mme_original, function ($total, $mme_original) {
        $total += $mme_original;
        return $total;
    }, 0);
    $valor_total_aplicado = array_reduce($mme_aplicado, function ($total, $mme_aplicado) {
        $total += $mme_aplicado;
        return $total;
    }, 0);
# MAPE calculo ($valor_total_original - $valor_total_aplicado) / $valor_total_original)    
$value = abs(($valor_total_original - $valor_total_aplicado) / $valor_total_original);
return round($value, 2);
    }
?>