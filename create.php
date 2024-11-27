<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email]);

    header("Location: index.php"); // Suunamine tagasi kasutajate nimekirja
    exit;
}
?>

<form method="POST">
    <label for="name">Nimi:</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Loo kasutaja</button>
</form>
