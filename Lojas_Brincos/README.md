# Lojas Brincos e Companhia

![resultado final](image.png)

## Funcionalidades

- Coleta de dados pessoais e profissionais: Nome, Sobrenome, Email, Formação e Descrição do Último Emprego.
- Armazenamento seguro e estruturado dos dados submetidos.
- Feedback visual de confirmação do cadastro.

## Tecnologias Utilizadas

- **HTML**: Para a estruturação do formulário e da página.
- **CSS**: Utilizando o W3.CSS para estilização e melhor apresentação do formulário.
- **PHP**: Para o processamento dos dados do formulário.

## Dependências

Garanta que o ambiente esteja configurado e que todas as dependências necessárias estejam disponíveis. 

[Ambiente para rodar PHP](https://github.com/BiancaMalta/PHP/blob/main/README.md)

## Execução 

A execução do projeto envolve várias etapas que vão desde a criação do formulário HTML até o processamento dos dados pelo PHP. Aqui está uma visão geral de como todo o processo funciona:

### 1. Formulário HTML

Cada campo do formulário é associado a um atributo `name`, que será usado para referenciar os dados no servidor. 

### 2. Script PHP

Quando o usuário submete o formulário, os dados são enviados para o script PHP especificado no atributo `action` do elemento `<form>`. O método de envio é `POST`, que é seguro para a transmissão de dados sensíveis.

### 3. Processamento dos Dados

- **Recepção dos Dados**: O PHP utiliza a superglobal `$_POST` para acessar os dados enviados do formulário. Por exemplo, `$_POST['txtNome']` recupera o nome inserido pelo usuário.
  
- **Armazenamento em Variáveis**: Cada valor recebido é armazenado em uma variável apropriada para facilitar o processamento posterior.

- **Validação**: O script pode incluir validações para verificar se todos os campos necessários foram preenchidos corretamente, se o email tem o formato válido, etc.

- **Resposta ao Usuário**: Após processar os dados, o PHP gera uma resposta HTML que confirma o sucesso do cadastro e exibe os dados cadastrados. Isso pode incluir uma mensagem como "Cadastro Confirmado com Sucesso" seguida das informações submetidas.

### 4. Exibição da Resposta

O servidor Apache, configurado para processar arquivos PHP, interpreta o código PHP no script e envia o resultado de volta ao navegador do usuário. O usuário então vê a página de confirmação com os dados que ele forneceu.

## Autora
[![Linkedin Badge](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/bianca-malta/)
