<?php
$sql = "SELECT * FROM `fietsen` ORDER BY `fietsen`.`Id` ASC";
$query = $conn->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <button> <a href="insert.php">Insert New Entry</a> </button>
    <tr>
        <th>ID</th>
        <th>Merk</th>
        <th>Type</th>
        <th>Prijs</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach($result as $data): ?>
    <tr>
        <td><?= $data["Id"] ?></td>
        <td><?= $data["merk"] ?></td>
        <td><?= $data["type"] ?></td>
        <td><?= $data["prijs"] ?></td>
        <td><button><a href='edit.php?Id=<?= $data["Id"] ?>'>Edit</a></button></td>
        <td><button><a href='delete.php?Id=<?= $data["Id"] ?>'>Delete</a></button></td>
    </tr>
    <?php endforeach; ?>
</table>