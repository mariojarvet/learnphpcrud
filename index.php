<?php
include 'db.php';

$sql = "SELECT * FROM users";
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();
?>

<h2>Kasutajate nimekiri</h2>
<a href="create.php">Lisa uus kasutaja</a>
<ul>
    <?php foreach ($users as $user): ?>
        <li>
            <?php echo $user['name']; ?> - <?php echo $user['email']; ?>
            <a href="edit.php?id=<?php echo $user['id']; ?>">Muuda</a>
            <a href="delete.php?id=<?php echo $user['id']; ?>">Kustuta</a>
        </li>
    <?php endforeach; ?>
</ul>
