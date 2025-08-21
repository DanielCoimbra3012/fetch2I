# fetch2I
## Passo 1
Quando o botão "Enviar prova" for clicado, exiba no console o que quer que esteja escrito no campo de resposta da primeira questão ("Qual a capital da França?")
## Passo 2
Recupera também a resposta da segunda questão ("Há quantos anos terminou a ditadura militar?") e exiba-a também no console; entretanto, ao invés de dar dois logs diferentes, organize os dois valores em um json e exiba somente o json.
## Passo 3
Somente exiba o json caso esteja garantido que ambas as respostas estão preenchidas, isto é, que nenhuma das duas está vazia.
## Passo 4
Somente exiba o json caso a segunda resposta seja um número positivo.
## Passo 5
Repita o processo para as próximas 4 perguntas. Para isso, crie uma função que recebe um elemento qualquer como parâmetro e, caso seu valor esteja vazio ou seja um número menor que 0, retorne false. Somente se for retornado verdadeiro para todos os 7 elementos é que deve ser exibido um json no console.
## Passo 6
Leve isso agora para todas as 15 primeiras perguntas, do seguinte modo: selecione todas com um querySelector e, utilizando um loop de sua escolha, faça com que a função descrita no passo 5 seja aplicada em todos os elementos.
## Passo 7
Caso haja algum problema em algum elemento, não somente impeça a exibição do json no console como também exiba uma mensagem de erro dentro do span que encontra-se no fim da prova, com a mensagem "Todas as 15 primeiras perguntas devem ser obrigatoriamente respondidas."
## Passo 8
Faça com que a questão 16 ("Quem foi o primeiro presidente dos Estados Unidos") funcione visualmente: quando um nome for selecionado ele deve ganhar uma borda, e quando outro for selecionado o anterior deve voltar a ficar sem borda.
## Passo 9
Faça com que o último nome clicado seja incluído no json como a resposta referente à questão 16. Quando nenhum nome for clicado a resposta deve ser mantida vazia.
## Passo 10
Faça com que a questão 17 ("Quais destas figuras históricas está associada ao comunismo?") funcione visualmente: qualquer nome clicado deve ganhar borda e só perderá a borda quando for clicado novamente.
## Passo 11
Faça com que, no momento que o botão "Enviar prova" seja clicado, todos os botões que estejam com borda tenham seus nomes capturados e colocados em uma array; inclua essa arraycomo resposta da questão 17 no json. Caso nenhum nome esteja clicado, uma array deverá ser enviada vazia
## Passo 12
Envie esse json para o backend via fetch.
## Passo 13
Receba o retorno do backend e exiba no console
## Passo 14
Leia o retorno do backend e, caso o código seja qualquer um que não 200, utilize sua área de exibição de erro para exibir "Erro inesperado no servidor, tente novamente mais tarde";
## Passo 15
Se for 200, exiba na área de exibição de erros (utilizando uma classe que deixe o texto verde e não vermelho) quanto foi que a pessoa tirou na prova
