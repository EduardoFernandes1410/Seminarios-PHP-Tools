<?php
	//Importa o FAKER
	require_once 'Faker/src/autoload.php';
	
	//Cria instancia do Faker
	$faker = Faker\Factory::create();
	
	//Gera um nome aleatorio
	echo "Nome: " . $faker->name . "<br>";
	//Gera um endereco
	echo "Endereco: " . $faker->address . "<br>";
	//Gera um endereco
	echo "Texto: " . $faker->text . "<br>";
	//Gera um endereco
	/*echo "Endereco: " . $faker->address . "<br>";
	//Gera um endereco
	echo "Endereco: " . $faker->address . "<br>";
	//Gera um endereco
	echo "Endereco: " . $faker->address . "<br>";
	//Gera um endereco
	echo "Endereco: " . $faker->address . "<br>";
	//Gera um endereco
	echo "Endereco: " . $faker->address . "<br>";*/
?>