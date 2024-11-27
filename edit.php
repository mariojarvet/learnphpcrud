<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $user = $stmt->fetch();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $id]);

        header("Location: index.php");
        exit;
    }
}
?>

<form method="POST">
    <label for="name">Nimi:</label>
    <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>
    <button type="submit">Uuenda kasutaja</button>
</form>
