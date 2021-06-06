<?php
function MediaTransmissao($mme_aplicado){
$valor_divisao = count($mme_aplicado);
    # Faz a soma do array com a função array reduce para retornar um unico valor   
    $valor_total_aplicado = array_reduce($mme_aplicado, function ($total, $mme_aplicado) {
        $total += $mme_aplicado;
        return $total;
    }, 0);
$valor = $valor_total_aplicado / $valor_divisao;
return round($valor, 0);
    }
?>