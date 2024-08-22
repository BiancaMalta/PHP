# Promoção de Aniversário
![alt text](resultado.png)

## Funcionalidades

- **Coleta de Dados**: Permite a entrada dos seguintes dados:
  - Nome do Cliente
  - Valor da Compra
  - Forma de Pagamento (Cartão de Crédito, Boleto, Depósito)

- **Cálculo de Desconto**: Aplica descontos com base na forma de pagamento escolhida:
  - Boleto: 8% de desconto
  - Depósito: 10% de desconto
  - Cartão de Crédito: Sem desconto

- **Exibição do Resultado**: Mostra o valor final após o desconto aplicado, a porcentagem de desconto e o valor economizado, com uma mensagem destacando a promoção de aniversário.

## Tecnologias Utilizadas

- **HTML**: Estruturação do formulário de entrada de dados.
- **CSS**: Utilizado para estilização da página de resultados e melhor apresentação dos dados.
- **PHP**: Processamento dos dados do formulário, cálculo do desconto e geração da resposta ao usuário.

## Dependências

Certifique-se de que seu ambiente está configurado para rodar scripts PHP e que o servidor web (como Apache) está em funcionamento. 

[Ambiente para rodar PHP](https://github.com/BiancaMalta/PHP/blob/main/README.md)

## Execução 

A execução do projeto envolve a coleta de dados via um formulário HTML, o processamento desses dados pelo PHP e a exibição do resultado estilizado com CSS. Aqui está uma visão geral do processo:

### 1. Formulário HTML

O arquivo `index.html` define um formulário para o usuário inserir:
- Nome do Cliente
- Valor da Compra
- Forma de Pagamento

Cada campo é associado a um atributo `name` para referência no servidor.

### 2. Script PHP

Quando o formulário é submetido, os dados são enviados ao `calcularDesconto.php`, especificado no atributo `action` do formulário, usando o método `POST`.

### 3. Processamento dos Dados

- **Recepção dos Dados**: Utiliza a superglobal `$_POST` para acessar os dados. Exemplo: `$_POST['txtNome']` recupera o nome do cliente.
  
- **Cálculo do Desconto**: Baseado na forma de pagamento:
  - Boleto: 8%
  - Depósito: 10%
  - Cartão de Crédito: 0%

- **Geração da Resposta**: O PHP calcula o valor final com desconto e gera uma página HTML com os resultados formatados, incluindo a promoção de aniversário.

### 4. Exibição da Resposta

O servidor Apache interpreta o código PHP e envia o resultado ao navegador, exibindo uma página com os detalhes da promoção e o valor final com o desconto aplicado.

## Autora

[![Linkedin Badge](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/bianca-malta/)
