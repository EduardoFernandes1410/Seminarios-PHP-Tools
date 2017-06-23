# Show do Bilhão Tunado!

Esta nova versão do Show do Bilhão apresenta como recursos o gerador de perguntas infinito, e também testa a capacidade do sistema de lidar com uma quantidade massiva de usuários, já que o armazenamento de dados em arquivos pode se mostrar extremamente lento com grandes quantidades de dados.

# Como Funciona?

O Show do Bilhão tunado gera perguntas e usuários através da ferramenta "Faker" para PHP. Com diferentes propósitos, o Faker facilita na hora de testar o seu sistema quando os dados de teste precisam ir além do Lorem Ipsum, por exemplo quando é necessário cadastrar emails, nomes e logins diferentes, e o poupa da repetição massacrante de criar usuários falsos para testar a capacidade do sistema de lidar com quantidades reais de dados, quando for lançado.

O Faker então gera os dados dos usuários, enunciados de perguntas, alternativas e muito mais aleatoriamente, com apenas alguns simples processos e duas linhas a mais no código PHP

# Resultados

O gerador de perguntas é um sucesso. Agora, o Show do Bilhão pode ter um banco praticamente infinito de questões intrigantes, desafiadoras e bem elaboradas, sem praticamente nenhum trabalho extra para os desenvolvedores e escritores.

O gerador de usuários também funcionou como esperado, e serviu para nos ensinar diversas lições:

- Armazenar uma quantidade massiva de dados em um sistema de arquivos .txt é extremamente custoso, trabalhoso e ineficiente. Através do gerador, foi possível simular uma situação em que havia mais de 2 milhões de usuários cadastrados no sistema, e o resultado foi o esperado:
	- Cada nova operação de cadastramento se tornava cada vez mais custosa a cada usuário novo inserido no sistema.
	- Com uma quantidade grande o suficiente de usuários cadastrados, a operação de login se tornou extremamente lenta, tendo um enorme peso negativo na UX.
	- Se tornou praticamente impossível gerenciar os usuários cadastrados. A simples operação de abrir o arquivos JSON com os dados em um editor de texto normal beirava o impossível, já que, além de levar longos segundos para carregar o texto, diversas vezes aconteceu de todo o programa congelar e ter que ser reiniciado.
	
Com isso, fica clara a necessidade de uma solução melhor e mais direcionada ao armazenamento massivo de dados: o famoso Banco de Dados. Através do Faker, pudemos observar na prática como a falta de otimizações e boas escolhas na hora de desenvolver um sistema podem interferir drasticamente na sua performance e experiência do usuário, ao simular um ambiente com uma quantidade realista de dados a serem trabalhados em tempo real.

Fica, então, óbvio o valor do Faker dentro de um Ambiente de Desenvolvimento Web, que conquistou o seu lugar no  Hall da Fama das ferramentas de desenvolvimento para a internet.

## Aproveite!