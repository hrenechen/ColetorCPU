<?php
function MediaMovelExp($mme, $periodo){
$periodo_atual = $periodo;
$tamanho = count($mme);
$ptamanho = $tamanho - $periodo;
# 2 /(periodo + 1)
$periodo = $periodo + 1;
$k = 2 / $periodo;
$k = round($k,3);
if  ($k >= 0 AND $k <= 1){
    $previsao = array();
    #previsão do periodo proposto sendo posição_inicial = 0 + periodo_atual  
    $eixo_y_anterior = 0;
    $eixo_y = -1 ;
    for ($i=0; $i < $ptamanho; $i++) {  
        $previsao_atual = 0;
        $previsao_anterior = 0;
        $value_1 = 0;
        $value_2 = 0;
        $valor_atual = 0;
        if ($eixo_y == -1) { 
           $eixo_y = 0; 
           $previsao[0] = $mme[$eixo_y];
           $eixo_y = 1;
           $eixo_y_anterior = 0;
        }else {
           $eixo_y_anterior = $eixo_y - 1;
           $valor_atual = $mme[$eixo_y];
           $previsao_anterior = $previsao[$eixo_y_anterior];
           # previsao_atual = [Valor - previsao_anterior] * K + previsao_anterior
           $value_1 = $valor_atual - $previsao_anterior;
           $value_1 = $value_1  * $k;
           $value_2 = $previsao_anterior;
           $previsao_atual = $value_1 + $value_2;                   
           $previsao[]= round($previsao_atual,0);
           $eixo_y += 1;
    }  
    }
    return $previsao; 
}else{
    print("Fora do intervalo de alpha(alpha > 0 e alpha < 1 )");  
}
}
?>