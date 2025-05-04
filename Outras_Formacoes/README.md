### Classe `OutrasFormacoes.php`

A classe `OutrasFormacoes` representa formações complementares vinculadas a um usuário do sistema, como cursos livres ou certificações extracurriculares.

#### Atributos

* `idoutrasformacoes`: identificador único da formação.
* `idusuario`: ID do usuário ao qual a formação está associada.
* `inicio`: data de início da formação.
* `fim`: data de término.
* `descricao`: descrição da formação realizada.

#### Getters e Setters

Foram implementados métodos de acesso e modificação para cada atributo, permitindo encapsulamento e controle dos dados internos da classe.

#### Método `inserirBD()`

Esse método registra uma nova formação no banco de dados. Ele:

1. Estabelece conexão com o banco usando a classe `ConexaoBD`.
2. Executa um comando `INSERT INTO` na tabela `outrasformacoes`.
3. Se bem-sucedido, atribui ao objeto o ID gerado pelo banco e retorna `TRUE`; caso contrário, retorna `FALSE`.

#### Método `excluirBD($idoutrasformacoes)`

Remove do banco uma formação com base no ID fornecido. Realiza a conexão, executa o `DELETE` e retorna `TRUE` ou `FALSE` conforme o sucesso da operação.

#### Método `listaFormacoes($idusuario)`

Retorna todas as formações vinculadas a um determinado usuário. Realiza um `SELECT` filtrando pelo `idusuario` e devolve o resultado da consulta.

---

### Teste realizado

Para garantir o funcionamento da classe `OutrasFormacoes`, foi criado um script `teste.php`. Nele, primeiramente foi instanciado um objeto da classe `Usuario`, já que é necessário que o ID do usuário exista no banco para que uma formação possa ser associada a ele.

```php
$testuser = new Usuario();
$testuser->setNome("João Teste");
$testuser->setEmail("joao.teste@example.com");
$testuser->inserirBD();
```

Após inserir o usuário, foi criada uma instância da classe `OutrasFormacoes` com dados fictícios:

```php
$formacao = new OutrasFormacoes();
$formacao->setIdUsuario(1); // ID do usuário criado
$formacao->setInicio('2023-01-01');
$formacao->setFim('2023-06-01');
$formacao->setDescricao('Curso de Cibersegurança');
$formacao->inserirBD();
```
Como resultado, o processo foi validado:

![alt text](image.png)