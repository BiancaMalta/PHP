<?php
require_once 'Paciente.php';

// Criando um novo objeto Paciente
$paciente = new Paciente();

// Definindo valores
$paciente->setNome("Bianca Malta");
$paciente->setRg("12.345.678-9");
$paciente->setCpf("123.456.789-00");
$paciente->setEndereco("Rua Argentina, 99 - Centro");
$paciente->setProfissao("Professora");

// Exibindo os valores
echo "Nome: " . $paciente->getNome() . "<br>";
echo "RG: " . $paciente->getRg() . "<br>";
echo "CPF: " . $paciente->getCpf() . "<br>";
echo "Endereço: " . $paciente->getEndereco() . "<br>";
echo "Profissão: " . $paciente->getProfissao() . "<br>";
?>
