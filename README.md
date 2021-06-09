Coletor de CPU.

Script simples de leitura e envio dos dados do CPU das maquinas clientes para o servidor principal, para auxiliar na migração de serviços para o servidor com a melhor disponibilidade.

Dados coletados:
 - Nome da maquina
 - Mac Address
 - Data/hora
 - Porcentagem de uso da CPU
 - tabela de Benchmark com cruzamento dos dados, e regra de 3 para calcular a diferença de porcentagem dos processadores tendo por parametro o de maior benchmark. 

 Forma de passagem dos parametros-> Banco de dados Mysql.
  - Cliente efetua a captura dos dados de CPU de segundo em segundo e calcula a Média Móvel Exponencial (MME). Após cria a media de transferencia com os valores referentes ao periodo de 10 segundos.
  - Servidos mostra as metricas de uso dos computadores clientes.   