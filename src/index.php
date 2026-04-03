<?php
declare(strict_types=1);

$dsn = "pgsql:host=db;port=5432;dbname=ma_base;";
$user = "user";
$password = "password";

try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "✅ Connecté à PostgreSQL avec succès !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}