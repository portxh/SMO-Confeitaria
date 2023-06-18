<?php

function getProducts($pdo)
{
	$sql = "SELECT *  FROM produtos ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByIds($pdo, $ids)
{
	$sql = "SELECT * FROM produtos WHERE id IN (" . $ids . ")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getOfertas($pdo)
{
	$sql = 'SELECT *  FROM produtos WHERE categoria = "Promoção";';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//function meusPedidos($pdo)
//{	
//	$cpf = $_SESSION["sessao"]->cpf;
//	$sql = 'SELECT *  FROM pedidos WHERE cpf = ' . $cpf;
//	$stmt = $pdo->prepare($sql);
//	$stmt->execute();
//	return $stmt->fetchAll(PDO::FETCH_ASSOC);
//}

