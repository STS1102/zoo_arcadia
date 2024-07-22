<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Animaux</title>
</head>
<body>
    <h1>Liste des Animaux</h1>
    <ul>
        <?php foreach ($animals as $animal): ?>
            <li>
                <a href="animal_details.php?id=<?php echo $animal['id']; ?>">
                    <?php echo $animal['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
