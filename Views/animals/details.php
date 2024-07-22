<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'Animal</title>
</head>
<body>
    <h1>Détails de l'Animal</h1>
    <p>Nom: <?php echo $animal['name']; ?></p>
    <p>Espèce: <?php echo $animal['species']; ?></p>
    <p>Âge: <?php echo $animal['age']; ?></p>
    <p>État: <?php echo $animal['status']; ?></p>
    <p>Habitat: <?php echo $animal['habitat']; ?></p>
    <h2>Rapport du Vétérinaire</h2>
    <p><?php echo $animal['veterinarian_report']; ?></p>
</body>
</html>
