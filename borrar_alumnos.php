<?php

include('conexion.php');
$pdo = connect();
// agregar alumnos

try {
	$sql = "DELETE FROM alumnos WHERE id = :id";
    
    $query = $pdo->prepare($sql);
    
    $query->bindParam(':id', $_POST['id']);
    
    $query->execute();
    
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
}

// Lista de alumnos a ver
include('lista_alumnos.php');

?>